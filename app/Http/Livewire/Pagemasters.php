<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Pagemaster;

class Pagemasters extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $url, $afiliate, $logo, $api, $api2, $active;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.pagemasters.view', [
            'pagemasters' => Pagemaster::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('url', 'LIKE', $keyWord)
						->orWhere('afiliate', 'LIKE', $keyWord)
						->orWhere('logo', 'LIKE', $keyWord)
						->orWhere('api', 'LIKE', $keyWord)
						->orWhere('api2', 'LIKE', $keyWord)
						->orWhere('active', 'LIKE', $keyWord)->paginate(10)
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->url = null;
		$this->afiliate = null;
		$this->logo = null;
		$this->api = null;
		$this->api2 = null;
		$this->active = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'url' => 'required|url',
		'active' => 'required',
        ]);

        Pagemaster::create([ 
			'name' => $this-> name,
			'url' => $this-> url,
			'afiliate' => $this-> afiliate,
			'logo' => $this-> logo,
			'api' => $this-> api,
			'api2' => $this-> api2,
			'active' => $this-> active
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Pagemaster Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Pagemaster::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->url = $record-> url;
		$this->afiliate = $record-> afiliate;
		$this->logo = $record-> logo;
		$this->api = $record-> api;
		$this->api2 = $record-> api2;
		$this->active = $record-> active;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'url' => 'required|url',
		'active' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Pagemaster::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'url' => $this-> url,
			'afiliate' => $this-> afiliate,
			'logo' => $this-> logo,
			'api' => $this-> api,
			'api2' => $this-> api2,
			'active' => $this-> active
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Pagemaster Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Pagemaster::where('id', $id)->delete();
        }
    }
}