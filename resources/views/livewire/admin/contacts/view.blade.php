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

				<div class="table-responsive" style="max-width: 100%; min-width:460px;" >
					<table class="table align-middle" id="datatable">
						<thead class="thead text-center">
							<tr> 
								<th>#</td> 
								<th>Name</th>
								<th>Nick</th>
								<th>Type</th>
								<th class="desktop-only">Active</th>
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
						<tbody class="text-center">
							@forelse($admincontacts as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td data-record="{{ $row->id }}">{{ $row->name }}</td>
								<td data-record="{{ $row->id }}">{{ $row->nick_name }}</td>
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
					<div class="float-end">{{ $admincontacts->links('tema-paginado') }}</div>
					
				</div>
			
				</div>
			</div>
		</div>
	</div>

	<style>
		
@media (max-width: 768px) {
   
    .table-responsive td,
    .table-responsive th {
        display: block;
    }

    .table-responsive tr {
        border: 1px solid #ddd;
        margin-bottom: 10px;
        padding: 10px;
        background-color: #f9f9f9;
    }

    .table-responsive th {
        display: none;
    }
}

	nav.table-responsive::before {
    content: none; 
    width: auto; 
    height: auto; 
    bottom: auto; 
    left: auto; 
    border-radius: initial; 
    box-shadow: none; 
}

.table-responsive.nav {

    height: 56px;
    background: var(--light);
    padding: 0 24px 0 0;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    z-index: 1000;
    position: relative;
    border-bottom: 1px solid #ddd;
}
	</style>

<script>

</script>

</div>