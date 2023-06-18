<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Test;
use App\Models\User;
use Spatie\Permission\Models\Role;

class Dashboard extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name;
    
   public $usersCount, $rolesCount;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {

        $this->usersCount = User::count();
        $this->rolesCount = Role::count();

		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.admin.dashboard.view');
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

        Test::create([ 
			'name' => $this-> name
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Test Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Test::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Test::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Test Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Test::where('id', $id)->delete();
        }
    }
}