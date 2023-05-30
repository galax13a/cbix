@section('title', __('Estudios'))
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card">

                <div class="card-header bg-transparent">
					<div class="container text-center">
						<div class="row">
						  <div class="col">
							<x-btnmore />
						  </div>
						  <div class="col">
						
						  </div>
						  <div class="col">
							<button id="btn-new2" title="Add Models for Studios" type="button" class="btn btn-icon btn-sm"
							data-bs-toggle="modal" data-bs-target="#create2DataModal">
							<strong>☝️ Add Model Studio</strong>
						</button>
	
						  </div>
						</div>
					  </div>
                </div>


                <div class="card-body">
                    @include('livewire.estudios.modals')
                    @include('livewire.estudios.momodels')
                    @include('livewire.estudios.tableshow')
                    @include('livewire.estudios.newmodels')

                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <thead class="thead">
                                <tr>
                                    <td>#</td>
                                    <th>Name</th>
                                    <th>City</th>
                                    <th>Dir</th>
                                    <th class="text-center thead-danger">My Models 💟</th>
                                    <th class="text-center thead">Command</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($estudios as $row)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->city }}</td>
                                        <td>{{ $row->dir }}</td>
                                        <td class="text-center">
                                            
                                            <button wire:click="look_table({{$row->id}})" type="button" class="btn btn-icon shadow-md m-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#TableShowDataModal">
                                                <strong >👉 Models [ {{ $row->modelos_count }} ]</strong>            
                                            </button>
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
</div>
