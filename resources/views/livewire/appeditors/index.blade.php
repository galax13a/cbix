@extends('layouts.app')
@push('scripts-head')
    <link href="{{ asset('cs/select2.min.css') }}" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="{{ asset('cs/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('cs/cards1.css') }}">

    <script src="{{ asset('js/editorcam/editorcam.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/header.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/list.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/list-nested.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/checklist.js') }}" defer></script>

    <script src="{{ asset('js/editorcam/simple-image.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/embed.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/table.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/marker.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/underline.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/hyperlink.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/editorcam-style.js') }}" defer></script>

    <script src="{{ asset('js/editorcam/tooltip.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/text-color.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/header-with-alignment.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/paragraph-with-alignment.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/columns.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/delimiter.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/code.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/image.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/raw.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/gallery-urls.js') }}" ></script>
    <script src="{{ asset('js/editorcam/carrusel.js') }}" defer ></script>
    <script src="{{ asset('js/editorcam/quote.js') }}" defer ></script>   
    <script src="{{ asset('js/editorcam/ckeditor.js') }}" defer></script>
    <script  src="https://www.tiktok.com/embed.js"></script>
 

@endpush

@push('scripts-body')
    <script src="{{ asset('js/editorcam/PRO/CardBlockCbApi.js') }}" defer></script>   
    <script src="{{ asset('js/editorcam/PRO/Tiktok.js') }}" defer></script>    
    <script src="{{ asset('js/editorcam/PRO/CardLineImg.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/PRO/CardImagenH.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/PRO/CardImagen.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/PRO/CardBlock.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/PRO/CardsPro.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/PRO/Emotions.js') }}" defer></script>    
    <script src="{{ asset('js/editorcam/PRO/OLHTML.js') }}" defer></script> 
    <script src="{{ asset('js/editorcam/PRO/iframesimple.js') }}" defer></script>  
    <script src="{{ asset('js/editorcam/PRO/getbtn.js') }}" defer></script>    
    <script src="{{ asset('js/editorcam/PRO/linkone.js') }}" defer></script>    
    <script src="{{ asset('js/editorcam/PRO/getcb.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/PRO/IAFree.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/PRO/AIPro.js') }}" defer></script>  

    <script src="{{ asset('js/config-editorjs.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}" defer></script>
    
@endpush


@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @livewire('appeditors')
            </div>
        </div>
    </div>
@endsection
