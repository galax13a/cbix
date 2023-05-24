<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel"> New Estudiomodelo</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                  
                  <label for="table"></label>
                            <div class="form-group">
                              <x-com-select-table table-name="estudios" id="estudio_id" display-name="name" />@error('estudio_id') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                  
                  <label for="table"></label>
                            <div class="form-group">
                              <x-com-select-table table-name="modelos" id="modelo_id" display-name="name" />@error('modelo_id') <span class="error text-danger">{{ $message }}</span> @enderror
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
                <h5 class="modal-title" id="updateModalLabel">Update Estudiomodelo</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                  
                  <label for="table"></label>
                            <div class="form-group">
                              <x-com-select-table table-name="estudios" id="estudio_id" display-name="name" />@error('estudio_id') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                  
                  <label for="table"></label>
                            <div class="form-group">
                              <x-com-select-table table-name="modelos" id="modelo_id" display-name="name" />@error('modelo_id') <span class="error text-danger">{{ $message }}</span> @enderror
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
