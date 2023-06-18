<!-- select table  Modal -->
<div style="z-index: 1100;" wire:ignore.self class="modal fade" id="TableShowDataModal" data-bs-backdrop="static"
     role="dialog" aria-labelledby="TableShowDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TableShowDataModalLabel">🧡 Study/Models</h5>
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
                                        <th>🔘</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tableLookRecord as $record)
                                        <tr class="text-center">
                                            <td class="text-center" x-data="{ hover: false, id: {{ $record->id }} }" @mouseenter="hover = true"
                                                @mouseleave="hover = false"
                                                @click="window.confirmDelete({{ $record->id }})"
                                                style="cursor: pointer;" class="delete-icon">
                                                <span class="font-weight-bold shadow"
                                                    style="border-radius: 26%; background: transparent;"
                                                    x-text="hover ? '⛔️' : '{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}'">
                                                </span>

                                            </td>
                                            <td>{{ $record->estudio_name }}</td>
                                            <td data-record="{{ $record->id }}">
                                                {{ $record->modelo_name }}</td>
                                            <td>{{ $record->modelo_nick }}</td>
                                            <td>

                                                <x-com-btn-play>

                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        @click="openwin36('create2DataModal')">
                                                        <button title="New Model : {{ $record->id }}"
                                                            tooltips="New Model" @click="activeButton = 'new'"
                                                            :class="{ 'active-menu-td': activeButton === 'new' }"
                                                            class="menu-item rounded-button">
                                                            <h6 class="my-2">➕</h6>
                                                        </button>
                                                    </a>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        @click="openwin36('updateModeloDataModal')"
                                                        wire:click="edit_modelo({{ $record->modelo_id }})">
                                                        <button title="Edit Modelo" tooltips="Edit record"
                                                            @click="activeButton = 'edit_modelo'"
                                                            :class="{ 'active-menu-td': activeButton === 'edit_modelo' }"
                                                            class="menu-item rounded-button">
                                                            <h6 class="my-2">✅</h6>
                                                        </button>
                                                    </a>

                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        @click="openwin36('update_estudiomodelDataModal')"
                                                        wire:click="edit_estudiomodel({{ $record->id }})">
                                                        <button title="Switch from model to studio"
                                                            tooltips="Edit record" @click="activeButton = 'edit'"
                                                            :class="{ 'active-menu-td': activeButton === 'edit' }"
                                                            class="menu-item rounded-button">
                                                            <h6 class="my-2">☑️</h6>
                                                        </button>
                                                    </a>
                                                    <a href="/admin/api/chaturbate/studio/models/create/{{ $record->modelo_id }}/{{ $record->modelo_nick }}"
                                                        class="text-decoration-none" target="_blank">
                                                        <button title="Api Chaturbate" tooltips="Api Chaturbate"
                                                            @click="activeButton = 'api'"
                                                            :class="{ 'active-menu-td': activeButton === 'api' }"
                                                            class="menu-item rounded-button">
                                                            <h5 class="my-2">⚡️</h5>
                                                        </button>
                                                    </a>
                                                    <a href="/admin/bios/chaturbate/studio/create/new/{{ $record->modelo_id }}/{{ $record->modelo_nick }}"
                                                        class="text-decoration-none" target="_blank">
                                                        <button title="Create Bios" @click="activeButton = 'create'"
                                                            :class="{ 'active-menu-td': activeButton === 'create' }"
                                                            class="menu-item rounded-button">
                                                            <h5 class="my-2"> 💛</h5>
                                                        </button>
                                                    </a>
                                                    <a href="javascript:void(0)" class="text-decoration-none"
                                                        onclick="window.confirmDelete({{ $record->id }})">
                                                        <button title="Delete Record" @click="activeButton = 'delete'"
                                                            :class="{ 'active-menu-td': activeButton === 'delete' }"
                                                            class="menu-item rounded-button">
                                                            <h5 class="my-2"> ⛔️</h5>
                                                        </button>
                                                    </a>
                                                </x-com-btn-play>

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
                    @click="openwin36('create2DataModal')">
                    <strong>☝️ Add Studio Model</strong>
                </button>
                <button id="btn-close-table" type="button" wire:click.prevent="cancel()"
                    class="btn btn-icon shadow-lg m-2" data-bs-dismiss="modal">❌ Close</button>
            </div>
        </div>
    </div>

    @push('scripts')
    @endpush
</div>
