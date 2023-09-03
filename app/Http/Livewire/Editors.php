<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Editor;

class Editors extends Component
{
    protected $listeners = ['confirm1' => 'confirm1_model', 'confirm-delete-model' => 'destroy'];

    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $pic, $slug, $htmlen, $htmles, $type;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.editors.view', [
            'editors' => Editor::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('pic', 'LIKE', $keyWord)
						->orWhere('slug', 'LIKE', $keyWord)
						->orWhere('htmlen', 'LIKE', $keyWord)
						->orWhere('htmles', 'LIKE', $keyWord)
						->orWhere('type', 'LIKE', $keyWord)->paginate(10)
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
		$this->slug = null;
		$this->htmlen = null;
		$this->htmles = null;
		$this->type = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'pic' => 'required',
		'slug' => 'required',
		'htmlen' => 'required',
		'htmles' => 'required',
		'type' => 'required',
        ]);

        Editor::create([ 
			'name' => $this-> name,
			'pic' => $this-> pic,
			'slug' => $this-> slug,
			'htmlen' => $this-> htmlen,
			'htmles' => $this-> htmles,
			'type' => $this-> type
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Editor Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Editor::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->pic = $record-> pic;
		$this->slug = $record-> slug;
		$this->htmlen = $record-> htmlen;
		$this->htmles = $record-> htmles;
		$this->type = $record-> type;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'pic' => 'required',
		'slug' => 'required',
		'htmlen' => 'required',
		'htmles' => 'required',
		'type' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Editor::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'pic' => $this-> pic,
			'slug' => $this-> slug,
			'htmlen' => $this-> htmlen,
			'htmles' => $this-> htmles,
			'type' => $this-> type
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Editor Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Editor::where('id', $id)->delete();
        }
    }
}