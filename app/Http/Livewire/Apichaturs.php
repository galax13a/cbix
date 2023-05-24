<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Apichatur;

class Apichaturs extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $api, $active, $pagemaster_id, $modelo_id;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.apichaturs.view', [
            'apichaturs' => Apichatur::with(['user', 'modelo'])
                ->where('user_id', auth()->id())
                ->where(function ($query) use ($keyWord) {
                    $query->where('name', 'LIKE', $keyWord);
                })
                ->latest()
                ->paginate(10)
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
		$this->pagemaster_id = null;
        $this->modelo_id = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'api' => 'required|url',
		'active' => 'required',
		'pagemaster_id' => 'required',
        'modelo_id' => 'required'
        ]);

        Apichatur::create([ 
			'name' => $this-> name,
			'api' => $this-> api,
			'active' => $this-> active,
			'pagemaster_id' => $this-> pagemaster_id,
            'modelo_id' => $this-> modelo_id
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
		$this->pagemaster_id = $record-> pagemaster_id;
        $this->modelo_id = $record-> modelo_id;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'api' => 'required|url',
		'active' => 'required',
		'pagemaster_id' => 'required',
        'modelo_id' => 'required'
        ]);

        if ($this->selected_id) {
			$record = Apichatur::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'api' => $this-> api,
			'active' => $this-> active,
			'pagemaster_id' => $this-> pagemaster_id,
            'modelo_id' => $this-> modelo_id
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