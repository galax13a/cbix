<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\CreditsGoal;

class Creditsgoals extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $goal, $credits_reward;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';

        return view('livewire.credits_goals.view', [
            'creditsGoals' => CreditsGoal::latest()
						->orWhere('goal', 'LIKE', $keyWord)
						->orWhere('credits_reward', 'LIKE', $keyWord)->paginate(10)
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->goal = null;
		$this->credits_reward = null;
    }

    public function store()
    {
        $this->validate([
		'goal' => 'required',
		'credits_reward' => 'required|numeric',
        ]);

        CreditsGoal::create([ 
			'goal' => $this-> goal,
			'credits_reward' => $this-> credits_reward
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ CreditsGoal Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = CreditsGoal::findOrFail($id);
        $this->selected_id = $id; 
		$this->goal = $record-> goal;
		$this->credits_reward = $record-> credits_reward;
    }

    public function update()
    {
        $this->validate([
		'goal' => 'required',
		'credits_reward' => 'required',
        ]);

        if ($this->selected_id) {
			$record = CreditsGoal::find($this->selected_id);
            $record->update([ 
			'goal' => $this-> goal,
			'credits_reward' => $this-> credits_reward
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ CreditsGoal Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            CreditsGoal::where('id', $id)->delete();
        }
    }
}