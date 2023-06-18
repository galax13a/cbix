<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Task;

class Tasks extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $command, $interval, $last_executed_at, $status;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.tasks.view', [
            'tasks' => Task::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('command', 'LIKE', $keyWord)
						->orWhere('interval', 'LIKE', $keyWord)
						->orWhere('last_executed_at', 'LIKE', $keyWord)
						->orWhere('status', 'LIKE', $keyWord)->paginate(10)
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->command = null;
		$this->interval = null;
		$this->last_executed_at = null;
		$this->status = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'command' => 'required',
		'interval' => 'required',
		'status' => 'required',
        ]);

        Task::create([ 
			'name' => $this-> name,
			'command' => $this-> command,
			'interval' => $this-> interval,
			'last_executed_at' => $this-> last_executed_at,
			'status' => $this-> status
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Task Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Task::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->command = $record-> command;
		$this->interval = $record-> interval;
		$this->last_executed_at = $record-> last_executed_at;
		$this->status = $record-> status;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'command' => 'required',
		'interval' => 'required',
		'status' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Task::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'command' => $this-> command,
			'interval' => $this-> interval,
			'last_executed_at' => $this-> last_executed_at,
			'status' => $this-> status
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Task Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Task::where('id', $id)->delete();
        }
    }
}