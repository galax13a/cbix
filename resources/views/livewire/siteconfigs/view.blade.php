@section('title', __('Siteconfigs'))
<div class="container-fluid">
	<div class="row justify-content-center">

			<div class="col-md-12 my-2" id="view-js-live-pages">
			<div class="card">			
					
				<div class="card-header bg-transparent" >					
					<x-btnmore/>					
				</div>
				
				<div class="card-body">
						@include('livewire.siteconfigs.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Name</th>
								<th>Idioma</th>
								<th>Crm</th>
								<th>Apps</th>
								<th>Thumbnail</th>
								<th>Localimg</th>
								<th>S3Amazon</th>
								<th>S3Google</th>
								<th>Siteupkeep</th>
								<th>Code Google Anality</th>
								<th>Code Head Front</th>
								<th>Code Head Back</th>
								<th>Code Body Front</th>
									<th class="text-center thead">Command</th>
							</tr>
						</thead>
						<tbody>
							@forelse($siteconfigs as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->name }}</td>
								<td>{{ $row->idioma }}</td>
								<td>{{ $row->crm }}</td>
								<td>{{ $row->apps }}</td>
								<td>{{ $row->thumbnail }}</td>
								<td>{{ $row->localimg }}</td>
								<td>{{ $row->s3amazon }}</td>
								<td>{{ $row->s3google }}</td>
								<td>{{ $row->siteupkeep }}</td>
								<td>{{ $row->code_google_anality }}</td>
								<td>{{ $row->code_head_front }}</td>
								<td>{{ $row->code_head_back }}</td>
								<td>{{ $row->code_body_front }}</td>
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
					<div class="float-end">{{ $siteconfigs->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>