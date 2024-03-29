<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Themacom;

class Themacoms extends Component
{
    protected $listeners = ['confirm1' => 'confirm1_model', 'confirm-delete-model' => 'destroy', 'salvar' => 'salvarx'];

    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $pic, $slug, $codex, $active, $type;
    public $editorjs;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function salvarx(){
        
        $this->dispatchBrowserEvent('notify', [
            'type' => 'success',
            'message' => '¡ready Salvar',
        ]);
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.themacoms.view', [
            'themacoms' => Themacom::latest()
						->orWhere('name', 'LIKE', $keyWord)			
						->orWhere('type', 'LIKE', $keyWord)->paginate(30)
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->pic = null;
		$this->slug = null;
		$this->codex = null;
		$this->active = null;
		$this->type = null;
    }

       public function store()
    {
        $this->validate([
		'name' => 'required',
		'slug' => 'required',
		'codex' => 'required',
		'active' => 'required',
        ]);

        Themacom::create([ 
			'name' => $this-> name,
			'pic' => $this-> pic,
			'slug' => $this-> slug,
			'codex' => $this-> codex,
			'active' => $this-> active,
			'type' => $this-> type
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Themacom Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Themacom::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->pic = $record-> pic;
		$this->slug = $record-> slug;
		$this->codex = $record-> codex;
		$this->active = $record-> active;
		$this->type = $record-> type;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'slug' => 'required',
		'codex' => 'required',
		'active' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Themacom::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'pic' => $this-> pic,
			'slug' => $this-> slug,
			'codex' => $this-> codex,
			'active' => $this-> active,
			'type' => $this-> type
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Themacom Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Themacom::where('id', $id)->delete();
        }
    }
}