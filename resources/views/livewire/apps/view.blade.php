@section('title')
    {{ $pageTitle ?? 'Apps Site' }}
@endsection

<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card border-0 shadow">

                <div class="card-header bg-transparent shadow border-0">
                    <strong>
                        <a href="{{ route('admin.apps') }}" class="custom-link p-1">
                             Apps
                        </a>
                        /
                    </strong>
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
                            Authors
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
                        <strong>
                            / {{ $app->name }}
                            / Free Credits /
                            <span class="badge shadow-sm bg-warning text-dark ">
                                <i class="fas fa-plus-circle"></i> 35
                                credits</span>
                        </strong>
                    @endif

                </div>

                <div class="card-body col-xl">

                    @switch($this->menux)
                        @case('createapp')
                            @include('livewire.apps.create-app')
                        @break

                        @case('editor')
                        @include('livewire.apps.editor-app')
                        @break

                        @default
                            @if ($this->selected_id !== null)
                                @include('livewire.apps.install')
                            @else
                            
                            @include('livewire.apps.render')
                        </div>
                        @endif
                @endswitch

                @include('livewire.apps.modals')

            </div>

        </div>
    </div>
</div>

</div>