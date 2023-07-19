<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Uploadthumbnail;

class Uploadthumbnails extends Component
{
    protected $listeners = ['confirm-delete-td' => 'destroy_model', 'confirm-delete-model' => 'destroy'];

    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $width, $height, $active;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.uploadthumbnails.view', [
            'uploadthumbnails' => Uploadthumbnail::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('width', 'LIKE', $keyWord)
						->orWhere('height', 'LIKE', $keyWord)
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
		$this->width = null;
		$this->height = null;
		$this->active = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'width' => 'required',
		'height' => 'required',
		'active' => 'required',
        ]);

        Uploadthumbnail::create([ 
			'name' => $this-> name,
			'width' => $this-> width,
			'height' => $this-> height,
			'active' => $this-> active
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Uploadthumbnail Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Uploadthumbnail::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->width = $record-> width;
		$this->height = $record-> height;
		$this->active = $record-> active;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'width' => 'required',
		'height' => 'required',
		'active' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Uploadthumbnail::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'width' => $this-> width,
			'height' => $this-> height,
			'active' => $this-> active
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Uploadthumbnail Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Uploadthumbnail::where('id', $id)->delete();
        }
    }
}