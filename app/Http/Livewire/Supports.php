<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Support;

class Supports extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $type_support, $sent_by, $support_id, $message, $reply_message, $status, $priority;
    protected $listeners = ['confirm-delete-td' => 'destroy_model', 'delete-model' => 'destroy'];

    
    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.appsupports.view', [
    'supports' => Support::latest()
        ->where(function ($query) use ($keyWord) {
            $query->where('name', 'LIKE', $keyWord)
                ->orWhere('message', 'LIKE', $keyWord);
        })
        ->where('sent_by', auth()->id())
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
		$this->type_support = null;
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
		'name' => 'required',
		'type_support' => 'required',
		'message' => 'required',
        'priority' => 'required'
		
        ]);

        Support::create([ 
			'name' => $this-> name,
			'type_support' => $this-> type_support,
			'sent_by' => auth()->id(),			
			'message' => $this-> message,		
			'status' => 'pending',
			'priority' => $this-> priority
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Support Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Support::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->type_support = $record-> type_support;
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
		'name' => 'required',
		'sent_by' => 'required',
		'message' => 'required',
		'status' => 'required',
		'priority' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Support::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'type_support' => $this-> type_support,
			'sent_by' => $this-> sent_by,
			'support_id' => $this-> support_id,
			'message' => $this-> message,
			'reply_message' => $this-> reply_message,
			'status' => $this-> status,
			'priority' => $this-> priority
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Support Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Support::where('id', $id)->delete();
        }
    }
}