<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Componente;

class Componentes extends Component
{
    protected $listeners = ['confirm1' => 'confirm1_model', 'confirm-delete-model' => 'destroy'];

    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $pic, $htmlcode, $css, $js;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.componentes.view', [
            'componentes' => Componente::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('pic', 'LIKE', $keyWord)
						->orWhere('htmlcode', 'LIKE', $keyWord)
						->orWhere('css', 'LIKE', $keyWord)
						->orWhere('js', 'LIKE', $keyWord)->paginate(10)
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
		$this->htmlcode = null;
		$this->css = null;
		$this->js = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'htmlcode' => 'required',
        ]);

        Componente::create([ 
			'name' => $this-> name,
			'pic' => $this-> pic,
			'htmlcode' => $this-> htmlcode,
			'css' => $this-> css,
			'js' => $this-> js
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Componente Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Componente::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->pic = $record-> pic;
		$this->htmlcode = $record-> htmlcode;
		$this->css = $record-> css;
		$this->js = $record-> js;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'htmlcode' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Componente::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'pic' => $this-> pic,
			'htmlcode' => $this-> htmlcode,
			'css' => $this-> css,
			'js' => $this-> js
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Componente Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Componente::where('id', $id)->delete();
        }
    }
}