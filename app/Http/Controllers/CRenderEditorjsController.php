<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class CRenderEditorjsController extends Controller
{
    public function generatePageFromEditorJS($editorjs, $currentLanguage, $tema)
    {
        $slug = $tema->{'slug_' . $currentLanguage};

        if (!$slug) {
            return [
                'status' => 'failure', 
                'message' => 'You must create the slug first for this language before generating the page in ' . $currentLanguage
            ];
        }

        $contents = $this->parseEditorJS($editorjs);
        $folder = $this->storeContents($contents, $currentLanguage, $tema);

        return [
            'status' => 'success', 
            'message' => 'Page generated successfully in ' . $folder
        ];
    }

    private function parseEditorJS($editorjs)
    {
        $editorData = json_decode($editorjs, true);
        $parsedContent = [
            'html' => '',
            'css' => '',
            'js' => '',
            'head' => ''
        ];
        $alignmentMappings = [
            'center' => 'justify-content-center',
            'left'   => 'justify-content-start', 
            'right'  => 'justify-content-end',
        ];

        foreach ($editorData['blocks'] as $block) {
            $blockType = $block['type'];
            $blockData = $block['data'];

            switch ($blockType) {
                case 'header':
                    $alignmentClass = $alignmentMappings[$blockData['alignment']] ?? '';
                    $classAttribute = $alignmentClass ? " class='{$alignmentClass}'" : "";                 
                    $parsedContent['html'] .= "<div class='d-flex {$alignmentClass}'><h{$blockData['level']}>{$blockData['text']}</h{$blockData['level']}></div>";
                    break;

                case 'seotool':
                    $head = &$parsedContent['head'];
                    foreach (['title', 'description', 'keywords', 'imgSrc', 'imgAlt'] as $key) {
                        if (isset($blockData[$key])) {
                            $value = htmlspecialchars($blockData[$key]);
                            $head .= match ($key) {
                                'title' => "<title>$value</title>",
                                'description' => "<meta name=\"description\" content=\"$value\">",
                                'keywords' => "<meta name=\"keywords\" content=\"$value\">",
                                'imgSrc' => "<meta property=\"og:image\" content=\"$value\">",
                                'imgAlt' => "<meta property=\"og:image:alt\" content=\"$value\">",
                            };
                        }
                    }
                    break;

                case 'paragraph':
                    $parsedContent['html'] .= "<p>{$blockData['text']}</p>";
                    break;

                case 'componentcloud':
                    $parsedContent['html'] .= $blockData['content'];
                    $parsedContent['css'] .= $blockData['css'];
                    $parsedContent['js'] .= $blockData['js'];
                    break;
            }
        }

        return $parsedContent;
    }

    private function storeContents($contents, $currentLanguage, $tema)
    {
        try {
                $folderName = 'ID' . $tema->id . '-' . Str::slug($tema->name);
                $bootstrapCssUrl = asset('storage/temas/cdn/bootstrap5.2/css/bootstrap.min.css');
                $bootstrapJsUrl = asset('storage/temas/cdn/bootstrap5.2/js/bootstrap.bundle.min.js');
                $assets_cdn = asset('storage/temas/cdn/folio/' . $folderName);
                // Save CSS and JS to their respective files
                Storage::put("public/temas/cdn/folio/$folderName/style.css", $contents['css']);
                Storage::put("public/temas/cdn/folio/$folderName/app.js", $contents['js']);

                $htmlTemplate = "
                    <!DOCTYPE html>
                    <html lang=\"$currentLanguage\">
                        <head>
                            {$contents['head']}
                            <meta charset=\"UTF-8\">
                            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                            <link href=\"$bootstrapCssUrl\" rel=\"stylesheet\" />
                            <link href=\"$assets_cdn/style.css\" rel=\"stylesheet\">
                        </head>
                        <body>                          
                            <div class=\"container-xxl mt-2 mt-2\">
                                <div class=\"row\">                
                                    <div class=\"col\">
                                    {$contents['html']}
                                    </div>
                                </div>                    
                           </div>   
                            <script src=\"$assets_cdn/app.js\" defer></script>
                            <script src=\"$bootstrapJsUrl\" defer></script>
                        </body>
                    </html>
                ";
                Storage::put('temas/folio/' . $folderName . '/index.html', $htmlTemplate);
                Storage::put("public/temas/cdn/folio/$folderName/index.html", $htmlTemplate);

                $bladeContent = "@extends('tema.app')
                    @section('content')
                        {!! {$contents['html']} !!}
                    @endsection";
                Storage::put('temas/folio/' . $folderName . '/index.blade.php', $bladeContent);
                return $assets_cdn;

            } catch (\Exception $e) {                
                Log::error('Failed to store content: Generate Page ' . $e->getMessage());
                throw new \Exception('There was a problem saving the contents. Please try again.');
            }
        
    }
}
