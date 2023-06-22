<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Support_admin;

class Supports_admin extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $type_support, $name, $sent_by, $support_id, $message, $reply_message, $status, $priority;
   
    protected $listeners = ['confirm-delete-td' => 'destroy_model', 'delete-model' => 'destroy'];

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    { 
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.admin.dashboard.supports_admin.view', [
            'supports' => Support_admin::latest()
						->orWhere('type_support', 'LIKE', $keyWord)
						->orWhere('name', 'LIKE', $keyWord)				
						->orWhere('message', 'LIKE', $keyWord)
						->orWhere('reply_message', 'LIKE', $keyWord)
						->orWhere('status', 'LIKE', $keyWord)
						->orWhere('priority', 'LIKE', $keyWord)->paginate(10)
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->type_support = null;
		$this->name = null;
		$this->sent_by = null;
		$this->support_id = null;
		$this->message = null;
		$this->reply_message = null;
		$this->status = null;
		$this->priority = null;
    }

    public function store()
    {
        $this->validate([
		'type_support' => 'required',
		'name' => 'required',	
		'message' => 'required',
		'priority' => 'required',
        ]);

        Support_admin::create([ 
			'type_support' => $this-> type_support,
			'name' => $this-> name,
			'sent_by' => auth()->id(),			
			'message' => $this-> message,			
			'status' => 'pending',
			'priority' => $this-> priority
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Support_admin Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Support_admin::findOrFail($id);
        $this->selected_id = $id; 
		$this->type_support = $record-> type_support;
		$this->name = $record-> name;
		$this->sent_by = $record-> sent_by;
		$this->support_id = $record-> support_id;
		$this->message = $record-> message;
		$this->reply_message = $record-> reply_message;
		$this->status = $record-> status;
		$this->priority = $record-> priority;
    }

    public function update()
    {
        $this->validate([
		'reply_message' => 'required',
		'status' => 'required',
		'priority' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Support_admin::find($this->selected_id);
            $record->update([ 
			'support_id' => auth()->id(),			
			'reply_message' => $this-> reply_message,
			'status' => $this-> status,
			'priority' => $this-> priority
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Support_admin Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Support_admin::where('id', $id)->delete();
        }
    }
}