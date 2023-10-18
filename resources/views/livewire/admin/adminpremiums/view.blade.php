@section('title', __('Adminpremiums'))
<div class="container-fluid">
	<div class="row justify-content-center">

			<div class="col-md-12 my-2" id="view-js-live-pages">
			<div class="card">			
					
				<div class="card-header bg-transparent" >					
					<x-btnmore/>					
				</div>
				
				<div class="card-body">
						@include('livewire.admin.adminpremiums.modals')
				<div class="table-responsive">
					<table class="table table-striped table-sm" id="datatable">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Name</th>
								<th>Value</th>
								<th>Content</th>
								<th>Plan</th>
								<th>Subcription</th>
								<th>Time</th>
								<th>Bots</th>
								<th>Linkpay</th>
								<th>Active</th>
									<th class="text-center thead">Command</th>
							</tr>
						</thead>
						<tbody>
							@forelse($adminpremia as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 							
								<td data-record="{{ $row->id }}">{{ $row->name }}</td>
								<td>{{ $row->value }}</td>
								<td>{{ $row->content }}</td>
								<td>{{ $row->plan }}</td>
								<td>{{ $row->subcription }}</td>
								<td>{{ $row->time }}</td>
								<td>{{ $row->bots }}</td>
								<td>{{ $row->linkpay }}</td>
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
					<div class="float-end">{{ $adminpremia->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>