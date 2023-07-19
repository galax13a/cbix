<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel"> New Uploadplan</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="name"></label>
                        <input wire:model.defer="name" type="text" class="form-control" id="name" placeholder="Name">@error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="megas"></label>
                        <input wire:model.defer="megas" type="text" class="form-control" id="megas" placeholder="Megas">@error('megas') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="price_any"></label>
                        <input wire:model.defer="price_any" type="text" class="form-control" id="price_any" placeholder="Price Any">@error('price_any') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="price_mes"></label>
                        <input wire:model.defer="price_mes" type="text" class="form-control" id="price_mes" placeholder="Price Mes">@error('price_mes') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="des_es"></label>
                        <input wire:model.defer="des_es" type="text" class="form-control" id="des_es" placeholder="Des Es">@error('des_es') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="des_en"></label>
                        <input wire:model.defer="des_en" type="text" class="form-control" id="des_en" placeholder="Des En">@error('des_en') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="plan_filex"></label>
                        <input wire:model.defer="plan_filex" type="text" class="form-control" id="plan_filex" placeholder="Plan Filex">@error('plan_filex') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="plan"></label>
                        <input wire:model.defer="plan" type="text" class="form-control" id="plan" placeholder="Plan">@error('plan') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                  <label for="active"></label>
                    <div class="form-group">
                          <x-com-check :active="$active" />
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
                <h5 class="modal-title" id="updateModalLabel">Update Uploadplan</h5>
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
                        <label for="megas"></label>
                        <input wire:model.defer="megas" type="text" class="form-control" id="megas" placeholder="Megas">@error('megas') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="price_any"></label>
                        <input wire:model.defer="price_any" type="text" class="form-control" id="price_any" placeholder="Price Any">@error('price_any') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="price_mes"></label>
                        <input wire:model.defer="price_mes" type="text" class="form-control" id="price_mes" placeholder="Price Mes">@error('price_mes') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="des_es"></label>
                        <input wire:model.defer="des_es" type="text" class="form-control" id="des_es" placeholder="Des Es">@error('des_es') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="des_en"></label>
                        <input wire:model.defer="des_en" type="text" class="form-control" id="des_en" placeholder="Des En">@error('des_en') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="plan_filex"></label>
                        <input wire:model.defer="plan_filex" type="text" class="form-control" id="plan_filex" placeholder="Plan Filex">@error('plan_filex') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="plan"></label>
                        <input wire:model.defer="plan" type="text" class="form-control" id="plan" placeholder="Plan">@error('plan') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                  <label for="active"></label>
                    <div class="form-group">
                          <x-com-check :active="$active" />
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
