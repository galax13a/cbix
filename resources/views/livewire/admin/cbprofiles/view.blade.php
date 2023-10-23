@section('title', __('Biousers'))
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card">

                <div class="card-header bg-transparent">
                    <div style="display: flex;  align-items: left;">
                        <div class="text-left">
                            <input wire:model='keyWord' type="text" class="form-control form-control-lg w-full"
                                name="search" id="search" placeholder="{{ __('messages.keyword-new') }}">
                        </div>
                        <button id="btn-new" type="button" class="btn btn-icon shadow-md m-2" data-bs-toggle="modal"
                            data-bs-target="#createDataModal">
                            ➕ <strong> Themes
                            </strong>
                        </button>
                        <button id="btn-new" type="button" class="btn btn-icon shadow-md m-2" data-bs-toggle="modal"
                            data-bs-target="#createDataModal">
                            ➕ <strong> {{ __('messages.new') }} Editor
                            </strong>
                        </button>
                        @if (session()->has('message'))
                            <div wire:poll.4s class="btn btn-sm btn-info" style="margin-top:0px; margin-bottom:0px;">
                                {{ session('message') }} </div>
                        @endif


                    </div>
                </div>

                <div class="card-body">
                    @include('livewire.admin.cbprofiles.modals')
                    <div class="table-responsive">
                        <table class="table table-striped table-sm" id="datatable">
                            <thead class="thead">
                                <tr>
                                    <td>#</td>
                                    <th>Name</th>
                                    <th>Codex</th>
                                    <th>Link Room</th>
                                    <th>Pay</th>
                                    <th class="text-center thead"><i class='bx bxs-balloon'></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($biousers as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td data-record="{{ $row->id }}">{{ $row->name }}</td>
                                        <td>
                                            <div class="codextheme d-none" id="codextheme">
                                                {{ $row->codex }}
                                            </div>
                                            <strong id="copycodex"><a href="#">Copy Code</a></strong>
                                        </td>
                                        <td>
                                            <div class="card mb-3" style="max-width: 540px;">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="{{ $row->pic }}" class=" rounded-start"
                                                            alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                       
                                                            <p class="card-text">
                                                                @php
                                                                    $data = json_decode($row->data);
                                                                @endphp

                                                            <div class="card" style="width: 18rem;">
                                                                <div class="card-body">
                                                             
                                                                    <h6 class="card-subtitle mb-2 text-muted">
                                                                        {{ $data->username }}</h6>
                                                                    <p class="card-text">
                                                                        <strong>Gender:</strong>
                                                                        {{ ucfirst($data->gender) }}<br>
                                                                        <strong>Location:</strong>
                                                                        {{ $data->location }}<br>
                                                                        <strong>Current Show:</strong>
                                                                        {{ $data->current_show }}<br>
                                                                        <strong>Is New?:</strong>
                                                                        {{ $data->is_new ? 'Yes' : 'No' }}<br>
                                                                        <strong>Number of Users:</strong>
                                                                        {{ $data->num_users }}<br>
                                                                        <strong>Number of Followers:</strong>
                                                                        {{ $data->num_followers }}<br>
                                                                        <strong>Languages:</strong>
                                                                        {{ $data->spoken_languages }}<br>
                                                                        <strong>Birthday:</strong>
                                                                        {{ $data->birthday }}<br>
                                                                        <strong>Room Subject:</strong>
                                                                        {{ $data->room_subject }}<br>
                                                                        <strong>Age:</strong> {{ $data->age }}<br>
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            </p>
                                                            <p class="card-text"><small class="text-body-secondary">Last
                                                                    updated 3 mins ago</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shadow rounded-3">
                                                <img src="{{ $row->pic }}" width="30%" class="img-responsive"
                                                    alt="" title="View Room{{ $row->name }}">
                                                <p>Topic > #ndfd #dkfn</p>
                                            </div>
                                            <a href="{{ $row->link }}" target="new">Room</a>
                                        </td>
                                        <td>{{ $row->pay }}</td>
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
                        <div class="float-end">{{ $biousers->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
