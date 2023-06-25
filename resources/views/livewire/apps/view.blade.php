@section('title')
    {{ $pageTitle ?? 'Apps Site' }}
@endsection

<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card border-0 shadow">

                <div class="card-header bg-transparent shadow border-0">
                    <a href="javascript:void(0)" class="custom-link " wire:click="appHome">
                        💜 Apps
                    </a>
                    /
                    <button id="btn-new" @click="openwin36('createDataModal')" class="rounded-3 shadow bg-transparent">
                        <strong>
                            Categorys 
							<i class="fas fa-folder-open"></i>
                        </strong>
                    </button>
                    <button id="btn-new" @click="openwin36('createDataModal')"
                        class="rounded-3 shadow bg-transparent">
                        <strong>
                            Tags 
							<i class="fas fa-tags"></i>
                        </strong>
                    </button>

                    <button id="btn-new" @click="openwin36('createDataModal')"
                        class="rounded-3 shadow bg-transparent">
                        <strong>
                            authors 
							<i class="fas fa-user-shield"></i>
                        </strong>
                    </button>

                    <button id="btn-new" @click="openwin36('createDataModal')"
                        class="rounded-3 shadow bg-transparent">
                        <strong>
                            Comments <i class="fas fa-comments"></i>
                        </strong>
                    </button>



                    @if ($this->selected_id !== null)
                        / {{ $app->name }}
                        / Free Credits /
                        <span class="badge shadow-sm bg-warning text-dark "><i class="fas fa-plus-circle"></i> 35
                            credits</span>
                    @endif

                </div>

                <div class="card-body">
                    @include('livewire.apps.modals')

                    @if ($this->selected_id !== null)
                        @include('livewire.apps.install')
                    @else
                        <div class="container mt-6">

                            <div class="row  d-flex justify-content-center">

                                <div class="col-md-12">

                                    <div class="headings d-flex justify-content-between align-items-center mb-3">
                                        <div class="col-4">

                                            <div class="input-group">
                                                <div class="input-group-text shadow-sm border-0">
                                                    <i class="fas fa-search"></i>
                                                </div>
                                                <input wire:model='keyWord' type="text"
                                                    class="form-control shadow-sm border-0 " id="keyWord"
                                                    placeholder="Search app">
                                            </div>
                                        </div>

                                        <button id="btn-new" @click="openwin36('createDataModal')"
                                            class="rounded-3 shadow bg-transparent">
                                            <strong>
                                                Create app <i class="fas fa-plus-circle"></i>
                                            </strong>
                                        </button>

                                        <button id="btn-new" class="rounded-3 shadow bg-transparent">
                                            <strong>
                                                App Verify <i class="far fa-check-circle text-danger"></i>
                                            </strong>
                                        </button>

                                        <button id="btn-new" class="rounded-3  shadow bg-transparent">
                                            <strong>
                                                Apps Installs <i class="fab fa-instalod"></i>
                                            </strong>
                                        </button>

                                    </div>

                                    @foreach ($apps as $app)
                                        <div class="card p-3 border-0 rounded-4 m-2 shadow">

                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="user d-flex flex-row align-items-center">

                                                    @if ($app->image)
                                                        <img src="{{ $app->image }}" width="90"
                                                            class="user-img rounded-circle mr-2 " alt="App Image">
                                                    @else
                                                        <img src="{{ asset('apps/default.png') }}" width="90"
                                                            class="user-img rounded-circle mr-2">
                                                    @endif

                                                    <br>
                                                    <p class="p-4">
                                                        <strong>
                                                            <i
                                                                class="fas fa-chevron-circle-down"></i>{{ $app->name }}

                                                        </strong>
                                                        <br>
                                                    <p class="card-text" style="max-height: 90px; overflow: auto;">
                                                        {!! Str::words($app->description, 26) !!}

                                                    </p>
                                                </div>
                                                <div title="enter the application"
                                                    class=" punter card-body shadow w-25 rounded-5 text-center">
                                                    @if ($app->install)
                                                        <strong>
                                                            <small>

                                                                Enter
                                                                <i class="fas fa-arrow-circle-right"></i>
                                                            </small>
                                                        </strong>
                                                    @else
                                                        <small>
                                                            <strong>
                                                                <i class="fas fa-ghost text-danger"></i>
                                                                Not installed
                                                            </strong>
                                                        </small>
                                                    @endif

                                                </div>
                                            </div>

                                            <div class="action d-flex justify-content-between mt-2 align-items-center">

                                                <div class="reply px-4">
                                                    <small>
                                                        <i class="far fa-thumbs-up"></i>
                                                        (1.788)
                                                        Installations
                                                        <i class="far fa-smile text-warning"></i>
                                                    </small>
                                                    <span class="dots"></span>
                                                    <small>
                                                        App [admin]

                                                    </small>
                                                    <span class="dots">
                                                    </span>
                                                    <button class="btn btn border-0"
                                                        wire:click.prevent="install({{ $app->id }})"
                                                        onclick="dispatchLoadingEvent('hourglass', 1600); window.scrollTo(0,0);">
                                                        <small class="custom-link p-2 punter shadow-sm">
                                                            <i class="far fa-play-circle punter"></i>
                                                            Install
                                                        </small>
                                                    </button>
                                                    @if ($app->install)
                                                        <i class="fas fa-ghost text-success"></i>
                                                    @else
                                                        <i class="fas fa-ghost text-danger"></i>
                                                    @endif


                                                </div>

                                                <div class="icons align-items-center p-1 shadow-sm rounded-3">
                                                    <i class="fab fa-telegram m-1 punter fs-5"></i>
                                                    <i class="fab fa-whatsapp m-1 punter fs-5"></i>
                                                    <i class="fas fa-link punter m-1 fs-5"></i>
                                                    <i class="fa fa-star text-warning m-1 punter fs-5"></i>
                                                    <i class="far fa-play-circle punter m-1 fs-5"></i>
                                                    <i class="far fa-check-circle m-1 text-success punter fs-5"> </i>
                                                    <i class="fas fa-minus-circle m-1 text-danger punter fs-5"></i>
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                    <div class="float-end">{{ $apps->links() }}</div>
                                </div>
                            </div>

                        </div>

                </div>
                @endif


            </div>


        </div>
    </div>
</div>


</div>
