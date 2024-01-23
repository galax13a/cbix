<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Biocompone;

class Biocompones extends Component
{
    protected $listeners = ['confirm1' => 'confirm1_model', 'confirm-delete-model' => 'destroy'];

    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $img, $code, $js, $biocategorcompone_id, $active;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.admin.biocompones.view', [
            'biocompones' => Biocompone::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('img', 'LIKE', $keyWord)
						->orWhere('code', 'LIKE', $keyWord)
						->orWhere('js', 'LIKE', $keyWord)
						->orWhere('biocategorcompone_id', 'LIKE', $keyWord)
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
		$this->img = null;
		$this->code = null;
		$this->js = null;
		$this->biocategorcompone_id = null;
		$this->active = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'code' => 'required',
		'biocategorcompone_id' => 'required',
		'active' => 'required',
        ]);

        Biocompone::create([ 
			'name' => $this-> name,
			'img' => $this-> img,
			'code' => $this-> code,
			'js' => $this-> js,
			'biocategorcompone_id' => $this-> biocategorcompone_id,
			'active' => $this-> active
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Biocompone Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Biocompone::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->img = $record-> img;
		$this->code = $record-> code;
		$this->js = $record-> js;
		$this->biocategorcompone_id = $record-> biocategorcompone_id;
		$this->active = $record-> active;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'code' => 'required',
		'biocategorcompone_id' => 'required',
		'active' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Biocompone::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'img' => $this-> img,
			'code' => $this-> code,
			'js' => $this-> js,
			'biocategorcompone_id' => $this-> biocategorcompone_id,
			'active' => $this-> active
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Biocompone Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Biocompone::where('id', $id)->delete();
        }
    }
}