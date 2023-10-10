<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-dark text-bold">
                <h5 class="modal-title bg-warning" id="createDataModalLabel">📢 New Support</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>

                    <div class="form-group">
                        <label for="type_support"></label>
                        <select wire:model.defer="type_support" class="form-control" id="type_support">
                            <option value="">🔔Type support</option>
                            <option value="payments">Pagos</option>
                            <option value="work">Trabajo</option>
                            <option value="request">Solicitud</option>
                            <option value="queries">Consultas</option>
                            <option value="complaints">Quejas</option>
                            <option value="other">Otro</option>
                        </select>
                        @error('type_support')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name"></label>
                        <input wire:model.defer="name" type="text" class="form-control" id="name"
                            placeholder="🔔Tell us what happens?">
                        @error('name')
                            <span class="error text-danger">{{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group d-none">
                        <label for="sent_by"></label>
                        <input wire:model.defer="sent_by" type="text" class="form-control" id="sent_by"
                            placeholder="Sent By">
                        @error('sent_by')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <label for="table"></label>
                    <div class="form-group d-none">
                        <x-com-select-table table-name="supports" id="support_id" display-name="name" />
                        @error('support_id')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="input-group mt-1 shadow-sm">
                        <span class="input-group-text">
                            <strong>
                                Leave us a Message 📨 <br> So we can help you
                            </strong>
                        </span>
                        <textarea style="height:190px;" class="form-control" aria-label="With textarea" id="ban_reason"
                            wire:model.defer="message" placeholder="💭  tell us what happens to you?">
                        </textarea>

                    </div>

                    @error('message')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group d-none">
                        <label for="reply_message"></label>
                        <input wire:model.defer="reply_message" type="text" class="form-control" id="reply_message"
                            placeholder="Reply Message">
                        @error('reply_message')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group d-none">
                        <label for="status"></label>
                        <select wire:model.defer="status" class="form-control" id="status">
                            <option value="pending">Pendiente</option>
                        </select>
                        @error('status')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="priority"></label>
                        <select wire:model.defer="priority" class="form-control" id="priority">
                            <option value="">🔘 Select Priority</option>
                            <option value="low">🟤Low</option>
                            <option value="medium">🟡Medium</option>
                            <option value="hight">🟣Hight</option>
                        
                        </select>
                        @error('priority')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button id="btn-close" type="button" wire:click.prevent="cancel()" class="btn btn-icon shadow-lg m-2"
                    data-bs-dismiss="modal">❌ Close</button>
                <button id="btn-store" type="button" wire:click.prevent="store()"
                    class="btn btn-icon shadow-lg m-2">Save ✅</button>
            </div>
        </div>
    </div>
</div>


<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="updateDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning shadow">
                <h5 class="modal-title bg-warning " id="updateModalLabel">Update Support</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" wire:model="selected_id">
                    <div class="form-group d-none">
                        <label for="type_support"></label>
                        <input wire:model.defer="type_support" type="text" class="form-control" id="type_support"
                            placeholder="Type Support">
                        @error('type_support')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <h5 class="text-capitalize p-2 shadow rounded-3">
                            🔔 {{ $this->type_support }}
                        </h5>
                        <strong class="m-4 text-capitalize">
                            💭 Topic : {{ $this->name }}
                        </strong>
                    </div>
                    <div class="form-group d-none">
                        <label for="name"></label>
                        <input wire:model.defer="name" type="text" class="form-control" id="name"
                            placeholder="Name">
                        @error('name')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group d-none">
                        <label for="sent_by"></label>
                        <input wire:model.defer="sent_by" type="text" class="form-control" id="sent_by"
                            placeholder="Sent By">
                        @error('sent_by')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-group mt-1 shadow-sm">
                        <span class="input-group-text">
                            <strong>
                                Message 📨
                            </strong>
                        </span>
                        <textarea style="height:150px;" class="form-control" aria-label="With textarea" id="ban_reason"
                            wire:model.defer="message" placeholder="💭 help me! ">
                           </textarea>
                    </div>

                    <div class="form-group">
                        <label for=""></label>
                        <x-comstatus>
                            <x-slot name="status">{{ $this->status ?? 'pending' }}</x-slot>
                        </x-comstatus>
                        <span class="input-group-text">
                            <strong>
                                Reply Support 📢
                            </strong>
                        </span>
                        <textarea style="height:150px;" class="form-control" 
                         aria-label="With textarea" id="reply"
                         disabled
                            wire:model.defer="reply_message" placeholder="💭 A support agent will contact you">
                           </textarea>                 
                    </div>
                    @error('reply_message')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror

                    <div class="form-group d-none">
                        <label for="status">Status:</label>
                        <select wire:model="status" class="form-control" id="status">
                            <option value="pending">🟨Pending</option>
                            <option value="in_progress">🟦In Progress</option>
                            <option value="resolved">🟩Resolved</option>
                        </select>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button id="btn-close" type="button" wire:click.prevent="cancel()"
                    class="btn btn-icon shadow-lg m-2" data-bs-dismiss="modal">❌ Close</button>
                <button id="btn-update" type="button" wire:click.prevent="update()"
                    class="btn btn-icon shadow-lg m-2">Save ✅</button>
            </div>
        </div>
    </div>
</div>
