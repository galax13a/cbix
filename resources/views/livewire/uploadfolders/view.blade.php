@section('title', __('Uploadfolders'))
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card">

                <div class="card-header bg-transparent">
                    <x-btnmore />
                </div>

                <div class="card-body">
                    @include('livewire.uploadfolders.modals')
                    <div class="table-responsive">
                        <table class="table  table-sm">
                            <thead class="thead">
                                <tr class="text-center">
                                    <td>#</td>
                                    <th>Folder</th>
                                    <th>Storage</th>
                                    <th>Storage Cloud</th>
									<th>Images</th>
									<th>Sizes</th>
                                    <th>Active</th>
                                    <th class="text-center thead">Command</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($uploadfolders as $row)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->storage }}</td>
                                        <td>{{ $row->storage_host }}</td>
										<td>{{ $this->getImagesCount($row->id) }}</td>
									   <td>{{ $this->getTotalSize($row->id) }}</td>
                                        <td class="text-center">
                                            <x-com-active :active="$row->active" />
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
                        <div class="float-end">{{ $uploadfolders->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
