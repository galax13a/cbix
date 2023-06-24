<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\App;
use Illuminate\Http\Request;

class Apps_install extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $description, $is_approved, $apps_categors_id, $meta_title, $meta_description, $meta_keywords, $active;
    public $installed;
    public $id_app;
    
    public $app_name;



    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function render(Request $request)
    {
        $keyWord = '%' . $this->keyWord . '%';

        //$this->id_app = request()->route('id_app');
       // $app_name = urldecode(request()->route('app_name'));

   
       $id = $request->segment(4); // Obtener el ID de la URL
       $app = App::find($id);

            return view('livewire.admin.apps_admin.install', [
                'app' => $app,
            ]);


    }

    public function cancel()
    {
        $this->resetInput();
    }

    public function install(Request $request)
    {
        $id = $request->segment(4); // Obtener el ID de la URL
        $app = App::find($id);
    
        if ($app) {
            $installed = $app->installed == 1 ? false : true;
            
            $app->update([
                'installed' => $installed
            ]);
    
            $this->installed = $installed;
    
            $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => '¡App Successfully Installed!',
            ]);
        }else{
            $this->dispatchBrowserEvent('notify', [
                'type' => 'warning',
                'message' => '¡error app',
            ]);
        }
    }
    
    public function destroy($id)
    {
        if ($id) {
            App::where('id', $id)->delete();
        }
    }
}
