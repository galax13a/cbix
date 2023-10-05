@extends('layouts.tema.appadmin')
@push('scripts-body')
@endpush
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('adminguests')
        </div>     
    </div>   
</div>
@endsection