<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admincontact;

class Admincontacts extends Component
{
    protected $listeners = ['confirm1' => 'confirm1_model', 'confirm-delete-model' => 'destroy'];

    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $nick_name, $email, $birthday, $phone_code, $whatsapp, $skype, $telegram, $tiktok, $facebook, $snapchat, $x, $discord, $other, $admincontacttag_id;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.app.contacts.view', [
            'admincontacts' => Admincontact::with('user')->latest()

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
		$this->nick_name = null;
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
		$this->admincontacttag_id = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
        ]);

        Admincontact::create([ 
			'name' => $this-> name,
			'nick_name' => $this-> nick_name,
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
			'other' => $this-> other,
			'admincontacttag_id' => $this-> admincontacttag_id
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Admincontact Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Admincontact::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->nick_name = $record-> nick_name;
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
		$this->admincontacttag_id = $record-> admincontacttag_id;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Admincontact::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'nick_name' => $this-> nick_name,
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
			'other' => $this-> other,
			'admincontacttag_id' => $this-> admincontacttag_id
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Admincontact Successfully updated.!',
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