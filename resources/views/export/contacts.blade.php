<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export Contacts -  {{ config('app.name', 'AppX') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
</head>
<body>
    
<div class="container-fluid">
	<div class="row justify-content-center">

			<div class="col-md-12 my-2" id="view-js-live-pages">
			<div class="card">			
				<div class="card-header bg-transparent" >					
                        <h1>{{ config('app.name', 'AppX') }} | Export Contacts </h1>
				</div>				
				<div class="card-body">
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
								
							</tr>
							@empty
							<tr>
								<td class="text-center" colspan="100%">No data Found </td>
							</tr>
							@endforelse
						</tbody>
					</table>						
		
					
				</div>
			
				</div>
			</div>
		</div>
	</div>

</div>

<script>
    $(document).ready(function() {
     
            $('#datatable').DataTable({
                //dom: 'Bfrtip',
                dom: '<"top"lfB>rt<"bottom"ip>',
                lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
                responsive: true,
                autoWidth: false,
                paging: true,				    
                searching: true,
        
            });
        });

    </script>
    <style>
        .dataTables_wrapper .dataTables_length select {    
        padding-left: 26px;
        padding-right: 26px;     
        margin: 2px;
    }
    </style>
</body>
</html>