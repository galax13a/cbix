<?php
//live user cr26
namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Biochaturbate;
use App\Models\Biocategorcompone;
use App\Models\Biocompone;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Biochaturbates extends Component
{
    protected $listeners = ['confirm1' => 'confirm1_model', 'confirm-delete-model' => 'destroy', 'savebio'];
    protected $queryString = ['mybio','selected_id', 'cards','page' => ['except' => 1]];
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $room, $api, $codex, $bio, $data, $code, $codebackup, $share, $link, $campaign, $pay, $active, $pic;
    public $editorbio, $currentLanguage, $profile, $numBios, $record,$mybio, $biocompones, $cards, $widget_id;
    
    protected  $card_list, $card_categors; 

    public function setWidgh($id){
        $this->widget_id = $id;
    }

    public function mount(Request $request)
    {
        $this->selected_id = $request->input('selected_id', null);
        $this->cards = $request->input('cards', 1);
        $this->currentLanguage = $request->input('currentLanguage', 'en');
        $this->page = $request->input('page', 1);
        $this->card_list = collect(); 

        if (auth()->user()) {
            if ($this->selected_id > 0) {
               
                       
                try {
                    $this->record = Biochaturbate::findOrFail($this->selected_id);
                    //dd(($this->record));
                } catch (ModelNotFoundException $e) {
                    $this->mybio = 'new';
                    $this->selected_id = null;                 
                    //abort(404, 'Bio no fount id ' . $e);
                }
            }
     
        } else {
            $this->dispatchBrowserEvent('notify', [
                'type' => 'failure',
                'message' => '¡user fail login.!',
            ]);
        }
    
    }

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function setCategors($categoryId = 1){
        $this->cards = $categoryId;

    }
    public function getCategors()
    {
            $this->card_categors = Biocategorcompone::where('active', true)->get();
    }

    public function getCards()
    {
      
            $this->card_list = Biocompone::where('active', true)
            ->where('biocategorcompone_id', $this->cards)
            ->paginate(15);
    }
    
    public function render()
    {
        $keyWord = '%' . $this->keyWord . '%';
        
        $this->getCards();
        $this->getCategors();

       // dd($this->card_categors );

        return view('livewire.createbios.chaturbates.view', [
            'biochaturbates' => Biochaturbate::with('user')->latest()
                ->where('user_id', auth()->id())
                ->where(function ($query) use ($keyWord) {
                    $query->where('name', 'LIKE', $keyWord);
                })->paginate(10)
        ]);
      
    }

    public function newtheme()
    {
        $this->mybio = 'new';
        $this->selected_id = null;
        $this->emit('newprofile');
    }

    public function savebio($outputData)
    {
        $this->editorbio = $outputData;    
     
        if (auth()->check()) {

            if(!$this->selected_id){
                $this->emit('newprofile');
                return;
            }

            $this->record = Biochaturbate::findOrFail($this->selected_id);
            if ($this->record->userCanModify()) {
                
                $editorData = json_decode($this->editorbio, true);
                // Check if the "blocks" key is empty
                if (empty($editorData['blocks'])) {
                    $this->showNotification('failure', 'No file was saved due to the absence of blocks in the content');
                    return;
                }

                $this->record->code = $outputData;
                $this->record->save();
                $this->emit('show-confetti');

            } else {               
                  $this->showNotification('failure', '¡Unauthorized error -> row, Registry not recovered!');
                  return;
            }
            
            $this->numBios = $this->CheckNumBio();

            if ($this->numBios > 3) {            
                $this->showNotification('failure', '¡You have reached your Bios Limit, go pro to manage multi profile!');  
                return;
            }else{
                $this->newtheme();
                $this->emit('newpro');
                return;
            }
       
        } else {            
            return redirect()->route('login');
        }
        
    }

    public function CheckNumBio() {
        return Biochaturbate::where('user_id', auth()->id())->count();
    }

    private function checkBioLimit()
    {
        $numBios = Biochaturbate::where('user_id', auth()->id())->count();

        if ($numBios > 3) {
            $this->dispatchBrowserEvent('notify', [
                'type' => 'failure',
                'message' => 'You have reached your Bios Limit, go pro to manage multi profile',
            ]);

            return true;
        }

        return false;
    }


   

    public function cancel()
    {
        $this->resetInput();
    }

    private function resetInput()
    {
        $this->name = null;
        $this->room = null;
        $this->api = null;
        $this->codex = null;
        $this->bio = null;
        $this->data = null;
        $this->code = null;
        $this->codebackup = null;
        $this->share = null;
        $this->link = null;
        $this->campaign = null;
        $this->pay = null;
        $this->active = null;
        $this->pic = null;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'room' => 'required',
            'pay' => 'required',
            'active' => 'required',
        ]);

         Biochaturbate::create([
            'name' => $this->name,
            'room' => $this->room,
            'api' => $this->api,
            'codex' => $this->codex,
            'bio' => $this->bio,
            'data' => $this->data,
            'code' => $this->code,
            'codebackup' => $this->codebackup,
            'share' => $this->share,
            'link' => $this->link,
            'campaign' => $this->campaign,
            'pay' => $this->pay,
            'active' => $this->active,
            'pic' => $this->pic
        ]);

        $this->resetInput();
        $this->dispatchBrowserEvent('closeModal');
        $this->dispatchBrowserEvent('notify', [
            'type' => 'success',
            'message' => '¡ Biochaturbate Successfully created!',
        ]);
    }

    public function edit($id = null) //editar si es seguro y pertenece el registro a usuario
    {

        $this->selected_id = $id;
        if (!$this->selected_id) {
            $this->dispatchBrowserEvent('notify', [
                'type' => 'failure',
                'message' => '¡Unauthorized Record Null !',
            ]);
            abort(500, 'server abort ');
        }
        $record = Biochaturbate::findOrFail($this->selected_id);

        if ($record->userCanModify()) {

            $this->name = $record->name;
            $this->room = $record->room;
            $this->api = $record->api;
            $this->codex = $record->codex;
            $this->bio = $record->bio;
            $this->data = $record->data;
            $this->code = $record->code;
            $this->codebackup = $record->codebackup;
            $this->share = $record->share;
            $this->link = $record->link;
            $this->campaign = $record->campaign;
            $this->pay = $record->pay;
            $this->active = $record->active;
            $this->pic = $record->pic;
        } else {
            $this->dispatchBrowserEvent('notify', [
                'type' => 'failure',
                'message' => '¡ Unauthorized error, Registry not recovered.!',
            ]);
        }
    }

    public function update() // actulalizar 
    {
        if (!$this->selected_id) {
            $this->dispatchBrowserEvent('notify', [
                'type' => 'failure',
                'message' => '¡Unauthorized Record Null !',
            ]);
            return false;
        }

        $this->validate([
            'name' => 'required',
            'room' => 'required',
            'pay' => 'required',
            'active' => 'required',
        ]);

        $record = Biochaturbate::findOrFail($this->selected_id);

        if ($record->userCanModify()) {

            if ($this->selected_id) {
                $record = Biochaturbate::find($this->selected_id);
                $record->update([
                    'name' => $this->name,
                    'room' => $this->room,
                    'api' => $this->api,
                    'codex' => $this->codex,
                    'bio' => $this->bio,
                    'data' => $this->data,
                    'code' => $this->code,
                    'codebackup' => $this->codebackup,
                    'share' => $this->share,
                    'link' => $this->link,
                    'campaign' => $this->campaign,
                    'pay' => $this->pay,
                    'active' => $this->active,
                    'pic' => $this->pic
                ]);

                $this->resetInput();
                $this->dispatchBrowserEvent('closeModal');

                $this->dispatchBrowserEvent('notify', [
                    'type' => 'success',
                    'message' => '¡ Biochaturbate Successfully updated.!',
                ]);
            }
        } else {
            // $this->resetForm();
            $this->dispatchBrowserEvent('notify', [
                'type' => 'failure',
                'message' => '¡ Unauthorized error, Registry not recovered.!',
            ]);
        }
    }
    public function showNotification($type, $message)
    {
        $this->dispatchBrowserEvent('notify', ['type' => $type, 'position' => 'center-center', 'message' => $message]);
    }

    public function destroy($id)
    {
        if ($id) {
            Biochaturbate::where('id', $id)->delete();
        }
    }
}
