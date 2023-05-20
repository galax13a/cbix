@section('title', __('Pages'))
<div class="container-fluid">
	<div class="row justify-content-center">
		
		<div class="col-md-12 my-2" id="view-js-live-pages">
			<div class="card">			

				<div class="card-header" >				
					<x-btnmore/>					
				</div>
				
				<div class="card-body">
						@include('livewire.pages.modals')
				<div class="table-responsive">
					<table class="table able-borderless shadow-sm">
						<thead class="table-dark rounded">
							<tr> 
								<td>#</td> 
								<th>User</th>
								<th>Name</th>
								<th>Url</th>
								<th class="text-center thead">Active</th>
								<th class="text-center thead">Command</th>
							</tr>
						</thead>
						<tbody>
							@forelse($pages as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td class="text-wrap text-break">{{ $row->user->name }}</td>
								<td class="text-wrap text-break">{{ $row->name }}</td>
								<td class="text-wrap text-break">{{ $row->url }}</td>

								<td class="text-center p-3">								
									<x-com-active :active="$row->active" />
								</td>
								
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