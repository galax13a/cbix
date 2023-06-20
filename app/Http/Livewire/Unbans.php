<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Unban;

class Unbans extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $sent_by, $resolved_by, $comment, $reply_comment, $email, $status;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.unbans.view', [
            'unbans' => Unban::with('user')->latest()
                ->where('sent_by', auth()->id())
                ->where('comment', 'LIKE', $keyWord)->paginate(10)
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
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
        $this->validate([
		'comment' => 'required'		
        ]);

        Unban::create([ 
			'sent_by' => auth()->id(),			
			'comment' => $this-> comment,			
			'email' => $this-> email
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ a message has been sent to support, to unban !',
            ]);
    }

    public function edit($id)
    {
        $record = Unban::findOrFail($id);
        $this->selected_id = $id; 
		$this->sent_by = $record-> sent_by;
		$this->resolved_by = $record-> resolved_by;
		$this->comment = $record-> comment;
		$this->reply_comment = $record-> reply_comment;
		$this->email = $record-> email;
		$this->status = $record-> status;
    }

    public function update()
    {
        $this->validate([
		'comment' => 'required'	
        ]);

        if ($this->selected_id) {
			$record = Unban::find($this->selected_id);
            $record->update([ 
			'comment' => $this-> comment,			
			'email' => $this-> email			
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
            Unban::where('id', $id)->delete();
        }
    }
}