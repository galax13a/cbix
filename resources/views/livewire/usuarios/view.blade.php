@section('title', __('Users'))
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card">

                <div class="card-header bg-transparent">
                    <x-btnmore />
                </div>

                <div class="card-body">
                    @include('livewire.usuarios.modals')
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <thead class="thead">
                                <tr class="text-center">
                                    <td>👻</td>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th class="text-center thead">Command</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($usuarios as $row)
                                    <tr class="text-left">
                                        <td class="text-bold text-center">
																	
                                            <i title="Roles Users"
                                                class="shadow-sm rounded-3 p-2 text-dark m-1 fab fa-get-pocket fs-5"></i>
                                            <i title="Users Segurity"
                                                class="shadow-sm rounded-3 p-2 text-dark m-1 fas fa-user-shield fs-5"></i>
                                            <i title="Bans! Users"
                                                class="shadow-sm rounded-3 p-2 text-danger m-1 fas fa-user-secret fs-5">												
											</i>
											
                                        </td>
                                        <td>
											<li       class="shadow-sm rounded-3 p-2 text-danger m-1 fas fa-user2-secret fs-6"><span class=" badge text-dark ">{{ $loop->iteration }}</span></li>
                                            {{ $row->name }}
                                        </td>
                                        <td>{{ $row->email }}</td>
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
                        <div class="float-end">{{ $usuarios->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
