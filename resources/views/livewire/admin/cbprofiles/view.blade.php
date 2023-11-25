@section('title', __('Biousers'))
<div class="container-fluid">
    <div class="row justify-content-center">


        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card">
                @php
                $user = auth()->user();
                $biousersCount = $user->biousers()->count();
            @endphp
                <div class="card-header bg-transparent">
                    <div style="display: flex;  align-items: left;">
                        <div class="text-left">
                           
                            <input wire:model='keyWord' type="text" class="form-control form-control-lg w-full"
                                name="search" id="search" placeholder="{{ __('messages.keyword-new') }}">
                        </div>

                        <button id="btn-new" type="button" class="btn btn-icon shadow-md m-2" data-bs-toggle="modal"
                            data-bs-target="#createDataModal">
                            ➕ <strong> {{ __('messages.new') }} Bio
                            </strong>
                        </button>               
                         
                        @if (session()->has('message'))
                            <div wire:poll.4s class="btn btn-sm btn-info" style="margin-top:0px; margin-bottom:0px;">
                                {{ session('message') }} </div>
                        @endif

                        <small class="p-3">
                            <strong>
                            {{ $biousersCount }} / {{auth()->user()->profiles}} Free Bios  
                            In this free version, you can create up to  <mark>3 profiles</mark>  for chatur and to share on your networks </strong>
                        </small>

                    </div>
                
                </div>

                <div class="card-body" wire:key='table-bios'>
                    @include('livewire.admin.cbprofiles.modals')
                    <div class="table-responsive">
                        <table class="table table-striped table-sm" id="datatable">
                            <thead class="thead">
                                <tr>
                                    <td>#</td>
                                    <th>Bios</th>
                                    <th>Link Room</th>
                                    <th class="text-center thead">
                                        <i class='bx bxs-balloon'></i>
                                        <a href="" title="unlimited licenses">
                                            <i class='bx bx-happy-heart-eyes'></i>
                                        </a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($biousers as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td data-record="{{ $row->id }}">
                                            <div class="codextheme " id="codextheme" data-bio = "{{ $row->codex }}">

                                                @if ($row->codex === 'none')
                                                    <a  data-bs-toggle="modal"
                                                    data-bs-target="#GenereModal " href="javascript:void(0)">{{ $row->name }} Bio <box-icon
                                                            name='code-block' animation='flashing'></box-icon></a>
                                                @else
                                                    <a href="#"
                                                        title="copy this code and paste it in your chatur bio"><strong
                                                            id="copycodex">Copy <box-icon name='code-alt'
                                                            animation='tada'></box-icon> </strong></a>
                                                @endif
                                            </div>

                                        </td>
                                        <td>

                                            <div class="container text-center ">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <img src="{{ $row->pic }}"
                                                            class="img-responsive rounded-4 shadow" alt=""
                                                            title="View Room{{ $row->name }}">
                                                    </div>
                                                    <div class="col-8">
                                                        <p class="card-text">
                                                            @php
                                                                $data = json_decode($row->data);
                                                            @endphp

                                                        <div id="card-wc" class="card shadow rounded-3 bg-dark"
                                                            style="width: 18rem;">
                                                            <div class="card-body rounded-3"
                                                                style="
														background-image: linear-gradient( 135deg, #8b8b8b4b 10%, #7b86941a 100%);
														">
                                                                <div wire:key='model-{{ $row->id }}'
                                                                    class="frame">
                                                                    <a href="javascript:void(0)" class="load-iframe"
                                                                        id="room-{{ $row->id }}"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#iframeModal"
                                                                        wire:click="videoiframe('{{ $row->link }}')"
                                                                        data-room="{{ $row->link }}"
                                                                        title="View Models"
                                                                        >
                                                                        <i class='bx bxs-webcam bx-flashing text-dark' ></i>
                                                                    </a>
                                                             
                                                                </div>
                                                                <h3
                                                                    class="card-subtitle mb-2 text-muted text-capitalize">
                                                                    {{ $data->username }}</h3>
                                                                <p class="card-text">
                                                                    <strong>Gender:</strong>
                                                                    {{ ucfirst($data->gender) }}<br>
                                                                    <strong>Age:</strong> {{ $data->age }}<br>
                                                                    <strong>Location:</strong>
                                                                    {{ $data->location }}<br>
                                                                    <strong>Current Show:</strong>
                                                                    {{ $data->current_show }}<br>

                                                                    <strong>Number of Users:</strong>
                                                                    {{ number_format($data->num_users) }}<br>
                                                                    <strong>Number of Followers:</strong>
                                                                    {{ number_format($data->num_followers) }}<br>
                                                                    <strong>Languages:</strong>
                                                                    {{ $data->spoken_languages }}<br>
                                                                    <strong>Birthday:</strong>
                                                                    {{ $data->birthday }}<br>

                                                                </p>
                                                            </div>
                                                            <div class="premium text-white">
                                                                @if ($row->pay === 0)
                                                                    <a href="javascript:void(0)"   data-bs-toggle="modal"
                                                                        data-bs-target="#createDataModalLicencie">
                                                                        Free  Bio
                                                                    </a>
                                                                @else
                                                                    <a href="#"><i
                                                                            class='bx bx-shield-alt-2 bx-tada'></i> 
                                                                    PRO  BIO</a>
                                                                @endif
                                                        
                                                                <a href="{{url('/bio/id/name')}}" target="_blank">
                                                                    <i class='bx bx-webcam' ></i>
                                                                </a>
                                                            </div>
                                                            <div class="premium text-white bg-light rounded-3">     

                                                                <button type="button" 
                                                                    wire:click="getplanes"
                                                                    class="btn btn-link"
                                                                    title="License bio wc"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#LiceModal"
                                                                    >
                                                                    <i class='bx bx-shield-plus'></i>
                                                                </button>

                                                                <button type="button" class="btn btn-link"
                                                                    title="Stats cb"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#StatsModal"
                                                                    >
                                                                    <i class='bx bx-pie-chart-alt-2'></i>
                                                                </button>

                                                                <a href="{{ url('/apps/chaturbate/top-hrs')}}" title='Stats Global' target="_blank">
                                                                    <i class='bx bxs-star'></i>
                                                                </a>

                                                                <button type="button" class="btn btn-link"
                                                                    title="Social Links"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#SocialModal"
                                                                    >
                                                                    <i class='bx bxl-tiktok'></i>
                                                                </button>

                                                                <button title="{{ __('messages.btn-crud-edit') }}"
                                                                    type="button" class="btn btn-light"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#updateDataModal"
                                                                    wire:click="edit({{ $row->id }})">
                                                                    ✅
                                                                </button>
                                                                <button type="button" class="btn btn-light"
                                                                    title="{{ __('messages.btn-crud-delete') }}"
                                                                    onclick="window.confirmDelete({{ $row->id }}, `confirm-delete-model`)">
                                                                    ⛔️
                                                                </button>
                                                            </div>
                                                        </div>

                                                        </p>

                                                    </div>

                                                </div>
                                            </div>

                                        </td>

                                        <td width="90">



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


    <style>
        .modal-dialog {
            max-width: 90%;

            margin-right: auto;
            margin-left: auto;
        }
    </style>

</div>
