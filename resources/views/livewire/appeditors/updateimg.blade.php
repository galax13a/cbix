<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="uptimagenDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uptimagenDataModalLabel"> editor imagen </h5>
                <button  type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
            <form>
                <div class="form-group">
                    <label for="selected_imagen_url">Image URL:</label>
                    <div class="input-group">

                        <div class="input-group">
                            <div class="input-group-text">
                                <i class="fas fa-link"></i>
                            </div>
                            <input wire:model.defer="selected_imagen_url" type="text" class="form-control" id="selected_imagen_url" placeholder="Image URL">
                        </div>

                     
                    </div>
                    @error('selected_imagen_url')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
        
                <div class="form-group">
                    <label for="selectedImage">Select an image :</label>
                    <select wire:model="selectedImage" class="form-control" wire:key="imageneskeys">
                        <option value="">-- Select an image --</option>
                        @foreach($this->imageFiles as $image)
                            <option value="{{ 'storage/apps/images/' . $slug . '/' . $image }}">{{ $image }}</option>
                        @endforeach
                    </select>
                    <div class="form-group">
                        <div class="container shadow text-center">
                            @if($selectedImage)
                                <img src="{{ asset($selectedImage) }}" title="" alt="Selected Image" 
                                class="img-fluid m-3 p-2 w-75 img-thumbnail"
                                style="width: 70%; height: 70%;"
                                >
                            @elseif($selected_imagen_url)
                                <img src="{{ $selected_imagen_url }}" alt="Default Image" class="img-fluid">
                            @endif
                        </div>
                    </div>
                </div>
            </form>
            </div>
            <div class="modal-footer">
                <button id="btn-close" type="button"  class="btn btn-icon shadow-lg m-2" data-bs-dismiss="modal">❌ Close</button>
                <button id="btn-store"  type="button" wire:click.prevent="store()" class="btn btn-icon shadow-lg m-2">Save ✅</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="update2DataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uptimagen2DataModalLabel"> editor imagen </h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <p>Id selector : </p>
                        <label for="image"></label>
                        <input wire:model.defer="selected_imagen_url" type="text" class="form-control" id="version" placeholder="Version">@error('selected_imagen_url') <span class="error text-danger">{{ $message }}</span> @enderror
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
