<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use Spatie\Permission\Models\Role;

class Usuarios extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $email;
    public $password;

    public $users; 
    public $roles;
    public $selectedUser;
    public $selectedRoles = [];
    public $userRoles = [];

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        $this->roles = Role::all();

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
        $this->selectedUser = $id;
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->email = $record-> email;

        $this->updatedSelectedUser();

    }

    public function updatedSelectedUser()
    {
        $user = User::find($this->selectedUser);
    $this->selectedRoles = $user ? $user->roles->pluck('id')->toArray() : [];
    $this->userRoles = $user ? $user->getRoleNames()->toArray() : [];
    }


    public function updateUserRoles()
    {
        $user = User::find($this->selectedUser);
        $roles = Role::whereIn('id', $this->selectedRoles)->get();

        if ($user && $roles) {
            $user->syncRoles($roles); // Asigna los roles al usuario
            $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Roles Successfully created!',
            ]);
            $this->updatedSelectedUser();
        }
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