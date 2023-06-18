<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Support;

class Supports extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $description, $status;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.supports.view', [
            'supports' => Support::with('user')->latest()

                ->where('user_id', auth()->id())
                ->where(function ($query) use ($keyWord) {     
                    $query->where('name', 'LIKE', $keyWord)        
                    ->orWhere('name', 'LIKE', $keyWord); 
                })->paginate(10)
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
		$this->status = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'description' => 'required',
		'status' => 'required',
        ]);

        Support::create([ 
			'name' => $this-> name,
			'description' => $this-> description,
			'status' => $this-> status
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Support Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Support::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->description = $record-> description;
		$this->status = $record-> status;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'description' => 'required',
		'status' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Support::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'description' => $this-> description,
			'status' => $this-> status
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Support Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Support::where('id', $id)->delete();
        }
    }
}