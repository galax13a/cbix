@section('title', __('Biocompones'))
<div class="container-fluid">
	<div class="row justify-content-center">

			<div class="col-md-12 my-2" id="view-js-live-pages">
			<div class="card">			
					
				<div class="card-header bg-transparent" >					
					<x-btnmore/>					
				</div>
				
				<div class="card-body">
						@include('livewire.admin.biocompones.modals')
				<div class="table-responsive">
					<table class="table table-striped table-sm" id="datatable">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Name</th>
								<th>Img</th>
								<th>Code</th>
								<th>Js</th>
								<th>Biocategorcompone Id</th>
								<th>Active</th>
									<th class="text-center thead">CRUD</th>
							</tr>
						</thead>
						<tbody>
							@forelse($biocompones as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td data-record="{{ $row->id }}">{{ $row->name }}</td>
								<td>{{ \Illuminate\Support\Str::limit($row->img, 33) }}</td>
								<td>{{ \Illuminate\Support\Str::limit($row->code, 100) }}</td>


								<td>{{ $row->js }}</td>
								<td>{{ $row->biocategorcompone->name }}</td>
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
					<div class="float-end">{{ $biocompones->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>