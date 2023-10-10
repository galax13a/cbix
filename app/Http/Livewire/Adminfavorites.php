<?php
//live user cr26
namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Adminfavorite;


class Adminfavorites extends Component
{
    protected $listeners = ['confirm1' => 'confirm1_model', 'confirm-delete-model' => 'destroy'];

    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $url, $pic, $active;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }
    public function mount(){
        $this->active = true;
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        if($this->active === null)   $this->active = true; 

        return view('livewire.admin.favorites.view', [
            'adminfavorites' => Adminfavorite::with('user')->latest()
                ->where('user_id', auth()->id())
                ->where(function ($query) use ($keyWord) {     
                    $query->where('name', 'LIKE', $keyWord)        
                    ->orWhere('url', 'LIKE', $keyWord); 
                })->paginate(50)
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->url = null;
		$this->pic = null;
		$this->active = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'url' => 'required|url',
		'active' => 'required',
        ]);

        Adminfavorite::create([ 
			'name' => $this-> name,
			'url' => $this-> url,
			'pic' => $this-> pic,
			'active' => $this-> active
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Adminfavorite Successfully created!',
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
       $record = Adminfavorite::findOrFail($this->selected_id);
        
       if ($record->userCanModify()) {
                 
		$this->name = $record-> name;
		$this->url = $record-> url;
		$this->pic = $record-> pic;
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
		'url' => 'required|url',
		'active' => 'required',
        ]);            

        $record = Adminfavorite::findOrFail($this->selected_id);
        
        if ($record->userCanModify()) {

                if ($this->selected_id) {
                    $record = Adminfavorite::find($this->selected_id);
                    $record->update([ 
                    'name' => $this-> name,
                    'url' => $this-> url,
                    'pic' => $this-> pic,
                    'active' => $this-> active
                    ]);

                    $this->resetInput();
                    $this->dispatchBrowserEvent('closeModal');
            
                    $this->dispatchBrowserEvent('notify', [
                        'type' => 'success',
                        'message' => '¡ Favorite Successfully updated.!',
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
            Adminfavorite::where('id', $id)->delete();
        }
    }
}