@section('title', __('Adminapps'))
<div class="container-fluid">

	<div class="row">
		
		<div class="col-12">
				<h1>Apps WC > </h1>
		</div>

		<div class="col-2">

			@foreach($adminapps as $adminapp)
			<div class="link-container shadow">						
				<a class="text-capitalize" href="{{ url($adminapp->url) }}" target="{{ $adminapp->target }}" >
					{!! $adminapp->icon !!}
					{{ $adminapp->name }}
				</a>
				<div class="font-monospace">
					{!! $adminapp->en !!}
				</div>
				
			</div>
		@endforeach
		</div>
		

	</div>

	<div class="row justify-content-center d-none">

			<div class="col-md-12 my-2" id="view-js-live-pages">
			<div class="card">			
					
				<div class="card-header bg-transparent" >					
					<x-btnmore/>					
				</div>
				
				<div class="card-body">
						@include('livewire.adminapps.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Name</th>
									<th class="text-center thead">Command</th>
							</tr>
						</thead>
						<tbody>
							@forelse($adminapps as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td data-record="{{ $row->id }}">{{ $row->name }}</td>
								<td width="90">
											<x-btncrud> 
											<x-slot name="id_editar">{{$row->id}}</x-slot>
										</x-btncrud>						
								</td>
							</tr>
							@empty
							<tr>
								<td class="text-center" colspan="100%">No data Found </td>
							</tr>
							@endforelse
						</tbody>
					</table>						
					<div class="float-end">{{ $adminapps->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<style>
		
		.link-container {
    padding: 20px 30px;  /* Espacio interno grande para hacerlo notorio */
    border: 2px solid #007BFF;  /* Borde azul, puedes cambiar el color si lo deseas */
    border-radius: 10px;  /* Bordes redondeados */
    display: inline-block;  /* Para que tome el tamaño del contenido */
    margin: 20px;  /* Espacio externo para separarlo de otros elementos */
    background-color: #f8f9fa;  /* Un color de fondo suave */
    transition: background-color 0.3s;  /* Efecto de transición al pasar el ratón por encima */
}

.link-container:hover {
    background-color: #e9ecef;  /* Cambia el color de fondo al pasar el ratón por encima */
}

.link-container a {
    font-size: 20px;  /* Tamaño de letra grande */
    color: #007BFF;  /* Color del texto en azul */
    text-decoration: none;  /* Remueve el subrayado del enlace */
}

.link-container a:hover {
    text-decoration: underline;  /* Subraya el texto al pasar el ratón por encima */
}

	</style>

</div>