<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Uploadfolder;

class Uploadfolders extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $active;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function getImagesCount($folderId)
    {
        return Uploadfolder::find($folderId)->uploadimages()->count();
    }

    public function getTotalSize($folderId)
    {
        $totalSize = Uploadfolder::find($folderId)
            ->uploadimages()
            ->sum('size');
    
        $totalSize = $totalSize / 1024; // Dividir entre 1024 para obtener el tamaño en kilobytes (KB)
    
        if ($totalSize > 1024) {
            // Convertir a megabytes (MB)
            $totalSizeMB = number_format($totalSize / 1024, 2);
            return $totalSizeMB . ' MB';
        } else {
            $totalSizeKB = number_format($totalSize, 3);
            return $totalSizeKB . ' KB';
        }
    }
    
    

    public function render()
    {
        $keyWord = '%' . $this->keyWord . '%';
        $uploadfolders = Uploadfolder::with('user')
        ->where(function ($query) use ($keyWord) {
            $query->where('name', 'LIKE', '%' . $keyWord . '%');
        })
        ->latest()
        ->paginate(30);

    return view('livewire.uploadfolders.view', [
        'uploadfolders' => $uploadfolders
    ]);
    }

    public function cancel()
    {
        $this->resetInput();
    }

    private function resetInput()
    {
        $this->name = null;
        $this->active = null;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'active' => 'required',
        ]);

        Uploadfolder::create([
            'name' => $this->name,
            'active' => $this->active
        ]);

        $this->resetInput();
        $this->dispatchBrowserEvent('closeModal');
        $this->dispatchBrowserEvent('notify', [
            'type' => 'success',
            'message' => '¡ Uploadfolder Successfully created!',
        ]);
    }

    public function edit($id)
    {
        $record = Uploadfolder::findOrFail($id);
        $this->selected_id = $id;
        $this->name = $record->name;
        $this->active = $record->active;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'active' => 'required',
        ]);

        if ($this->selected_id) {
            $record = Uploadfolder::find($this->selected_id);
            $record->update([
                'name' => $this->name,
                'active' => $this->active
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');

            $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡ Uploadfolder Successfully updated.!',
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Uploadfolder::where('id', $id)->delete();
        }
    }
}
