<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Thema;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use PhpParser\Node\Stmt\TryCatch;

class Themas extends Component
{
    protected $listeners = ['confirm1' => 'confirm1_model', 'confirm-delete-model' => 'destroy', 'salvar' => 'salvarx', 'sluger' => 'sluger'];

    use WithPagination;
	protected $queryString = ['themecreate', 'selected_id','currentLanguage','page' => ['except' => 1]];
	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $pic, $slug, $slug_es, $htmlen, $htmles, $css, $js, $active, $type;
    public $error_slug, $editorjs, $themecreate, $editar,$currentLanguage = 'en', $tema;
    public $isOffcanvasVisible = false;

    public function mount(Request $request)
    {
        $this->themecreate = $request->input('themecreate', 'wait');
        $this->selected_id = $request->input('selected_id', null);
        $this->currentLanguage =  $request->input('currentLanguage', 'en');
        $this->page =  $request->input('page', 1);;
        if ($this->selected_id > 0) {
            $this->emit('showEditor');
            $this->themecreate = 'ok';
            try {
                $this->tema = Thema::findOrFail($this->selected_id);            
            } catch (ModelNotFoundException $e) {
                abort(404, 'Tema no encontrado '.$e);
            }
        }

    }

    public function sluger($data)//recibe del front para cambiar y el slug de idioma
    {
        try {
            $slug = Str::slug($data['slug']);
            $columnName = $data['column'];
    
            if ($slug) {
                Thema::where('id', $this->selected_id)->update([$columnName => $slug]);
                $this->tema = Thema::findOrFail($this->selected_id);
            } else {
                $this->showNotification('failure', 'Error Slug');
            }
        } catch (\Exception $e) {
            $this->showNotification('failure', 'An error occurred: ' . $e->getMessage());
        }
    }
    
    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }
    
    public function toggleOffcanvasVisible()
    {
        $this->isOffcanvasVisible = ! $this->isOffcanvasVisible;
    }

    public function toggleLanguage($lengua = 'en')
    {
        $languageSlugs = [
            'en' => 'slug_en',
            'es' => 'slug_es',
            'fr' => 'slug_fr',
            'de' => 'slug_de',
        ];
       
        if (array_key_exists($lengua, $languageSlugs)) {
            $slugColumnName = $languageSlugs[$lengua];            
            if (is_null($this->tema->$slugColumnName)) {                
                $this->emit('msgjs', [
                    'slug' => $slugColumnName,
                    'title' => 'Create Slug',
                    'msg' => 'Currently there is no slug for ' . $lengua . ', do you want to create one?',
                    'input' => 'Name Slug ' . $lengua,
                ]);                
                $this->currentLanguage = $lengua;
            } else {
               $this->showNotification('success', 'Editor Success Full :: '. $lengua);
               $this->currentLanguage = $lengua;
            }
        } else {
               $this->showNotification('failure', 'Language not supported');
        }
    }
    
    public function render()
    {

        $this->slug = Str::slug($this->name);       
        $this->tema = Thema::findOrFail($this->selected_id);

        if(Thema::where('slug_en', $this->slug)->exists()) {
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


    public function showNotification($type, $message)
    {
        $this->dispatchBrowserEvent('notify', ['type' => $type,'position' => 'center-center', 'message' => $message]);
    }

    public function salvarx(){        
        $this->showNotification('success', 'SAval x');
    }

    public function newtheme(){
        $this->themecreate = 'new';
        $this->selected_id = null;      
      //  $this->emit('showEditor');
    }
    public function updatedSelectedId()
    {
        if ($this->selected_id > 0) {
            $this->emit('showEditor');
            $this->themecreate = 'ok';
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
        'slug' => 'required|unique:themas,slug_en'	
        ]);

        $newThema = Thema::create([
            'name' => $this->name,
            'pic' => $this->pic,
            'slug_en' => Str::slug($this->name),
            'slug_es' => null,
            'htmlen' => "",
            'htmles' => null,
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
        $this->showNotification('success', '¡ Thema Successfully created!');       
    }

    public function edit($id)
    {
        $record = Thema::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->pic = $record-> pic;
		$this->slug = $record-> slug_en;
        $this->slug_es = $record-> slug_es;
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
            $this->showNotification('success', '¡ Thema Successfully updated.!');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Thema::where('id', $id)->delete();
        }
    }
}