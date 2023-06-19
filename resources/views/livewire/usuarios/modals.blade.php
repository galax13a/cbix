<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel"> New Usuario</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="name"></label>
                        <input wire:model.defer="name" type="text" class="form-control" id="name"
                            placeholder="Name">
                        @error('name')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
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
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Usuario</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body" style="margin-top:-29px">
                <form>
                    <input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="name"></label>
                        <input wire:model.defer="name" type="text" class="form-control" id="name"
                            placeholder="Name">
                        @error('name')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email"></label>
                        <input wire:model.defer="email" type="text" class="form-control" id="email"
                            placeholder="Email">
                        @error('email')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mt-2 mb-3">

                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <label>Crt + click select Roles.</label>
                                    <button id="btn-close"
                                        class="shadow rounded-3 text-bold font-bold mx-4 mb-2"type="button"
                                        wire:click.prevent="updateUserRoles">
                                        🔐 Assign Roles
                                    </button>                                                                     

                                </div>
                                <div class="col">
                                    <select wire:model="selectedRoles" multiple style="height: 260px;">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">

                                    @if (!empty($userRoles))
                                        <strong>Current Roles: </strong>
                                        <div class="listar" style="height: 210px; overflow-y: auto; overflow-x: hidden;">
                                            <ul>
                                                @foreach ($userRoles as $role)
                                                    <li><span class="badge bg-light text-dark">{{ $role }}</span></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @else
                                          <strong>Roles Nulls</strong>
                                    @endif
                                
                                </div>

                                <div class="row shadow p-2 rounded-2 mt-2">
                                    <div class="form-check">
                                        <label class="mx-4">
                                            <input class="form-check-input" type="checkbox" wire:model="ban" id="ban" name="ban" wire:model="user_ban">
                                             Ban User 🚫
                                        </label>
                                        <div class="input-group">
                                            <span class="input-group-text">Reason for Ban</span>
                                            <textarea class="form-control" aria-label="With textarea" id="ban_reason" wire:model="banReason"></textarea>
                                          </div>

                                        @error('ban')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                   
                                    </div>
                           
                                </div>
                                
                            </div>
                        </div>

                    </div>


                </form>
            </div>
            <div class="modal-footer">

                <button id="btn-close" type="button" wire:click.prevent="cancel()"
                    class="btn btn-icon shadow-lg m-2" data-bs-dismiss="modal">❌ Close</button>

                <button id="btn-update" type="button" wire:click.prevent="update()"
                    class="btn btn-icon shadow-lg m-2">Update User ✅</button>
            </div>
        </div>
    </div>
</div>
