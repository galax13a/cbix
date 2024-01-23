<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Biocategorcompone;

class Biocategorcompones extends Component
{
    protected $listeners = ['confirm1' => 'confirm1_model', 'confirm-delete-model' => 'destroy'];

    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $active, $icon;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.admin.biocategorcompones.view', [
            'biocategorcompones' => Biocategorcompone::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('active', 'LIKE', $keyWord)
						->orWhere('icon', 'LIKE', $keyWord)->paginate(10)
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
		$this->icon = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'active' => 'required',
        ]);

        Biocategorcompone::create([ 
			'name' => $this-> name,
			'active' => $this-> active,
			'icon' => $this-> icon
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Biocategorcompone Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Biocategorcompone::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->active = $record-> active;
		$this->icon = $record-> icon;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'active' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Biocategorcompone::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'active' => $this-> active,
			'icon' => $this-> icon
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Biocategorcompone Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Biocategorcompone::where('id', $id)->delete();
        }
    }
}