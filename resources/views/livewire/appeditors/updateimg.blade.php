<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="uptimagenDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header  shadow">
                <strong> 📝 Editor Imagen   </strong>
                <button  type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
            <form>
                <div class="form-group">
                 
                    <div class="input-group">

                        <div class="input-group">
                            <div class="input-group-text">
                                <i class="fas fa-link"> Host Botchatur</i>
                            </div>
                            <input wire:model.defer="selected_imagen_url" type="text" 
                            class="form-control shadow"
                             id="selected_imagen_url" placeholder="Image URL">
                            <button id="link-copy-2" wire:key='copylink2' title="Copy Link" class="btn btn-chatur">
                                <i class="fas fa-copy"></i>    
                            </button>                      
                            
                        </div>

                        <div class="input-group my-2">
                            <div class="input-group-text">
                                <i class="fas fa-link"> Host z4</i>
                            </div>
                            <input wire:model.defer="selected_imagen_url" type="text"
                             class="form-control shadow" id="selected_imagen_url" placeholder="Image URL">                            
                            <button id="link-copy-1" wire:key='copylink1' title="Copy Link" class="btn btn-chatur">
                                <i class="fas fa-copy"></i>    
                            </button>                      
                            
                        </div>

                    </div>
                    @error('selected_imagen_url')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
        
                <div class="form-group">
                    
                    <i class="fas fa-image"></i><strong> Select Image Dimension </strong>
                    <select wire:model="selectedImage" class="form-control shadow" wire:key="imageneskeys">
                        <option value="">-- 🔔 change the image, or not change --</option>
                        @foreach($this->imageFiles as $image)
                            <option value="{{ 'storage/apps/images/' . $slug . '/' . $image }}">{{ $image }}</option>
                        @endforeach
                    </select>
                    <div class="form-group ">
                        <div class="container">
                        <div class="container shadow text-center m-1">
                            @if($selectedImage)
                                <img src="{{ asset($selectedImage) }}" 
                                title="" alt="Selected Image" 
                                class="rounded-3 img-thumbnail"
                                style="max-width: 840px;"
                         
                                >
                            @elseif($selected_imagen_url)
                                <img src="{{ $selected_imagen_url }}" alt="Default Image" 
                                class="img-fluid rounded-3 img-thumbnail"
                                style="width: 50%; height: 50%;"
                                >
                            @endif
                        </div>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-group-text">
                            <i class="fas fa-link"> Change image by url</i>
                        </div>
                        <input wire:model.defer="selectedImage" type="text" class="form-control" id="selectedImage" placeholder="Image URL">
                        <button id="pastel-link" wire:key='pastel-link' title="Paste Link" class="btn btn-primary">
                            <i class="fas fa-paste"></i>  
                        </button>      
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
                        <label for="selectedImage"></label>
                        <input wire:model.defer="selectedImage" type="text" class="form-control" id="version" placeholder="Version">@error('selectedImage') <span class="error text-danger">{{ $message }}</span> @enderror
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
