@section('title', __('Estudios'))
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card bg-transparent border-0">

                <div class="card-header bg-transparent">
                    <div class="text-center">
                        <div class="row">
                            <div class="col">
                                <x-btnmore />
                            </div>
                            <div class="col">
                                <strong class="punter tagneon text-center">Studio Manager</strong>

                            </div>
                            <div class="col">
                                <div class="btn-group btn-group-sm mt-0 shadow-sm rounded-4 text-center" role="group"
                                    aria-label="control">

                                    <button id="btn-new2" title="Add Models for Studios" type="button"
                                        class="btn btn-icon btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#NewModelDataModal">
                                        <strong>
                                            ☝️
                                            {{ __('messages.studio-view-btn-addmodelstudio') }}
                                        </strong>
                                    </button>

                                    <button id="btn-new2" title="Models Studio" type="button"
                                        class="btn btn-icon btn-sm" @click="openwin36('create2DataModal')">
                                        <strong>
                                            {{ session('locale') == 'es' ? '😺Modelos Studio' : '😺 Models Studio' }}

                                        </strong>

                                        <button id="btn-new2" title="Help Studio" type="button"
                                            class="btn btn-icon btn-sm" @click="openwin36('howmodelDataModal')">
                                            <strong>
                                                {{ session('locale') == 'es' ? '📗Studio Ayuda ' : '📗Studio Help' }}

                                            </strong>
                                        </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card-body">
                    @include('livewire.estudios.modals')
                    @include('livewire.estudios.momodels')
                    <!--  table  Modal xxxxxx -->
                    @include('livewire.estudios.tableshow')
                    @include('livewire.estudios.newmodels')

                    <div class="container">
                        <div class="row">

                            <div class="col">
                                <div class="form-group">
                                    <label for="">Studios</label>


                                </div>
                            </div>


                        </div>


                        <div class="table-responsive">

                            <table class="table table-bordered table-sm">
                                <thead class="thead">
                                    <tr class="text-center shadow-sm text-bold text-primary">
                                        <td>🎹</td>
                                        <th>Name</th>
                                        <th>City</th>

                                        <th class="text-center thead-danger">My Models 💟</th>
                                        <th class="text-center thead">⭕️</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($estudios as $row)
                                        <tr class="text-center">
                                            <td class="shadow-sm">{{ $loop->iteration }}</td>
                                            <td data-record="{{ $row->id }}">{{ $row->name }}</td>
                                            <td>{{ $row->city }}</td>

                                            <td class="text-center">
                                                <strong id="list_table1"
                                                onclick="dispatchLoadingEvent('dots', 1200)"
                                                wire:click="look_table({{ $row->id }})"
                                                    type="button" class="p-1 custom-link shadow-sm"
                                                    data-bs-toggle="modal" data-bs-target="#TableShowDataModal">
                                                    👉 Models [ {{ $row->modelos_count }} ]
                                                </strong>
                                            </td>
                                            <td width="90">
                                                <x-btncrud>
                                                    <x-slot name="id_editar">{{ $row->id }}</x-slot>
                                                </x-btncrud>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center" colspan="100%">No data Found </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="float-end">{{ $estudios->links() }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('livewire:load', function() {

                $(document).ready(function() {

                    $('#models-select').select2({
                        dropdownParent: $('#create2DataModal')
                    });

/*
                    $('body').on('shown.bs.modal', '.modal', function() {
                        $(this).find('select').each(function() {
                            var dropdownParent = $(document.body);
                            if ($(this).parents('.modal.in:first').length !== 0)
                                dropdownParent = $(this).parents('.modal.in:first');
                            $(this).select2({
                                dropdownParent: $('#create2DataModal')
                            });
                        });
                    });
                    */
                });

                $('#models-select').change(function() {
                    var thismodelo = $(this).val();
                    @this.set('modelo_id', thismodelo);
                });

                $('#studio-select').change(function() {
                    var this_studio = $(this).val();
                    @this.set('estudio_id', this_studio);
                });

                window.livewire.on('combos', () => {
                    $("#models-select").select2();
                    $('#models-select').select2({
                        dropdownParent: $('#create2DataModal')
                    });
                    // $("#studio-select").select2();
                });
            })
        </script>
    </div>
