<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Uploadsize;

class Uploadsizes extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $width, $active;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.uploadsizes.view', [
            'uploadsizes' => Uploadsize::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('width', 'LIKE', $keyWord)
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
		$this->active = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'width' => 'required',
		'active' => 'required',
        ]);

        Uploadsize::create([ 
			'name' => $this-> name,
			'width' => $this-> width,
			'active' => $this-> active
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Uploadsize Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Uploadsize::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->width = $record-> width;
		$this->active = $record-> active;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'width' => 'required',
		'active' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Uploadsize::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'width' => $this-> width,
			'active' => $this-> active
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Uploadsize Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Uploadsize::where('id', $id)->delete();
        }
    }
}