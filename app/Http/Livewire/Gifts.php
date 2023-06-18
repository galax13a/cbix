<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Gift;

class Gifts extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $description, $cost, $active;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.gifts.view', [
            'gifts' => Gift::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('description', 'LIKE', $keyWord)
						->orWhere('cost', 'LIKE', $keyWord)
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
		$this->description = null;
		$this->cost = null;
		$this->active = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'description' => 'required',
		'cost' => 'required|numeric',
		'active' => 'required',
        ]);

        Gift::create([ 
			'name' => $this-> name,
			'description' => $this-> description,
			'cost' => $this-> cost,
			'active' => $this-> active
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Gift Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Gift::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->description = $record-> description;
		$this->cost = $record-> cost;
		$this->active = $record-> active;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'description' => 'required',
		'cost' => 'required',
		'active' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Gift::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'description' => $this-> description,
			'cost' => $this-> cost,
			'active' => $this-> active
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Gift Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Gift::where('id', $id)->delete();
        }
    }
}