@section('title', __('Stats'))
<div class="container-fluid">
	<div class="row justify-content-center">

			<div class="col-md-12 my-2" id="view-js-live-pages">
			<div class="card">			
					
				<div class="card-header bg-transparent" >					
					<x-btnmore/>					
				</div>
				
				<div class="card-body">
						@include('livewire.stats.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Name</th>
									<th class="text-center thead">Command</th>
							</tr>
						</thead>
						<tbody>
						
						</tbody>
					</table>						
			
					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>