<?php
//live user cr26
namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Adminsetting;


class Adminsettings extends Component
{
    protected $listeners = ['confirm1' => 'confirm1_model', 'confirm-delete-model' => 'destroy'];

    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $pic, $preferred_language, $country, $phone_number, $bots, $pagemaster_id, $role_id,$yoursex;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		     $adminsetting = Adminsetting::with('user')
            ->latest()
            ->where('user_id', auth()->id())
            ->first();    

        if ($adminsetting) {
                if($this->pagemaster_id ||  $this->role_id ){
                   
                }else $this->edit($adminsetting->id);
            }
        
        return view('livewire.admin.adminsettings.view', [
            'adminsettings' => $adminsetting,
        ]);
        
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->pic = null;
		$this->preferred_language = null;
		$this->country = null;
		$this->phone_number = null;
		$this->bots = null;
		$this->pagemaster_id = null;
		$this->role_id = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'country' => 'required',
		'phone_number' => 'required',
        'pagemaster_id' => 'required',
        'yoursex' => 'required',
        'role_id' => 'required',
        ]);

        Adminsetting::create([ 
			'name' => $this-> name,
			'pic' => $this-> pic,
			'preferred_language' => $this-> preferred_language,
			'country' => $this-> country,
			'phone_number' => $this-> phone_number,
			'bots' => $this-> bots,
			'pagemaster_id' => $this-> pagemaster_id,
			'role_id' => $this-> role_id,
            'yoursex'=> $this-> yoursex,
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Adminsetting Successfully created!',
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
       $record = Adminsetting::findOrFail($this->selected_id);
        
       if ($record->userCanModify()) {
                 
		$this->name = $record-> name;
		$this->pic = $record-> pic;
		$this->preferred_language = $record-> preferred_language;
		$this->country = $record-> country;
		$this->phone_number = $record-> phone_number;
		$this->bots = $record-> bots;
		$this->pagemaster_id = $record-> pagemaster_id;
		$this->role_id = $record-> role_id;
        $this->yoursex = $record-> yoursex;
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
		'country' => 'required',
		'phone_number' => 'required',
        ]);            

        $record = Adminsetting::findOrFail($this->selected_id);
        
        if ($record->userCanModify()) {

                if ($this->selected_id) {
                    $record = Adminsetting::find($this->selected_id);
                    $record->update([ 
			'name' => $this-> name,
			'pic' => $this-> pic,
			'preferred_language' => $this-> preferred_language,
			'country' => $this-> country,
			'phone_number' => $this-> phone_number,
			'bots' => $this-> bots,
			'pagemaster_id' => $this-> pagemaster_id,
			'role_id' => $this-> role_id
                    ]);

                    $this->resetInput();
                    $this->dispatchBrowserEvent('closeModal');
            
                    $this->dispatchBrowserEvent('notify', [
                        'type' => 'success',
                        'message' => '¡ Adminsetting Successfully updated.!',
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
            Adminsetting::where('id', $id)->delete();
        }
    }
}