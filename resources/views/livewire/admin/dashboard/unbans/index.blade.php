@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">

            @if (auth()->user()->can('admin.unbans'))
            <!-- El usuario tiene permiso para ver la página de unbans -->
            <a href="{{ route('admin.unbans') }}">Unban Requests</a>
        @else
            <!-- El usuario NO tiene permiso para ver la página de unbans -->
            <p>You do not have permission to view Unban Requests.</p>
        @endif
        

            @livewire('unbans_admin')
        </div>     
    </div>   
</div>
@endsection