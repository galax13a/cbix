@extends('layouts.app')
@section('content')
    @push('scripts-head')
        <link href="{{ asset('cs/select2.min.css') }}" rel="stylesheet" />
        <link type="text/css" rel="stylesheet" href="{{ asset('cs/jquery-ui.css') }}">
    @endpush

    @push('scripts-body')
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('js/select2.min.js') }}" defer></script>
    @endpush
    <nav class="navapp shadow-lg mt-0 fw-bold">
        <ul>
            <li class="custom-link p-1 "><a class="p-2" href={{ url('/modelos') }}>💜 Models</a></li>
            <li class="custom-link p-1"><a class="p-2" href="#">📂 Studios</a></li>
            <li class="custom-link p-1"><a class="p-2" href="{{ url('/apichaturs') }}">🔱 Api Chaturbate</a></li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @livewire('estudios')
            </div>
        </div>
    </div>
@endsection
