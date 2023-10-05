<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Adminapp;

class Adminapps extends Component
{
    protected $listeners = ['confirm1' => 'confirm1_model', 'confirm-delete-model' => 'destroy'];

    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.adminapps.view', [
            'adminapps' => Adminapp::latest()
						->orWhere('name', 'LIKE', $keyWord)->paginate(10)
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->name = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
        ]);

        Adminapp::create([ 
			'name' => $this-> name
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Adminapp Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Adminapp::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Adminapp::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Adminapp Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Adminapp::where('id', $id)->delete();
        }
    }
}