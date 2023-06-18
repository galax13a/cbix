<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class Usuarios extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $email;
    public $password;
    

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.usuarios.view', [
            'usuarios' => User::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('email', 'LIKE', $keyWord)->paginate(10)
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->email = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'email' => 'required|email',
        'password' => bcrypt('password')
        ]);

        User::create([ 
			'name' => $this-> name,
			'email' => $this-> email
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Usuario Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = User::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->email = $record-> email;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'email' => 'required|email',
        ]);

        if ($this->selected_id) {
			$record = User::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'email' => $this-> email
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Usuario Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            User::where('id', $id)->delete();
        }
    }
}