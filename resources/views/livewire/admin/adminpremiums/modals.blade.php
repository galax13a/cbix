<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel"> New Adminsetting</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="name"></label>
                        <input wire:model.defer="name" type="text" class="form-control" id="name" placeholder="Name">@error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="yoursex"></label>
                        <input wire:model.defer="yoursex" type="text" class="form-control" id="yoursex" placeholder="Yoursex">@error('yoursex') <span class="error text-danger">{{ $message }}</span> @enderror
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
                        <label for="yoursex"></label>
                        <input wire:model.defer="yoursex" type="text" class="form-control" id="yoursex" placeholder="Yoursex">@error('yoursex') <span class="error text-danger">{{ $message }}</span> @enderror
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
