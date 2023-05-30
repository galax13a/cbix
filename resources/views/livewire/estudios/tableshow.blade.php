<!-- select table  Modal -->
<div wire:ignore.self class="modal fade" id="TableShowDataModal" data-bs-backdrop="static" tabindex="-3" role="dialog"
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
                    <div style="max-height: 310px; overflow-y: auto;">
                        <table  class="table table-bordered table-sm my-1 shadow-sm rounded-3">
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
                                        <td  class="text-center" x-data="{ hover: false, id: {{ $record->id }} }" @mouseenter="hover = true"
                                            @mouseleave="hover = false" @click="window.confirmDelete({{ $record->id }})"
                                            style="cursor: pointer;" class="delete-icon">
                                            <span class="font-weight-bold shadow p-1"
                                                style="border-radius: 26%; background: transparent;"
                                                x-text="hover ? '⛔️' : '{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}'">
                                            </span>
                                      
                                        </td>
                                        <td>{{ $record->estudio_name }}</td>
                                        <td data-record="{{ $record->id }}">{{ $record->modelo_name }}</td>
                                        <td>{{ $record->modelo_nick }}</td>

                                    <td>ctr</td>
                                        
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

    <script>
        function showEmoji(element, emoji) {
            element.innerHTML = emoji;
        }

        function hideEmoji(element) {
            element.innerHTML = '';
        }
    </script>


</div>
