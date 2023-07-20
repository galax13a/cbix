<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Uploadplan;
use App\Models\Uploadimage;

class StorageUsageReport extends Component
{
    public $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }
    
    public function render()
    {
        // Obtener el plan de carga del usuario
        $uploadPlan = Uploadplan::find($this->user->uploadplan_id);
    
        // Obtener el tamaño total de las imágenes del usuario en kilobytes
        $totalSize = Uploadimage::where('user_id', $this->user->id)->sum('size');
    
        // Convertir el tamaño total a megabytes si es mayor o igual a 1 MB
        $totalSizeMB = ($totalSize >= 1024) ? ($totalSize / 1024) : $totalSize;
    
        // Convertir el tamaño total a gigabytes si es mayor o igual a 1 GB
        $totalSizeGB = ($totalSizeMB >= 1024) ? ($totalSizeMB / 1024) : $totalSizeMB;
    
        // Ajustar el formato del tamaño según el valor
        $sizeFormat = ($totalSizeGB >= 1024) ? 'GB' : (($totalSizeMB >= 1024) ? 'MB' : 'KB');
    
        // Calcular el porcentaje de uso de imágenes en relación con el plan de carga
        $usagePercentage = ($totalSizeMB / ($uploadPlan->megas * 1024)) * 100;
    
        return view('components.storage-usage-report', compact('uploadPlan', 'totalSizeMB', 'totalSizeGB', 'usagePercentage', 'sizeFormat'));
    }
    
    
    

}
