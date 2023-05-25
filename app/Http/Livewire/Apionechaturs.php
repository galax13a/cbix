<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Apionechatur;

class Apionechaturs extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $api, $active;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function mount()
    {
        $this->active = true;
    }


    public function render()
    {
        $keyWord = '%' . $this->keyWord . '%';

        return view('livewire.apionechaturs.view', [
            'apionechaturs' => Apionechatur::with('user')->latest()

                ->where('user_id', auth()->id())
                ->where(function ($query) use ($keyWord) {
                    $query->where('name', 'LIKE', $keyWord)
                        ->orWhere('api', 'LIKE', $keyWord);
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
        $this->api = null;
        $this->active = null;
    }

    public function store()
    {
        $this->validate([
            'api' => 'required|url'
        ]);

        $existingApi = Apionechatur::where('api', $this->api)->exists();

        if ($existingApi) {
            // Si ya existe un registro con el mismo valor de "api", muestra una notificación de error
            $this->dispatchBrowserEvent('notify', [
                'type' => 'warning',
                'message' => 'TThe value of the "api" field already exists. for this user, you can generate another api from chaturbate',
            ]);
        } else {
            $api = $this->api;
            $queryString = parse_url($api, PHP_URL_QUERY);
            parse_str($queryString, $params);
            $username = isset($params['username']) ? $params['username'] : '';

            $name = $this->name ?: $username;

            Apionechatur::create([
                'name' => $name,
                'api' => $this->api,
                'active' => $this->active
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
            $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡Apionechatur creado exitosamente!',
            ]);
        }
    }

    public function edit($id)
    {
        $record = Apionechatur::findOrFail($id);
        $this->selected_id = $id;
        $this->name = $record->name;
        $this->api = $record->api;
        $this->active = $record->active;
    }

    public function update()
    {
        $this->validate([
            'api' => 'required|url',
            'active' => 'required',
        ]);

        if ($this->selected_id) {
            $record = Apionechatur::find($this->selected_id);
            $record->update([
                'name' => $this->name,
                'api' => $this->api,
                'active' => $this->active
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');

            $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Apionechatur Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Apionechatur::where('id', $id)->delete();
        }
    }
}
