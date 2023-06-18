<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Apps0tag;

class Apps0tags extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $app_id, $tag_id;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.apps0tags.view', [
            'apps0tags' => Apps0tag::latest()
						->orWhere('app_id', 'LIKE', $keyWord)
						->orWhere('tag_id', 'LIKE', $keyWord)->paginate(10)
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->app_id = null;
		$this->tag_id = null;
    }

    public function store()
    {
        $this->validate([
		'app_id' => 'required',
		'tag_id' => 'required',
        ]);

        Apps0tag::create([ 
			'app_id' => $this-> app_id,
			'tag_id' => $this-> tag_id
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Apps0tag Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Apps0tag::findOrFail($id);
        $this->selected_id = $id; 
		$this->app_id = $record-> app_id;
		$this->tag_id = $record-> tag_id;
    }

    public function update()
    {
        $this->validate([
		'app_id' => 'required',
		'tag_id' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Apps0tag::find($this->selected_id);
            $record->update([ 
			'app_id' => $this-> app_id,
			'tag_id' => $this-> tag_id
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Apps0tag Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Apps0tag::where('id', $id)->delete();
        }
    }
}