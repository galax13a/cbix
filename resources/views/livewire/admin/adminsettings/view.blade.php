@section('title', __('Adminsettings'))
<div class="container-fluid">
    <div class="row justify-content-center">
	
        <div class="col-md-12 my-2" id="view-js-live-pages">         
      
                @if (!$adminsettings)
              
					 @if (!$adminsettings)
					 <button id="btn-new" type="button" class="btn btn-icon shadow-md m-2" data-bs-toggle="modal" data-bs-target="#createDataModal">
						 create profile
						</button> 
				@endif
                @else
			   
                    <div class="card">
                        <div class="card-header bg-transparent" wire:key='edit-settings'>
                            <h2>Edit Profile</h2>
                        </div>
                        <div class="card-body">
							<form onsubmit="return false;">
                                <input type="hidden" wire:model="selected_id">
                                <div class="form-group">
                                    <label for="name"></label>
                                    <input wire:model.defer="name" type="text" class="form-control" id="name"
                                        placeholder="Name">
                                    @error('name')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="pic"></label>
                                    <input wire:model.defer="pic" type="text" class="form-control" id="pic"
                                        placeholder="Pic">
                                    @error('pic')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="preferred_language"></label>
                                    <input wire:model.defer="preferred_language" type="text" class="form-control"
                                        id="preferred_language" placeholder="Preferred Language">
                                    @error('preferred_language')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="country"></label>
                                    <input wire:model.defer="country" type="text" class="form-control" id="country"
                                        placeholder="Country">
                                    @error('country')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone_number"></label>
                                    <input wire:model.defer="phone_number" type="text" class="form-control"
                                        id="phone_number" placeholder="Phone Number">
                                    @error('phone_number')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="bots"></label>
                                    <input wire:model.defer="bots" type="text" class="form-control" id="bots"
                                        placeholder="Bots">
                                    @error('bots')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
						<div class="control" wire:key='controlbox' wire:ignore>
                                <label for="table"></label>
                                <div class="form-group">
                                    <x-com-select-table table-name="pagemasters" id="pagemaster_id"
                                        display-name="name" />
                                    @error('pagemaster_id')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <label for="table"></label>
                                <div class="form-group">
                                    <x-com-select-table table-name="roles" id="role_id" display-name="name" />
                                    @error('role_id')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
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
