<div>
    <form wire:submit.prevent="filterData">
        <h1 class="text-center ">
            <box-icon name='webcam' animation='flashing'></box-icon>
            <strong>Chaturbate TOP Hours - {{ $this->region }}</strong>
        </h1>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <label for="region" class="form-label"><strong>Region</strong></label>
                    <select class="form-select" wire:model.defer="region" wire:change="filterData">
                        <option value="asia">Asia</option>
                        <option value="europe_russia">Europe/Russia</option>
                        <option value="northamerica">North America</option>
                        <option value="southamerica">South America</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="col">
                    <label for="start_date" class="form-label"><strong>Start Date</strong></label>
                    <input type="date" class="form-control" wire:model.defer="start_date" wire:change="filterData">
                </div>
                <div class="col">
                    <label for="end_date" class="form-label"><strong>Model</strong></label>
                    <input type="input" class="form-control" wire:model.defer="modelo">
                </div>
                <div class="col-12 p-2 m-2">
                    <button type="submit" class="btn btn-primary w-100">Filter</button>
                </div>
            </div>
        </div>
    </form>
    <div class="col-12 text-center" wire:loading wire:target="filterData">
        <strong>Loading more models...</strong>
        <br>
        <img src="{{ asset('icons/load.gif') }}" alt="" title="Loading more models...">
    </div>

    <div class="row m-2 p-2" wire:init="loadModelData" wire:key='models-top' id="content-models"
    
       >
        @forelse ($this->models as $model)
            <div class="col-md-4 col-sm-12">
                <div class="card mb-4">
                    <img src="{{ $model['img_local'] }}" class="card-img-top rounded-circle mx-auto mt-3 shadow"
                        alt="{{ $model['username'] }}" style="width: 150px;">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $model['username'] }}

                        </h5>
                        <strong class="card-text text-end">🟢 Time | {{ $model['hrs'] }}</strong>
                        <br>
                        @if ($model['gender'] == 'f')
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <circle cx="12" cy="4" r="2"></circle>
                                <path
                                    d="M14.948 7.684A.997.997 0 0 0 14 7h-4a.998.998 0 0 0-.948.684l-2 6 1.775.593L8 18h2v4h4v-4h2l-.827-3.724 1.775-.593-2-5.999z">
                                </path>
                            </svg>
                        @elseif($model['gender'] == 'm')
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <circle cx="12" cy="4" r="2"></circle>
                                <path d="M15 7H9a1 1 0 0 0-1 1v7h2v7h4v-7h2V8a1 1 0 0 0-1-1z"></path>
                            </svg>
                        @elseif($model['gender'] == 't')
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path
                                    d="M20 11V4h-7l2.793 2.793-4.322 4.322A5.961 5.961 0 0 0 8 10c-3.309 0-6 2.691-6 6s2.691 6 6 6 6-2.691 6-6c0-1.294-.416-2.49-1.115-3.471l4.322-4.322L20 11zM8 20c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4z">
                                </path>
                            </svg>
                        @elseif($model['gender'] == 'c')
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <circle cx="6" cy="4" r="2"></circle>
                                <path d="M9 7H3a1 1 0 0 0-1 1v7h2v7h4v-7h2V8a1 1 0 0 0-1-1z"></path>
                                <circle cx="17" cy="4" r="2"></circle>
                                <path
                                    d="M20.21 7.73a1 1 0 0 0-1-.73h-4.5a1 1 0 0 0-1 .73L12 14h2l-1 4h2v4h4v-4h2l-1-4h2z">
                                </path>
                            </svg>
                        @endif
                        <a class="text-end" rel="nofollow" href="{{ env('CB_ROOM_OFF') }}{{ $model['username'] }}"
                            target="_blank">Follow |
                            <strong class="card-text text-end"> {{ number_format($model['followers']) }}</strong>
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col">
                <p class="d-none">No models founds.</p>
            </div>
        @endforelse

        <div class="col-12 text-center" wire:loading>
            <strong>Loading more models...</strong>
            <br>
            <img src="{{ asset('icons/load.gif') }}" alt="" title="Loading more models...">
        </div>


        <div class="d-flex justify-content-end">
            @if ($this->models)

                <nav aria-label="Page navigation chatur hrs">
                    <ul class="pagination justify-content-end">
                        {{-- Números de Página y Botones Anterior/Siguiente --}}
                        @foreach ($paginationData['links'] as $link)
                            {{-- Si la URL es null, es un separador o botón deshabilitado --}}
                            @if ($link['url'] === null)
                                <li class="page-item disabled">
                                    <span class="page-link">{!! $link['label'] !!}</span>
                                </li>
                            @else
                                {{-- Si la URL no es null y el link está activo, mostrar como texto --}}
                                @if ($link['active'])
                                    <li class="page-item active" aria-current="page">
                                        <span class="page-link">{!! $link['label'] !!}</span>
                                    </li>
                                @else
                                    {{-- Si la URL no es null y el link no está activo, mostrar como botón clickeable --}}
                                    <li class="page-item">
                                        <button class="page-link"
                                            wire:click.prevent="pageChanged('{{ $link['url'] }}')">{!! $link['label'] !!}</button>
                                    </li>
                                @endif
                            @endif
                        @endforeach
                    </ul>
                </nav>

            @endif
        </div>

        @push('scripts-body')
            <x-themacoms.btnup />
        @endpush

        <script>
       
        </script>

        <style>
            body {
                height: auto;
            }
            #content-models {
                min-height: 9200px;
 
    }
        </style>

    </div>
