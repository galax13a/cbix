<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel"> New App</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="name"></label>
                        <input wire:model.defer="name" type="text" class="form-control" id="name" placeholder="Name">@error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="description"></label>
                        <input wire:model.defer="description" type="text" class="form-control" id="description" placeholder="Description">@error('description') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="is_approved"></label>
                        <input wire:model.defer="is_approved" type="text" class="form-control" id="is_approved" placeholder="Is Approved">@error('is_approved') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                  
                  <label for="table"></label>
                            <div class="form-group">
                              <x-com-select-table table-name="apps0categors" id="apps0categors_id" display-name="name" />@error('apps_categors_id') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                    <div class="form-group">
                        <label for="meta_title"></label>
                        <input wire:model.defer="meta_title" type="text" class="form-control" id="meta_title" placeholder="Meta Title">@error('meta_title') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="meta_description"></label>
                        <input wire:model.defer="meta_description" type="text" class="form-control" id="meta_description" placeholder="Meta Description">@error('meta_description') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="meta_keywords"></label>
                        <input wire:model.defer="meta_keywords" type="text" class="form-control" id="meta_keywords" placeholder="Meta Keywords">@error('meta_keywords') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                  <label for="active"></label>
                    <div class="form-group">
                          <x-com-check :active="$active" />
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
                <h5 class="modal-title" id="updateModalLabel">Update App</h5>
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
                        <label for="description"></label>
                        <input wire:model.defer="description" type="text" class="form-control" id="description" placeholder="Description">@error('description') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="is_approved"></label>
                        <input wire:model.defer="is_approved" type="text" class="form-control" id="is_approved" placeholder="Is Approved">@error('is_approved') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                  
                  <label for="table"></label>
                            <div class="form-group">
                              <x-com-select-table table-name="apps0categors" id="apps0categors_id" display-name="name" />@error('apps_categors_id') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                    <div class="form-group">
                        <label for="meta_title"></label>
                        <input wire:model.defer="meta_title" type="text" class="form-control" id="meta_title" placeholder="Meta Title">@error('meta_title') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="meta_description"></label>
                        <input wire:model.defer="meta_description" type="text" class="form-control" id="meta_description" placeholder="Meta Description">@error('meta_description') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="meta_keywords"></label>
                        <input wire:model.defer="meta_keywords" type="text" class="form-control" id="meta_keywords" placeholder="Meta Keywords">@error('meta_keywords') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                  <label for="active"></label>
                    <div class="form-group">
                          <x-com-check :active="$active" />
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
