<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class WireTableLookup extends Component
{
    public $searchTable = '';
    public $results = [];
    public $tableNameLook;
    public $columnLook;

    public function mount($tableNameLook, $columnLook = null)
    {
        $this->tableNameLook = $tableNameLook;

        if ($columnLook && DB::connection()->getSchemaBuilder()->hasColumn($tableNameLook, 'user_id')) {
            $columnParts = explode(':', $columnLook);
            $this->columnLook = $columnParts[0];

            if (count($columnParts) > 1) {
                $this->searchTable = $columnParts[1];
            }
        }
    }

    public function render()
    {
        $query = DB::table($this->tableNameLook);

 

        if (auth()->check() && DB::connection()->getSchemaBuilder()->hasColumn($this->tableNameLook, 'user_id')) {
            $query->where('user_id', auth()->user()->id);
        }

        $results = $query->get();

        return view('livewire.wire-table-lookup', ['results' => $results]);
    }
}
