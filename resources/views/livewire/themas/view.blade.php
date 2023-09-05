@section('title', __('Themas'))

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card">
                <div class="card-header bg-transparent shadow">
                    <div class="row">
                        <div class="col-4">
                            <strong><i class="bi bi-window-sidebar"></i> File Thema</strong>
                            <button onclick="" title="New Document"
                                class="border-0 shadow-sm rounded-4 bg-light text-primary">
                                <i class="bi bi-plus-square-dotted"></i>
                            </button>
                        </div>
                        <div class="col-6 align-items-center">
                            <a tooltips="Save Thema" title="SaveMe" class="navbar-brand" onclick="saveEditorData()"
                                href="javascript:void(0)"><i class="bi bi-save2"></i> <strong> Save </strong></a>
                            |
                            <button onclick="toggleReadOnly()"
                                class="border-0 shadow-sm rounded-4 bg-light text-primary"> <i class="fas fa-eye"></i>
                            </button>
                            |
                            <a class="navbar-brand" title="Create Theme" href="#">
                                <i class="bi bi-google-play"> Generate </i></a>
                            |
                            <button onclick="clearEditor()" title="Clean Editor"
                                class="border-0 shadow-sm rounded-4 bg-light text-primary">
                                <i class="fas fa-eraser"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @include('livewire.themas.modals')
                    <div wire:ignore id="editorthema"></div>
                </div>
            </div>
        </div>

        <div class="col-md-12 my-2" id="view-js-live-pages">
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
                            componentes variables {{ $this->themecreate }}

                            <x-themacoms.btnup />
                            <x-themacoms.home-one-flex />
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @include('livewire.themas.modals')
                    <div id="editorjs"></div>
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
                                            Render Tools, Select Components
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col align-items-center">
                                        <strong>BotChatur.com</strong><br>
                                        <a tooltips="Save Theme" title="SaveMe" class="navbar-brand" onclick="saveEditorData()" href="javascript:void(0)">
                                            <i class="bi bi-save2"></i> Save
                                        </a>
                                        <a class="navbar-brand togle-foo-menu" title="See Theme" href="#">
                                            <i class="bi bi-arrow-up-right-square"></i> Online Theme
                                        </a>
                                        <a class="navbar-brand" title="Create Theme" href="#">
                                            <i class="bi bi-google-play"></i> Generate Theme
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <style>

            .btn-toggle-thema {
                position: fixed;
                bottom: 70px;
                left: 20px;
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

            toggleButton.addEventListener('click', () => {
                controlTheme.classList.toggle('d-none');
                isMenuVisible = !isMenuVisible; // Invertir el estado

                if (isMenuVisible) {
                    toggleButton.innerHTML = '<i class="bi bi-box-arrow-in-up fs-3"></i>';
                } else {
                    toggleButton.innerHTML = '<i class="bi bi-box-arrow-in-down fs-3"></i>';
                }
            });

            document.addEventListener('livewire:load', function() { // load  

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
            }
        </script>
    </div>
