@section('title', __('Users'))
<div class="container-fluid">
    <div class="row justify-content-center shadow rounded-3">

        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card border-0 mb-1">

                <div class="card-header bg-transparent">
                    <x-btnmore>
                        <a href=" {{ route('admin.roles') }} " target="_blank" title="New Roles">
                            <button class="btn btn-icon shadow-sm text-warning" title="Roles">
                                <i class="fab fa-get-pocket fs-5">.R</i>

                            </button>
                        </a>

                        <a href=" {{ url('admin/bans') }} " target="_blank" title="Users bans">
                            <button class="btn btn-icon shadow-sm text-danger">
                                <i class="fas fa-user-secret fs-5">
                                    {{ $this->all_bans }}

                                </i>

                            </button>
                        </a>

                    </x-btnmore>


                </div>

                <div class="card-body ">
                    @include('livewire.usuarios.modals')
                    <div class="table-responsive">
                        <table class="table  table-sm">
                            <thead class="thead">
                                <tr class="text-center">
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Bans</th>
                                    <th class="text-center thead">Command</th>
                                </tr>
                            </thead>
                            <tbody>


                                @forelse($usuarios as $row)
                                    <tr>
                                        <td data-record="{{ $row->id }}">
                                            <li
                                                class="shadow-sm rounded-3 p-2 text-danger m-1 fas fa-user2-secret fs-6">
                                                <span class=" badge text-dark ">{{ $loop->iteration }}</span>
                                            </li>
                                            {{ $row->name }}                                            
                                            @foreach ($row->getRoleNames() as $roleName)                                              
                                                <span class="badge bg-warning text-dark shadow-sm">
                                                    <i class="fab fa-get-pocket"></i> 
                                                    {{ $roleName }}</span>
                                            @endforeach

                                        </td>
                                        <td>{{ $row->email }}</td>

                                        <td class="text-bold text-center">
                                            @if ($row->isBanned())
                                                <i title="Bans! Users"
                                                    class="shadow-sm rounded-3 p-2 text-danger m-1 fas fa-user-secret fs-5">
                                                </i>
                                            @else
                                                <i title="Bans! Users"
                                                    class="shadow-sm rounded-3 p-2 text-dark m-1 fas fa-user-secret fs-5">

                                                </i>
                                            @endif

                                        </td>
                                        <td width="90">
                                            <x-btncrud>
                                                <x-slot name="id_editar">{{ $row->id }}</x-slot>
                                                <x-slot name="x_delete">delete-model</x-slot>
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
