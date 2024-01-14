<?php
//live user cr26
namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Biochaturbate;


class Biochaturbates extends Component
{
    protected $listeners = ['confirm1' => 'confirm1_model', 'confirm-delete-model' => 'destroy'];

    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $room, $api, $codex, $bio, $data, $code, $codebackup, $share, $link, $campaign, $pay, $active, $pic;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.createbios.chaturbates.view', [
            'biochaturbates' => Biochaturbate::with('user')->latest()

                ->where('user_id', auth()->id())
                ->where(function ($query) use ($keyWord) {     
                    $query->where('name', 'LIKE', $keyWord)        
                    ->orWhere('name', 'LIKE', $keyWord); 
                })->paginate(10)
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->room = null;
		$this->api = null;
		$this->codex = null;
		$this->bio = null;
		$this->data = null;
		$this->code = null;
		$this->codebackup = null;
		$this->share = null;
		$this->link = null;
		$this->campaign = null;
		$this->pay = null;
		$this->active = null;
		$this->pic = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'room' => 'required',
		'pay' => 'required',
		'active' => 'required',
        ]);

        Biochaturbate::create([ 
			'name' => $this-> name,
			'room' => $this-> room,
			'api' => $this-> api,
			'codex' => $this-> codex,
			'bio' => $this-> bio,
			'data' => $this-> data,
			'code' => $this-> code,
			'codebackup' => $this-> codebackup,
			'share' => $this-> share,
			'link' => $this-> link,
			'campaign' => $this-> campaign,
			'pay' => $this-> pay,
			'active' => $this-> active,
			'pic' => $this-> pic
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Biochaturbate Successfully created!',
            ]);
    }

    public function edit($id=null) //editar si es seguro y pertenece el registro a usuario
    {
        
        $this->selected_id = $id; 
        if(!$this->selected_id){
            $this->dispatchBrowserEvent('notify', [
                'type' => 'failure',
                'message' => '¡Unauthorized Record Null !',
            ]);      
            abort(500, 'server abort ');
       }
       $record = Biochaturbate::findOrFail($this->selected_id);
        
       if ($record->userCanModify()) {
                 
		$this->name = $record-> name;
		$this->room = $record-> room;
		$this->api = $record-> api;
		$this->codex = $record-> codex;
		$this->bio = $record-> bio;
		$this->data = $record-> data;
		$this->code = $record-> code;
		$this->codebackup = $record-> codebackup;
		$this->share = $record-> share;
		$this->link = $record-> link;
		$this->campaign = $record-> campaign;
		$this->pay = $record-> pay;
		$this->active = $record-> active;
		$this->pic = $record-> pic;
        } else {           
            $this->dispatchBrowserEvent('notify', [
                'type' => 'failure',
                'message' => '¡ Unauthorized error, Registry not recovered.!',
            ]);
        }  

    }

    public function update()// actulalizar 
    {
        if(!$this->selected_id){
            $this->dispatchBrowserEvent('notify', [
                'type' => 'failure',
                'message' => '¡Unauthorized Record Null !',
            ]);
            return false;
       }

        $this->validate([
		'name' => 'required',
		'room' => 'required',
		'pay' => 'required',
		'active' => 'required',
        ]);            

        $record = Biochaturbate::findOrFail($this->selected_id);
        
        if ($record->userCanModify()) {

                if ($this->selected_id) {
                    $record = Biochaturbate::find($this->selected_id);
                    $record->update([ 
			'name' => $this-> name,
			'room' => $this-> room,
			'api' => $this-> api,
			'codex' => $this-> codex,
			'bio' => $this-> bio,
			'data' => $this-> data,
			'code' => $this-> code,
			'codebackup' => $this-> codebackup,
			'share' => $this-> share,
			'link' => $this-> link,
			'campaign' => $this-> campaign,
			'pay' => $this-> pay,
			'active' => $this-> active,
			'pic' => $this-> pic
                    ]);

                    $this->resetInput();
                    $this->dispatchBrowserEvent('closeModal');
            
                    $this->dispatchBrowserEvent('notify', [
                        'type' => 'success',
                        'message' => '¡ Biochaturbate Successfully updated.!',
                    ]);
                }
        }
        else {
           // $this->resetForm();
            $this->dispatchBrowserEvent('notify', [
                'type' => 'failure',
                'message' => '¡ Unauthorized error, Registry not recovered.!',
            ]);
        }     
    }

    public function destroy($id)
    {
        if ($id) {
            Biochaturbate::where('id', $id)->delete();
        }
    }
}