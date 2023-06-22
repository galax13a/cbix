<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Stat;

class Stats extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $codex, $location, $url;
    protected $listeners = ['confirm-delete-td' => 'destroy_model', 'delete-model' => 'destroy'];

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.admin.stats.view', [
            'stats' => Stat::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('codex', 'LIKE', $keyWord)
						->orWhere('location', 'LIKE', $keyWord)
						->orWhere('url', 'LIKE', $keyWord)->paginate(10)
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->codex = null;
		$this->location = null;
		$this->url = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'codex' => 'required',
		'location' => 'required',
		'url' => 'required|url',
        ]);

        Stat::create([ 
			'name' => $this-> name,
			'codex' => $this-> codex,
			'location' => $this-> location,
			'url' => $this-> url
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Stat Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Stat::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->codex = $record-> codex;
		$this->location = $record-> location;
		$this->url = $record-> url;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'codex' => 'required',
		'location' => 'required',
		'url' => 'required|url',
        ]);

        if ($this->selected_id) {
			$record = Stat::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'codex' => $this-> codex,
			'location' => $this-> location,
			'url' => $this-> url
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Stat Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Stat::where('id', $id)->delete();
        }
    }
}