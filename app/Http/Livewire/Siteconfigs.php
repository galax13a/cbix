<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Siteconfig;

class Siteconfigs extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $idioma, $crm, $apps, $thumbnail, $localimg, $s3amazon, $s3google, $siteupkeep, $code_google_anality, $code_head_front, $code_head_back, $code_body_front;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.siteconfigs.view', [
            'siteconfigs' => Siteconfig::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('idioma', 'LIKE', $keyWord)
						->orWhere('crm', 'LIKE', $keyWord)
						->orWhere('apps', 'LIKE', $keyWord)
						->orWhere('thumbnail', 'LIKE', $keyWord)
						->orWhere('localimg', 'LIKE', $keyWord)
						->orWhere('s3amazon', 'LIKE', $keyWord)
						->orWhere('s3google', 'LIKE', $keyWord)
						->orWhere('siteupkeep', 'LIKE', $keyWord)
						->orWhere('code_google_anality', 'LIKE', $keyWord)
						->orWhere('code_head_front', 'LIKE', $keyWord)
						->orWhere('code_head_back', 'LIKE', $keyWord)
						->orWhere('code_body_front', 'LIKE', $keyWord)->paginate(10)
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->idioma = null;
		$this->crm = null;
		$this->apps = null;
		$this->thumbnail = null;
		$this->localimg = null;
		$this->s3amazon = null;
		$this->s3google = null;
		$this->siteupkeep = null;
		$this->code_google_anality = null;
		$this->code_head_front = null;
		$this->code_head_back = null;
		$this->code_body_front = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'thumbnail' => 'required',
		'siteupkeep' => 'required',
        ]);

        Siteconfig::create([ 
			'name' => $this-> name,
			'idioma' => $this-> idioma,
			'crm' => $this-> crm,
			'apps' => $this-> apps,
			'thumbnail' => $this-> thumbnail,
			'localimg' => $this-> localimg,
			's3amazon' => $this-> s3amazon,
			's3google' => $this-> s3google,
			'siteupkeep' => $this-> siteupkeep,
			'code_google_anality' => $this-> code_google_anality,
			'code_head_front' => $this-> code_head_front,
			'code_head_back' => $this-> code_head_back,
			'code_body_front' => $this-> code_body_front
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Siteconfig Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Siteconfig::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->idioma = $record-> idioma;
		$this->crm = $record-> crm;
		$this->apps = $record-> apps;
		$this->thumbnail = $record-> thumbnail;
		$this->localimg = $record-> localimg;
		$this->s3amazon = $record-> s3amazon;
		$this->s3google = $record-> s3google;
		$this->siteupkeep = $record-> siteupkeep;
		$this->code_google_anality = $record-> code_google_anality;
		$this->code_head_front = $record-> code_head_front;
		$this->code_head_back = $record-> code_head_back;
		$this->code_body_front = $record-> code_body_front;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'thumbnail' => 'required',
		'siteupkeep' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Siteconfig::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'idioma' => $this-> idioma,
			'crm' => $this-> crm,
			'apps' => $this-> apps,
			'thumbnail' => $this-> thumbnail,
			'localimg' => $this-> localimg,
			's3amazon' => $this-> s3amazon,
			's3google' => $this-> s3google,
			'siteupkeep' => $this-> siteupkeep,
			'code_google_anality' => $this-> code_google_anality,
			'code_head_front' => $this-> code_head_front,
			'code_head_back' => $this-> code_head_back,
			'code_body_front' => $this-> code_body_front
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Siteconfig Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Siteconfig::where('id', $id)->delete();
        }
    }
}