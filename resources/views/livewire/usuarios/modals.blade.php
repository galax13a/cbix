<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel"> New user</h5>
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
                <h5 class="modal-title" id="updateModalLabel">Update user</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body" style="margin-top:-26px">
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


                                <div class="col">
                                    <select wire:model="selectedRoles" multiple style="height: 260px;">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">

                                    @if (!empty($userRoles))
                                        <span class="badge bg-primary">
                                            <strong class=" shadow rounded-2 p-2 mb-4">Current Roles </strong>

                                        </span>
                                        <div class="listar my-2"
                                            style="height: 210px; overflow-y: auto; overflow-x: hidden;">
                                            <ul>
                                                @foreach ($userRoles as $role)
                                                    <li><span
                                                            class="badge bg-light text-dark punter shadow-sm">
                                                            🔑 {{ $role }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @else
                                        <strong>
                                            This User !, Has no role within the site.
                                                     <br>
                                                     👉🏻  Assign a role ..🔰                                   

                                        </strong>
                                    @endif

                                </div>

                                <div class="col">
                                    <div class="m-2 p-2 shadow rounded-3">
                                        <button id="btn-close"
                                            class="bg-primary shadow rounded-3 text-bold font-bold mx-4 mb-2"type="button"
                                            wire:click.prevent="updateUserRoles">
                                            <strong class="shadow rounded-2 p-2">👉🏻Assign-Rol 🔒</strong>
                                        </button>
                                        <strong>Crt + click select + row roles.</strong>
                                    </div>
                                    <div class="form-check mt-4">
                                   

                                        <hr>
                                        <label title="After checking, update"
                                            class="mx-4 m-2 p-2 punter shadow rounded-3" title="Banned User">
                                            <input class="form-check-input" type="checkbox" wire:model="ban"
                                                id="ban" name="ban" wire:model="user_ban">
                                            <span class="badge text-danger bg-dark p-2 fs-5 m-4">
                                                <strong class=" p-2 shadow rounded-3 ban-dark">
                                                Ban !
                                                    {{ $this->ban ? '💥' : '🚫' }}
                                                </strong>
                                            </span>
                                            <strong class="p-2 ">
                                                You must update the user for the ban to be effective,  <br> choose the time
                                                that will be banned
                                            </strong>
                                        </label>
                                    </div>
                                </div>

                                @if ($this->ban)

                                    <div class="row shadow p-2 rounded-2 mt-1 ">

                                        <label class="mt-1">

                                            <span class="badge bg-warning text-dark">
                                                @if ($this->ban)
                                                    @if ($this->ban_permanent)
                                                        <span class="bg-danger rounded-2 p-2">Permanently
                                                            banned.</span>
                                                    @else
                                                        @if ($ban_expiry)
                                                            <span class="bg-dark rounded-2 p-1">Ban expires: {{ $ban_expiry->diffForHumans() }}</span>
                                                        @else
                                                            <span class="bg-success rounded-2 p-1">The ban does not have an expiry date.</span>
                                                        @endif
                                                    @endif
                                                @else
                                                    <span>This user has not been banned.</span>
                                                @endif


                                            </span>
                                        </label>


                                        <select class="form-select" id="selectedBanOption"
                                            wire:model="selectedBanOption">
                                            <option value="">Ban Duration</option>
                                            @foreach ($this->banOptions as $label => $value)
                                                <option value="{{ $value }}">{{ $label }}</option>
                                            @endforeach
                                        </select>



                                        <div class="input-group mt-1">
                                            <span class="input-group-text"> <strong> Reason for Ban</strong> </span>
                                            <textarea class="form-control" aria-label="With textarea" id="ban_reason" wire:model.defer="ban_reason"
                                                placeholder="Ban without cause, possible agitator ?"></textarea>
                                        </div>

                                        @error('ban')
                                            <span class="error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                @endif

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
