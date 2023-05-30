<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Estudio;
use App\Models\Estudiomodelo;
use Illuminate\Support\Facades\DB;
use App\Models\Modelo;

class Estudios extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $city, $dir;
    public $estudio_id, $modelo_id;
    public $model_name, $porce, $typemodelo_id, $nick;


    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function mount()
    {

        $this->estudio_id = "";
        $this->porce = 100;
        $this->typemodelo_id = 1;
    }

    public function openPopup()
    {
        $this->resetForm();
        $this->dispatchBrowserEvent('openPopup');
    }
    private function resetForm()
    {
        $this->model_name = '';
        //        $this->porce = '';
        $this->nick = '';
        // $this->typemodelo_id = '';
    }

    public function storage_models()
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
                ->select('estudiomodelos.id', 'estudios.name as estudio_name', 'modelos.name as modelo_name', 'modelos.nick as modelo_nick')
                ->where('estudiomodelos.user_id', auth()->id())
                ->where(function ($query) use ($estudioId) {
                    if ($estudioId > 0) {
                        $query->where('estudiomodelos.estudio_id', $estudioId);
                    }
                });

            $tableLookRecord = $query->paginate(10);
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
    }

    public function look_table($id)
    {
        $id = trim($id); // Eliminar espacios en blanco al inicio y al final
        $this->estudio_id = intval($id); // Convertir a número entero
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
            ]);
        }
    }
}
