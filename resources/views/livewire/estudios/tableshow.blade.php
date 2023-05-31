<!-- select table  Modal -->
<div style="z-index: 1100;" wire:ignore.self class="modal fade" id="TableShowDataModal" data-bs-backdrop="static" tabindex="-3" role="dialog"
    aria-labelledby="TableShowDataModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TableShowDataModalLabel"> Models / Study</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <label for="table">Study</label>
                <div class="form-group">
                    <x-com-select-table table-name="estudios" id="estudio_id" display-name="name" />
                </div>


                <div>

                    @if ($tableLookRecord->isEmpty())
                        <br>
                        <h5>No records found. Models</h5>
                    @else
                        <div style="min-height: 310px; max-height: 310px; overflow-y: auto;">
                            <table class="table table-bordered table-sm my-1 shadow-sm rounded-3">
                                <thead>
                                    <tr class="text-center">
                                        <th>ID</th>
                                        <th>Study</th>
                                        <th>Name</th>
                                        <th>Nick</th>
                                        <th>Control</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tableLookRecord as $record)
                                        <tr class="text-center">
                                            <td class="text-center" x-data="{ hover: false, id: {{ $record->id }} }" @mouseenter="hover = true"
                                                @mouseleave="hover = false"
                                                @click="window.confirmDelete({{ $record->id }})"
                                                style="cursor: pointer;" class="delete-icon">
                                                <span class="font-weight-bold shadow p-1"
                                                    style="border-radius: 26%; background: transparent;"
                                                    x-text="hover ? '⛔️' : '{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}'">
                                                </span>

                                            </td>
                                            <td>{{ $record->estudio_name }}</td>
                                            <td data-record="{{ $record->id }}">{{ $record->modelo_name }}</td>
                                            <td>{{ $record->modelo_nick }}</td>

                                            <td>
                                                <div x-data="{ open: false, activeButton: null }" @click.away="open = false" class="wrapper">
                                                    <button @click="open = !open"
                                                        class="rounded-3 shadow-sm main-button">💢</button>

                                                    <div x-show="open" class="menu-table">
                                                        <button title="Edit Record" tooltips="Edit record"
                                                            @click="activeButton = 'edit'"
                                                            :class="{ 'active-menu-td': activeButton === 'edit' }"
                                                            title="{{ $record->id }}"
                                                            class="menu-item rounded-button">
                                                            <h5 class="my-2">✔️</h5>
                                                        </button>
                                                        <button title="Api Chaturbate" tooltips="Api Chaturbate"
                                                            @click="activeButton = 'api'"
                                                            :class="{ 'active-menu-td': activeButton === 'api' }"
                                                            class="menu-item rounded-button">
                                                            <h3 class="my-2">⚡️</h3>
                                                        </button>
                                                        <button title="Create Bios" @click="activeButton = 'create'"
                                                            :class="{ 'active-menu-td': activeButton === 'create' }"
                                                            class="menu-item rounded-button">
                                                            <h5 class="my-2"> 💛</h5>
                                                        </button>
                                                        <button title="Delete Record" @click="activeButton = 'delete'"
                                                            :class="{ 'active-menu-td': activeButton === 'delete' }"
                                                            class="menu-item rounded-button">
                                                            <h3 class="my-2"> ⛔️</h3>
                                                        </button>
                                                    </div>
                                                </div>


                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="float-end">{{ $tableLookRecord->links() }}</div>
                    @endif
                </div>

            </div>
            <div class="modal-footer">
                <button id="btn-new2" title="Add Models for Studios" type="button" class="btn btn-icon btn-sm"
                    data-bs-toggle="modal" data-bs-target="#create2DataModal">
                    <strong>☝️ Add Model Studio</strong>
                </button>
                <button id="btn-close" type="button" wire:click.prevent="cancel()" class="btn btn-icon shadow-lg m-2"
                    data-bs-dismiss="modal">❌ Close</button>
            </div>
        </div>
    </div>

   

</div>
