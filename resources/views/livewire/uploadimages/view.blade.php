@section('title', __('Uploadimages'))
<div class="container-fluid">
	<div class="row justify-content-center">

			<div class="col-md-12 my-2" id="view-js-live-pages">
			<div class="card">			
					
				<div class="card-header bg-transparent" >					
					<x-btnmore/>					
				</div>
				
				<div class="card-body">
						@include('livewire.uploadimages.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Uploadfolder Id</th>
								<th>Name</th>
								<th>Size</th>
								<th>Url</th>
								<th>Extension</th>
									<th class="text-center thead">Command</th>
							</tr>
						</thead>
						<tbody>
							@forelse($uploadimages as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->uploadfolder->name }}</td>
								<td>{{ $row->name }}</td>
								<td>{{ $row->size }}</td>
								<td>{{ $row->url }}</td>
								<td>{{ $row->extension }}</td>
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
					<div class="float-end">{{ $uploadimages->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>