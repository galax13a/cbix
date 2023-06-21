@section('title', __('Unbans'))
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card">

                <div class="card-header bg-transparent">
                    <x-btnmore />
                </div>

                <div class="card-body">
                    @include('livewire.admin.dashboard.unbans.modals')
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <thead class="thead">
                                <tr class="text-center">
                                    <td>#</td>
                                    <th>Sent By</th>
                                    <th>Resolved By</th>
                                    <th>Comment</th>
                                    <th>Reply Comment</th>
                                    <th>Bans</th>
                                    <th>Status</th>
                                    <th class="text-center thead">Command</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($unbans as $row)
                                    <tr>
                                        <td>
                                            <li
                                                class="shadow-sm rounded-3 p-2 text-danger m-1 fas fa-user2-secret fs-6">
                                                <span class=" badge text-dark ">{{ $loop->iteration }}</span>
                                            </li>                                  
                                        </td>
                                        <td data-record="{{ $row->id }}">{{ $row->user_sent_by->name }}</td>
                                        <td class="text-center thead">
                                            <strong>
                                                {{ $row->user_resolved_by->name ?? '🟥 Resolving Now' }}
                                            </strong>
                                        </td>
                                        <td>{{ $row->comment }}</td>
                                        <td class="text-center">
                                            @if ($row->reply_comment)
                                                <p>{{ $row->reply_comment }}</p>
                                            @else
                                                <button class="btn btn-primary rounded-3 shadow-sm">
                                                    Reply 💬
                                                </button>
                                            @endif

                                        </td>
                                        <td>
                                            @if ($row->user_sent_by->isBanned())
                                            <i title=" {{ $row->email }}"
                                                class="text-danger fas fa-user-secret fs-5">
                                                
                                            </i>
                                        @else
                                            <i title="Bans! Users"
                                                class="text-success m-1 fas fa-user-secret fs-5">
                                            </i>
                                        @endif
                                           
                                        </td>

                                        <td>
                                            <x-comstatus>
                                                <x-slot name="status">{{ $row->status ?? 'pending' }}</x-slot>
                                            </x-comstatus>
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
                        <div class="float-end">{{ $unbans->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
