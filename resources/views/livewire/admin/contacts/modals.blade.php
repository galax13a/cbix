<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel"> New Admincontact</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="name"></label>
                        <input wire:model.defer="name" type="text" class="form-control" id="name" placeholder="Name">@error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nick_name"></label>
                        <input wire:model.defer="nick_name" type="text" class="form-control" id="nick_name" placeholder="Nick Name">@error('nick_name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                 
                           <label for="table"></label>
                               <div class="form-group">
                                <x-com-select-table table-name="admincontacttags" id="admincontacttag_id" display-name="name" />@error('admincontacttag_id') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                  <label for="active"></label>                  
                          <x-com-check :active="$active" />
                  @error('active') <span class="error text-danger">{{ $message }}</span> @enderror       
            
                    
                    <div class="form-group">
                        <label for="email"></label>
                        <input wire:model.defer="email" type="text" class="form-control" id="email" placeholder="Email">@error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="birthday"></label>
                        <input wire:model.defer="birthday" type="date" class="form-control" id="birthday" placeholder="Birthday">@error('birthday') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone_code"></label>
                        <input wire:model.defer="phone_code" type="text" class="form-control" id="phone_code" placeholder="Phone Code">@error('phone_code') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="whatsapp"></label>
                        <input wire:model.defer="whatsapp" type="text" class="form-control" id="whatsapp" placeholder="Whatsapp">@error('whatsapp') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="skype"></label>
                        <input wire:model.defer="skype" type="text" class="form-control" id="skype" placeholder="Skype">@error('skype') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="telegram"></label>
                        <input wire:model.defer="telegram" type="text" class="form-control" id="telegram" placeholder="Telegram">@error('telegram') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="tiktok"></label>
                        <input wire:model.defer="tiktok" type="text" class="form-control" id="tiktok" placeholder="Tiktok">@error('tiktok') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="facebook"></label>
                        <input wire:model.defer="facebook" type="text" class="form-control" id="facebook" placeholder="Facebook">@error('facebook') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="snapchat"></label>
                        <input wire:model.defer="snapchat" type="text" class="form-control" id="snapchat" placeholder="Snapchat">@error('snapchat') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="x"></label>
                        <input wire:model.defer="x" type="text" class="form-control" id="x" placeholder="X">@error('x') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="discord"></label>
                        <input wire:model.defer="discord" type="text" class="form-control" id="discord" placeholder="Discord">@error('discord') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="other"></label>
                        <input wire:model.defer="other" type="text" class="form-control" id="other" placeholder="Other">@error('other') <span class="error text-danger">{{ $message }}</span> @enderror
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
                <h5 class="modal-title" id="updateModalLabel">Update Admincontact</h5>
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
                        <label for="nick_name"></label>
                        <input wire:model.defer="nick_name" type="text" class="form-control" id="nick_name" placeholder="Nick Name">@error('nick_name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                 
                           <label for="table"></label>
                               <div class="form-group">
                                <x-com-select-table table-name="admincontacttags" id="admincontacttag_id" display-name="name" />@error('admincontacttag_id') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                  <label for="active"></label>                  
                          <x-com-check :active="$active" />
                  @error('active') <span class="error text-danger">{{ $message }}</span> @enderror       
            
                    
                    <div class="form-group">
                        <label for="email"></label>
                        <input wire:model.defer="email" type="text" class="form-control" id="email" placeholder="Email">@error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="birthday"></label>
                        <input wire:model.defer="birthday" type="date" class="form-control" id="birthday" placeholder="Birthday">@error('birthday') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone_code"></label>
                        <input wire:model.defer="phone_code" type="text" class="form-control" id="phone_code" placeholder="Phone Code">@error('phone_code') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="whatsapp"></label>
                        <input wire:model.defer="whatsapp" type="text" class="form-control" id="whatsapp" placeholder="Whatsapp">@error('whatsapp') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="skype"></label>
                        <input wire:model.defer="skype" type="text" class="form-control" id="skype" placeholder="Skype">@error('skype') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="telegram"></label>
                        <input wire:model.defer="telegram" type="text" class="form-control" id="telegram" placeholder="Telegram">@error('telegram') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="tiktok"></label>
                        <input wire:model.defer="tiktok" type="text" class="form-control" id="tiktok" placeholder="Tiktok">@error('tiktok') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="facebook"></label>
                        <input wire:model.defer="facebook" type="text" class="form-control" id="facebook" placeholder="Facebook">@error('facebook') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="snapchat"></label>
                        <input wire:model.defer="snapchat" type="text" class="form-control" id="snapchat" placeholder="Snapchat">@error('snapchat') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="x"></label>
                        <input wire:model.defer="x" type="text" class="form-control" id="x" placeholder="X">@error('x') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="discord"></label>
                        <input wire:model.defer="discord" type="text" class="form-control" id="discord" placeholder="Discord">@error('discord') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="other"></label>
                        <input wire:model.defer="other" type="text" class="form-control" id="other" placeholder="Other">@error('other') <span class="error text-danger">{{ $message }}</span> @enderror
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
