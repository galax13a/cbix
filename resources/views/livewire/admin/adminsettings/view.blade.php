@section('title', __('Adminsettings'))
<div class="container-fluid">
    <div class="row justify-content-center">
	
        <div class="col-md-12 my-2" id="view-js-live-pages">         
			@include('livewire.admin.adminsettings.modals')
			@include('livewire.admin.adminsettings.codephone')
                @if (!$adminsettings)
              
					 @if (!$adminsettings)
					 <button id="btn-new" type="button" class="btn btn-icon shadow-md m-2 fs-1" data-bs-toggle="modal" data-bs-target="#createDataModal">
						<strong>Configure Settings 📝</strong> 
						</button> 
						<h3>Complete your profile and earn <mark class="rounded-3 shadow"> <b> 25 Credits </b> </mark> for bot users</h3>
				@endif
                @else
			   
                    <div class="card">
                        <div class="card-header bg-transparent" wire:key='edit-settings'>
                            <h2>Edit Profile</h2>
                        </div>
                        <div class="card-body">
							<form>
								<div class="form-group">
									<label for="name">Nickname so they know you</label>
									<input wire:model.defer="name" type="text" class="form-control" id="name" placeholder="Name">
									@error('name') <span class="error text-danger">{{ $message }}</span> @enderror
								</div>
			
								<div class="form-group">
									<label for="pic">Your Gender</label>
									<select class="form-select" wire:model="yoursex">
										<option selected value="">Select Gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										<option value="Transgender">Transgender</option>
										<option value="bi sexual">Bi Sexual</option>
										<option value="female gay">Female Gay</option>
										<option value="male gay">Male Gay</option>
										<option value="Genderfluid">Genderfluid</option>
										<option value="Intersex">Intersex</option>
										<option value="Gender not binary">Gender Not Binary</option>
									</select>
									@error('yoursex') <span class="error text-danger">{{ $message }}</span> @enderror
									
								</div>
								<div class="form-group d-none">
									<label for="pic"></label>
									<input wire:model.defer="pic" type="text" class="form-control" id="pic" placeholder="Pic">@error('pic') <span class="error text-danger">{{ $message }}</span> @enderror
								</div>
								<div class="form-group">
									
									<label for="preferred_language">Preferred language</label>
												<select class="form-select" wire:model="preferred_language">
													<option value="en">English</option>
													<option value="es">Spanish</option>					
													<option value="fr">French</option>
													<option value="it">Italian</option>
													<option value="de">German</option>
												</select>
												
									@error('preferred_language') <span class="error text-danger">{{ $message }}</span> @enderror
								</div>
								<div class="form-group">
								   
									<label for="country">Country where you are from</label>
									@include('livewire.admin.adminsettings.country')                   
									
								</div>
								<div class="form-group">
									<label for="phone_number">Whatsapp phone number with country code, sample <b>+18143008525</b>  <a href="javascript:void(0)"  data-bs-toggle="modal" data-bs-target="#phonecode">Code Phone Here</a> </label>
									<input wire:model.defer="phone_number" type="text" class="form-control" id="phone_number" placeholder="Phone Number">@error('phone_number') <span class="error text-danger">{{ $message }}</span> @enderror
								</div>
								<div class="form-group d-none">
									<label for="bots"></label>
									<input wire:model.defer="bots" type="text" class="form-control" id="bots" placeholder="Bots">@error('bots') <span class="error text-danger">{{ $message }}</span> @enderror
								</div>
							 
									   <label for="table">choose your favorite page</label>
										   <div class="form-group">
											<x-com-select-table table-name="pagemasters" 
											id="pagemaster_id" display-name="name" >
											<x-slot name="display">Webmaster Sexcam. Favorite</x-slot>
										</x-com-select-table>
											@error('pagemaster_id') <span class="error text-danger">{{ $message }}</span> @enderror
										</div>
							 
									   <label for="table"></label>
										   <div class="form-group">
											<x-com-select-table table-name="roles" id="role_id" display-name="name" />@error('role_id') <span class="error text-danger">{{ $message }}</span> @enderror
										</div>
			
							</form>
                            <div class="modal-footer">
                          
                                <button id="btn-update" type="button" wire:click.prevent="update()"
                                    class="btn btn-icon shadow-lg m-2">Save ✅</button>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
