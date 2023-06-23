<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Apps0categor;

class Apps0categors extends Component
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

        return view('livewire.apps0categors.view', [
            'apps0categors' => Apps0categor::latest()
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

        Apps0categor::create([ 
			'name' => $this-> name,
			'active' => $this-> active
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Apps0categor Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Apps0categor::findOrFail($id);
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
			$record = Apps0categor::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'active' => $this-> active
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Apps0categor Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Apps0categor::where('id', $id)->delete();
        }
    }
}