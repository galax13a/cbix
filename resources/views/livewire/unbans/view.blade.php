@section('title', __('Unbans'))
<div class="container-fluid">
	<div class="row justify-content-center">

			<div class="col-md-12 my-2" id="view-js-live-pages">
			<div class="card">			
					
				<div class="card-header bg-transparent" >					
					<x-btnmore/>					
				</div>
				
				<div class="card-body">
						@include('livewire.unbans.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr class="text-center"> 
								<td>#</td> 
								<th>Sent By</th>
								<th>Support By</th>
								<th>Comment</th>
								<th>Reply Comment</th>
								<th>Email</th>
								<th>Status</th>
								<th class="text-center thead">Command</th>
							</tr>
						</thead>
						<tbody>
							@forelse($unbans as $row)
							<tr class="text-center" >
								<td>{{ $loop->iteration }}</td> 
								<td data-record="{{$row->id}}">{{ $row->user_sent_by->name }}</td>
								<td>
									<strong>
									{{ $row->user_resolved_by->name ?? '🟨 Without resolving' }}
								</strong>
								</td>
								<td>
									<span class="d-inline-block text-truncate" style="max-width: 250px;">
										{{ $row->comment }}
									</span>									
								</td>
								<td>									
									<span class="d-inline-block text-truncate" style="max-width: 150px;">
										{{ $row->reply_comment }}
									</span>									
									
								</td>
								<td>{{ $row->email }}</td>
								<td>
									<span class="badge text-black text-bold bg-warning text-uppercase shadow border-2">
										{{ $row->status }}
									</span>
									
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
					<div class="float-end">{{ $unbans->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>