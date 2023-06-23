<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\App;

class Apps extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $description, $is_approved, $apps_categors_id, $meta_title, $meta_description, $meta_keywords, $active;

    public $id_app;
    
    public function mount($id_app=null)
    {
        $this->id_app = $id_app;
    }


    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
        $keyWord = '%' . $this->keyWord . '%';

    
        if ($this->id_app !== null) {
            $app = App::find($this->id_app);

            if (!$app) {
                // El id_app no existe, redirigir al usuario
                return redirect()->route('admin.apps');
            }

            return view('livewire.admin.apps_admin.install', [
                'app' => $app,
            ]);
        } else {


            return view('livewire.admin.apps_admin.view', [
                'apps' => App::latest()
                    ->orWhere('name', 'LIKE', $keyWord)
                    ->orWhere('description', 'LIKE', $keyWord)
                    ->orWhere('is_approved', 'LIKE', $keyWord)
                    ->orWhere('apps_categors_id', 'LIKE', $keyWord)
                    ->orWhere('meta_title', 'LIKE', $keyWord)
                    ->orWhere('meta_description', 'LIKE', $keyWord)
                    ->orWhere('meta_keywords', 'LIKE', $keyWord)
                    ->orWhere('active', 'LIKE', $keyWord)->paginate(10)
            ]);
        }
    }

    public function cancel()
    {
        $this->resetInput();
    }

    private function resetInput()
    {
        $this->name = null;
        $this->description = null;
        $this->is_approved = null;
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
            'description' => 'required',
            'is_approved' => 'required',
            'apps_categors_id' => 'required',
            'active' => 'required',
        ]);

        App::create([
            'name' => $this->name,
            'description' => $this->description,
            'is_approved' => $this->is_approved,
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

    public function edit($id)
    {
        $record = App::findOrFail($id);
        $this->selected_id = $id;
        $this->name = $record->name;
        $this->description = $record->description;
        $this->is_approved = $record->is_approved;
        $this->apps_categors_id = $record->apps_categors_id;
        $this->meta_title = $record->meta_title;
        $this->meta_description = $record->meta_description;
        $this->meta_keywords = $record->meta_keywords;
        $this->active = $record->active;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'is_approved' => 'required',
            'apps_categors_id' => 'required',
            'active' => 'required',
        ]);

        if ($this->selected_id) {
            $record = App::find($this->selected_id);
            $record->update([
                'name' => $this->name,
                'description' => $this->description,
                'is_approved' => $this->is_approved,
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
