@section('title', __('Stats'))
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card">

                <div class="card-header bg-transparent">
                    <x-btnmore />
                </div>

                <div class="card-body">
                    @include('livewire.admin.stats.modals')
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead class="thead">
                                <tr>
                                    <td>#</td>
                                    <th>Name</th>
                                    <th>Codex</th>
                                    <th>Location</th>
                                    <th>Url</th>
                                    <th class="text-center thead">Command</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($stats as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td data-record="{{ $row->id }}">{{ $row->name }}</td>
										<td>{!! Str::limit(e($row->codex), 30) !!}</td>

                                        <td>
											{{ $row->location === 'head' ? '🟧Head' : '⬛️Body' }}

										</td>
                                        <td>{{ $row->url }}</td>
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
                        <div class="float-end">{{ $stats->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
