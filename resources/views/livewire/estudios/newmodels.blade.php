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
