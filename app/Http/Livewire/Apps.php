<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\App;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Apps extends Component
{
	use WithPagination;

	protected $paginationTheme = 'bootstrap';
	public $selected_id, $keyWord, $name, $slug, $description, $version, $menu, $url, $target, $icon, $image, $download_url, $is_approved, $install, $apps_categors_id, $meta_title, $meta_description, $meta_keywords, $active;
	public $app;
	protected $queryString = ['appid', 'appname', 'menux', 'name'];
	public $pageTitle;
	public $appid, $appname;
	public $appnew;
	public $menux;
	public $slugExists = false;
	
	use WithFileUploads;

	public function updatingKeyWord() // reset pages keywork
	{
		$this->resetPage();
	}
	public function mount(Request $request)
	{
		//	$segment = $request->segment(4); // Obtener el ID de la URL

		if ($request->has('appid')) {
			$this->app = App::find($this->appid);
			abort_if(is_null($this->app), 404, 'App not found');
			$this->selected_id = $request->input('appid');
			$this->pageTitle = 'App Install ' . $this->app->name;
		}
		$this->appnew = false;
		$this->menux = $request->input('menux');
		$this->name = $request->input('name');
	}

	public function newapp()
	{
		$this->appnew = true;
		$this->menux = "createapp";

		$this->selected_id = $this->resetInput();
		$this->appid = null;
		$this->appname = null;

		$this->dispatchBrowserEvent('notify', [
			'type' => 'success',
			'message' => '¡creation of new app started',
		]);
	}

	public function editorcreate(){

		$this->dispatchBrowserEvent('notify', [
			'type' => 'info',
			'message' => '¡ Creando...app',
		]);

	}

	public function create1()
	{
		
		$this->dispatchBrowserEvent('notify', [
			'type' => 'success',
			'message' => '¡ Create app editor js',
		]);		

		//$this->menux = "editor";
		
	}
	public  function slugExists($slug)
	{
		return App::where('slug', $slug)->exists();
	}

	public function updatedName()
	{
		$this->slug = Str::slug($this->name);
	}

	public function render()
	{
		$keyWord = '%' . $this->keyWord . '%';

		if ($this->selected_id) {
			$this->app = App::find($this->selected_id);
		}

		return view('livewire.apps.view', [
			'apps' => App::latest()
				->orWhere('name', 'LIKE', $keyWord)
				->orWhere('slug', 'LIKE', $keyWord)
				->orWhere('en', 'LIKE', $keyWord)
				->orWhere('es', 'LIKE', $keyWord)
				->orWhere('apps_categors_id', 'LIKE', $keyWord)
				->orWhere('active', 'LIKE', $keyWord)->paginate(10)
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
		$this->description = null;
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
	}

	public function store()
	{
		$this->validate([
			'name' => 'required',
			'slug' => 'required',
			'description' => 'required',
			'is_approved' => 'required',
			'apps_categors_id' => 'required',
			'active' => 'required',
		]);

		App::create([
			'name' => $this->name,
			'slug' => $this->slug,
			'description' => $this->description,
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
			'active' => $this->active
		]);

		$this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		$this->dispatchBrowserEvent('notify', [
			'type' => 'success',
			'message' => '¡ App Successfully created!',
		]);
	}

	public function install($id)
	{
		$this->app = $this->edit($id);
		$this->appid = $id;
		$this->appname = $this->app->name;
	}

	public function updateApp($id, $install)
	{

		$this->app->update([
			'install' => $install
		]);

		$this->dispatchBrowserEvent('notify', [
			'type' => 'success',
			'message' => '¡ App Successfully updated!',
		]);
	}

	public function installApp($install)
	{
		try {

			$this->app->update([
				'install' => $install
			]);

			//$this->app = $this->edit($this->selected_id);
		} catch (\Exception $e) {
			$this->dispatchBrowserEvent('notify', [
				'type' => 'error',
				'message' => 'An error occurred during app installation.',
			]);
		}
	}


	public function appHome()
	{
		$this->selected_id = $this->resetInput();
		$this->appid = null;
		$this->appname = null;
		$this->menux = null;
	}


	public function edit($id)
	{
		$record = App::findOrFail($id);
		$this->selected_id = $id;
		$this->name = $record->name;
		$this->slug = $record->slug;
		$this->description = $record->description;
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
		return $record;
	}

	public function update()
	{
		$this->validate([
			'name' => 'required',
			'slug' => 'required',
			'description' => 'required',
			'is_approved' => 'required',
			'apps_categors_id' => 'required',
			'active' => 'required',
		]);

		if ($this->selected_id) {
			$record = App::find($this->selected_id);
			$record->update([
				'name' => $this->name,
				'slug' => $this->slug,
				'description' => $this->description,
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
				'active' => $this->active
			]);

			$this->resetInput();
			$this->dispatchBrowserEvent('closeModal');

			$this->dispatchBrowserEvent('notify', [
				'type' => 'success',
				'message' => '¡ App Successfully updated.!',
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
