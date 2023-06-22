@section('title', __('Supports'))
<div class="container-fluid">
	<div class="row justify-content-center">

			<div class="col-md-12 my-2" id="view-js-live-pages">
			<div class="card">			
					
				<div class="card-header bg-transparent" >					
					<x-btnmore/>					
				</div>
				
				<div class="card-body">
						@include('livewire.admin.dashboard.supports_admin.modals')
				<div class="table-responsive">
					<table class="table table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Sub</th>
								<th>Title</th>
								<th>Sent</th>
								<th>Support</th>
								<th>Message</th>
								<th>ReplyMsg</th>
								<th>Status</th>
								<th>Priority</th>
									<th class="text-center thead">Command</th>
							</tr>
						</thead>
						<tbody>
							@forelse($supports as $row)
							<tr>
								<td>
									<li
									class="shadow-sm rounded-3 p-1 text-danger m-1 fas fa-user2-secret fs-6">
									<span class=" badge text-dark ">{{ $loop->iteration }}</span>
								</li> 
								</td> 
								<td class="text-bold text-capitalize" >
								<strong class="p-1 m-1 shadow rounded-3">
									{{ $row->type_support }}
								</strong>
								</td>
								<td data-record="{{ $row->id }}">
									<strong class="text-uppercase">
									{{ $row->name }}
								</strong>
								</td>
								<td class="text-bold">
								<strong>
									{{ $row->user_sent_by->name }}
								</strong>
								</td>
								<td>
								
									{{ $row->user_support->name ?? '⭕️Resolving' }}
								</td>
								<td>{{ $row->message }}</td>
								<td>									
								
									@if ($row->reply_message)
									<p>{{ $row->reply_message }}</p>
								@else
									<button class="btn btn-dark btn-sm rounded-3 shadow-sm"
									wire:click="edit({{$row->id}})"
									@click="openwin36('updateDataModal')"
									>
									👉🏽Reply
									</button>
								@endif
								</td>
								<td class="text-center">
									<x-comstatus>
										<x-slot name="status">{{ $row->status ?? 'pending' }}</x-slot>
									</x-comstatus>
								</td>
								<td class="text-center">
									<x-compriority>
										<x-slot name="priority">{{ $row->priority ?? 'low' }}</x-slot>
									</x-compriority>
									{{ $row->priority }}
								</td>
								<td width="90">
											<x-btncrud> 
											<x-slot name="id_editar">{{$row->id}}
												<x-slot name="x_delete">delete-model</x-slot>
											</x-slot>
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
					<div class="float-end">{{ $supports->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>