<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\User;
use App\Models\Uploadimage;
use App\Models\Uploadsize;

class EditorjsController extends Controller
{
    const MAX_FILE_SIZE = 4048; // Tamaño máximo en KB
    const STORAGE_PATH = 'public/apps/images/';
    const PUBLIC_PATH = 'storage/apps/images/';

    public function imageUpload(Request $request)
    {
        try {
            $file = $request->image;
            $user = User::findOrFail(auth()->id());
            $slug = $request->input('slug');

            if (!$request->has('slug')) {
                $errorResponse = [
                    'success' => 0,
                    'error' => 'No se ha proporcionado un slug. Por favor, inténtalo de nuevo.'
                ];
                return response()->json($errorResponse, 400);
            }

            $slug = $request->input('slug');

            $storagePathWithSlug = self::STORAGE_PATH . $slug . '/';
            $publicPathWithSlug = self::PUBLIC_PATH . $slug . '/';
    
            $this->validateFileSize($file, $user);

            $fileWithExt = $file->getClientOriginalName();
            $file_name = pathinfo($fileWithExt, PATHINFO_FILENAME);
            $file_extension = $file->getClientOriginalExtension();

            $file_name_save = Str::slug($file_name) . '_' . time() . '_original';

            $this->storeImages($file, $file_name_save, $file_extension, $slug, $user, $publicPathWithSlug);

            $activeUploadSizes = Uploadsize::where('active', true)->get();
            $resized_images = array();
            foreach ($activeUploadSizes as $uploadSize) {
                $width = $uploadSize->width;
                $resized_url = Storage::url($storagePathWithSlug . $file_name_save . "_{$width}." . $file_extension);
                $resized_images["resized_{$width}"] = $resized_url;
            }

            $original_url = Storage::url($storagePathWithSlug . $file_name_save . '.' . $file_extension);

            $response = array(
                'success' => 1,
                'file' => (object) array_merge(
                    ['url' => $original_url],
                    $resized_images
                )
            );

            return response()->json($response);
        } catch (\Exception $e) {
            Log::error('Error al cargar el archivo en EditorJS: ' . $e->getMessage());

            $errorResponse = [
                'success' => 0,
                'error' => 'Error al cargar el archivo. Por favor, inténtalo de nuevo.'
            ];
            return response()->json($errorResponse, 500);
        }
    }

    private function validateFileSize($file, $user)
    {
        $fileSizeKB = $file->getSize() / 1024;
        $fileSizeMB = $fileSizeKB / 1024; 
        $fileSizeFormatted = number_format($fileSizeMB, 2) . ' MB ?User : ' . $user->name;

        if ($fileSizeKB > self::MAX_FILE_SIZE) {
            $errorResponse = [
                'success' => 0,
                'error' => 'The file size exceeds the allowed limit of 2MB. File : ' . $fileSizeFormatted,
            ];
            return response()->json($errorResponse, 400);
        }
    }

    private function storeImages($file, $file_name_save, $file_extension, $slug, $user, $publicPathWithSlug)
    {
        $storagePathWithSlug = self::STORAGE_PATH . $slug . '/';
        $original_path = $storagePathWithSlug . $file_name_save . '.' . $file_extension;

        if (!Storage::exists($storagePathWithSlug)) {
            Storage::makeDirectory($storagePathWithSlug);
        }

        $file->storeAs($storagePathWithSlug, $file_name_save . '.' . $file_extension); // save original image

        UploadImage::create(
            [
                'name' => $file_name_save,
                'user_id' => $user->id,
                'size' => $file->getSize(),
                'url' => $publicPathWithSlug . $file_name_save . '.' . $file_extension,
                'extension' => $file_extension,
                'uploadfolder_id' => 1,
            ]
        );

        $activeUploadSizes = Uploadsize::where('active', true)->get();
        foreach ($activeUploadSizes as $uploadSize) {
            $width = $uploadSize->width;
            $resized_path = $storagePathWithSlug . $file_name_save . "_{$width}." . $file_extension;

            $image = Image::make($file)->orientate()->resize($width, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $image->save(storage_path('app/' . $resized_path));

            UploadImage::create(
                [
                    'name' => $file_name_save . "_{$width}",
                    'user_id' => $user->id,
                    'size' => Storage::size($resized_path),
                    'url' => $publicPathWithSlug . $file_name_save . "_{$width}." . $file_extension,
                    'extension' => $file_extension,
                    'uploadfolder_id' => 1,
                ]
            );
        }
    }
}
