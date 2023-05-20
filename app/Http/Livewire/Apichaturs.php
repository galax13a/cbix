<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Apichatur;

class Apichaturs extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $api, $active, $page_id;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.apichaturs.view', [
            'apichaturs' => Apichatur::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('api', 'LIKE', $keyWord)
						->orWhere('active', 'LIKE', $keyWord)
						->orWhere('page_id', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->api = null;
		$this->active = null;
		$this->page_id = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'api' => 'required|url',
		'active' => 'required',
		'page_id' => 'required',
        ]);

        Apichatur::create([ 
			'name' => $this-> name,
			'api' => $this-> api,
			'active' => $this-> active,
			'page_id' => $this-> page_id
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Apichatur Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Apichatur::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->api = $record-> api;
		$this->active = $record-> active;
		$this->page_id = $record-> page_id;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'api' => 'required|url',
		'active' => 'required',
		'page_id' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Apichatur::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'api' => $this-> api,
			'active' => $this-> active,
			'page_id' => $this-> page_id
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Apichatur Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Apichatur::where('id', $id)->delete();
        }
    }
}