<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Estudiomodelo;

class Estudiomodelos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $estudio_id, $modelo_id;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.estudiomodelos.view', [
            'estudiomodelos' => Estudiomodelo::with('user')->latest()
                ->where('user_id', auth()->id())->paginate(10)
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->estudio_id = null;
		$this->modelo_id = null;
    }

    public function store()
    {
        $this->validate([
		'estudio_id' => 'required',
		'modelo_id' => 'required',
        ]);

        Estudiomodelo::create([ 
			'estudio_id' => $this-> estudio_id,
			'modelo_id' => $this-> modelo_id
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Estudiomodelo Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Estudiomodelo::findOrFail($id);
        $this->selected_id = $id; 
		$this->estudio_id = $record-> estudio_id;
		$this->modelo_id = $record-> modelo_id;
    }

    public function update()
    {
        $this->validate([
		'estudio_id' => 'required',
		'modelo_id' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Estudiomodelo::find($this->selected_id);
            $record->update([ 
			'estudio_id' => $this-> estudio_id,
			'modelo_id' => $this-> modelo_id
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Estudiomodelo Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Estudiomodelo::where('id', $id)->delete();
        }
    }
}