<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel"> New Stat</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="name"></label>
                        <input wire:model.defer="name" type="text" class="form-control" id="name" placeholder="Name">@error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
             
                    <div class="input-group mt-1 shadow-sm">
                        <span class="input-group-text">
                            <strong>
                               Code , JavaScript⚠️
                            </strong>
                        </span>
                        <textarea style="height:150px;" class="form-control" aria-label="With textarea" id="ban_reason"
                            wire:model.defer="codex" 
                            placeholder="paste the google analytics code or any compatible code in javascript ✔️">
                        </textarea>
                    </div>
                    @error('codex') <span class="error text-danger">{{ $message }}</span> @enderror

                    <div class="form-group">
                        <label for="location"></label>
                        <select wire:model.defer="location" class="form-control" id="location">
                            <option value="">▶️Location</option>
                            <option value="head">🟧Head</option>
                            <option value="body">⬛️Body</option>
                        </select>
                        @error('location') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="url"></label>
                        <input wire:model.defer="url" type="text" class="form-control" id="url" 
                        placeholder="Url:google ">
                        @error('url') <span class="error text-danger">{{ $message }}</span> @enderror
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
                <h5 class="modal-title" id="updateModalLabel">Update Stat</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="name"></label>
                        <input wire:model.defer="name" type="text" class="form-control" id="name" placeholder="Name">@error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="input-group mt-1 shadow-sm">
                        <span class="input-group-text">
                            <strong>
                               Code , JavaScript⚠️
                            </strong>
                        </span>
                        <textarea style="height:150px;" class="form-control" aria-label="With textarea" id="ban_reason"
                            wire:model.defer="codex" 
                            placeholder="paste the google analytics code or any compatible code in javascript ✔️">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="location"></label>
                        <select wire:model.defer="location" class="form-control" id="location">
                            <option value="">▶️Location</option>
                            <option value="head">🟧Head</option>
                            <option value="body">⬛️Body</option>
                        </select>
                        @error('location') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="url"></label>
                        <input wire:model.defer="url" type="text" class="form-control" id="url" placeholder="Url">@error('url') <span class="error text-danger">{{ $message }}</span> @enderror
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
