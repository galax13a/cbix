@extends('layouts.app')
@push('scripts-head')

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

<script src="{{ asset('js/editorcam/ckeditor.js') }}" defer></script>

@endpush

@push('scripts-body')
<script src="{{ asset('js/config-editorjs.js') }}" defer></script>

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
