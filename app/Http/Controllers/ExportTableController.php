<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Admincontact;

class ExportTableController extends Controller

{
    public function exportTable(Request $request)
    {
        $tabledata = $request->route('tabledata');        
        $userId = Auth::id();            
        if($tabledata == 'contacts') {
            $admincontacts = Admincontact::with('user', 'admincontacttag')->where('user_id', Auth::id())->get();
            //dd($admincontacts);
            $viewName = "export.$tabledata"; 
            return view($viewName,  ['admincontacts' => $admincontacts]);
        } else {
            return  redirect('/app');
        }
    }    
}
