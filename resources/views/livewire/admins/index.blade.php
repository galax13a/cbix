@extends('layouts.tema.apphome')
@push('scripts-body')

@endpush
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('admins')
        </div>     
    </div>   
</div>
@endsection