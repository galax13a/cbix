@extends('layouts.editorlayur')
@push('scripts-head')
    <link href="{{ asset('cs/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('cs/themas.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/editorcam/editorcam.js') }}" defer></script>    
    <script src="{{ asset('js/editorcam/list.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/list-nested.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/checklist.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/simple-image.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/embed.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/table.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/marker.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/underline.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/editorcam-style.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/text-color.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/header-with-alignment.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/paragraph-with-alignment.js') }}" defer></script>
    <script src="{{ asset('js/editorcam/columns.js') }}" defer></script>
    
@endpush

@push('scripts-body')
 
    <script src="{{ asset('js/editorcam/PRO/CodexPro.js') }}" defer></script>
    <script src="{{ asset('js/editor-theme.js') }}" defer></script>
  
@endpush

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('themas')
        </div>     
    </div>   
</div>
<div class="floating-footer">
    <nav class="navbar navbar-light bg-light rounded-3">
        <div class="container-fluid">
			<div class="col">
				<a class="navbar-brand" href="#">Menú 1</a>
			  </div>
			  <div class="col">
				<a class="navbar-brand" href="#">Menú 1</a>
			  </div>
			  <div class="col">
				<a class="navbar-brand" href="#">Menú 1</a>
			  </div>
          	<div class="col">
				<a class="navbar-brand" href="#">Menú 1</a>
			  </div>
            <a tooltips="Save Thema" title = "SaveMe"class="navbar-brand" href="#"><i class="bi bi-save2"></i></a>
            <a class="navbar-brand" title ="See theme" href="#"><i class="bi bi-arrow-up-right-square"></i></a>
			<a class="navbar-brand" title="Create Theme" href="#"><i class="bi bi-google-play"></i></a>
        </div>
    </nav>
</div>
@endsection