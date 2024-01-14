<?php
//live user cr26
namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class Cbhrs extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $codex, $link, $pay, $room, $pic, $data_bio;
    public $start_date, $end_date, $region, $model, $models = [], $username, $models2,$gender;
    public $limit = 90;
    public $page = 1;
    public $paginationData = []; 
    protected $queryString = ['region', 'start_date', 'model', 'page','limit', 'username','gender'];

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function mount(Request $request)
    {
        $currentDate = Carbon::now('America/Bogota')->format('Y-m-d');
        $this->start_date = $currentDate;
        $this->end_date =  $currentDate;
        $this->region  = 'northamerica';
        $this->models = [];
        $this->models2 = [];
        $this->gender = $request->query('gender', 'all');
        
    }
    public function changeGender($gender='all')
    {
        $this->gender = $gender;
        
        $genderMessages = [
            'm' => 'Filter Gender Male',
            'f' => 'Filter Gender Female',
            't' => 'Filter Gender Trans',
            'c' => 'Filter Gender Couple',
        ];

        $message = $genderMessages[$gender] ?? 'Invalid Gender';
        $this->dispatchBrowserEvent('notify', [
            'type' => 'info',
            'message' => $message,
        ]);


    }

    public function filterDataModel(){

        $this->dispatchBrowserEvent('notify', [
            'type' => 'warning',
            'message' => 'Filter Nick model Wait... ',
        ]);
    }
    
    
    public function filterData()
    {
        $this->dispatchBrowserEvent('notify', [
            'type' => 'warning',
            'message' => 'Filter Models Moments',
        ]);

        $this->page = 1; // Restablece a la primera página
        $this->setPage(1);
        $this->models = []; // Limpia los modelos existentes
        $this->loadModelData(); // Carga los datos con los nuevos filtros
    }
    
    public function loadModelData($username = null)
    {
        /*  
        $bogotaDate = Carbon::now('America/Bogota')->toDateString();
       $bogotaDateTime = Carbon::now('America/Bogota');    
        dd([
            'bogotaDate' => $bogotaDate,
            'bogotaDateTime' => $bogotaDateTime,
        ]);*/

        if($username === null){
        $response = Http::get('https://hoster.servercams.com/cbhrsday/api', [
            'date' => $this->start_date,
            'region' => $this->region,
            'limit' => $this->limit,
            'page' => $this->page
        ]);
    }else {
        $response = Http::get('https://hoster.servercams.com/cbhrsday/api', [
            'username' => $username,
            'page' => $this->page,
        ]);
    }


        //dd( $response->json());
    
        if ($response->successful()) {
            $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => 'Load Models Moments',
            ]);
            $newData = $response->json()['data'] ?? [];
            $responseData = $response->json();
            $this->paginationData = $responseData; 
         //   dd($this->paginationData);
            $this->models = array_merge($this->models, $newData);
            $this->emit('messageProcessed');
            
        } else {
            // Manejo de errores
            $this->dispatchBrowserEvent('notify', [
                'type' => 'failure',
                'message' => 'Error Load Models Moments',
            ]);
        }
    }
    public function pageChanged($url)
    {
        $parsedUrl = parse_url($url);
        parse_str($parsedUrl['query'], $queryParams);
        $this->setPage($queryParams['page']);
        $this->loadModelData();
    }
    
    public function render()
    {
        if($this->limit > 90) $this->limit = 90;

        return view('livewire.admin.cbprofiles.cbrenderhr', [
            'models' => $this->models,
            'pagination' => $this->paginationData
        ]);
    }
}
