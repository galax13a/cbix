@section('title', __('Estudiomodelos'))
<div class="container-fluid">
	<div class="row justify-content-center">

			<div class="col-md-12 my-2" id="view-js-live-pages">
			<div class="card">			
					
				<div class="card-header bg-transparent" >					
					<x-btnmore/>					
				</div>
				
				<div class="card-body">
						@include('livewire.estudiomodelos.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Estudio Id</th>
								<th>Modelo Id</th>
									<th class="text-center thead">Command</th>
							</tr>
						</thead>
						<tbody>
							@forelse($estudiomodelos as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->estudio->name }}</td>
								<td>{{ $row->modelo->name }}</td>
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
					<div class="float-end">{{ $estudiomodelos->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>