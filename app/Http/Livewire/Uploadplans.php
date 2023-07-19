<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Uploadplan;

class Uploadplans extends Component
{
    protected $listeners = ['confirm1' => 'confirm1_model', 'confirm-delete-model' => 'destroy'];

    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $megas, $price_any, $price_mes, $des_es, $des_en, $plan_filex, $plan, $active;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.uploadplans.view', [
            'uploadplans' => Uploadplan::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('megas', 'LIKE', $keyWord)
						->orWhere('price_any', 'LIKE', $keyWord)
						->orWhere('price_mes', 'LIKE', $keyWord)
						->orWhere('des_es', 'LIKE', $keyWord)
						->orWhere('des_en', 'LIKE', $keyWord)
						->orWhere('plan_filex', 'LIKE', $keyWord)
						->orWhere('plan', 'LIKE', $keyWord)
						->orWhere('active', 'LIKE', $keyWord)->paginate(10)
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->megas = null;
		$this->price_any = null;
		$this->price_mes = null;
		$this->des_es = null;
		$this->des_en = null;
		$this->plan_filex = null;
		$this->plan = null;
		$this->active = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'megas' => 'required',
		'price_any' => 'required',
		'price_mes' => 'required',
		'plan_filex' => 'required',
		'plan' => 'required',
		'active' => 'required',
        ]);

        Uploadplan::create([ 
			'name' => $this-> name,
			'megas' => $this-> megas,
			'price_any' => $this-> price_any,
			'price_mes' => $this-> price_mes,
			'des_es' => $this-> des_es,
			'des_en' => $this-> des_en,
			'plan_filex' => $this-> plan_filex,
			'plan' => $this-> plan,
			'active' => $this-> active
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Uploadplan Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Uploadplan::findOrFail($id);
        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->megas = $record-> megas;
		$this->price_any = $record-> price_any;
		$this->price_mes = $record-> price_mes;
		$this->des_es = $record-> des_es;
		$this->des_en = $record-> des_en;
		$this->plan_filex = $record-> plan_filex;
		$this->plan = $record-> plan;
		$this->active = $record-> active;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'megas' => 'required',
		'price_any' => 'required',
		'price_mes' => 'required',
		'plan_filex' => 'required',
		'plan' => 'required',
		'active' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Uploadplan::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'megas' => $this-> megas,
			'price_any' => $this-> price_any,
			'price_mes' => $this-> price_mes,
			'des_es' => $this-> des_es,
			'des_en' => $this-> des_en,
			'plan_filex' => $this-> plan_filex,
			'plan' => $this-> plan,
			'active' => $this-> active
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Uploadplan Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Uploadplan::where('id', $id)->delete();
        }
    }
}