<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Typemodelo;

class Typemodelos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $active;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.typemodelos.view', [
            'typemodelos' => Typemodelo::latest()
						->orWhere('name', 'LIKE', $keyWord)
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
		$this->active = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'active' => 'required',
        ]);

        Typemodelo::create([ 
			'name' => $this-> name,
			'active' => $this-> active
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Typemodelo Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Typemodelo::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->active = $record-> active;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'active' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Typemodelo::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'active' => $this-> active
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Typemodelo Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Typemodelo::where('id', $id)->delete();
        }
    }
}