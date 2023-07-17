<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel"> New Siteconfig</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="name"></label>
                        <input wire:model.defer="name" type="text" class="form-control" id="name" placeholder="Name">@error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="idioma"></label>
                        <input wire:model.defer="idioma" type="text" class="form-control" id="idioma" placeholder="Idioma">@error('idioma') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="crm"></label>
                        <input wire:model.defer="crm" type="text" class="form-control" id="crm" placeholder="Crm">@error('crm') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="apps"></label>
                        <input wire:model.defer="apps" type="text" class="form-control" id="apps" placeholder="Apps">@error('apps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="thumbnail"></label>
                        <input wire:model.defer="thumbnail" type="text" class="form-control" id="thumbnail" placeholder="Thumbnail">@error('thumbnail') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="localimg"></label>
                        <input wire:model.defer="localimg" type="text" class="form-control" id="localimg" placeholder="Localimg">@error('localimg') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="s3amazon"></label>
                        <input wire:model.defer="s3amazon" type="text" class="form-control" id="s3amazon" placeholder="S3Amazon">@error('s3amazon') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="s3google"></label>
                        <input wire:model.defer="s3google" type="text" class="form-control" id="s3google" placeholder="S3Google">@error('s3google') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="siteupkeep"></label>
                        <input wire:model.defer="siteupkeep" type="text" class="form-control" id="siteupkeep" placeholder="Siteupkeep">@error('siteupkeep') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="code_google_anality"></label>
                        <input wire:model.defer="code_google_anality" type="text" class="form-control" id="code_google_anality" placeholder="Code Google Anality">@error('code_google_anality') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="code_head_front"></label>
                        <input wire:model.defer="code_head_front" type="text" class="form-control" id="code_head_front" placeholder="Code Head Front">@error('code_head_front') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="code_head_back"></label>
                        <input wire:model.defer="code_head_back" type="text" class="form-control" id="code_head_back" placeholder="Code Head Back">@error('code_head_back') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="code_body_front"></label>
                        <input wire:model.defer="code_body_front" type="text" class="form-control" id="code_body_front" placeholder="Code Body Front">@error('code_body_front') <span class="error text-danger">{{ $message }}</span> @enderror
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
                <h5 class="modal-title" id="updateModalLabel">Update Siteconfig</h5>
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
                        <label for="idioma"></label>
                        <input wire:model.defer="idioma" type="text" class="form-control" id="idioma" placeholder="Idioma">@error('idioma') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="crm"></label>
                        <input wire:model.defer="crm" type="text" class="form-control" id="crm" placeholder="Crm">@error('crm') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="apps"></label>
                        <input wire:model.defer="apps" type="text" class="form-control" id="apps" placeholder="Apps">@error('apps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="thumbnail"></label>
                        <input wire:model.defer="thumbnail" type="text" class="form-control" id="thumbnail" placeholder="Thumbnail">@error('thumbnail') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="localimg"></label>
                        <input wire:model.defer="localimg" type="text" class="form-control" id="localimg" placeholder="Localimg">@error('localimg') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="s3amazon"></label>
                        <input wire:model.defer="s3amazon" type="text" class="form-control" id="s3amazon" placeholder="S3Amazon">@error('s3amazon') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="s3google"></label>
                        <input wire:model.defer="s3google" type="text" class="form-control" id="s3google" placeholder="S3Google">@error('s3google') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="siteupkeep"></label>
                        <input wire:model.defer="siteupkeep" type="text" class="form-control" id="siteupkeep" placeholder="Siteupkeep">@error('siteupkeep') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="code_google_anality"></label>
                        <input wire:model.defer="code_google_anality" type="text" class="form-control" id="code_google_anality" placeholder="Code Google Anality">@error('code_google_anality') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="code_head_front"></label>
                        <input wire:model.defer="code_head_front" type="text" class="form-control" id="code_head_front" placeholder="Code Head Front">@error('code_head_front') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="code_head_back"></label>
                        <input wire:model.defer="code_head_back" type="text" class="form-control" id="code_head_back" placeholder="Code Head Back">@error('code_head_back') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="code_body_front"></label>
                        <input wire:model.defer="code_body_front" type="text" class="form-control" id="code_body_front" placeholder="Code Body Front">@error('code_body_front') <span class="error text-danger">{{ $message }}</span> @enderror
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
