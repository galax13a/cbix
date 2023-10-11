<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel"> New Adminsetting <mark> Free 25 Bots </mark></h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
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
            </div>
            <div class="modal-footer">
                <button id="btn-close" type="button" wire:click.prevent="cancel()" class="btn btn-icon shadow-lg m-2" data-bs-dismiss="modal">❌ Close</button>
                <button id="btn-store"  type="button" wire:click.prevent="store()" class="btn btn-icon shadow-lg m-2">Save ✅</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="updateDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Adminsetting</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="name"></label>
                        <input wire:model.defer="name" type="text" class="form-control" id="name" placeholder="Name">@error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="pic"></label>
                        <input wire:model.defer="pic" type="text" class="form-control" id="pic" placeholder="Pic">@error('pic') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="preferred_language"></label>
                        <input wire:model.defer="preferred_language" type="text" class="form-control" id="preferred_language" placeholder="Preferred Language">@error('preferred_language') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="country"></label>
                        <input wire:model.defer="country" type="text" class="form-control" id="country" placeholder="Country">@error('country') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone_number"></label>
                        <input wire:model.defer="phone_number" type="text" class="form-control" id="phone_number" placeholder="Phone Number">@error('phone_number') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="bots"></label>
                        <input wire:model.defer="bots" type="text" class="form-control" id="bots" placeholder="Bots">@error('bots') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                 
                           <label for="table"></label>
                               <div class="form-group">
                                <x-com-select-table table-name="pagemasters" id="pagemaster_id" display-name="name" />@error('pagemaster_id') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                 
                           <label for="table"></label>
                               <div class="form-group">
                                <x-com-select-table table-name="roles" id="role_id" display-name="name" />@error('role_id') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button id="btn-close" type="button" wire:click.prevent="cancel()" class="btn btn-icon shadow-lg m-2" data-bs-dismiss="modal">❌ Close</button>
                <button id="btn-update" type="button" wire:click.prevent="update()" class="btn btn-icon shadow-lg m-2">Save ✅</button>
            </div>
       </div>
    </div>
</div>
