@extends('layouts.editorlayur')
@push('scripts-head')
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" rel="stylesheet">
    <script src="{{ asset('js/editorcam/editorcam.js') }}" defer></script>    
    <script src="{{ asset('js/editorcam/header-with-alignment.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/paragraph-with-alignment.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/columns.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/editorcam-style.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/text-color.js') }}" defer></script>

    <script src="{{ asset('js/editorcam/list.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/list-nested.js') }}" defer></script>    
    <script src="{{ asset('js/editorcam/embed.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/table.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/marker.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/underline.js') }}" defer></script>

@endpush

@push('scripts-body')
<script src="{{ asset('js/editorcam/PRO/SeoTools.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/PRO/ComponentCloud.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/PRO/DivMargin.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/PRO/CropImagen.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/PRO/CReditorUploadImagen.js') }}" defer></script>
    
    <script src="{{ asset('js/editorcam/PRO/Emotions.js') }}" defer></script>    
    <script src="{{ asset('js/editorcam/PRO/ComponentsV1.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/PRO/ComponentsThemaRender.js') }}" defer></script>    
    <script src="{{ asset('js/editor-theme.js') }}" defer></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>

@endpush

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('themas')
        </div>     
    </div>   
</div>

@endsection