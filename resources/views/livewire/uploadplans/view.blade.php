@section('title', __('Uploadplans'))
<div class="container-fluid">
	<div class="row justify-content-center">

			<div class="col-md-12 my-2" id="view-js-live-pages">
			<div class="card">			
					
				<div class="card-header bg-transparent" >					
					<x-btnmore/>					
				</div>
				
				<div class="card-body">
						@include('livewire.uploadplans.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Name</th>
								<th>Megas</th>
								<th>Price Any</th>
								<th>Price Mes</th>
								<th>Des Es</th>
								<th>Des En</th>
								<th>Plan Filex</th>
								<th>Plan</th>
								<th>Active</th>
									<th class="text-center thead">Command</th>
							</tr>
						</thead>
						<tbody>
							@forelse($uploadplans as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td data-record="{{ $row->id }}">{{ $row->name }}</td>
								<td>{{ $row->megas }}</td>
								<td>{{ $row->price_any }}</td>
								<td>{{ $row->price_mes }}</td>
								<td>{{ $row->des_es }}</td>
								<td>{{ $row->des_en }}</td>
								<td>{{ $row->plan_filex }}</td>
								<td>{{ $row->plan }}</td>
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
					<div class="float-end">{{ $uploadplans->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>