@section('title', __('Adminsettings'))
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
								<th>Yoursex</th>
								<th>Pic</th>
								<th>Preferred Language</th>
								<th>Country</th>
								<th>Phone Number</th>
								<th>Bots</th>
								<th>Pagemaster Id</th>
								<th>Role Id</th>
									<th class="text-center thead">Command</th>
							</tr>
						</thead>
						<tbody>
							@forelse($adminsettings as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td data-record="{{ $row->id }}">{{ $row->name }}</td>
								<td>{{ $row->yoursex }}</td>
								<td>{{ $row->pic }}</td>
								<td>{{ $row->preferred_language }}</td>
								<td>{{ $row->country }}</td>
								<td>{{ $row->phone_number }}</td>
								<td>{{ $row->bots }}</td>
								<td>{{ $row->pagemaster->name }}</td>
								<td>{{ $row->role->name }}</td>
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
					<div class="float-end">{{ $adminsettings->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>