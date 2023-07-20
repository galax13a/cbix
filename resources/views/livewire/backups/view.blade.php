@section('title', __('Backups'))
<div class="container-fluid">
	<div class="row justify-content-center">

			<div class="col-md-12 my-2" id="view-js-live-pages">
			<div class="card">			
					
				<div class="card-header bg-transparent" >					
					<x-btnmore/>					
				</div>
				
				<div class="card-body">


					<h1>Backups</h1>

					<div class="mb-4">
						<button wire:click="backup" class="btn btn-primary">Crear Backup</button>
					</div>
			
					<h2>Listado de Backups</h2>
			
					<table class="table">
						<thead>
							<tr>
								<th>Nombre de Archivo</th>
								<th>Fecha de Creación</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($backups as $backup)
								<tr>
									<td>{{ $backup->name }}</td>
									<td>{{ $backup->created_at }}</td>
									<td>
										<a href="{{ $backup->fileurl }}" class="btn btn-primary">Descargar</a>
										<button wire:click="restoreBackup({{ $backup->id }})" class="btn btn-warning" onclick="return confirm('¿Estás seguro de que deseas restaurar este backup?')">Restaurar</button>
										<button wire:click="deleteBackup({{ $backup->id }})" class="btn btn-danger">Eliminar</button>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>

									
					<div class="float-end">{{ $backups->links() }}</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>