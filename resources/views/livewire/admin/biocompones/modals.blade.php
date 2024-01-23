<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel"> New Biocompone</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="name"></label>
                        <input wire:model.defer="name" type="text" class="form-control" id="name" placeholder="Name">@error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="img"></label>
                        <input wire:model.defer="img" type="text" class="form-control" id="img" placeholder="Img">@error('img') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="code"></label>
                        <textarea wire:model.defer="code" type="text" style="height: 190px;" class="form-control" id="code" placeholder="Code Html Bio"></textarea>
                        @error('code') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="js"></label>
                        <input wire:model.defer="js" type="text" class="form-control" id="js" placeholder="Js">
                        @error('js') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>                  
                 
                           <label for="table"></label>
                               <div class="form-group">
                                <x-com-select-table table-name="biocategorcompones" id="biocategorcompone_id" display-name="name" />@error('biocategorcompone_id') <span class="error text-danger">{{ $message }}</span> @enderror
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
                <h5 class="modal-title" id="updateModalLabel">Update Biocompone</h5>
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
                        <label for="img"></label>
                        <input wire:model.defer="img" type="text" class="form-control" id="img" placeholder="Img">@error('img') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="code"></label>
                        <textarea wire:model.defer="code" type="text" style="height: 260px;" class="form-control" id="code" placeholder="Code Html Bio"></textarea>
                        @error('code') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="js"></label>
                        <input wire:model.defer="js" type="text" class="form-control" id="js" placeholder="Js">
                        @error('js') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                 
                           <label for="table"></label>
                               <div class="form-group">
                                <x-com-select-table table-name="biocategorcompones" id="biocategorcompone_id" display-name="name" />@error('biocategorcompone_id') <span class="error text-danger">{{ $message }}</span> @enderror
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
