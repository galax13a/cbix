<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\App;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Log;

class Appeditors extends Component
{
	use WithPagination;
	use WithFileUploads;

	protected $listeners = ['emit_editorjs' => 'saveJson', 'contentUpdated' => 'updateContent', 'myloadjs' => 'loadJson'];

	protected $queryString = ['appid', 'apps0categor_id', 'active', 'app_idioma','selected_tag','slug'];
	protected $paginationTheme = 'bootstrap';
	public $selected_id, $keyWord, $name, $slug, $es, $en, $editorjs, $version, $menu, $url, $target, $icon, $image, $download_url, $is_approved, $install, $apps0categor_id, $meta_title, $meta_description, $meta_keywords, $active, $downloads, $downloads_bot;
	public $appid, $tags, $tages, $tempImage;
	public $app, $app_idioma, $imagen;
	public $load_app_json,$selected_tag,$name_tag;

	public $selected_imagen_url, $selectedImage, $imageFiles = [];	


	public function updatingKeyWord() // reset pages keywork
	{
		$this->resetPage();
	}

	public function mount(Request $request)
	{
		$this->appid = $request->input('appid');

		if ($request->has('appid')) {
			$this->app = App::find($this->appid);
			abort_if(is_null($this->app), 404, 'App not found');
			$this->selected_id = $request->input('appid');
		}

		$this->name = 	$this->app->name;
		$this->slug = Str::slug($this->name);
		$this->app_idioma = 'en';
		$this->es = $this->app->es;
		$this->en = $this->app->en;
		$this->apps0categor_id = $this->app->apps_categors_id;

		$this->imagen = $this->app->imagen;
		$this->active = $this->app->active;

		$this->get_folder_images();

	}

	public function render()
	{

		if(!$this->name_tag) $this->selected_tag = null;

		$appId = $this->selected_id;
		$this->app = App::find($appId);
		$this->name = 	$this->app->name;
		
		$this->editorjs = $this->app->editorjs;
		$this->slug = $this->app->slug;

		//$this->imagen = $this->app->imagen;
		$this->url = $this->app->url;
		$this->version = $this->app->version;
		$this->menu = $this->app->menu;
		$this->url = $this->app->url;
		$this->download_url = $this->app->download_url;

		$this->target = $this->app->target;
		$this->download_url = $this->app->download_url;
		$this->is_approved = $this->app->is_approved;
		$this->install = $this->app->install;

		$this->meta_title = $this->app->meta_title;
		$this->meta_description = $this->app->meta_description;
		$this->meta_keywords = $this->app->meta_keywords;
		//$this->active = $this->app->active;
		$this->downloads = $this->app->downloads;
		$this->downloads_bot = $this->app->downloads_bot;

		if (!$this->en) $this->en = $this->app->en;
		if (!$this->es) $this->es = $this->app->es;
		$this->tags = Tag::all();

		if (!$this->tages) $this->tages = $this->app->tags()->pluck('tags.id')->toArray();

		$this->load_app_json = $this->slug . '_' . $this->app_idioma . '.json';
		//$this->emit('renderEditor');
		//$this->emit('renderEditor', $this->app->editorjs);	
		//$this->editorjs = json_decode($this->editorjs, true);
		$this->emit('combos');

		if ($this->image) {
			if ($this->image->temporaryUrl()) {				
				$this->emit('uptImgTemp', $this->image->temporaryUrl());
			}
		}

		$this->slug = Str::slug($this->name);
		$this->get_folder_images();

		return view('livewire.appeditors.view', [
			'appeditors' => App::where('id', $appId)->get(),
		]);
	}

	private function get_folder_images()
    {
		$this->imageFiles = [];
        $folderPath = 'public/apps/images/' . $this->slug;
        $filesInFolder = Storage::files($folderPath);


		if ($this->selected_imagen_url) {
			$folderPath = 'public/apps/images/' . $this->slug;
			$extension = pathinfo($this->selected_imagen_url, PATHINFO_EXTENSION);
			$imageUrl = str_replace($extension, '', $this->selected_imagen_url);
			$imageParts = explode('/', $imageUrl);
			$imageName = end($imageParts);			
			$imageName = rtrim($imageName, '.');
			$imageName = rtrim($imageName, '_');
			$extension = pathinfo($this->selected_imagen_url, PATHINFO_EXTENSION);
			$this->imageFiles[] = $imageName.'_.'.$extension;
			$this->imageFiles[] = $imageName.'_230.'.$extension;
			$this->imageFiles[] = $imageName.'_460.'.$extension;
			$this->imageFiles[] = $imageName.'_840.'.$extension;
			
		}

        foreach ($filesInFolder as $path) {
            $file = pathinfo($path);
            // Verifica la extensión del archivo para asegurarte de que sea una imagen
            if (in_array($file['extension'], ['jpg', 'png', 'gif', 'jpeg'])) {
               // $this->imageFiles[] = $file['basename'];  // Sólo el nombre del archivo
            }

        }
    }

	public function saveTags() // sabe only tang pather table hijo
	{
		$this->app->tags()->sync($this->tages);
		$this->tages = $this->app->tags()->pluck('tags.id')->toArray();
		$this->dispatchBrowserEvent('notify', [
			'type' => 'success',
			'message' => 'Tags Succesfull OK! '
		]);
	}

	public function get_tags($id) {

		$record = Tag::findOrFail($id);
        $this->selected_tag = $id; 
		$this->name_tag = $record-> name;

	}
	public function store_tag()
	{
		$this->validate([
			'name' => 'required',
		]);
	
		$tag = null;
	
		if ($this->selected_tag) {
			$tag = Tag::updateOrCreate(
				['id' => $this->selected_tag],
				['name' => $this->name_tag]
			);
		} else {
			$tag = Tag::create([
				'name' => $this->name_tag
			]);
		}
	
		$this->selected_tag = $tag->id;
	
		$this->dispatchBrowserEvent('notify', [
			'type' => 'success',
			'message' => 'Tag Successfully created!',
		]);
		$this->name_tag = null;
		$tags = Tag::all();
		$this->emit('uptagsSelects', $tags);
		
	}	

	public function updateContent($content)
	{
		if ($content['lang'] == 'en') {
			$this->en = $content['data'];
		} elseif ($content['lang'] == 'es') {
			$this->es = $content['data'];
		}

		$this->dispatchBrowserEvent('notify', [
			'type' => 'success',
			'message' => ' cambiando datos  '
		]);
	}


	public function save_imagen()	
  {

	try {
		$this->validate([
			'image' => 'required|image|max:2024|mimes:jpeg,png,gif,jpeg', // Maximum size of 1MB
		]);
	} catch (\Illuminate\Validation\ValidationException $e) {
		$errorMessage = $e->getMessage();
		$this->emit('failimg', $errorMessage);
		$this->image = null;
		return false;
	}

    try {

		if ($this->image && $this->image->getSize() > 0) {

			$fileSize = $this->image->getSize();
			$maxSizeKB = 2048; // Tamaño máximo en kilobytes (2MB)
			// Divide el tamaño del archivo para obtener el tamaño en kilobytes
			$fileSizeKB = $fileSize / 1024;

			if ($fileSizeKB > $maxSizeKB) {

				$formattedMaxSize = number_format($maxSizeKB/1024, 1);
				$formattedFileSize = number_format($fileSizeKB/1024, 3);
				$this->dispatchBrowserEvent('notify', [
					'type' => 'failure',
					'message' => 'Image Size Exceeded! Maximum allowed size: ' . $formattedMaxSize . ' KB. Current file size: ' . $formattedFileSize . ' KB.',
					'position' => 'center-center'
				]);
				return false;
				//$this->emit('failimg');
			 }else {			

				$image = Image::make($this->image->getRealPath())
				->orientate()->resize(320, null, function ($constraint) {
					$constraint->aspectRatio();
				});

				$path = 'public/apps/images/'.$this->app->slug.'/'.$this->app->name.'.'.$this->image->getClientOriginalExtension();
				Storage::put($path, (string) $image->encode());

					if ($this->app->update(['image' => Storage::url($path)])) {
						$this->dispatchBrowserEvent('notify', [
							'type' => 'success',
							'message' => '¡Imagen Ok SEO!',
							'position' => 'center-center'
						]);
						$url = asset(Storage::url($path) . '?num=' . Str::random(10));

						$this->emit('uptImgFull', $url);
						$this->image = null;

					} else {
						$this->dispatchBrowserEvent('notify', [
							'type' => 'failure',
							'position' => 'center-center',
							'message' => 'Error DB Tabla'
						]);
					}
			}
        }else
		{
			$this->dispatchBrowserEvent('notify', [
				'type' => 'failure',
				'position' => 'center-center',
				'message' => 'Select imagen Miniture'
			]);
		}
    } catch (\Exception $e) {
        // Aquí puedes hacer algo con el error si es necesario, como enviarlo a un servicio de logging
		Log::error('Error al guardar la imagen: ' . $e->getMessage());
		
        $this->dispatchBrowserEvent('notify', [
            'type' => 'failure',
			'position' => 'center-center',
            'message' => 'Hubo un error al guardar la imagen. ' . $e->getMessage()
        ]);
    }
}

	public function store_save()
	{

		$this->app->update([
			'name' => $this->name,
			'slug' => $this->slug,
			'es' => $this->es,
			'en' => $this->en,
			'version' => $this->version,
			'is_approved' => $this->is_approved,
			'apps_categors_id' => $this->apps0categor_id,
			'active' => $this->active,
			'downloads' => $this->downloads,
			'downloads_bot' => $this->downloads_bot
		]);

		$this->dispatchBrowserEvent('notify', [
			'type' => 'success',
			'message' => '¡ Appeditor Update !'
		]);
	}


	public function saveSeo()
	{

		$this->app->update([
			'meta_title' => $this->meta_title,
			'meta_description' => $this->meta_description,
			'meta_keywords' => $this->meta_keywords,
		]);

		$this->dispatchBrowserEvent('notify', [
			'type' => 'success',
			'message' => ' Save SEO App, Ok!! '
		]);
	}
	public function saveJson()
	{
		$data = $this->editorjs;
		$this->slug = Str::slug($this->name);
		$filename = $this->slug . '_' . $this->app_idioma . '.json';
		$filePath = 'apps/pages/' . $filename;
		// Verificar si la carpeta existe, de lo contrario, crearla
		if (!Storage::exists(dirname($filePath))) {
			Storage::makeDirectory(dirname($filePath));
		}

		$this->app->update([
			'editorjs' => $this->editorjs
		]);
		// Guardar el archivo en el storage

		$editorjsObject = json_decode($this->editorjs);

		$emptyEditor = [
			"blocks" => [],
			"version" => "2.27.2"
		];

		if (!(empty($editorjsObject->blocks) && $editorjsObject->version === $emptyEditor["version"])) {
			Storage::put($filePath, $data);
		} else {
			$this->dispatchBrowserEvent('notify', [
				'type' => 'success',
				'message' => '¡ Fail Editor KO....',
			]);
		}


		$this->app->update([
			'menu' => $this->menu,
			'url' => $this->url,
			'target' => $this->target,
			'download_url' => $this->download_url
		]);

		$this->dispatchBrowserEvent('notify', [
			'type' => 'success',
			'message' => '¡ App Editor Ok',
		]);
	}

	public function emit_jsoneditor()
	{
		$this->dispatchBrowserEvent('notify', [
			'type' => 'success',
			'message' => '¡  Cambio de lenguaje a ' . $this->app_idioma
		]);

		$this->loadJson();
	}

	public function loadJson()
	{
		$filename = $this->slug . '_' . $this->app_idioma . '.json';
		$filePath = 'apps/pages/' . $filename;

		if (Storage::exists($filePath)) {
			$data = Storage::get($filePath);
			$this->editorjs = $data;
			$this->emit('loadeditor', $this->editorjs);
		}
	}

	public function cancel()
	{
		$this->resetInput();
	}

	private function resetInput()
	{
		/*
		$this->name = null;
		$this->slug = null;
		$this->es = null;
		$this->en = null;
		$this->editorjs = null;
		$this->version = null;
		$this->menu = null;
		$this->url = null;
		$this->target = null;
		$this->icon = null;
		$this->image = null;
		$this->download_url = null;
		$this->is_approved = null;
		$this->install = null;
		$this->apps0categor_id = null;
		$this->meta_title = null;
		$this->meta_description = null;
		$this->meta_keywords = null;
		$this->active = null;
		$this->downloads = null;
		$this->downloads_bot = null;
		*/
	}

	public function destroy($id)
	{
		if ($id) {
			App::where('id', $id)->delete();
		}
	}
}
