<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel"> New Adminpremium</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="name"></label>
                        <input wire:model.defer="name" type="text" class="form-control" id="name" placeholder="Name">@error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="value"></label>
                        <input wire:model.defer="value" type="number" class="form-control" id="value" placeholder="Value">
                        @error('value') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    

                    <div class="form-group">
                        <label for="content"></label>
                        <div class="input-group mt-1 shadow-sm">
                            <span class="input-group-text">
                                <strong>
                                    Content <br> Create Memnbers Cheap
                                </strong>
                            </span>
                              <textarea style="min-height:190px;" class="form-control" aria-label="With textarea" id="plan" wire:model.defer="content">       
                             </textarea>                 
                        </div>
                        @error('content') <span class="error text-danger">{{ $message }}</span> @enderror  
                    </div>
                    <div class="form-group">
                        <label for="plan"></label>
                        <select class="form-select" wire:model.defer="plan">
                            <option value="">Select Plan</option>
                            <option value="free">Free</option>
                            <option value="gifts">Gifts</option>
                            <option value="premium">Premium</option>
                            <option value="subscription">Subscription</option>
                        </select>
                        @error('plan') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="subcription"></label>
                        <select class="form-select" wire:model="subcription">
                            <option value="">Select subcription</option>
                            <option value="daily">Daily</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                        </select>
                        @error('subcription') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="time"></label>
                        <input wire:model.defer="time" type="text" class="form-control" id="time" placeholder="Time">@error('time') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="bots"></label>
                        <input wire:model.defer="bots" type="text" class="form-control" id="bots" placeholder="Bots">@error('bots') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkpay"></label>
                        <input wire:model.defer="linkpay" type="text" class="form-control" id="linkpay" placeholder="Linkpay">@error('linkpay') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                  <label for="active"></label>                  
                          <x-com-check :active="$active" />
                  @error('active') <span class="error text-danger">{{ $message }}</span> @enderror       
            
                    

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
                <h5 class="modal-title" id="updateModalLabel">Update Adminpremium</h5>
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
                        <label for="value"></label>
                        <input wire:model.defer="value" type="number" class="form-control" id="value" placeholder="Value">
                        @error('value') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="content"></label>
                        <div class="input-group mt-1 shadow-sm">
                            <span class="input-group-text">
                                <strong>
                                    Content <br> Create Memnbers Cheap
                                </strong>
                            </span>
                              <textarea style="min-height:190px;" class="form-control" aria-label="With textarea" id="plan" wire:model.defer="content">       
                             </textarea>                 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="plan"></label>
                        <select class="form-select" wire:model.defer="plan">
                            <option value="">Select Plan</option>
                            <option value="free">Free</option>
                            <option value="gifts">Gifts</option>
                            <option value="premium">Premium</option>
                            <option value="subscription">Subscription</option>
                        </select>
                        @error('plan') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="subcription"></label>
                        <select class="form-select" wire:model="subcription">
                            <option value="">Select subcription</option>
                            <option value="daily">Daily</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                        </select>
                        @error('subcription') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="time"></label>
                        <input wire:model.defer="time" type="text" class="form-control" id="time" placeholder="Time">@error('time') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="bots"></label>
                        <input wire:model.defer="bots" type="text" class="form-control" id="bots" placeholder="Bots">@error('bots') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkpay"></label>
                        <input wire:model.defer="linkpay" type="text" class="form-control" id="linkpay" placeholder="Linkpay">@error('linkpay') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                  <label for="active"></label>                  
                          <x-com-check :active="$active" />
                  @error('active') <span class="error text-danger">{{ $message }}</span> @enderror       
            
                    

                </form>
            </div>
            <div class="modal-footer">
                <button id="btn-close" type="button" wire:click.prevent="cancel()" class="btn btn-icon shadow-lg m-2" data-bs-dismiss="modal">❌ Close</button>
                <button id="btn-update" type="button" wire:click.prevent="update()" class="btn btn-icon shadow-lg m-2">Save ✅</button>
            </div>
       </div>
    </div>
</div>
