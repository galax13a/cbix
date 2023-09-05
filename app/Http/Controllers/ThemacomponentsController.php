<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ThemacomponentsController extends Controller
{
    public function createthemacom(Request $request)
    {
        try {

            $data = $request->validate([
                'name' => 'required|string|max:255',
                'htmlcodex' => 'required|string',
                'css' => 'nullable|string',
                'js' => 'nullable|string',
                'php' => 'nullable|string',
            ]);
            
            $slug = Str::slug($data['name']);
            $directoryPath = resource_path("views/components/themacoms");
            $componentPath = "{$directoryPath}/{$slug}.blade.php";

            if (!File::exists($directoryPath)) {
                File::makeDirectory($directoryPath, 0755, true);
            }

            $filteredContent = $data['htmlcodex'];
            if (preg_match('/<section>(.*?)<\/section>/s', $data['htmlcodex'], $matches) && !empty($matches[1])) {
                $filteredContent = $matches[1];
            }

           $css = $data['css'] ?? '';
           $js = $data['js'] ?? '';
           $php = $data['php'] ?? '';         

            $componentContent = <<<BLADE
            <div>             
                 <style>{$css}</style>
                 <script>{$js}</script>
                 <?php {$php} ?>           
                 <section>{$filteredContent}</section>
            </div>
            BLADE;

            if (File::put($componentPath, $componentContent)) {
                $instruction = "Ready Ok !!! copy paste new componente Blade: <x-themacoms.{$slug} />";
                return response()->json([
                    'success' => true, 
                    'slug' => $slug,
                    'instruction' => $instruction
                ]);
            }
            
            /*
            $instruction = "<x-themacoms.{$slug} />";
            return response()->json([
                'success' => true, 
                'slug' => $slug,
                'instruction' => $instruction
            ]);*/

        } catch (ValidationException $e) {
            Log::error('Error al validar el formulario para crear un themacom: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Validation failed. Please check your input.'], 400);
        } catch (\Exception $e) {
            Log::error('Error al crear un themacom: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'An unexpected error occurred.'], 500);
        }
    }
}
