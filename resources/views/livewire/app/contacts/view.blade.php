@section('title', __('Admincontacts'))
<div class="container-fluid">
	<div class="row justify-content-center">

			<div class="col-md-12 my-2" id="view-js-live-pages">
			<div class="card">			
					
				<div class="card-header bg-transparent" >					
					<x-btnmore/>					
				</div>
				
				<div class="card-body">
						@include('livewire.app.contacts.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Name</th>
								<th>Nick Name</th>
								<th>Email</th>
								<th>Birthday</th>
								<th>Phone Code</th>
								<th>Whatsapp</th>
								<th>Skype</th>
								<th>Telegram</th>
								<th>Tiktok</th>
								<th>Facebook</th>
								<th>Snapchat</th>
								<th>X</th>
								<th>Discord</th>
								<th>Other</th>
								<th>Admincontacttag Id</th>
									<th class="text-center thead">Command</th>
							</tr>
						</thead>
						<tbody>
							@forelse($admincontacts as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td data-record="{{ $row->id }}">{{ $row->name }}</td>
								<td data-record="{{ $row->id }}">{{ $row->name }}</td>
								<td>{{ $row->email }}</td>
								<td>{{ $row->birthday }}</td>
								<td>{{ $row->phone_code }}</td>
								<td>{{ $row->whatsapp }}</td>
								<td>{{ $row->skype }}</td>
								<td>{{ $row->telegram }}</td>
								<td>{{ $row->tiktok }}</td>
								<td>{{ $row->facebook }}</td>
								<td>{{ $row->snapchat }}</td>
								<td>{{ $row->x }}</td>
								<td>{{ $row->discord }}</td>
								<td>{{ $row->other }}</td>
								<td>{{ $row->admincontacttag->name }}</td>
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
					<div class="float-end">{{ $admincontacts->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>