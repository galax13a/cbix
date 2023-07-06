<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class Appeditors extends Component
{
	use WithPagination;

	protected $listeners = ['emit_editorjs' => 'saveJson'];

	protected $paginationTheme = 'bootstrap';
	public $selected_id, $keyWord, $name, $slug, $es, $en, $editorjs, $version, $menu, $url, $target, $icon, $image, $download_url, $is_approved, $install, $apps_categors_id, $meta_title, $meta_description, $meta_keywords, $active, $downloads, $downloads_bot;
	public $appid;
	public $app;

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
	
	}
	


	public function saveJson()
	{
		$data = $this->editorjs;
		$this->slug = Str::slug($this->name);
		$filename = $this->slug . '.json';
		$filePath = 'apps/pages/' . $filename;
		// Verificar si la carpeta existe, de lo contrario, crearla
		if (!Storage::exists(dirname($filePath))) {
			Storage::makeDirectory(dirname($filePath));
		}

		$record = App::find($this->app->id);
		$record->update([
			'editorjs' => $this->editorjs
		]);
		// Guardar el archivo en el storage
		Storage::put($filePath, $data);

		$this->dispatchBrowserEvent('notify', [
			'type' => 'success',
			'message' => '¡ App Editor Ok',
		]);

	}

	public function loadJson()
	{
		$filePath = 'apps/pages/' . $this->slug.'.json';

		$data = Storage::get($filePath);
		$this->editorjs = $data;
		$this->emit('loadeditor', $this->editorjs);
	}

	public function render(Request $request)
	{
	
		$appId = $this->selected_id;
		$this->app = App::find($appId);
		$this->name = 	$this->app->name;
		$this->slug = Str::slug($this->name);
		$this->editorjs = $this->app->editorjs;
	//	$this->emit('renderEditor', $this->app->editorjs);	
	
		return view('livewire.appeditors.view', [
			'appeditors' => App::where('id', $appId)->get(),
		]);
	}


	public function cancel()
	{
		$this->resetInput();
	}

	private function resetInput()
	{
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
		$this->apps_categors_id = null;
		$this->meta_title = null;
		$this->meta_description = null;
		$this->meta_keywords = null;
		$this->active = null;
		$this->downloads = null;
		$this->downloads_bot = null;
	}

	public function store()
	{
		$this->validate([
			'name' => 'required',
			'slug' => 'required',
			'en' => 'required',
			'is_approved' => 'required',
			'apps_categors_id' => 'required',
			'active' => 'required',
		]);

		App::create([
			'name' => $this->name,
			'slug' => $this->slug,
			'es' => $this->es,
			'en' => $this->en,
			'editorjs' => $this->editorjs,
			'version' => $this->version,
			'menu' => $this->menu,
			'url' => $this->url,
			'target' => $this->target,
			'icon' => $this->icon,
			'image' => $this->image,
			'download_url' => $this->download_url,
			'is_approved' => $this->is_approved,
			'install' => $this->install,
			'apps_categors_id' => $this->apps_categors_id,
			'meta_title' => $this->meta_title,
			'meta_description' => $this->meta_description,
			'meta_keywords' => $this->meta_keywords,
			'active' => $this->active,
			'downloads' => $this->downloads,
			'downloads_bot' => $this->downloads_bot
		]);

		$this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		$this->dispatchBrowserEvent('notify', [
			'type' => 'success',
			'message' => '¡ Appeditor Successfully created!',
		]);
	}

	public function edit($id)
	{
		$record = App::findOrFail($id);
		$this->selected_id = $id;
		$this->name = $record->name;
		$this->slug = $record->slug;
		$this->es = $record->es;
		$this->en = $record->en;
		$this->editorjs = $record->editorjs;
		$this->version = $record->version;
		$this->menu = $record->menu;
		$this->url = $record->url;
		$this->target = $record->target;
		$this->icon = $record->icon;
		$this->image = $record->image;
		$this->download_url = $record->download_url;
		$this->is_approved = $record->is_approved;
		$this->install = $record->install;
		$this->apps_categors_id = $record->apps_categors_id;
		$this->meta_title = $record->meta_title;
		$this->meta_description = $record->meta_description;
		$this->meta_keywords = $record->meta_keywords;
		$this->active = $record->active;
		$this->downloads = $record->downloads;
		$this->downloads_bot = $record->downloads_bot;
	}

	public function update()
	{
		$this->validate([
			'name' => 'required',
			'slug' => 'required',
			'en' => 'required',
			'is_approved' => 'required',
			'apps_categors_id' => 'required',
			'active' => 'required',
		]);

		if ($this->selected_id) {
			$record = App::find($this->selected_id);
			$record->update([
				'name' => $this->name,
				'slug' => $this->slug,
				'es' => $this->es,
				'en' => $this->en,
				'editorjs' => $this->editorjs,
				'version' => $this->version,
				'menu' => $this->menu,
				'url' => $this->url,
				'target' => $this->target,
				'icon' => $this->icon,
				'image' => $this->image,
				'download_url' => $this->download_url,
				'is_approved' => $this->is_approved,
				'install' => $this->install,
				'apps_categors_id' => $this->apps_categors_id,
				'meta_title' => $this->meta_title,
				'meta_description' => $this->meta_description,
				'meta_keywords' => $this->meta_keywords,
				'active' => $this->active,
				'downloads' => $this->downloads,
				'downloads_bot' => $this->downloads_bot
			]);

			$this->resetInput();
			$this->dispatchBrowserEvent('closeModal');

			$this->dispatchBrowserEvent('notify', [
				'type' => 'success',
				'message' => '¡ Appeditor Successfully updated.!',
			]);
		}
	}

	public function destroy($id)
	{
		if ($id) {
			App::where('id', $id)->delete();
		}
	}
}
