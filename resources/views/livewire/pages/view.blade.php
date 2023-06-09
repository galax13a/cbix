@section('title', __('Pages'))
<div class="container-fluid">
	<div class="row justify-content-center">

			<div class="col-md-12 my-2" id="view-js-live-pages">
			<div class="card">			
					
				<div class="card-header bg-transparent" >					
					<x-btnmore/>					
				</div>
				
				<div class="card-body">
						@include('livewire.pages.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Name</th>
								<th>Title</th>
								<th>Slug</th>
								<th>Content</th>
								<th>Meta Title</th>
								<th>Meta Keywords</th>
								<th>Meta Description</th>
								<th>Featured Image</th>
								<th>Active</th>
									<th class="text-center thead">Command</th>
							</tr>
						</thead>
						<tbody>
							@forelse($pages as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->name }}</td>
								<td>{{ $row->title }}</td>
								<td>{{ $row->slug }}</td>
								<td>{{ $row->content }}</td>
								<td>{{ $row->meta_title }}</td>
								<td>{{ $row->meta_keywords }}</td>
								<td>{{ $row->meta_description }}</td>
								<td>{{ $row->featured_image }}</td>
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
					<div class="float-end">{{ $pages->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>