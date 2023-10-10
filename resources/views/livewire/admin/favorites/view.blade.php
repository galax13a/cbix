@section('title', __('Adminfavorites'))
<div class="container-fluid">
	<div class="row justify-content-center">

			<div class="col-md-12 my-2" id="view-js-live-pages">
			<div class="card">			
					
				<div class="card-header bg-transparent" >					
					<x-btnmore/>					
				</div>
				
				<div class="card-body">
						@include('livewire.admin.favorites.modals')
				<div class="table-responsive">
					<table class="table table-striped table-sm" id="datatable">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Name</th>
								<th>Url</th>
								<th>Pic</th>
								<th>Active</th>
								<th class="text-center thead"><i class='bx bx-id-card' ></i></th>
							</tr>
						</thead>
						<tbody>
							@forelse($adminfavorites as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td data-record="{{ $row->id }}">{{ $row->name }}</td>
								<td>{{ $row->url }}</td>
								<td>{{ $row->pic }}</td>
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
					<div class="float-end">{{ $adminfavorites->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>