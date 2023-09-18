<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Thema;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Schema;

class Themas extends Component
{
    protected $listeners = ['confirm1' => 'confirm1_model', 'confirm-delete-model' => 'destroy', 'salvar' => 'salvarx', 'sluger' => 'sluger', 'myloadjs' => 'loadJson'];

    use WithPagination;
    protected $queryString = ['themecreate', 'selected_id', 'currentLanguage', 'page' => ['except' => 1]];
    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $pic, $slug, $slug_es, $htmlen, $htmles, $css, $js, $active, $type;
    public $error_slug, $editorjs, $themecreate, $editar, $currentLanguage = 'en', $tema;
    public $isOffcanvasVisible = false;

    public function mount(Request $request)
    {
        $this->themecreate = $request->input('themecreate', 'wait');
        $this->selected_id = $request->input('selected_id', null);
        $this->currentLanguage =  $request->input('currentLanguage', 'en');
        $this->page =  $request->input('page', 1);;
        if ($this->selected_id > 0) {
            $this->emit('showEditor');
            $this->themecreate = 'ok';
            try {
                $this->tema = Thema::findOrFail($this->selected_id);
            } catch (ModelNotFoundException $e) {
                abort(404, 'Tema no fount id ' . $e);
            }
        }
    }

    public function deleteSlug()
    {
        // Verifica el idioma y construye el nombre de la columna de slug
        $slugColumn = 'slug_' . $this->currentLanguage;

        if ($this->selected_id) {
            try {
                $thema = Thema::where('id', $this->selected_id)->update([
                    $slugColumn => null,
                ]);

                if ($thema) {
                    $this->showNotification('success', 'Slug in ' . ucfirst($this->currentLanguage) . ' language has been deleted successfully.');
                } else {
                    $this->showNotification('failure', 'The selected record does not exist or could not be updated.');
                }
            } catch (\Exception $e) {
                dd($e->getMessage()); // Muestra el mensaje de error
                $this->showNotification('failure', 'An error occurred: ' . $e->getMessage());
            }
        }
    }

    public function generar_page()
    {
        $slugColumn = 'slug_' . $this->currentLanguage;
        $slug = $this->tema->$slugColumn;

        if ($slug) {

            $editorData = json_decode($this->editorjs, true);
            $htmlContent = '';
            $cssContent = '';
            $jsContent = '';
            $headContent = '';
            foreach ($editorData['blocks'] as $block) {
                $blockType = $block['type'];
                $blockData = $block['data'];
                if ($blockType === 'header') {
                    $text = $blockData['text'];
                    $level = $blockData['level'];
                    $htmlContent .= "<h$level>$text</h$level>";                    
               // ...
                }elseif ($blockType === 'seotool') {
                    $title = isset($blockData['title']) ? htmlspecialchars($blockData['title']) : null;
                    $description = isset($blockData['description']) ? htmlspecialchars($blockData['description']) : null;
                    $keywords = isset($blockData['keywords']) ? htmlspecialchars($blockData['keywords']) : null;
                    $imgSrc = isset($blockData['imgSrc']) ? htmlspecialchars($blockData['imgSrc']) : null;
                    $imgAlt = isset($blockData['imgAlt']) ? htmlspecialchars($blockData['imgAlt']) : null;

                    if ($title) $headContent .= "<title>$title</title>";
                    if ($description) $headContent .= "<meta name=\"description\" content=\"$description\">";
                    if ($keywords) $headContent .= "<meta name=\"keywords\" content=\"$keywords\">";
                    if ($title) $headContent .= "<meta property=\"og:title\" content=\"$title\">";
                    if ($description) $headContent .= "<meta property=\"og:description\" content=\"$description\">";
                    if ($imgSrc) $headContent .= "<meta property=\"og:image\" content=\"$imgSrc\">";
                    if ($imgAlt) $headContent .= "<meta property=\"og:image:alt\" content=\"$imgAlt\">";
                }
                elseif ($blockType === 'paragraph') {
                    $text = $blockData['text'];
                    $htmlContent .= "<p>$text</p>";
                } elseif ($blockType === 'componentcloud') {

                    $content = $blockData['content'];
                    $css = $blockData['css'];
                    $js = $blockData['js'];
                    $cssContent .= $css;
                    $jsContent .= $js;
                    $htmlContent .= $content;
                }
            }

            $this->storeContents($htmlContent, $cssContent, $jsContent,$headContent);
            $this->showNotification('success', 'Page generated successfully in ' . $this->currentLanguage);
        } else {
            $this->showNotification('failure', 'You must create the slug first for this language before generating the page in ' . $this->currentLanguage);
        }
    }


    private function storeContents($htmlContent, $cssContent, $jsContent, $headContent)

    {
        $bootstrapCssUrl = asset('temas/cdn/bootstrap5.2/css/bootstrap.min.css');
        $bootstrapjs = asset('temas/cdn/bootstrap5.2/js/bootstrap.bundle.min.js');
        
        
        $htmlTemplate = "
            <!DOCTYPE html>
            <html lang=\"$this->currentLanguage\">
                <head>
                    $headContent
                    <meta charset=\"UTF-8\">
                    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                    <link href=\"style.css\" rel=\"stylesheet\">
                    <link href=\"$bootstrapCssUrl\" rel=\"stylesheet\" />
                </head>
                <body>
                    <style>
                        $cssContent
                    </style>
                    $htmlContent
                    <script>
                        $jsContent
                    </script>
                    <script src=\"$bootstrapjs\" defer></script>
                </body>
            </html>
        ";
        
        

        $htmlFileName = 'index.html';
        $htmlFilePath = 'temas/folio/' . Str::slug($this->tema->name) . '/' . $htmlFileName;
        Storage::put($htmlFilePath, $htmlTemplate);

        $bladeContent = "@extends('tema.app')
            @section('content')
                {!! $htmlContent !!}
            @endsection";
        $bladeFileName = 'index.blade.php';
        $bladeFilePath = 'temas/folio/' . Str::slug($this->tema->name) . '/' . $bladeFileName;
        Storage::put($bladeFilePath, $bladeContent);
    }


    public function salvarx()
    {
        $slugColumn = 'slug_' . $this->currentLanguage;
        $slug = $this->tema->$slugColumn;

        if ($slug) {
            // Decode the JSON content
            $editorData = json_decode($this->editorjs, true);
            // Check if the "blocks" key is empty
            if (empty($editorData['blocks'])) {
                $this->showNotification('failure', 'No file was saved due to the absence of blocks in the content');
            } else {
                // File name
                $filename = $slug . '_' . $this->currentLanguage . '.json';
                // Folder where files will be stored (in the storage system)
                $folder = 'temas/folio/' . Str::slug($this->tema->name);
                // Full path of the file in the storage system
                $filePath = $folder . '/' . $filename;
                // Save the content to the file in the storage system
                Storage::put($filePath, $this->editorjs);

                $this->showNotification('success', 'Theme updated successfully in ' . $this->currentLanguage);
            }
        } else {
            $this->showNotification('failure', 'You must create the slug first for this language before saving the theme in ' . $this->currentLanguage);
        }
    }


    public function store()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:themas,slug_en'
        ]);

        $newThema = Thema::create([
            'name' => $this->name,
            'pic' => $this->pic,
            'slug_en' => Str::slug($this->name),
            'slug_es' => null,
            'htmlen' => "",
            'htmles' => null,
            'css' => $this->css,
            'js' => $this->js,
            'active' => false,
            'type' => $this->type
        ]);

        $this->resetInput();
        $this->selected_id = $newThema->id;
        $this->themecreate = 'ok';

        // Redirige a la dirección deseada con los parámetros necesarios
        return redirect()->to('themas?themecreate=ok&currentLanguage=' . $this->currentLanguage . '&selected_id=' . $this->selected_id)
            ->with('success', 'Theme Successfully created!');
    }

    public function sluger($data) //recibe del front para cambiar y el slug de idioma
    {
        try {
            $slug = Str::slug($data['slug']);
            $columnName = $data['column'];

            if ($slug) {
                Thema::where('id', $this->selected_id)->update([$columnName => $slug]);
                $this->tema = Thema::findOrFail($this->selected_id);
            } else {
                $this->showNotification('failure', 'Error Slug');
            }
        } catch (\Exception $e) {
            $this->showNotification('failure', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function updatingKeyWord() // reset pages keywork
    {
        $this->resetPage();
    }

    public function toggleOffcanvasVisible()
    {
        $this->isOffcanvasVisible = !$this->isOffcanvasVisible;
    }

    public function toggleLanguage($lengua = 'en', $create = null)
    {
        if ($create == null) {
            $tableColumns = Schema::getColumnListing('themas');
            $slugColumns = array_filter($tableColumns, function ($column) {
                return strpos($column, 'slug_') === 0;
            });
            //  dd($slugColumns);    
            if (in_array("slug_$lengua", $slugColumns)) {
                $slugColumnName = "slug_$lengua";

                if (is_null($this->tema->$slugColumnName)) {
                    $this->emit('msgjs', [
                        'slug' => $slugColumnName,
                        'title' => 'Create Slug',
                        'msg' => 'Currently there is no slug for ' . $lengua . ', do you want to create one?',
                        'input' => 'Name Slug ' . $lengua,
                    ]);
                    $this->currentLanguage = $lengua;
                } else {

                    $this->currentLanguage = $lengua;
                    $this->loadJson();
                    $this->showNotification('success', 'Editor Success Full OK:: ' . $lengua);
                }
            } else {
                $this->showNotification('failure', 'Language not supported');
            }
        } else {
            $this->currentLanguage = $lengua;
            $this->showNotification('success', 'Ready ' . $lengua);
        }
    }

    public function loadJson()
    {
        if ($this->tema) {
            $slugColumn = 'slug_' . $this->currentLanguage;
            $slug = $this->tema->$slugColumn;
            $filename = $slug . '_' . $this->currentLanguage . '.json';
            $foler = Str::slug($this->tema->name);
            $filePath = "temas/folio/{$foler}/{$filename}";

            if (Storage::exists($filePath)) {
                $data = Storage::get($filePath);
                $this->editorjs = $data;
                $this->emit('loadeditor', $this->editorjs);
            } else {
                $this->showNotification('failure', 'No loader Json File, please try again. ' . $filePath);
            }
        }
    }

    public function render()
    {

        $this->slug = Str::slug($this->name);
        $this->tema = Thema::find($this->selected_id);

        if (!$this->tema && $this->themecreate !== 'wait') {
            $this->themecreate = 'new';
        }

        if (Thema::where('slug_en', $this->slug)->exists()) {
            $this->error_slug = "The slug already exists.";
        } else {
            $this->error_slug = "";
        }
        // if ($this->selected_id > 0) $this->emit('showEditor');            
        return view('livewire.themas.view', [
            'themas' => Thema::latest()
                ->paginate(5)
        ]);
    }

    public function showNotification($type, $message)
    {
        $this->dispatchBrowserEvent('notify', ['type' => $type, 'position' => 'center-center', 'message' => $message]);
    }

    public function newtheme()
    {
        $this->themecreate = 'new';
        $this->selected_id = null;
        //  $this->emit('showEditor');
    }
    public function updatedSelectedId()
    {
        if ($this->selected_id > 0) {
            $this->emit('showEditor');
            $this->themecreate = 'ok';
        }
    }

    public function cancel()
    {
        $this->resetInput();
    }

    private function resetInput()
    {
        $this->name = null;
        $this->pic = null;
        $this->slug = null;
        $this->htmlen = null;
        $this->htmles = null;
        $this->css = null;
        $this->js = null;
        $this->active = null;
        $this->type = null;
    }


    public function edit($id)
    {
        $record = Thema::findOrFail($id);
        $this->selected_id = $id;
        $this->name = $record->name;
        $this->pic = $record->pic;
        $this->slug = $record->slug_en;
        $this->slug_es = $record->slug_es;
        $this->htmlen = $record->htmlen;
        $this->htmles = $record->htmles;
        $this->css = $record->css;
        $this->js = $record->js;
        $this->active = $record->active;
        $this->type = $record->type;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'htmlen' => 'required',
            'active' => 'required',
        ]);

        if ($this->selected_id) {
            $record = Thema::find($this->selected_id);
            $record->update([
                'name' => $this->name,
                'pic' => $this->pic,
                'htmlen' => $this->htmlen,
                'htmles' => $this->htmles,
                'css' => $this->css,
                'js' => $this->js,
                'active' => $this->active,
                'type' => $this->type
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
            $this->showNotification('success', '¡ Thema Successfully updated.!');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Thema::where('id', $id)->delete();
        }
    }
}
