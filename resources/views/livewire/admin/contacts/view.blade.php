@section('title', __('Admincontacts'))
<div class="container-fluid">
	<div class="row justify-content-center">

			<div class="col-md-12 my-2" id="view-js-live-pages">
			<div class="card">			
					
				<div class="card-header bg-transparent" >					
					<x-btnmore/>					
				</div>
				
				<div class="card-body">
						@include('livewire.admin.contacts.modals')
				<div class="table-responsive">
					<table class="table table-striped table-sm display" id="datatable">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Name</th>
								<th>Nick</th>
								<th>Type</th>
								<th>Active</th>
								<th>Email</th>
								<th>Birthday</th>
								<th>Code</th>
								<th>Whatsapp</th>
								<th>Skype</th>
								<th>Telegram</th>
								<th>Tiktok</th>
								<th>Facebook</th>
								<th>Snapchat</th>
								<th>X</th>
								<th>Discord</th>
								<th>Other</th>
								<th class="text-center thead">Cmd</th>
							</tr>
						</thead>
						<tbody>
							@forelse($admincontacts as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td data-record="{{ $row->id }}">{{ $row->name }}</td>
								<td data-record="{{ $row->id }}">{{ $row->name }}</td>
								<td>{{ $row->admincontacttag->name }}</td>
								<td class="text-center"><x-com-active :active="$row->active" /></td>
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

	<style>
	

	</style>

<script>
    $(document).ready(function() {
        //document.querySelector("#datatable_paginate").style.display = "none";
		$('#datatable').DataTable({
					dom: 'Bfrtip',
					buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
					responsive: true,
					autoWidth: false,
					paging: false,
					searching: true,
				});
        Livewire.on('updateDataTable', function() {			
                    setTimeout(function() {
						$('#datatable').DataTable({
					dom: 'Bfrtip',
					buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
					responsive: true,
					autoWidth: false,
					paging: false,
					searching: true,
				});			
					alert('Update Data Table');
                }, 1000); 				     
        });
        Livewire.hook('message.received', () => {
            if ($.fn.DataTable.isDataTable('#datatable')) {
				$('#datatable').DataTable().destroy();
			}
				$('#datatable').DataTable({
					dom: 'Bfrtip',
					buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
					responsive: true,
					autoWidth: false,
					paging: false,
					searching: true,
				});
			});
        });

    </script>

</div>