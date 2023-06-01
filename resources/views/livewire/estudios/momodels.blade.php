<!-- Add Modal create2DataModal -->
<div style="z-index: 1200;" id="create2DataModal" wire:ignore.self class="modal fade" id="create2DataModal" data-bs-backdrop="static"
    tabindex="-300" role="dialog" aria-labelledby="create2DataModalLabel" aria-hidden="true">
    <div class="modal-dialog shadow-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="create2DataModalLabel">💚 Add Study/ Models</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>

                    <label for="table">Study</label>
                    <div class="form-group">
                        <x-com-select-table table-name="estudios" id="estudio_id" display-name="name" />
                        @error('estudio_id')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <label for="table">Models</label>
                    <div class="form-group">
                        <x-com-select-table table-name="modelos" id="modelo_id" display-name="name" />
                        @error('modelo_id')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
              

           
                    <br>
                    <a class="my-2 custom-link rounded-4 shadow-sm p-2" href="javascript:void(0)" data-bs-toggle="modal"
                        data-bs-target="#NewModelDataModal">👉 if the model does not exist.. Create New</a>
         <br>


          
                    <br>
                    <a class="my-2 custom-link rounded-4 shadow-sm p-2" href="javascript:void(0)" data-bs-toggle="modal"
                        data-bs-target="#NewModelDataModal">👉 change model to another study, click 💢.</a>
        


                </form>
            </div>
            <div class="modal-footer">
                <button id="btn-close" type="button" wire:click.prevent="cancel()" class="btn btn-icon shadow-lg m-2"
                    data-bs-dismiss="modal">❌ Close</button>
                <button id="btn-store" type="button" wire:click.prevent="store_estudiomodel()"
                    class="btn btn-icon shadow-lg m-2">Save ✅</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal create2DataModal -->
<div wire:ignore.self class="modal fade" id="update2DataModal" data-bs-backdrop="static" tabindex="-101" role="dialog"
    aria-labelledby="update2ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="update2ModalLabel">Update Estudiomodelo</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" wire:model="selected_id">

                    <label for="table"></label>
                    <div class="form-group">
                        <x-com-select-table table-name="estudios" id="estudio_id" display-name="name" />
                        @error('estudio_id')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <label for="table"></label>
                    <div class="form-group">
                        <x-com-select-table table-name="modelos" id="modelo_id" display-name="name" />
                        @error('modelo_id')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button id="btn-close" type="button" wire:click.prevent="cancel()" class="btn btn-icon shadow-lg m-2"
                    data-bs-dismiss="modal">❌ Close</button>
                <button id="btn-update" type="button" wire:click.prevent="update_estudiomodel()"
                    class="btn btn-icon shadow-lg m-2">Save ✅</button>
            </div>
        </div>
    </div>

</div>
