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
                        <label for="slug"></label>
                        <input wire:model.defer="slug" type="text" class="form-control" id="slug" placeholder="Slug">@error('slug') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="description"></label>
                        <input wire:model.defer="description" type="text" class="form-control" id="description" placeholder="Description">@error('description') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="version"></label>
                        <input wire:model.defer="version" type="text" class="form-control" id="version" placeholder="Version">@error('version') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="menu"></label>
                        <input wire:model.defer="menu" type="text" class="form-control" id="menu" placeholder="Menu">@error('menu') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="url"></label>
                        <input wire:model.defer="url" type="text" class="form-control" id="url" placeholder="Url">@error('url') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="target"></label>
                        <input wire:model.defer="target" type="text" class="form-control" id="target" placeholder="Target">@error('target') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="icon"></label>
                        <input wire:model.defer="icon" type="text" class="form-control" id="icon" placeholder="Icon">@error('icon') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="image"></label>
                        <input wire:model.defer="image" type="text" class="form-control" id="image" placeholder="Image">@error('image') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="download_url"></label>
                        <input wire:model.defer="download_url" type="text" class="form-control" id="download_url" placeholder="Download Url">@error('download_url') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="is_approved"></label>
                        <input wire:model.defer="is_approved" type="text" class="form-control" id="is_approved" placeholder="Is Approved">@error('is_approved') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="install"></label>
                        <input wire:model.defer="install" type="text" class="form-control" id="install" placeholder="Install">@error('install') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                  
                  <label for="table"></label>
                            <div class="form-group">
                              <x-com-select-table table-name="apps0categors" id="apps_categors_id" display-name="name" />@error('apps_categors_id') <span class="error text-danger">{{ $message }}</span> @enderror
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
                        <label for="slug"></label>
                        <input wire:model.defer="slug" type="text" class="form-control" id="slug" placeholder="Slug">@error('slug') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="description"></label>
                        <input wire:model.defer="description" type="text" class="form-control" id="description" placeholder="Description">@error('description') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="version"></label>
                        <input wire:model.defer="version" type="text" class="form-control" id="version" placeholder="Version">@error('version') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="menu"></label>
                        <input wire:model.defer="menu" type="text" class="form-control" id="menu" placeholder="Menu">@error('menu') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="url"></label>
                        <input wire:model.defer="url" type="text" class="form-control" id="url" placeholder="Url">@error('url') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="target"></label>
                        <input wire:model.defer="target" type="text" class="form-control" id="target" placeholder="Target">@error('target') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="icon"></label>
                        <input wire:model.defer="icon" type="text" class="form-control" id="icon" placeholder="Icon">@error('icon') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="image"></label>
                        <input wire:model.defer="image" type="text" class="form-control" id="image" placeholder="Image">@error('image') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="download_url"></label>
                        <input wire:model.defer="download_url" type="text" class="form-control" id="download_url" placeholder="Download Url">@error('download_url') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="is_approved"></label>
                        <input wire:model.defer="is_approved" type="text" class="form-control" id="is_approved" placeholder="Is Approved">@error('is_approved') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="install"></label>
                        <input wire:model.defer="install" type="text" class="form-control" id="install" placeholder="Install">@error('install') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                  
                  <label for="table"></label>
                            <div class="form-group">
                              <x-com-select-table table-name="apps0categors" id="apps_categors_id" display-name="name" />@error('apps_categors_id') <span class="error text-danger">{{ $message }}</span> @enderror
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
