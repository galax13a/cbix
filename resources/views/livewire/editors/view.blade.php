@section('title', __('Editors'))
<div class="container-fluid">
	<div class="row justify-content-center">

			<div class="col-md-12 my-2" id="view-js-live-pages">
			<div class="card">			
					
				<div class="card-header bg-transparent" >					
					<x-btnmore/>					
				</div>
				
				<div class="card-body">
						@include('livewire.editors.modals')
						<h2>Themas Builder</h2>
				<div class="table-responsive">
					<table class="table table-dark table-striped">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Name</th>
								<th>Pic</th>
								<th>Slug</th>
								<th>Htmlen</th>
								<th>Htmles</th>
								<th>Type</th>
									<th class="text-center thead">Command</th>
							</tr>
						</thead>
						<tbody>
							@forelse($editors as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td data-record="{{ $row->id }}">{{ $row->name }}</td>
								<td>{{ $row->pic }}</td>
								<td>{{ $row->slug }}</td>
								<td>{{ $row->htmlen }}</td>
								<td>{{ $row->htmles }}</td>
								<td>{{ $row->type }}</td>
								<td width="90">
									<div class="btn-group">
										<button class="border border-0 shadow rounded-4 m-1"><i class="bi bi-pencil-square"></i></button>										
										<button class="border border-0 shadow rounded-4 m-1"><i class="bi bi-file-earmark-plus"></i></button>
										<button class="border border-0 shadow rounded-4 m-1"><i class="bi bi-archive"></i></button>									
										
									  </div>

								</td>
							</tr>
							@empty
							<tr>
								<td class="text-center" colspan="100%">No data Found </td>
							</tr>
							@endforelse
						</tbody>
					</table>						
					<div class="float-end">{{ $editors->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>