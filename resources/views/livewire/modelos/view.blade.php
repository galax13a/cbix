@section('title', __('Modelos'))
<div class="container-fluid">
	<div class="row justify-content-center">

			<div class="col-md-12 my-2" id="view-js-live-pages">
			<div class="card">			
					
				<div class="card-header bg-transparent" >					
					<x-btnmore/>					
				</div>
				
				<div class="card-body">
						@include('livewire.modelos.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Name</th>
								<th>Nick</th>
								<th>Nick2</th>
								<th>Email</th>
								<th>Dni</th>
								<th>Wsp</th>
								<th>Porce</th>
								<th>Typemodelo Id</th>
								<th>Img</th>
								<th>Active</th>
									<th class="text-center thead">Command</th>
							</tr>
						</thead>
						<tbody>
							@forelse($modelos as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->name }}</td>
								<td>{{ $row->nick }}</td>
								<td>{{ $row->nick2 }}</td>
								<td>{{ $row->email }}</td>
								<td>{{ $row->dni }}</td>
								<td>{{ $row->wsp }}</td>
								<td>{{ $row->porce }}</td>
								<td>{{ $row->typemodelo->name }}</td>
								<td>{{ $row->img }}</td>
								<td class="text-center"><x-com-active :active="$row->active" /></td>
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
					<div class="float-end">{{ $modelos->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>