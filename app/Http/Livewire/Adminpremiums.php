<?php
//live user cr26
namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Adminpremium;


class Adminpremiums extends Component
{
    protected $listeners = ['confirm1' => 'confirm1_model', 'confirm-delete-model' => 'destroy'];

    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $content, $plan, $subcription, $time, $bots, $linkpay, $active;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.admin.adminpremiums.view', [
            'adminpremia' => Adminpremium::with('user')->latest()

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
		$this->content = null;
		$this->plan = null;
		$this->subcription = null;
		$this->time = null;
		$this->bots = null;
		$this->linkpay = null;
		$this->active = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'content' => 'required',
		'plan' => 'required',
		'subcription' => 'required',
		'bots' => 'required',
		'active' => 'required',
        ]);

        Adminpremium::create([ 
			'name' => $this-> name,
			'content' => $this-> content,
			'plan' => $this-> plan,
			'subcription' => $this-> subcription,
			'time' => $this-> time,
			'bots' => $this-> bots,
			'linkpay' => $this-> linkpay,
			'active' => $this-> active
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Adminpremium Successfully created!',
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
       $record = Adminpremium::findOrFail($this->selected_id);
        
       if ($record->userCanModify()) {
                 
		$this->name = $record-> name;
		$this->content = $record-> content;
		$this->plan = $record-> plan;
		$this->subcription = $record-> subcription;
		$this->time = $record-> time;
		$this->bots = $record-> bots;
		$this->linkpay = $record-> linkpay;
		$this->active = $record-> active;
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
		'content' => 'required',
		'plan' => 'required',
		'subcription' => 'required',
		'bots' => 'required',
		'active' => 'required',
        ]);            

        $record = Adminpremium::findOrFail($this->selected_id);
        
        if ($record->userCanModify()) {

                if ($this->selected_id) {
                    $record = Adminpremium::find($this->selected_id);
                    $record->update([ 
			'name' => $this-> name,
			'content' => $this-> content,
			'plan' => $this-> plan,
			'subcription' => $this-> subcription,
			'time' => $this-> time,
			'bots' => $this-> bots,
			'linkpay' => $this-> linkpay,
			'active' => $this-> active
                    ]);

                    $this->resetInput();
                    $this->dispatchBrowserEvent('closeModal');
            
                    $this->dispatchBrowserEvent('notify', [
                        'type' => 'success',
                        'message' => '¡ Adminpremium Successfully updated.!',
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
            Adminpremium::where('id', $id)->delete();
        }
    }
}