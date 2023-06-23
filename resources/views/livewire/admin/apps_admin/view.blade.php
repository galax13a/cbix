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
                    @include('livewire.admin.apps_admin.modals')
                    <div class="container">
                        <!-- Vista card de aplicaciones -->
                        <div class="row">
                            @foreach ($apps as $app)
                                <div class="col">

                                    <div class="card border-0 shadow p-2 rounded-3 align-items-center"
                                        style="max-width: 220px; max-height: 290px;">

                                        <div class="app-img shadow-lg rounded-3 p-1">
                                            @if ($app->image)
                                                <img src="{{ $app->image }}" class="card-img-top" alt="App Image">
                                            @else
                                                <img src="{{ asset('apps/default.png') }}" class=" text-center  "
                                                    alt="Default Image" width="90px" height="80px">
                                            @endif
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center ">
                                                <img width="22px"
                                                    src="{{ $app->icon ? $app->icon : asset('apps/default-icon.png') }}"
                                                    class="app-icon mr-3" alt="App Icon">
                                                <h5 class="card-title m-1">{{ $app->name }}</h5>
                                            </div>

                                            <p class="card-text" style="max-height: 90px; overflow: auto;">
                                                {{ Str::words($app->description, 12) }}</p>
                                            
                                                <a 
                                                class="text-decoration-none"
                                                href="{{ route('admin.apps').'/install/'. $app->id}}">
                                            <strong class="shadow p-2 rounded-3 punter">👉Install App</strong>
                                        </a>
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
