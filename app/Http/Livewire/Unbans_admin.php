<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Unban_admin;
use App\Models\User;

class Unbans_admin extends Component
{
    use WithPagination;

    protected $listeners = ['confirm-delete-td' => 'destroy_model', 'delete-model' => 'destroy'];
    
	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $sent_by, $resolved_by, $comment, $reply_comment, $email, $status;
    public $is_banned;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.admin.dashboard.unbans.view', [
            'unbans' => Unban_admin::orderBy('status', 'asc')
                ->latest()
                ->paginate(50)
        ]);
        
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	

        public function unbaner()
        {
            try {
                $user = User::find($this->sent_by);
                $user->unban();                                
                $this->dispatchBrowserEvent('notify', [
                    'type' => 'success',
                    'message' => '¡ Unban Successfully .!',
                ]);
                $this->is_banned = false;
            } catch (\Exception $e) {        
                $this->dispatchBrowserEvent('notify', [
                    'type' => 'danger',
                    'message' => '¡ Error updating Unban.! ,updated.!',
                ]);
            }
    }
    private function resetInput()
    {		
		$this->sent_by = null;
		$this->resolved_by = null;
		$this->comment = null;
		$this->reply_comment = null;
		$this->email = null;
		$this->status = null;
    }

    public function store()
    {
        /*
        $this->validate([
		'comment' => 'required',
		'status' => 'required',
        ]);

        Unban_admin::create([ 
			'sent_by' => $this-> sent_by,
			'resolved_by' => $this-> resolved_by,
			'comment' => $this-> comment,
			'reply_comment' => $this-> reply_comment,
			'email' => $this-> email,
			'status' => $this-> status
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Unban Successfully created!',
            ]);
            */
    }

    public function edit($id)
    {
        $record = Unban_admin::findOrFail($id);
        $user = User::find($record->sent_by); 

        $this->selected_id = $id; 
		$this->sent_by = $record-> sent_by;
		$this->resolved_by = $record-> resolved_by;
		$this->comment = $record-> comment;
		$this->reply_comment = $record-> reply_comment;
		$this->email = $record-> email;
		$this->status = $record-> status;
        $this->is_banned = $user->isBanned();

    }

    public function update()
    {
        $this->validate([
		'comment' => 'required',
		'status' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Unban_admin::find($this->selected_id);
            $record->update([ 		
			'resolved_by' => auth()->id(),			
			'reply_comment' => $this-> reply_comment,	
			'status' => $this-> status
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Unban Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Unban_admin::where('id', $id)->delete();
        }
    }
}