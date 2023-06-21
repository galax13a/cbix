<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="createDataModalLabel"> Unban request</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form>
                    <div class="form-group">
                        <label for="sent_by"></label>

                        <h3>not enabled by admin</h3>

                </form>
            </div>
        </div>

    </div>

</div>
</div>

<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="updateDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Unban</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" wire:model="selected_id">
                    <div class="form-group d-none">
                        <label for="sent_by"></label>
                        <input wire:model.defer="sent_by" type="text" class="form-control" id="sent_by"
                            placeholder="Sent By">
                        @error('sent_by')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group d-none">
                        <label for="resolved_by"></label>
                        <input wire:model.defer="resolved_by" type="text" class="form-control" id="resolved_by"
                            placeholder="Resolved By">
                        @error('resolved_by')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">

                        <button wire:click.prevent="unbaner()"
                            class="
                            btn 
                            @if ($this->is_banned) btn-primary
                               @else btn-success @endif
                            shadow p-2 m-2">
                            🔓 UnBand User 
                           
                        </button>

                    </div>

                    <div class="input-group mt-1 shadow-sm">
                        <span class="input-group-text">
                            <strong>
                                Coments, Unbanning🚫
                            </strong>
                        </span>
                        <textarea style="height:150px;" class="form-control" aria-label="With textarea" id="ban_reason"
                            wire:model.defer="reply_comment" placeholder="Do you think it is a system error ?">
                        </textarea>
                    </div>
                    @error('reply_comment')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select wire:model="status" class="form-control" id="status">
                            <option value="pending">Pending</option>
                            <option value="in_progress">In Progress</option>
                            <option value="resolved">Resolved</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="email"></label>
                        <input wire:model.defer="email" type="text" class="form-control" id="email"
                            placeholder="Email">
                        @error('email')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>



                </form>
            </div>
            <div class="modal-footer">
                <button id="btn-close" type="button" wire:click.prevent="cancel()" class="btn btn-icon shadow-lg m-2"
                    data-bs-dismiss="modal">❌ Close</button>
                <button id="btn-update" type="button" wire:click.prevent="update()"
                    class="btn btn-icon shadow-lg m-2">Save ✅</button>
            </div>
        </div>
    </div>
</div>
