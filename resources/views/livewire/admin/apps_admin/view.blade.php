@section('title', __('Apps'))
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card">

                <div class="card-header bg-transparent">

                    <span class="badge p-2 m-2 text-bg-dark">Apps</span>
                    System Settings >
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <button id="btn-new" class="m-1 p-1 rounded-3">
                                <strong>💾 New App</strong>

                            </button>
                        </div>
                        <div class="col">
                            <strong> > Documentation App</strong>
                        </div>
                        <div class="col">
                            <a href="{{ url('/admin/apps/estudios') }}" class="nav-link">📂 Estudios</a>
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    @if ($this->selected_id)
                    only app    
                    @endif
              
                </div> 

                <div class="card-body">
                    @include('livewire.admin.apps_admin.modals')
                    <div class="container-fluid">
                        <!-- Vista card de aplicaciones -->
                        <div class="row">
                            @foreach ($apps as $app)
                                <div class="col-12 col-md-6 col-lg-4 my-3">

                                    <div class="card border-0 shadow p-2 rounded-3 mx-3"
                                        style="max-height: 490px;">

                                        <div class="d-flex justify-content-center">

                                            <div class="app-img shadow-lg rounded-3 p-1">
                                                @if ($app->image)
                                                    <img src="{{ $app->image }}" class="card-img-top"
                                                        alt="App Image">
                                                @else
                                                    <img src="{{ asset('apps/default.png') }}"
                                                        class="card-img-top" alt="Default Image">
                                                        
                                                    <h5 class="card-title m-1 justify-content-center">
                                                        <img width="22px"
                                                    src="{{ $app->icon ? $app->icon : asset('apps/default-icon.png') }}"
                                                    class="app-icon mr-3" alt="App Icon">
                                                        {{ $app->name }}
                                                    </h5>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                            
                                            </div>

                                            <p class="card-text" style="max-height: 90px; overflow: auto;">
                                                {{ Str::words($app->description, 8) }}</p>
                                            <a class="text-decoration-none mx-3 custom-link "
                                            wire:click.prevent="install()"
                                                href="{{ route('admin.apps').'/install/'. $app->id}}/{{ $app->name }}">
                                                <strong class="shadow p-2 rounded-3 punter">
                                                    @if ($app->install)
                                                    👉Un-Install
                                                @else    
                                                    👉Install
                                                    App
                                                    @endif
                                                </strong>                                             
                                            </a>
                                            <button class="btn btn-primary"
                                            wire:click="install()"
                                            >
installer
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
