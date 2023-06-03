<!-- select table  Modal -->
<div style="z-index: 1300;" wire:ignore.self class="modal fade" id="NewModelDataModal" data-bs-backdrop="static" tabindex="-4" role="dialog"
    aria-labelledby="NewModelDataModalLabel" aria-hidden="true">
    
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="NewModelDataModalLabel">💜 Create New Model / Study</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="popup-models">

                    <form wire:submit.prevent="storage_models">
                        @csrf

                        <div class="form-group">
                            <label for="model_name">Full Name Model</label>
                            <input wire:model.defer="model_name" type="text" class="form-control" id="model_name"
                                placeholder="Names Models">
                            @error('model_name')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nick">Nick Model</label>
                            <input wire:model.defer="nick" type="text" class="form-control" id="nick"
                                placeholder="Nick">
                            @error('nick')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="porce">% model percentage</label>
                            <input wire:model.defer="porce" type="number" class="form-control" id="porce"
                                placeholder="Porce">
                            @error('porce')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <label for="table">Type Model</label>
                        <div class="form-group">
                            <x-com-select-table table-name="typemodelos" id="typemodelo_id" display-name="name" />
                            @error('typemodelo_id')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                    </form>
                </div>

                <div>


                </div>

            </div>
            <div class="modal-footer">
                <button id="btn-close" type="button" wire:click.prevent="cancel()" class="btn btn-icon shadow-sm m-2"
                    data-bs-dismiss="modal">❌ Close</button>
                <button wire:click="storage_models()" class="btn btn-icon shadow-sm m-2"id="btn-new"
                    type="submit">Save
                    Model</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal Models -->
<div style="z-index: 1301;" wire:ignore.self class="modal fade" id="updateModeloDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModeloModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModeloModalLabel">💖 Update Modelo</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id_modelo">
                    <div class="form-group">
                        <label for="name"></label>
                        <input wire:model.defer="name_modelo" type="text" class="form-control" id="name" placeholder="Name">@error('name_modelo') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nick"></label>
                        <input wire:model.defer="nick" type="text" class="form-control" id="nick" placeholder="Nick">@error('nick') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nick2"></label>
                        <input wire:model.defer="nick2" type="text" class="form-control" id="nick2" placeholder="Nick2">@error('nick2') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="email"></label>
                        <input wire:model.defer="email" type="text" class="form-control" id="email" placeholder="Email">@error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="dni"></label>
                        <input wire:model.defer="dni" type="text" class="form-control" id="dni" placeholder="Dni">@error('dni') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="wsp"></label>
                        <input wire:model.defer="wsp" type="text" class="form-control" id="wsp" placeholder="Wsp">@error('wsp') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="porce">% model percentage</label>
                        <input wire:model.defer="porce" type="number" class="form-control" id="porce"
                            placeholder="Porce">
                        @error('porce')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  
                  <label for="table"></label>
                            <div class="form-group">
                              <x-com-select-table table-name="typemodelos" id="typemodelo_id" display-name="name" />@error('typemodelo_id') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                    <div class="form-group">
                        <label for="img"></label>
                        <input wire:model.defer="img" type="text" class="form-control" id="img" placeholder="Img">@error('img') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                  <label for="active"></label>
                    <div class="form-group">
                          <x-com-check :active="$active" />
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button id="btn-close" type="button" wire:click.prevent="cancel()" class="btn btn-icon shadow-lg m-2" data-bs-dismiss="modal">❌ Close</button>
                <button id="btn-update" type="button" wire:click.prevent="update_modelos()" class="btn btn-icon shadow-lg m-2">Update Modelo ✅</button>
            </div>
       </div>
    </div>


</div>
