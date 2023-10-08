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
	

				<div class="table-responsive" >
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
								<th class="text-center thead"><i class='bx bxs-id-card'></i></th>
							</tr>
						</thead>
						<tbody class="text-center ">
							@forelse($admincontacts as $row)
							<tr class="fw-medium">
								<td>{{ $loop->iteration }}</td> 
								<td data-record="{{ $row->id }}">{{ $row->name }}</td>
								<td data-record="{{ $row->id }}">{{ $row->nick_name }}</td>
								<td>{{ $row->admincontacttag->name }}</td>
								<td class="text-center"><x-com-active :active="$row->active" /></td>
								<td> <span class="d-none d-md-inline d-md-none">Email : </span> {{ $row->email }}</td>
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
								<td  class="text-end">
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

/*
 ul.pagination {
    display: flex;
    list-style: none;
    padding: 0;
    justify-content: center;
    margin-top: 20px;
}

 ul.pagination li.page-item {
    margin: 0 2px;
}
 ul.pagination li.page-item.active span.page-link {
    background-color: purple; 
    color: #fff; 
    border-color: purple; 
}
 ul.pagination li.page-item:first-child,
 ul.pagination li.page-item:last-child {
    display: none;
}

 ul.pagination li.page-item button.page-link {
    color: #007bff;
    background-color: #fff;
    border: 1px solid #dee2e6; 
    border-radius: 4px;
    transition: background-color 0.3s, color 0.3s;
    padding: 5px 10px;
}

 ul.pagination li.page-item button.page-link:hover {
    background-color: #007bff; 
    color: #fff; 
}

 ul.pagination li.page-item button.page-link[rel="prev"],
 ul.pagination li.page-item button.page-link[rel="next"] {
    border: none;
    background-color: transparent;
    padding: 0;
    font-size: 18px;
    line-height: 1;
}

 ul.pagination li.page-item.active span.page-link {
    background-color: purple;
    color: #fff;
    border-color: purple;
	padding: 8px;
}

.table-responsive nav {
	 content: "";
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
*/
	</style>

<script>

</script>

</div>