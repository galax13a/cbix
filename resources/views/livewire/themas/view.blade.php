@section('title', __('Themas'))

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card">
                <div class="card-header  bg-transparent shadow">
                    <div class="row">
                        <div class="col-8" wire:key='menutabcard'>
                            <strong><i class="bi bi-window-sidebar"></i> File Thema</strong>
                                <button wire:click="newtheme"
                                    onclick="dispatchLoadingEvent('hourglass', 1000); window.scrollTo(0,0);window.location.href = '?themecreate=new'"
                                    title="New Document" class="border-0 shadow-sm rounded-4 bg-light text-primary">
                                    <i class="bi bi-plus-square-dotted"></i>
                                </button>
                            @if ($this->themecreate !== 'new' && $this->themecreate !== 'wait')                         
                                <button  
                                    title="Save Thema"
                                    onclick="dispatchLoadingEvent('hourglass', 1000); window.scrollTo(0,0); saveEditorData();"
                                    class="border-0 shadow-sm rounded-4 bg-light text-primary">
                                    <i class="bi bi-save2"></i>
                                </button>
                                <button  
                                    title="Reload Thema"
                                    onclick="reloadPage();"
                                    class="border-0 shadow-sm rounded-4 bg-light text-primary">                        
                                    <i class="bi bi-arrow-clockwise"></i>
                                  </button>
                                    <button  
                                    title="Thema English"
                                    onclick=""
                                    class="border-0 shadow-sm rounded-4 bg-light text-primary">                        
                                    <span class="badge rounded-pill text-bg-dark">EN</span> | 
                                  </button>
                                    <button  
                                    title="Thema Spanish"
                                    onclick=";"
                                    class="border-0 shadow-sm rounded-4 bg-light text-primary">                        
                                    <span class="badge rounded-pill text-bg-light">ES</span>
                                    </button>                               |
                                    <button  
                                    title="SEO thema"
                                    onclick=""
                                    class="border-0 shadow-sm rounded-4 bg-light text-warning">                        
                                    <i class="bi bi-file-medical-fill fs-5"></i>
                                    </button>
                                    <button  
                                    title="Traductor thema"
                                    onclick=""
                                    class="border-0 shadow-sm rounded-4 bg-light text-info">                        
                                    <i class="bi bi-badge-tm fs-5"></i>
                                    </button>                                    
                                    <button onclick="clearEditor()" title="Clean Editor"
                                    class="border-0 shadow-sm rounded-4 bg-light text-primary">
                                    <i class="fas fa-eraser"></i>
                                    </button>
                        
                            @endif
                        </div>                       
                      
                    </div>

                </div>

                @if ($this->themecreate == 'new')
                 <div id="form-creatediv" wire:key='form-create'>
                    <form wire:submit.prevent="store">
                        <div class="form-group mt-3">

                            @if ($name > '')
                                @if ($error_slug != '')
                                    <div class="badge badge-danger text-bg-danger"
                                        wire:key="error-slug-theme-off1">
                                        {{ $error_slug }}
                                    </div>
                                @else
                                    <div class="badge badge-success text-bg-info"
                                        wire:key="error-slug-theme-ok1">
                                        Thema slug Ready !!
                                    </div>
                                @endif
                            @endif

                            <span class="badge text-bg-light"> <strong>{{ $this->slug }}</strong> </span>
                            <input type="text" class="input-link-editor w-100" wire:key='namemodel'
                                id="name" wire:model="name">
                        </div>
                        <button type="submit" class="custom-link btn btn-cb m-2 p-2 w-100">
                            Save Thema
                        </button>
                       @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </form>
                </div>
            @endif

                <div class="container text-center" wire:key='thema-captions'>
                    @if ($this->themecreate == 'wait' )
                        <div class="row">
                            <div class="col">
                                <div class="shadown">
                                    <button wire:click="newtheme"
                                        onclick="dispatchLoadingEvent('hourglass', 1000); window.scrollTo(0,0);"
                                        title="New Thema " class="btn btb-cb custom-link p-5 m-3"
                                        style="font-size: 2rem; padding: 20px;"> <i
                                            class="bi bi-plus-square-dotted fs-1" style="font-size: 2rem;"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="shadown">
                                    <button title="Video" class="btn btb-cb custom-link p-5 m-3"
                                        style="font-size: 2rem; padding: 20px;"> 
                                        <i class="bi bi-youtube fs-1"
                                            style="font-size: 2rem;"></i> 
                                        </button>
                                </div>
                            </div>
                            <div class="col">
                                <div class="shadown">
                                    <button title="Themas cars" class="btn btb-cb custom-link p-5 m-3"
                                        style="font-size: 2rem; padding: 20px;"> <i class="bi bi-window-sidebar fs-1"
                                            style="font-size: 2rem;"></i> </button>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                @include('livewire.themas.modals')

                @if ($this->selected_id > 0 || $this->themecreate !== 'new' && $this->themecreate !== 'wait')
                    <div class="card-body" wire:key='editorthemax'>
                        <div wire:ignore id="editorthema"></div>
                    </div>
                @else
                    <div class="card-body" wire:key='editorthemax2'>
                        <div class="d-none" wire:ignore id="editorthema"></div>                    
                    </div>

                @endif

            </div>
        </div>

        @if ($this->themecreate !== 'new' && $this->themecreate !== 'wait')
            <div class="col-md-12 my-2" id="view-js-live-pages" wire:key='foliothema'>
                <div class="card">
                    <div class="card-header bg-transparent shadow">
                        <div class="row">
                            <div class="col-10">
                                <strong><i class="bi bi-window-sidebar"></i> Folios Themas</strong>
                            </div>
                            <div class="col-2">
                                <a tooltips="Save Thema" title="SaveMe" class="navbar-brand" href="#">
                                    <i class="bi bi-cloud-upload"></i> UpLoad File</a>
                            </div>
                            <col class="col-10">
                            <div class="componentes">
                                <ul class="nav justify-content-end">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">List Files</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Css</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Js</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" aria-disabled="true">Pro</a>
                                    </li>
                                </ul>

                                </a>
                                {{ $this->themecreate }}

                                <x-themacoms.btnup />

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <button class="btn btn-cb btn-toggle-thema">
                <i class="bi bi-box-arrow-in-up fs-4 "></i>
            </button>

            <div class="floating-foo-menu shadow" id="menu-editor-theme">
                <nav class="navbar navbar-light bg-light rounded-3">
                    <div class="container-fluid">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-2">
                                    <i class="bi bi-terminal-plus"></i> <strong>ToolBox v1.0</strong>
                                </div>
                                <div class="col-10 align-center">
                                    <div class="container text-center">
                                        <div class="row align-items-center p-1 rounded-3 shadow" id="control-theme">
                                            <div class="col">
                                                <p>Select any element on the canvas to activate its settings menu.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col align-items-center">
                                            <strong>BotChatur.com</strong><br>
                                            <a tooltips="New Thema" title="New " class="navbar-brand"
                                                onclick="saveEditorData()" href="javascript:void(0)">
                                                <i class="bi bi-plus-square-dotted"></i> New
                                            </a>
                                            <a tooltips="Save Theme" title="SaveMe" class="navbar-brand"
                                                onclick="saveEditorData()" href="javascript:void(0)">
                                                <i class="bi bi-save2"></i> Save
                                            </a>
                                            <a class="navbar-brand togle-foo-menu" title="See Theme"
                                                href="javascript:void(0)">
                                                <i class="bi bi-arrow-up-right-square"></i> Online Theme
                                            </a>
                                            <a class="navbar-brand" title="Create Theme" href="javascript:void(0)">
                                                <i class="bi bi-google-play"></i> Generate Theme
                                            </a>
                                            <button onclick="clearEditor()" title="Clean Editor"
                                                class="border-0 shadow-sm rounded-4 bg-light text-primary">
                                                <i class="fas fa-eraser"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        @endif

        <style>
            body {
                background-image: linear-gradient(to bottom, #ffffff, #fffefe79);
            }

            .btn-toggle-thema {
                position: fixed;
                bottom: 70px;
                left: 10px;
                z-index: 2999;
                background-color: white;
                border: none;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                cursor: pointer;
                width: 30px;
                height: 30px;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
            }

            .btn-toggle-thema:hover {
                background-color: #57455ca8;
            }

            .btn-toggle-thema.hide {
                transform: rotate(180deg);
            }

            .floating-foo-menu {
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                background-color: white;
                box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
            }

            .togle-foo-menu {
                cursor: pointer;
            }
        </style>
        <script>
            const controlTheme = document.querySelector("#menu-editor-theme");
            const toggleButton = document.querySelector('.btn-toggle-thema');

            let isMenuVisible = true; // Estado inicial
            if (toggleButton) {
                toggleButton.addEventListener('click', () => {
                    controlTheme.classList.toggle('d-none');
                    isMenuVisible = !isMenuVisible; // Invertir el estado

                    if (isMenuVisible) {
                        toggleButton.innerHTML = '<i class="bi bi-box-arrow-in-up fs-3"></i>';
                    } else {
                        toggleButton.innerHTML = '<i class="bi bi-box-arrow-in-down fs-3"></i>';
                    }
                });
            }
            function reloadPage() {
                    dispatchLoadingEvent('hourglass', 1000);
                    location.reload();
                }

            document.addEventListener('livewire:load', function() { // load  
                var editor2 = document.getElementById('editorthema');
                setTimeout(function() {
                    if (editor2) {
                    //    editor2.classList.add('d-none');
                    }
                }, 300);

           

                Livewire.on('showEditor', function() {
                    if (editor2) {
                        editor2.classList.remove('d-none');
                        alert('Please load editor');

                    }
                });

                window.livewire.on('renderEditor', (data) => {
                    editor.render(data).catch((error) => {
                        console.error('Error render editor:', error);
                    });
                });

            });

            async function saveEditorData() {
                try {
                    const outputData = await editor.save();
                    @this.set('editorjs', JSON.stringify(outputData));
                    window.livewire.emit('salvar');
                } catch (error) {
                    console.log('Saving Thema failed:', error);
                }
            }

            function clearEditor() {
                editor.clear();

                let eventDetail = {
                    type: 'info',
                    message: 'Ready EditorThema, Clean',
                    position: 'center-center',
                };
                let notifyEvent = new CustomEvent('notify', {
                    detail: eventDetail
                });
                window.dispatchEvent(notifyEvent);
            }
        </script>
    </div>
