@extends('layouts.app')
@section('title', __('Dashboard'))
@section('content')
<div class="container-fluid">
<div class="row justify-content-center">
	<div class="col-md-12 py-1">
		<div class="card border-0">
			<div class="card-header1 mx-2 my-2"><h3><span class="text-center fa fa-home"></span> @yield('title')</h3></div>
			<div class="card-body">
			     {{-- Login users --}}							
				 <div class="row w-100 h-100">
					@if(auth()->guest())
					<h1>Home</h1>
					@else
						<x-ComCardHome /> {{-- Componente para usuarios registrados --}}
					@endif
				</div>
				
	</div>
</div>
</div>
@endsection