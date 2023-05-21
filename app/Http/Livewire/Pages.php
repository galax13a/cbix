<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Page;

class Pages extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $user_id, $name, $url, $active;

    public function updatingKeyWord()
{
    $this->resetPage();
}

public function render()
{
    $keyWord = '%'.$this->keyWord .'%';

    return view('livewire.pages.view', [
        'pages' => Page::with('user')->latest()
                    ->where('user_id', auth()->id())
                    ->where(function ($query) use ($keyWord) {
                        $query->where('name', 'LIKE', $keyWord)
                              ->orWhere('url', 'LIKE', $keyWord);
                    })
                    ->paginate(10)
    ]);
}

	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->user_id = null;
		$this->name = null;
		$this->url = null;
		$this->active = null;
    }

    public function store()
    {
        $this->validate([		
		'name' => 'required',
		'url' => 'required|url'
        ]);

        Page::create([ 			
			'name' => $this-> name,
			'url' => $this-> url,
			'active' => 0
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		//session()->flash('message', 'Page Successfully created.');
        // Mostrar una notificación de éxito
            $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Successfully created Save!',
            ]);
    }

    public function edit($id)
    {
        $record = Page::findOrFail($id);
        $this->selected_id = $id; 
		$this->user_id = $record-> user_id;
		$this->name = $record-> name;
		$this->url = $record-> url;
		$this->active = $record-> active;
    }

    public function update()
    {
        $this->validate([	
		'name' => 'required',
		'url' => 'required',
		'active' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Page::find($this->selected_id);
            $record->update([ 			
			'name' => $this-> name,
			'url' => $this-> url,
			'active' => $this-> active
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
            $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Page Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Page::where('id', $id)->delete();
        }
    }
}