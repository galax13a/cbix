<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
use App\Models\Backup;
use Exception;
class Backups extends Component
{
    protected $listeners = ['confirm-delete-model' => 'destroy'];

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $fileurl;

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render()
    {
        $keyWord = '%' . $this->keyWord . '%';

        $backups = Backup::latest()
            ->orWhere('name', 'LIKE', $keyWord)
            ->orWhere('fileurl', 'LIKE', $keyWord)
            ->paginate(10);

        return view('livewire.backups.view', compact('backups'));
    }

    public function cancel()
    {
        $this->resetInput();
    }

    private function resetInput()
    {
        $this->name = null;
        $this->fileurl = null;
    }

    public function backup()
{
    $backupFolderPath = storage_path('app/backups/');
    $backupPath = $backupFolderPath . now()->format('Y-m-d_H-i-s') . '.sql';

    if (!file_exists($backupFolderPath)) {
        Storage::makeDirectory($backupFolderPath, 0755, true);
    }

    $database = config('database.connections.mysql.database');
    $username = config('database.connections.mysql.username');
    $password = config('database.connections.mysql.password');

    try {
        $command = "mysqldump -u $username -p$password $database > " . escapeshellarg($backupPath);
        exec($command);
    } catch (Exception $e) {
        $this->dispatchBrowserEvent('notify', [
            'type' => 'failure',
            'message' => 'Error al crear el backup: ' . $e->getMessage(),
        ]);
        return;
    }

    $fileUrl = Storage::disk('public')->url('backups/' . basename($backupPath));

    Backup::create([
        'name' => basename($backupPath),
        'fileurl' => $fileUrl,
    ]);

    $this->dispatchBrowserEvent('notify', [
        'type' => 'success',
        'message' => '¡Backup creado exitosamente!',
    ]);
}
    public function restoreBackup($id)
    {
        $backup = Backup::findOrFail($id);
        $backupPath = storage_path('app/' . $backup->fileurl);

        $database = config('database.connections.mysql.database');
        $username = config('database.connections.mysql.username');
        $password = config('database.connections.mysql.password');

        $command = "mysql -u $username -p$password $database < " . escapeshellarg($backupPath);
        exec($command);

        $this->dispatchBrowserEvent('notify', [
            'type' => 'success',
            'message' => '¡Backup restaurado exitosamente!',
        ]);
    }

    public function deleteBackup($id)
    {
        if ($id) {
            $backup = Backup::findOrFail($id);
            $backup->delete();

            $backupPath = storage_path('app/' . $backup->fileurl);
            Storage::delete($backupPath);

            $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡Backup eliminado exitosamente!',
            ]);
        }
    }
}
