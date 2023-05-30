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
                        <table class="table table-bordered table-sm my-3 shadow-sm rounded-3">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Study</th>
                                    <th>Name</th>
                                    <th>Nick</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tableLookRecord as $record)
                                    <tr>
                                        <td class="text-center" x-data="{ hover: false }" 
                                        @mouseenter="hover = true" 
                                        @mouseleave="hover = false" 
                                        style="cursor: pointer;" 
                                        class="delete-icon">                                      
                                        <span class="font-weight-bold shadow p-1"
                                        style="border-radius: 26%; background: transparent;"
                                        x-text="hover ? '📛' : {{$loop->iteration}}"
                                        wire:click="destroy_model({{$record->id}})"></span>

                                    </td>
                                    

                                        <td>{{ $record->estudio_name }}</td>
                                        <td>{{ $record->modelo_name }}</td>
                                        <td>{{ $record->modelo_nick }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="float-end">{{ $tableLookRecord->links() }}</div>
                    @endif
                </div>

            </div>
            <div class="modal-footer">
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
