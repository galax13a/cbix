<?php
namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ComSelectTable extends Component
{
    public $tableName;
    public $displayName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tableName, $displayName)
    {
        $this->tableName = $tableName;
        $this->displayName = $displayName;
    }

    /**
     * Get the items from the database.
     *
     * @return Collection
     */
    public function items()
    {
        if (Schema::hasColumn($this->tableName, 'active')) {
            return DB::table($this->tableName)->where('active', true)->get();
        }
    
        // si la columna 'active' no existe, simplemente devuelve todos los elementos
        return DB::table($this->tableName)->get();
    }
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.com-select-table');
    }
}
