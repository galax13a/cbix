@extends('layouts.app')
@section('content')
<x-nav-app-admin />
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('categors')
        </div>     
    </div>   
</div>
@endsection