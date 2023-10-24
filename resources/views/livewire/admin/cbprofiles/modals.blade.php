<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel"><i class='bx bxs-balloon'></i> New Biography</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="name"> <strong> Url/CB/NickUser </strong></label>
                        <box-icon name='right-arrow' animation='spin' ></box-icon>
                        <input wire:model="room" type="text" class="form-control" id="room" placeholder="🔖 Url Nick Chatur-bate">@error('room') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
               <div class="container text-center mt-2">
                <a id="playmodel" data-fram = "" href="javascript:void(0)">
                   <img src="{{ $this->photo }}" class="img-responsive rounded-4 shadow" width="90%" alt="{{ $this->name }}" title="{{ $this->name }}">
                </a>
                </div>

                    <div class="form-group mt-4 fs-3">
                        <label for="name">🥳Name Bio</label>
                        <input wire:model.defer="name" style="height: 66px; font-size: 1em: " type="text" class="form-control" id="name" placeholder="Name">@error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

              

                    <div class="form-group d-none">
                        <label for="codex"></label>
                        <input wire:model.defer="codex" type="text" class="form-control" id="codex" placeholder="Codex">@error('codex') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group d-none">
                        <label for="link"></label>
                        <input wire:model.defer="link" type="text" class="form-control" id="link" placeholder="Link">@error('link') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group d-none">
                        <label for="pay"></label>
                        <input wire:model.defer="pay" type="text" class="form-control" id="pay" placeholder="Pay">@error('pay') <span class="error text-danger">{{ $message }}</span> @enderror
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
<div wire:ignore.self class="modal fade " id="updateDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Biouser</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="name">Url/CB Room Webcam</label>
                        <input wire:model="room" type="text" class="form-control" id="room" placeholder="Name">@error('room') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="name">Name Bio</label>
                        <input wire:model.defer="name" type="text" class="form-control" id="name" placeholder="Name">@error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                 
                    <div class="form-group">
                        <label for="codex"></label>
                        <a href="#"><strong>Copy Code</strong></a>
                        <input wire:model.defer="codex" type="text" class="form-control d-none" id="codex" placeholder="Codex">@error('codex') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="link"></label>
                        <input wire:model.defer="link" type="text" class="form-control" id="link" placeholder="Link">@error('link') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="pay"></label>
                        <input wire:model.defer="pay" type="text" class="form-control" id="pay" placeholder="Pay">@error('pay') <span class="error text-danger">{{ $message }}</span> @enderror
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
