@extends('layouts.app')
@push('scripts-head')
<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/nested-list@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/checklist@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/embed@2.5.3/dist/bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/table@2.2.2/dist/table.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/marker@1.3.0/dist/bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/underline@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@weekwood/editorjs-hyperlink@1.0.9/dist/bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/editorjs-style@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/editorjs-tooltip"></script>
<script src="https://cdn.jsdelivr.net/npm/editorjs-text-color-plugin@2.0.3/dist/bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/editorjs-header-with-alignment@1.0.1/dist/bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/editorjs-paragraph-with-alignment@3.0.0"></script>
<script src="https://cdn.jsdelivr.net/npm/@calumk/editorjs-columns@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/delimiter@1.3.0/dist/bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/code@2.8.0/dist/bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/image@2.8.1/dist/bundle.min.js"></script>
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
