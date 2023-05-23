<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Modelo;

class Modelos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $nick, $nick2, $email, $dni, $wsp, $porce, $typemodelo_id, $img, $active;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.modelos.view', [
            'modelos' => Modelo::with('user')->latest()

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
		$this->nick = null;
		$this->nick2 = null;
		$this->email = null;
		$this->dni = null;
		$this->wsp = null;
		$this->porce = null;
		$this->typemodelo_id = null;
		$this->img = null;
		$this->active = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'porce' => 'required',
		'typemodelo_id' => 'required',
		'active' => 'required',
        ]);

        Modelo::create([ 
			'name' => $this-> name,
			'nick' => $this-> nick,
			'nick2' => $this-> nick2,
			'email' => $this-> email,
			'dni' => $this-> dni,
			'wsp' => $this-> wsp,
			'porce' => $this-> porce,
			'typemodelo_id' => $this-> typemodelo_id,
			'img' => $this-> img,
			'active' => $this-> active
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Modelo Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Modelo::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->nick = $record-> nick;
		$this->nick2 = $record-> nick2;
		$this->email = $record-> email;
		$this->dni = $record-> dni;
		$this->wsp = $record-> wsp;
		$this->porce = $record-> porce;
		$this->typemodelo_id = $record-> typemodelo_id;
		$this->img = $record-> img;
		$this->active = $record-> active;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'porce' => 'required',
		'typemodelo_id' => 'required',
		'active' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Modelo::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'nick' => $this-> nick,
			'nick2' => $this-> nick2,
			'email' => $this-> email,
			'dni' => $this-> dni,
			'wsp' => $this-> wsp,
			'porce' => $this-> porce,
			'typemodelo_id' => $this-> typemodelo_id,
			'img' => $this-> img,
			'active' => $this-> active
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Modelo Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Modelo::where('id', $id)->delete();
        }
    }
}