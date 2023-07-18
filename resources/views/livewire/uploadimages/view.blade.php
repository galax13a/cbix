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


						<div class="container mb-2">
							<div class="row align-items-start">
								@foreach ($folders as $folder )
								<div class="col">
									<strong 
									wire:click="select_folder({{$folder->id}})"
									class="p-1 shadow m-1 rounded-3 punter custom-link">
										📂	{{$folder->name}}
										[ {{$this->getImagesCount($folder->id)}} ]
										
									</strong>
								</div>		
								@endforeach							  
							 					
							</div>
						</div>	

				<div class="table-responsive">
					<table class="table ">
						<thead class="thead">
							<tr class="text-center"> 
								<td>#</td> 
								<th>Folder</th>
								<th>Name</th>
								<th>Size</th>
								<th>Pic</th>
							
								<th>Ext</th>
									<th class="text-center thead">Command</th>
							</tr>
						</thead>
						<tbody>
							@forelse($uploadimages as $row)
							<tr class="text-center">
								<td>{{ $loop->iteration }}</td> 
								<td>
									<strong class="badge bg-primary shadow-sm border-warning">
									{{ $row->uploadfolder->name }}
								</strong>
								</td>
								<td data-record="{{ $row->id }}">
									{{ $row->name }}</td>
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
									//$fileName = str_replace('_original', '', $row->name);
									$fileName =  $row->name;
									//$imageUrl = str_replace('_original', '_230', $row->url);
								@endphp
								
								<img class=" rounded-5 shadow-sm img-thumbnail" src="{{ url($row->url ) }}" alt="{{ $fileName }}" style="width: 66px; height: 66px;">
								
								</td>
								<td>
								{{ $row->extension }}
								 <a class="custom-link p-1 punter shadow-sm rounded-3" href="{{ url($row->url) }}" target="_blank"> 🔎</a>
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
					<div class="float-end">{{ $uploadimages->links() }}</div>
					</div>
				</div>

				<table class="table">
					<thead>
						<tr>
							<th>Total Imagens</th>
							<th>Total Size</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>{{ \App\Models\Uploadimage::count() }}</td>
							<td>
								<strong>
								{{ formatBytes(\App\Models\Uploadimage::sum('size')) }}
							</strong>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		
			@php
			function formatBytes($bytes, $precision = 2) { 
				$units = array('B', 'KB', 'MB', 'GB', 'TB'); 
		
				$bytes = max($bytes, 0); 
				$pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
				$pow = min($pow, count($units) - 1); 
				$bytes /= pow(1024, $pow);		
				return round($bytes, $precision) . ' ' . $units[$pow]; 
			} 
			@endphp

			</div>
		</div>
	</div>
</div>