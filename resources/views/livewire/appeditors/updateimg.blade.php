<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="uptimagenDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header  shadow">
                <strong> Editor Imagen 📝</strong>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="form-group">

                    <div class="input-group">

                        <div class="input-group d-none">
                            <div class="input-group-text btn-chatur">
                                <i class="fas fa-link"> Host Botchatur</i>
                            </div>
                            <input wire:model.defer="selected_imagen_url" type="text" class="form-control shadow "
                                id="selected_imagen_url" placeholder="Image URL">
                            <button id="link-copy-2" wire:key='copylink2' title="Copy Link" class="btn btn-chatur">
                                <i class="fas fa-copy"></i>
                            </button>

                        </div>

                        <div class="input-group my-2">
                            <div class="input-group-text btn-chatur">
                                <i class="fas fa-link"> Host Server xZ-3 </i>
                            </div>
                            <input wire:model.defer="selected_imagen_url" type="text" class="form-control shadow"
                                id="selected_imagen_url" placeholder="Image URL">
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
                    <div class="d-none">
                        <i class="fas fa-image"></i><strong> Select Image Dimension </strong>
                        <i class="fas fa-chevron-down rounded-4 shadow-sm border-darkpor "></i>
                    </div>
                    <select wire:model="selectedImage" class="form-control shadow" wire:key="imageneskeys">
                        <option value="">-- 🔔 change the image--</option>
                        @foreach ($this->imageFiles as $image)
                            <option value="{{ 'storage/apps/images/' . $slug . '/' . $image }}">🔓 {{ $image }}
                            </option>
                        @endforeach
                    </select>

                    <div class="form-group">
                        @if ($folders_imagenes)
                            <hr>
                            <strong>:: 🟣 Storage : Images <i class="fas fa-images shadow rounded-4 p-1"></i>
                                <span class="badge bg-danger">
                                    PRO 1 Giga</span>
                                Usage :
                                <span class="badge bg-warning">
                                    1.3 Kbs</span>
                            </strong>
                            <hr class="shadow">
                    
                        @endif
                    </div>


                    <div class="form-group " style="margin-top:-6px;">
                        <div class="container">
                            <div class="container shadow text-center m-2 mb-2 p-3 rounded-3">
                                @if ($selectedImage)
                                    <img id="img-selected-app" src="{{ asset($selectedImage) }}" title="" alt="Selected Image"
                                        class="rounded-3 img-thumbnail shadow" style="max-width: 230px; height: 260px;">
                                @elseif($selected_imagen_url)
                                    <img id="img-selected-app" src="{{ $selected_imagen_url }}" alt="Default Image"
                                        class="img-fluid rounded-3 img-thumbnail shadow"
                                        style="width: 33%; height: 260px;">
                                @endif
                            </div>

                            <div class="input-group">
                                <div class="input-group-text bg-warning">
                                    <i class="fas fa-link"> Change image by url</i>
                                </div>
                                <input wire:model.defer="selectedImage" type="text" class="form-control" id="selectedImage"
                                    placeholder="Image URL">
                                <button id="pastel-link" wire:key='pastel-link' title="Paste Link"
                                    class="btn btn-ligth shadow rounded-2">
                                    <i class="fas fa-paste"></i>
                                </button>
                            </div>
                            <div class="input-group">
                                <strong class="bg-warning p-1 border-right-3" 
                                    style="margin-top:-4px;
                                    ">  
                                     Current image / or you can change it
                                </strong>
                            </div>                       
                            <div 
                            class="row row-cols-4 row-cols-md-4 g-4" id="gallery-apps-ids"
                            style="max-height: 260px; overflow: auto;"
                            >                                                        
                                  
                                   @foreach ($folders_imagenes as $image)
                                       <div class="col text-center">
                                           <div class="shadow rounded-3" >

                                               <img id="{{$image['name']}}" 
                                               src="{{ Storage::url($storage_path . $slug . '/' . $image['name']) }}"
                                                   title="{{ $image['name'] }}" class="card-img-top img-thumbnail"
                                                   style="width:120px; height:95px; ">
                                           
                                               <div class="card-body">
                                                   <i class="fas fa-image shadow"></i>
                                                   <strong class="badge p-1 rounded-3 shadow bg-dark">
                                                       {{ number_format($image['width'], 0) }}
                                                       *
                                                       {{ number_format($image['height'], 0) }}
                                                       </i>Px. </strong> 
                                                   <i title="Delete Pic"
                                                       class="fas fa-trash p-1 rounded-4 shadow-sm text-danger punter ">
                                                    </i>
                                                    Size: 4.2 MG
                                                   @php
                                                       $urlParts = explode('_', $image['name']);
                                                       $finalName = end($urlParts);
                                                       $firstLetter = substr($finalName, 0, 1);
                                                       if ($firstLetter == '.') {
                                                               $finalName = '💜 1Pic'.$finalName;
                                                       }
                                            
                                                   @endphp
                                                   <strong> {{ $finalName }}</strong>
   
                                               </div>
                                           </div>
                                       </div>
                                   @endforeach
   
                  
                               </div>

                            <div class="d-flex justify-content-end align-items-end flex-column">

                                <div class="col m-2">
                                    <button title="Get Galerry App" wire:click='get_folders_app'
                                        onclick="dispatchLoadingEvent('dots', 900);"
                                        class="btn btn-chatur border-darkpor ">
                                        <i class="fas fa-images"></i>
                                        <strong>More. </strong>
                                    </button>
                                    <button title="Galerry Apps" class="btn btn-chatur border-darkpor ">
                                        <i class="fas fa-image"></i>
                                        <strong> Editor Gallery</strong>
                                    </button>
                                </div>

                            </div>


                        </div>
                    </div>

                    


                </div>

            </div>
            <div class="modal-footer">
                <button id="btn-close" type="button" class="btn btn-icon shadow-lg m-2" data-bs-dismiss="modal">❌
                    Close</button>
                <button id="btn-store" type="button" wire:click.prevent="change_img()"
                    class="btn btn-icon shadow-lg m-2">Change Img ✅</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="update2DataModal" data-bs-backdrop="static" tabindex="-1"
    role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uptimagen2DataModalLabel"> editor imagen </h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <p>Id selector : </p>
                        <label for="selectedImage"></label>
                        <input wire:model.defer="selectedImage" type="text" class="form-control" id="version"
                            placeholder="Version">
                        @error('selectedImage')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button id="btn-close" type="button" wire:click.prevent="cancel()"
                    class="btn btn-icon shadow-lg m-2" data-bs-dismiss="modal">❌ Close</button>
                <button id="btn-store" type="button" wire:click.prevent="store()"
                    class="btn btn-icon shadow-lg m-2">Save ✅</button>
            </div>
        </div>
    </div>
</div>
