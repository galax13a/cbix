@extends('layouts.app')
@section('content')
<nav class="navapp shadow-lg mt-0 fw-bold">
    <ul>
      <li class="custom-link p-1 "><a class="p-2" href={{ url('/modelos') }}>💜 Models</a></li>
      <li class="custom-link p-1"><a class="p-2"  href="#">📂 Studios</a></li>
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