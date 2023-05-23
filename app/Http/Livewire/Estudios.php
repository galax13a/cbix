<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Estudio;

class Estudios extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $city, $dir;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.estudios.view', [
            'estudios' => Estudio::with('user')->latest()

                ->where('user_id', auth()->id())
                ->where(function ($query) use ($keyWord) {     
                    $query->where('name', 'LIKE', $keyWord)        
                    ->orWhere('dir', 'LIKE', $keyWord); 
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
			'name' => $this-> name,
			'city' => $this-> city,
			'dir' => $this-> dir
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
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->city = $record-> city;
		$this->dir = $record-> dir;
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
			'name' => $this-> name,
			'city' => $this-> city,
			'dir' => $this-> dir
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
            Estudio::where('id', $id)->delete();
        }
    }
}