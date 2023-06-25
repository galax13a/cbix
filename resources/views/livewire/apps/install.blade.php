<div class="row">
    <div class="col-md-5">
        <img src="{{ $app->image ? $app->image : asset('apps/default.png') }}" width="93%" class="card-img-top1"
            alt="App Image">
        <div class="d-flex justify-content-end p-1 m-1 shadow rounded-4">
       
            @if ($app->install)
                <strong class="p-3 text-center">
                    <i class="fas fa-backward p-2 shadow rounded-5 custom-link punter" wire:click="appHome"
                        onclick="dispatchLoadingEvent('standard', 1300); window.scrollTo(0,0);"></i>

                    Uninstall this app for your site
                </strong>                
               
            @else
                <strong class="p-3 text-center">
                    <i class="fas fa-backward p-2 shadow rounded-5 custom-link punter" wire:click="appHome"
                        onclick="dispatchLoadingEvent('hourglass', 1300);">
                    </i>

                    🟠 if you want to install this app 
                </strong>
                
            @endif
            
            <button
            class="border-0 bg-transparent shadow rounded-4"
            wire:click="updateApp('{{ $this->selected_id }}', '{{ $this->app->install ? 0 : 1 }}')"
            onclick="dispatchLoadingEvent('hourglass', 1300);"
            >
            <strong>
                {{ $this->app->install ? '🚫Uninstall 😣' : '👉Installer App 🍎' }}
            </strong>
                
            </button>

        </div>

    </div>
    <div class="col-md-7 shadow rounded-4 p-4 mr-3 ">
        <div class="d-flex align-items-center p-2 shadow-sm rounded-2">
            <img src="{{ $app->icon ? $app->icon : asset('apps/default-icon.png') }}" class="app-icon mr-3"
                alt="App Icon">
            <h5 class="card-title m-2">{{ $app->name }}</h5>
        </div>
        <div class="des" style="max-width: 100%; max-height: 300px; overflow: auto;">
            {{ $app->description }}
        </div>

        <p class="card-text">ID: {{ $app->id }}</p>
        <p class="card-text p-2 m-1 shadow-sm rounded-4">Version:
            {{ $app->version ? $app->version : 'No version available' }}</p>
        <p class="card-text p-2 m-1 shadow-sm rounded-4">Author:
            {{ $app->author ? $app->author : 'No author available' }}</p>
        <!-- Agrega más detalles de la aplicación si es necesario -->
    </div>
</div>
</div>
<div class="card-footer d-flex justify-content-end">
    <strong>Apps Webmaster Botchatur</strong>
</div>
