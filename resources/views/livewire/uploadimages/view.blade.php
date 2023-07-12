@section('title', __('Uploadimages'))
<div class="container-fluid">
	<div class="row justify-content-center">

			<div class="col-md-12 my-2" id="view-js-live-pages">
			<div class="card">			
					
				<div class="card-header bg-transparent" >					
					<x-btnmore/>					
				</div>
				
				<div class="card-body">
						@include('livewire.uploadimages.modals')
				<div class="table-responsive">
					<table class="table >
						<thead class="thead">
							<tr class="text-center"> 
								<td>#</td> 
								<th>Folder</th>
								<th>Name</th>
								<th>Size</th>
								<th>Pic</th>
								<th>Url</th>
								<th>Ext</th>
									<th class="text-center thead">Command</th>
							</tr>
						</thead>
						<tbody>
							@forelse($uploadimages as $row)
							<tr class="text-center">
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->uploadfolder->name }}</td>
								<td>{{ $row->name }}</td>
								<td>
									@php
										$fileSize = $row->size / 1024;
									@endphp
									@if ($fileSize > 1024)
										{{ number_format($fileSize / 1024, 3) }} MB
									@else
										{{ number_format($fileSize, 1) }} KB
									@endif
								</td>
								
								<td>  
									@php
									$extension = $row->extension;
									$fileName = str_replace('_original', '', $row->name);
									$imageUrl = str_replace('_original', '_230', $row->url);
								@endphp
								
								<img class=" rounded-5 shadow-sm img-thumbnail" src="{{ url($imageUrl ) }}" alt="{{ $fileName }}" style="width: 66px; height: 66px;">
								
								</td>
								
								<td><a class="custom-link p-1 punter shadow-sm rounded-3" href="{{ url($row->url) }}" target="_blank"> 🔎</a></td>

								<td>{{ $row->extension }}</td>
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
					<div class="float-end">{{ $uploadimages->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>