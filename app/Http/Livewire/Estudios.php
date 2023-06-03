<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Estudio;
use Illuminate\Support\Facades\DB;
use App\Models\Modelo;
use App\Models\EstudioModelo;

class Estudios extends Component
{
    use WithPagination;

    protected $listeners = ['confirm-delete-td' => 'destroy_model', 'confirm-delete-model' => 'destroy'];

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $city, $dir;
    public $estudio_id, $modelo_id, $estudio_id_change;
    public $model_name, $porce, $typemodelo_id, $nick; // modelo

    public $selected_id_modelo, $name_modelo, $nick2, $email, $dni, $wsp, $img, $active; //extramodelo


    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function mount()
    {
        $this->estudio_id = "";
        $this->porce = 100;
        $this->typemodelo_id = 1;
        $this->estudio_id_change = 0;

        $this->name_modelo = null;
		$this->nick = null;
		$this->nick2 = null;
		$this->email = null;
		$this->dni = null;
		$this->wsp = null;
		$this->porce = null;
		$this->typemodelo_id = null;
		$this->img = null;
    }

    public function openPopup()
    {
        $this->resetForm();
        $this->dispatchBrowserEvent('openPopup');
    }
    private function resetForm()
    {
        $this->selected_id_modelo = null;
        $this->name_modelo = '';       
        $this->nick = '';       
        $this->name = null;
		$this->nick = null;
		$this->nick2 = null;
		$this->email = null;
		$this->dni = null;
		$this->wsp = null;
		$this->porce = null;
		$this->typemodelo_id = '';
		$this->img = null;
		$this->active = null;
    }
    
    public function edit_modelo($id) // edit modleo select id modelos 
    {
        $record = Modelo::findOrFail($id);
        $this->selected_id_modelo = $id; 
		$this->name_modelo = $record-> name;
		$this->nick = $record-> nick;
		$this->nick2 = $record-> nick2;
		$this->email = $record-> email;
		$this->dni = $record-> dni;
		$this->wsp = $record-> wsp;
		$this->porce = $record-> porce;
		$this->typemodelo_id = $record-> typemodelo_id;
		$this->img = $record-> img;
		$this->active = $record-> active;
    }

    public function update_modelos()
    {
        $this->validate([
		'name_modelo' => 'required',
		'porce' => 'required',
		'typemodelo_id' => 'required',
		'active' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Modelo::find($this->selected_id_modelo);
            $record->update([ 
			'name' => $this-> name_modelo,
			'nick' => $this-> nick,
			'nick2' => $this-> nick2,
			'email' => $this-> email,
			'dni' => $this-> dni,
			'wsp' => $this-> wsp,
			'porce' => $this-> porce,
			'typemodelo_id' => $this-> typemodelo_id,
			'img' => $this-> img,
			'active' => $this-> active
            ]);

            $this->resetInput();
            //$this->dispatchBrowserEvent('closeModal');

            $this->dispatchBrowserEvent('closeModalWin', [
                'modalNameClose' => 'updateModeloDataModal',
             ]);
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Modelo Successfully updated.!',
            ]);
        }
    }


    public function storage_models() // save modelos 
    {
        // Validar los campos requeridos del formulario
        $this->validate([
            'model_name' => 'required',
            'nick' => 'required',
            'porce' => 'required',
            'typemodelo_id' => 'required',
        ]);

        // Crear un nuevo modelo

        Modelo::create([
            'name' => $this->model_name,
            'porce' => $this->porce,
            'nick' => $this->nick,
            'typemodelo_id' => $this->typemodelo_id,
        ]);

        //$this->dispatchBrowserEvent('closeModalWin', 'NewModelDataModal');
        // Emitir el evento 'closeModalWin' con los parámetros 'modalName' y 'btnSelector'


        $this->dispatchBrowserEvent('closeModalWin', [
            'modalNameClose' => 'NewModelDataModal', // close win del modl
            'btnSelector' => '#btn-new2', // select new modal si no se envia no abre no ejecuta el nuevo modal o el primero que lo llamo 
        ]);

        $this->dispatchBrowserEvent('notify', [
            'type' => 'success',
            'message' => '¡ Model Successfully created!',
        ]);

        // Realizar las acciones necesarias después de guardar el modelo
        // ...

        // Cerrar el popup y actualizar los registros
        $this->dispatchBrowserEvent('closePopup');
        $this->resetForm();
    }

    public function render()
    {
        $keyWord = '%' . $this->keyWord . '%';

        $estudioId = $this->estudio_id;

        if ($estudioId > 0 || is_null($estudioId)) {
            $query = DB::table('estudiomodelos')
                ->join('estudios', 'estudiomodelos.estudio_id', '=', 'estudios.id')
                ->join('modelos', 'estudiomodelos.modelo_id', '=', 'modelos.id')
                ->select('estudios.id as estudio_id', 'estudiomodelos.id', 'estudios.name as estudio_name', 'modelos.id as modelo_id', 'modelos.name as modelo_name', 'modelos.nick as modelo_nick')
                ->where('estudiomodelos.user_id', auth()->id())
                ->where(function ($query) use ($estudioId) {
                    if ($estudioId > 0) {
                        $query->where('estudiomodelos.estudio_id', $estudioId);
                    }
                });

            $tableLookRecord = $query->paginate(25);
        } else {
            $tableLookRecord = collect([]);
        }

        $estudios = Estudio::with('user')->latest()
            ->where('user_id', auth()->id())
            ->where(function ($query) use ($keyWord) {
                $query->where('name', 'LIKE', $keyWord)
                    ->orWhere('dir', 'LIKE', $keyWord);
            })->paginate(10);

        return view('livewire.estudios.view', [
            'estudios' => $estudios,
            'tableLookRecord' => $tableLookRecord
        ]);
    }

    public function cancel()
    {
        $this->resetInput();
        $this->resetPage(); // se resetea la pagina para el keyword y paginado
    }

    public function look_table($id)
    {
        //$id = trim($id); // Eliminar espacios en blanco al inicio y al final
        $this->estudio_id = trim($id);
        //$this->estudio_id = intval($id); // Convertir a número entero

    }

    private function resetInput()
    {
        $this->name = null;
        $this->city = null;
        $this->dir = null;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'city' => 'required',
        ]);

        Estudio::create([
            'name' => $this->name,
            'city' => $this->city,
            'dir' => $this->dir
        ]);

        $this->resetInput();
        $this->dispatchBrowserEvent('closeModal');
        $this->dispatchBrowserEvent('notify', [
            'type' => 'success',
            'message' => '¡ Estudio Successfully created!',
        ]);
    }

    public function edit($id)
    {
        $record = Estudio::findOrFail($id);

        // Verificar si el usuario puede modificar el registro
        if ($record->userCanModify()) {
            $this->selected_id = $id;
            $this->name = $record->name;
            $this->city = $record->city;
            $this->dir = $record->dir;
        } else {
            $this->dispatchBrowserEvent('notify', [
                'type' => 'failure',
                'message' => '¡ Unauthorized error, Registry not recovered.!',
            ]);
        }
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'city' => 'required',
        ]);

        if ($this->selected_id) {
            $record = Estudio::find($this->selected_id);
            $record->update([
                'name' => $this->name,
                'city' => $this->city,
                'dir' => $this->dir
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');

            $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Estudio Successfully updated.!',
            ]);
        }
    }


    public function destroy_model($id) // destroy estudiomodelo la relacion 
    {
        $record = Estudiomodelo::find($id);
        /*
        $this->dispatchBrowserEvent('loading', [
            'type_loading' => 'hourglass', // o cualquier otro tipo de carga que desees, como 'Hourglass', 'Circle', etc.
            'seg' => 3000,  // Duración de la animación de carga en milisegundos.
        ]);    
        */
        $name_tem = $record->name ?? '';

        if ($record && $record->delete()) {
            // sleep(2); // Pausa de 1 segundo
            $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => 'Record successfully deleted ⛔️ ' . $name_tem,
            ]);
        } else {
            $this->dispatchBrowserEvent('notify', [
                'type' => 'failure',
                'message' => '📛 Unauthorized error, the record was not deleted. : '  . $name_tem,
            ]);
        }
    }


    public function destroy($id)
    {
        if ($id) {
            //  Estudio::where('id', $id)->delete();
            $estudio = Estudio::where('id', $id)->first();

            if ($estudio && $estudio->deleteByUser()) {
                $this->dispatchBrowserEvent('notify', [
                    'type' => 'success',
                    'message' => 'Record successfully deleted.',
                ]);
            } else {
                $this->dispatchBrowserEvent('notify', [
                    'type' => 'failure',
                    'message' => '¡Unauthorized error, the record was not deleted.!',
                ]);
            }
        }
    }


    public function edit_estudiomodel($id) // row tabla estudiomodelo llave
    {
        $record = Estudiomodelo::findOrFail($id);
        $this->estudio_id_change = $id;
        $this->estudio_id = $record->estudio_id;
        $this->modelo_id = $record->modelo_id;
    }

    public function update_estudiomodel() //update estudio-modelo
    { // cambio de la llave  $this->estudio_id_change

        $this->validate([
            'estudio_id' => 'required',
            'modelo_id' => 'required',
        ]);

        // Consulta si la combinación de estudio_id y modelo_id ya existe
        $existingEntry = Estudiomodelo::where('estudio_id', $this->estudio_id)
            ->where('modelo_id', $this->modelo_id)
            ->exists();

        if ($existingEntry) {
            // Si ya existe, muestra una notificación de duplicado
            $this->dispatchBrowserEvent('notify', [
                'type' => 'warning',
                'message' => '🟠 The model is already registered in the studio.',
            ]);
        } else {

            if ($this->estudio_id_change > 0) { // modelo cambia de studio
                $record = Estudiomodelo::find($this->estudio_id_change);
                $record->update([
                    'estudio_id' => $this->estudio_id,
                    'modelo_id' => $this->modelo_id
                ]);

                $this->estudio_id_change = '';
                $this->dispatchBrowserEvent('closeModalUpdate');
                $this->dispatchBrowserEvent('notify', [
                    'type' => 'success',
                    'message' => '¡The model has changed studio,  Successfully updated.!'
                    // 'OpenWin36' => 'update_estudiomodelDataModal'
                ]);
            }
        }
    }

    public function store_estudiomodel()
    {
        $this->validate([
            'estudio_id' => 'required',
            'modelo_id' => 'required',
        ]);

        // Consulta si la combinación de estudio_id y modelo_id ya existe
        $existingEntry = Estudiomodelo::where('estudio_id', $this->estudio_id)
            ->where('modelo_id', $this->modelo_id)
            ->exists();

        if ($existingEntry) {
            // Si ya existe, muestra una notificación de duplicado
            $this->dispatchBrowserEvent('notify', [
                'type' => 'warning',
                'message' => 'The model is already registered in the studio.',
            ]);
        } else {
            // Si no existe, crea la nueva entrada
            Estudiomodelo::create([
                'estudio_id' => $this->estudio_id,
                'modelo_id' => $this->modelo_id
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal2');
            $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡Study model successfully created!',
                'OpenWin36' => 'TableShowDataModal'
            ]);
        }
    }
}
