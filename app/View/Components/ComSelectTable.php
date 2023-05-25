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
        $query = DB::table($this->tableName);
    
        $columns = Schema::getColumnListing($this->tableName);
    
        if (in_array('active', $columns)) {
            $query->where('active', true);
        }
    
        if (in_array('user_id', $columns)) {
            $query->where('user_id', auth()->id());
        }
    
        return $query->get();
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
