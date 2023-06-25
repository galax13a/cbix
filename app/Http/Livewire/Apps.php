<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\App;

class Apps extends Component
{
	use WithPagination;

	protected $paginationTheme = 'bootstrap';
	public $selected_id, $keyWord, $name, $slug, $description, $version, $menu, $url, $target, $icon, $image, $download_url, $is_approved, $install, $apps_categors_id, $meta_title, $meta_description, $meta_keywords, $active;
	public $app;
	protected $queryString = [
		'appid' => ['except' => ''],
		'appname'
	];
	
	public $appid,$appname;


	public function updatingKeyWord() // reset pages keywork
	{
		$this->resetPage();
	}
	public function mount()
{
    $this->selected_id = $this->appid;
	$this->app= App::findOrFail($this->appid);
}


	public function render()
	{
		$keyWord = '%' . $this->keyWord . '%';


		return view('livewire.apps.view', [
			'apps' => App::latest()
				->orWhere('name', 'LIKE', $keyWord)
				->orWhere('slug', 'LIKE', $keyWord)
				->orWhere('description', 'LIKE', $keyWord)
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
	public function appHome()
	{
		$this->selected_id = $this->resetInput();

		$this->appid = null;
		$this->appname = null;
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
