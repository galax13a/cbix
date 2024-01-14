<?php
//live user cr26
namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Biouser;
use Illuminate\Validation\ValidationException; // <-- Añade esta línea
use GuzzleHttp\Client;
use App\Models\Adminpremium;

class Biousers extends Component
{
    protected $listeners = ['confirm1' => 'confirm1_model', 'confirm-delete-model' => 'destroy'];

    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $codex, $link, $pay, $room, $pic, $data_bio, $photo, $morebio, $iframevideo, $campaign, $planEspecial, $planes,$plan_id,$selectedPlanId,$licenseContent,$nameLicence=null,$hasReadLicense = false;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }
    
public function getplanes(){
    $this->planes = Adminpremium::where('active', 1)->get();
    $this->planEspecial = $this->planes->where('id', 7)->first();
    
    $this->planes = $this->planes->where('id', '<>', 7);
}

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        $bioCount = Biouser::where('user_id', auth()->id())->count();
        $this->morebio = $bioCount;


        return view('livewire.admin.cbprofiles.view', [
            'biousers' => Biouser::with('user')->latest()
                ->where('user_id', auth()->id())
                ->where('name', 'LIKE', $keyWord)
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
		$this->codex = null;
		$this->link = null;
		$this->pay = null;
        $this->room = null;
        $this->photo = null;
        $this->campaign  = null;
    }


    public function fetchData($username)
{
    $client = new Client();

    // La URL de tu API
    $url = "https://chaturbate.com/api/public/affiliates/onlinerooms/?wm=gQ4iQ&client_ip=request_ip&limit=500";

    try {
        $response = $client->get($url);
        $data = json_decode($response->getBody(), true);

        // Buscar por el nombre de usuario en los resultados
        foreach ($data['results'] as $result) {
            if ($result['username'] === $username) {
                return $result;  // Devuelve el conjunto de datos del usuario si se encuentra
            }
        }

        // Si llegamos aquí, significa que no se encontró el nombre de usuario
        $this->dispatchBrowserEvent('notify', [
            'type' => 'failure',
            'message' => '¡ Bio *no model found! ',
        ]);
        return false;

    } catch (\Exception $e) {
        // Puedes manejar errores aquí, si es necesario.
        // Por ejemplo, devolver un error o registrar el error.
        $this->dispatchBrowserEvent('notify', [
            'type' => 'failure',
            'message' => '¡There was an error checking Chaturbate!',
        ]);
        return false;
    }
}

public function videoiframe($link){
    $this->iframevideo = $link;
    $this->dispatchBrowserEvent('notify', [
        'type' => 'success',
        'message' => '¡Loanding Video' . $this->name,
    ]);
}

public function updatedRoom()
{
    $host = parse_url($this->room, PHP_URL_HOST);
    
    if (!in_array($host, ['www.chaturbate.com', 'chaturbate.com'])) {
        // Lanzar una excepción de validación
        throw ValidationException::withMessages([
            'room' => ['Only  www.chaturbate.com.']
        ]);
    }

    $segments = explode('/', $this->room);
    
    // Asegurarse de que hay al menos 4 segmentos antes de intentar acceder al índice 3
    if (isset($segments[3])) {
        $name = $segments[3];
        //$this->dispatchBrowserEvent('show-confetti');       
        $this->photo = "https://roomimg.stream.highwebmedia.com/riw/{$name}.jpg";       
        $this->name = $name;

    }
}


    public function store()
    {
        $gender = $age = $location = $current_show = $username = $is_new = $num_users = $num_followers = $spoken_languages = $display_name = $birthday = $room_subject = $tags = $is_hd = $slug = $has_password = null;

        $this->validate([
		'name' => 'required',
        'room' => 'required|url',
        ]);

        $segments = explode('/', $this->room);
        $name = $segments[3]; 
        $name_url = "https://roomimg.stream.highwebmedia.com/riw/{$name}.jpg";

        $data = $this->fetchData($name);
        if ($data) {
            $gender = $data['gender'];
            $location = $data['location'];
            $current_show = $data['current_show'];
            $username = $data['username'];
            $is_new = $data['is_new'];
            $num_users = $data['num_users'];
            $num_followers = $data['num_followers'];
            $spoken_languages = $data['spoken_languages'];
            $display_name = $data['display_name'];
            $birthday = $data['birthday'];
            $room_subject = $data['room_subject'];
            $tags = $data['tags']; // Esto será un array
            $is_hd = $data['is_hd'];
            $slug = $data['slug'];
            $has_password = $data['has_password'];
            $age = $data['age'];

            $this->data_bio = $data;
       
        
        } else {
            // No hacer nada aquí ya que la notificación ya fue enviada desde fetchData
        }

        $host = parse_url($this->room, PHP_URL_HOST);    
        if (!in_array($host, ['www.chaturbate.com', 'chaturbate.com'])) {
            $this->dispatchBrowserEvent('notify', [
                'type' => 'failure',
                'message' => '¡ Bio *URL Only Chaturbate',
            ]);
            return false;
        }

        //...
        $dataToStore = [
            'gender' => $gender,
            'location' => $location,
            'current_show' => $current_show,
            'username' => $username,
            'is_new' => $is_new,
            'num_users' => $num_users,
            'num_followers' => $num_followers,
            'spoken_languages' => $spoken_languages,
            'display_name' => $display_name,
            'birthday' => $birthday,
            'room_subject' => $room_subject,
            'tags' => $tags,
            'is_hd' => $is_hd,
            'slug' => $slug,
            'has_password' => $has_password,
            'age' => $age,
        ];

        $dataJson = json_encode($dataToStore);
        //dd($dataJson);

        Biouser::create([ 
			'name' => $this-> name,
			'codex' => 'none',
			'link' => env('CB_ROOM'). $name,
            'active' => 0,
            'room' => $this->room,
            'pic' => $name_url,
			'pay' => 0,
            'data' => $dataJson,
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Bio  Successfully created!',
            ]);

        $this->emit('show-confetti');     
       // $this->emit('show-frame');     
        
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

       $record = Biouser::findOrFail($this->selected_id);
        
       if ($record->userCanModify()) {
                 
		$this->name = $record-> name;
		$this->codex = $record-> codex;
		$this->link = $record-> link;
		$this->pay = $record-> pay;
        $this->room = $record-> room;
        $this->pic = $record-> pic;
        $this->campaign = $record-> campaign;


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
		'codex' => 'required',
		'link' => 'required',        
		'pay' => 'required',
        ]);            

        $host = parse_url($this->room, PHP_URL_HOST);    
        if (!in_array($host, ['www.chaturbate.com', 'chaturbate.com'])) {
            $this->dispatchBrowserEvent('notify', [
                'type' => 'failure',
                'message' => '¡ Bio ,URL *Only Chaturbate',
            ]);
            return false;
        }

        $record = Biouser::findOrFail($this->selected_id);
        
        if ($record->userCanModify()) {

                if ($this->selected_id) {
                    $record = Biouser::find($this->selected_id);
                    $record->update([ 
                    'name' => $this-> name,
                    'codex' => $this-> codex,
                    'link' => $this-> link,
                    'room' => $this-> room,
                    'pay' => $this-> pay
                    ]);

                    $this->resetInput();
                    $this->dispatchBrowserEvent('closeModal');
            
                    $this->dispatchBrowserEvent('notify', [
                        'type' => 'success',
                        'message' => '¡ Bio Successfully updated.!',
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
        $record = Biouser::findOrFail($id);
        
    if ($record->userCanModify()) {
        if ($id) {
            Biouser::where('id', $id)->delete();
        }
    }    else {
        // $this->resetForm();
         $this->dispatchBrowserEvent('notify', [
             'type' => 'failure',
             'message' => '¡ Unauthorized error, Delete not recovered.!',
         ]);
     }  

    }
}