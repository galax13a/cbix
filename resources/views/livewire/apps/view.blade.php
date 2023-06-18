@section('title', __('Apps'))
<div class="container-fluid">
	<div class="row justify-content-center">

			<div class="col-md-12 my-2" id="view-js-live-pages">
			<div class="card">			
					
				<div class="card-header bg-transparent" >					
					<x-btnmore/>	
					
					<li class="nav-item">
						<a href="{{ url('/admin/apps/estudios') }}" class="nav-link">📂 Estudios</a>
					</li>
				</div>
				
				<div class="card-body">
						@include('livewire.apps.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Name</th>
								<th>Description</th>
								<th>Is Approved</th>
								<th>Apps Categors Id</th>
								<th>Meta Title</th>
								<th>Meta Description</th>
								<th>Meta Keywords</th>
								<th>Active</th>
									<th class="text-center thead">Command</th>
							</tr>
						</thead>
						<tbody>
							@forelse($apps as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->name }}</td>
								<td>{{ $row->description }}</td>
								<td>{{ $row->is_approved }}</td>
								<td>{{ $row->apps_categors->name }}</td>
								<td>{{ $row->meta_title }}</td>
								<td>{{ $row->meta_description }}</td>
								<td>{{ $row->meta_keywords }}</td>
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
					<div class="float-end">{{ $apps->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>