<?php
//live user cr26
namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admincontact;


class Admincontacts extends Component
{
    protected $listeners = ['confirm1' => 'confirm1_model', 'confirm-delete-model' => 'destroy'];

    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $nick_name, $admincontacttag_id, $active, $email, $birthday, $phone_code, $whatsapp, $skype, $telegram, $tiktok, $facebook, $snapchat, $x, $discord, $other;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
		return view('livewire.admin.contacts.view', [
			'admincontacts' => Admincontact::with('user', 'admincontacttag')
				->latest()
				->where('user_id', auth()->id())
				->where('name', 'LIKE', $keyWord)
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
		$this->nick_name = null;
		$this->admincontacttag_id = null;
		$this->active = null;
		$this->email = null;
		$this->birthday = null;
		$this->phone_code = null;
		$this->whatsapp = null;
		$this->skype = null;
		$this->telegram = null;
		$this->tiktok = null;
		$this->facebook = null;
		$this->snapchat = null;
		$this->x = null;
		$this->discord = null;
		$this->other = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'admincontacttag_id' => 'required',
		'active' => 'required',
        ]);

        Admincontact::create([ 
			'name' => $this-> name,
			'nick_name' => $this-> nick_name,
			'admincontacttag_id' => $this-> admincontacttag_id,
			'active' => $this-> active,
			'email' => $this-> email,
			'birthday' => $this-> birthday,
			'phone_code' => $this-> phone_code,
			'whatsapp' => $this-> whatsapp,
			'skype' => $this-> skype,
			'telegram' => $this-> telegram,
			'tiktok' => $this-> tiktok,
			'facebook' => $this-> facebook,
			'snapchat' => $this-> snapchat,
			'x' => $this-> x,
			'discord' => $this-> discord,
			'other' => $this-> other
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Admincontact Successfully created!',
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
       $record = Admincontact::findOrFail($this->selected_id);
        
       if ($record->userCanModify()) {
                 
		$this->name = $record-> name;
		$this->nick_name = $record-> nick_name;
		$this->admincontacttag_id = $record-> admincontacttag_id;
		$this->active = $record-> active;
		$this->email = $record-> email;
		$this->birthday = $record-> birthday;
		$this->phone_code = $record-> phone_code;
		$this->whatsapp = $record-> whatsapp;
		$this->skype = $record-> skype;
		$this->telegram = $record-> telegram;
		$this->tiktok = $record-> tiktok;
		$this->facebook = $record-> facebook;
		$this->snapchat = $record-> snapchat;
		$this->x = $record-> x;
		$this->discord = $record-> discord;
		$this->other = $record-> other;
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
		'admincontacttag_id' => 'required',
		'active' => 'required',
        ]);            

        $record = Admincontact::findOrFail($this->selected_id);
        
        if ($record->userCanModify()) {

                if ($this->selected_id) {
                    $record = Admincontact::find($this->selected_id);
                    $record->update([ 
			'name' => $this-> name,
			'nick_name' => $this-> nick_name,
			'admincontacttag_id' => $this-> admincontacttag_id,
			'active' => $this-> active,
			'email' => $this-> email,
			'birthday' => $this-> birthday,
			'phone_code' => $this-> phone_code,
			'whatsapp' => $this-> whatsapp,
			'skype' => $this-> skype,
			'telegram' => $this-> telegram,
			'tiktok' => $this-> tiktok,
			'facebook' => $this-> facebook,
			'snapchat' => $this-> snapchat,
			'x' => $this-> x,
			'discord' => $this-> discord,
			'other' => $this-> other
                    ]);

                    $this->resetInput();
                    $this->dispatchBrowserEvent('closeModal');
            
                    $this->dispatchBrowserEvent('notify', [
                        'type' => 'success',
                        'message' => '¡ Admincontact Successfully updated.!',
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
            Admincontact::where('id', $id)->delete();
        }
    }
}