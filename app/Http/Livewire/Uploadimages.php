<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Uploadimage;

class Uploadimages extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $uploadfolder_id, $name, $size, $url, $extension;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';


        return view('livewire.uploadimages.view', [
            'uploadimages' => Uploadimage::with('user')
                ->latest()
                ->where('user_id', auth()->id())
                ->when($keyWord, function ($query, $keyWord) {
                    $query->where(function ($subquery) use ($keyWord) {
                        $subquery->where('name', 'LIKE', '%' . $keyWord . '%')
                            ->orWhereHas('uploadfolder', function ($subquery) use ($keyWord) {
                                $subquery->where('name', 'LIKE', '%' . $keyWord . '%');
                            });
                    });
                })
                ->paginate(100)
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->uploadfolder_id = null;
		$this->name = null;
		$this->size = null;
		$this->url = null;
		$this->extension = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'size' => 'required',
		'url' => 'required|url',
		'extension' => 'required',
        ]);

        Uploadimage::create([ 
			'uploadfolder_id' => $this-> uploadfolder_id,
			'name' => $this-> name,
			'size' => $this-> size,
			'url' => $this-> url,
			'extension' => $this-> extension
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');		
        $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Uploadimage Successfully created!',
            ]);
    }

    public function edit($id)
    {
        $record = Uploadimage::findOrFail($id);
        $this->selected_id = $id; 
		$this->uploadfolder_id = $record-> uploadfolder_id;
		$this->name = $record-> name;
		$this->size = $record-> size;
		$this->url = $record-> url;
		$this->extension = $record-> extension;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'size' => 'required',
		'url' => 'required|url',
		'extension' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Uploadimage::find($this->selected_id);
            $record->update([ 
			'uploadfolder_id' => $this-> uploadfolder_id,
			'name' => $this-> name,
			'size' => $this-> size,
			'url' => $this-> url,
			'extension' => $this-> extension
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
	
             $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Uploadimage Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Uploadimage::where('id', $id)->delete();
        }
    }
}