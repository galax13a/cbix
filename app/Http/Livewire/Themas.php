<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Thema;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Themas extends Component
{
    protected $listeners = ['confirm1' => 'confirm1_model', 'confirm-delete-model' => 'destroy', 'salvar' => 'salvarx'];

    use WithPagination;
	protected $queryString = ['themecreate', 'selected_id','currentLanguage','page' => ['except' => 1]];
	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $pic, $slug, $htmlen, $htmles, $css, $js, $active, $type;
    public $error_slug, $editorjs, $themecreate, $editar,$currentLanguage = 'en', $tema;
    public $isOffcanvasVisible = false;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }
    
    public function toggleOffcanvasVisible()
    {
        $this->isOffcanvasVisible = ! $this->isOffcanvasVisible;
    }
    
    public function render()
    {
        $this->slug = Str::slug($this->name);       
    
        if(Thema::where('slug', $this->slug)->exists()) {
            $this->error_slug = "The slug already exists.";
        } else {
            $this->error_slug = "";
        }            
        // if ($this->selected_id > 0) $this->emit('showEditor');            
        return view('livewire.themas.view', [
            'themas' => Thema::latest()
                        ->paginate(5)  
        ]);
    }

    public function mount(Request $request)
    {
        $this->themecreate = $request->input('themecreate', 'wait');
        $this->selected_id = $request->input('selected_id', null);
        $this->currentLanguage =  $request->input('currentLanguage', 'en');
        $this->page =  $request->input('page', 1);;
        if ($this->selected_id > 0) {
            $this->emit('showEditor');
            $this->themecreate = 'ok';
            $this->tema = Thema::findOrFail($this->selected_id);
        }
        if ($this->currentLanguage === 'es') {
        
        } elseif ($this->currentLanguage === 'en') {
       
        }
    }

    public function showNotification($type, $message)
    {
        $this->dispatchBrowserEvent('notify', [
            'type' => $type,
            'position' => 'center-center',
            'message' => $message,
        ]);
    }

    public function salvarx(){
        
        $this->dispatchBrowserEvent('notify', [
            'type' => 'success',
            'position' => 'center-center',
            'message' => '¡ready Salvar',
        ]);
    }

    public function newtheme(){
        $this->themecreate = 'new';
        $this->selected_id = null;
       /*
        $this->dispatchBrowserEvent('notify', [
            'type' => 'success',
            'position' => 'center-center',
            'message' => 'New thema',
        ]);
        */

      //  $this->emit('showEditor');

    }
    public function updatedSelectedId()
    {
        if ($this->selected_id > 0) {
            $this->emit('showEditor');
            $this->themecreate = 'ok';
        }
    }
    public function toggleLanguage()
    {
        if ($this->currentLanguage === 'en') {
            $this->currentLanguage = 'es';
            $this->showNotification('success', 'New theme Spanish');
        } else {
            $this->currentLanguage = 'en';
            $this->showNotification('success', 'New theme English');
        }
    }

    	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->pic = null;
		$this->slug = null;
		$this->htmlen = null;
		$this->htmles = null;
		$this->css = null;
		$this->js = null;
		$this->active = null;
		$this->type = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
        'slug' => 'required|unique:themas,slug'	
        ]);

        $newThema = Thema::create([
            'name' => $this->name,
            'pic' => $this->pic,
            'slug' => Str::slug($this->name),
            'htmlen' => "",
            'htmles' => "",
            'css' => $this->css,
            'js' => $this->js,
            'active' => false,
            'type' => $this->type
        ]);

        $this->resetInput();
        $this->selected_id = $newThema->id;           
        $this->themecreate = 'ok';     
		//$this->dispatchBrowserEvent('closeModal');		
        $this->emit('showEditor');
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Thema Successfully created!',
            ]);
       
    }

    public function edit($id)
    {
        $record = Thema::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->pic = $record-> pic;
		$this->slug = $record-> slug;
		$this->htmlen = $record-> htmlen;
		$this->htmles = $record-> htmles;
		$this->css = $record-> css;
		$this->js = $record-> js;
		$this->active = $record-> active;
		$this->type = $record-> type;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'slug' => 'required',
		'htmlen' => 'required',
		'active' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Thema::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'pic' => $this-> pic,		
			'htmlen' => $this-> htmlen,
			'htmles' => $this-> htmles,
			'css' => $this-> css,
			'js' => $this-> js,
			'active' => $this-> active,
			'type' => $this-> type
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Thema Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Thema::where('id', $id)->delete();
        }
    }
}