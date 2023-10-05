<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admincontacttag;

class Admincontacttags extends Component
{
    protected $listeners = ['confirm1' => 'confirm1_model', 'confirm-delete-model' => 'destroy'];

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

        return view('livewire.admin.contacttags.view', [
            'admincontacttags' => Admincontacttag::latest()
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

        Admincontacttag::create([ 
			'name' => $this-> name,
			'active' => $this-> active
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Admincontacttag Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Admincontacttag::findOrFail($id);
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
			$record = Admincontacttag::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'active' => $this-> active
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Admincontacttag Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Admincontacttag::where('id', $id)->delete();
        }
    }
}