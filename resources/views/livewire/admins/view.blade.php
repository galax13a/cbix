@section('title', __('Admins'))
@section('title_app', __('app.nav_dash'))
<div class="container-fluid mb-0" >
	<div class="row">
		<div class="col-12 col-md-6 text-primary">
			<h5>{{ __('app.welcome') }} </h5>
			<a href="">#New</a> <a href="">| #Broadcasts</a> 
			<a href="">| #Latinas</a> <a href="">| #Submit by users</a>
		</div>	
		<div class="col-12 col-md-6 text-center rounded-3 p-2 bg-dark mb-1" title="Generate Bios">
			<a href="javascript:void(0)">
				<img class="img-fluid" src="{{url('images/banner-header.png')}}" alt="create profile chaturbate halloween">
			</a>
		</div>	
	 
	<x-adminapp.navdasboard/>

	<div class="row justify-content-center ">

			<div class="col-md-12 my-2" id="view-js-live-pages">
			<div class="card">								
				<div class="card-header" >
					<x-btnmore/>					
				</div>
				
				<div class="card-body">
						@include('livewire.admins.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Name</th>
								<th>Active</th>
								<th>Pic</th>
								<th class="text-center thead">Command</th>
							</tr>
						</thead>
						<tbody>
							@forelse($admins as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td data-record="{{ $row->id }}">{{ $row->name }}</td>
								<td class="text-center"><x-com-active :active="$row->active" /></td>
								<td>{{ $row->pic }}</td>
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
					<div class="float-end">{{ $admins->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>