@extends('layouts.tema.appadmin')
@push('scripts-head')


@endpush
@push('scripts-body')

<script>
    </script>

@endpush
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('admincontacts')
        </div>     
    </div>   
</div>
@endsection
