<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="createDataModalLabel"> Unban request</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group d-none">
                        <label for="sent_by"></label>
                        <input wire:model.defer="sent_by" type="text" class="form-control" id="sent_by" placeholder="Sent By">@error('sent_by') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        
                        <strong>Sent by , </strong>
                        <span class="badge bg-warning shadow-sm p-2 m-2">
                             {{
                                auth()->user()->name;
                             }}                             
                            </span>
                            
                    </div>
                    <div class="form-group">
                        <label for="resolved_by"></label>
                       <strong> 
                        Support, 
                        Tell us what happened to your account, how can we help u 🕵🏾
                        </strong>
                    </div>
 
                    <div class="input-group mt-1 shadow-sm">
                        <span class="input-group-text"> 
                            <strong>
                             Reasons for unbanning 🚫</strong> 
                            </span>
                        <textarea style="height:150px;" class="form-control" aria-label="With textarea" id="ban_reason" wire:model.defer="comment"
                            placeholder="Do you think it is a system error ?">
                        </textarea>                       
                    </div>
                    @error('comment') <span class="error text-danger">{{ $message }}</span> @enderror

                    <div class="form-group d-none">
                        <label for="reply_comment"></label>
                        <input wire:model.defer="reply_comment" type="text" class="form-control" id="reply_comment" placeholder="Reply Comment">@error('reply_comment') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group d-none">
                        <label for="email"></label>
                        <input wire:model.defer="email" type="text" class="form-control" id="email" placeholder="Email">@error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group d-none">
                        <label for="status">Status:</label>
                        <input wire:model.defer="status" type="text" class="form-control" id="status" placeholder="Status" value="pending" disabled>
                        @error('status')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
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
                <h5 class="modal-title" id="updateModalLabel">Update Unban</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group d-none">
                        <label for="sent_by"></label>
                        <input wire:model.defer="sent_by" type="text" class="form-control" id="sent_by" placeholder="Sent By">@error('sent_by') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group d-none">
                        <label for="resolved_by"></label>
                        <input wire:model.defer="resolved_by" type="text" class="form-control" id="resolved_by" placeholder="Resolved By">@error('resolved_by') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="input-group mt-1 shadow-sm">
                        <span class="input-group-text"> 
                            <strong>
                             Reasons for 🚫 unbanning</strong> 
                            </span>
                        <textarea style="height:150px;" class="form-control" aria-label="With textarea" id="ban_reason" wire:model.defer="comment"
                            placeholder="Do you think it is a system error ?">
                        </textarea>                       
                    </div>
                    @error('comment') <span class="error text-danger">{{ $message }}</span> @enderror


                    <div class="form-group d-none">
                        <label for="reply_comment"></label>
                        <input wire:model.defer="reply_comment" type="text" class="form-control" id="reply_comment" placeholder="Reply Comment">@error('reply_comment') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="email"></label>
                        <input wire:model.defer="email" type="text" class="form-control" id="email" placeholder="Email">@error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group d-none">
                        <label for="status"></label>
                        <input wire:model.defer="status" type="text" class="form-control" id="status" placeholder="Status">@error('status') <span class="error text-danger">{{ $message }}</span> @enderror
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
