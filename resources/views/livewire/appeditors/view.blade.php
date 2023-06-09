@section('title', __('Appeditors'))
<div class="container-fluid" style="z-index:1960;">
    <div class="row justify-content-center">

        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card">

                <div class="card-header bg-transparent shadow">

                    <strong>
                        🍒 Create Apps / {{ $this->load_app_json }}
                    </strong>
                </div>

                <div class="card-body">
                    
                    @include('livewire.appeditors.updateimg')

                    <div class="editorbot">
                        <div class="row justify-center d-flex ">

                            <div class="col-9 text-center">
                                <div class="input-wrapper">
                                    <input type="text" id="nameapp" class="input-float w-100 rounded-2 punter  "
                                        wire:model="name" placeholder="Name App" />
                                </div>

                            </div>

                            <div class="col-3 text-center " id="show-menu-app-root">
                                <h6 class="shadow-sm rounded-3 p-2 mx-2">
                                    Editor
                                    <button onclick="toggleReadOnly()"
                                        class="border-0 shadow-sm rounded-4 bg-light text-primary"> <i
                                            class="fas fa-eye"></i>
                                    </button>
                                    <button id="app-link" data-image_upload="{{ route('image.upload') }}"
                                        class="border-0 shadow-sm rounded-4 bg-light text-primary">
                                        <i class="fas fa-link"></i>
                                    </button>

                                    <button title="Delete" class="border-0 shadow-sm rounded-4 bg-light text-primary">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </h6>
                            </div>

                            <div class="col-9 text-right ">
                                <span class=" shadow-sm input-group-text text-bold bg-light" id="inputGroup-sizing-sm">
                                    <strong class="p-1 rounded-4">
                                        🌐 Slug: {{ url('/') }}/apps/{{ $slug }}
                                    </strong>
                                </span>

                            </div>

                            <div class="col-3 text-center ">
                                <h6 class="shadow-sm rounded-3 p-2 mx-2 punter">
                                    Apps

                                </h6>
                            </div>


                            <div class="col-9 my-4 " wire:ignore>
                                <div id="editorjs" class="">
                                </div>
                            </div>

                            <div class="col-3" wire:ignore>

                                @include('livewire.appeditors.tabs')

                            </div>

                        </div>

                    </div>
                </div>

                <div class="card-footer d-flex justify-content-end">
                    <strong>Apps Webmaster Botchatur</strong>
                </div>

            </div>

            @include('livewire.appeditors.list')
            @include('livewire.appeditors.tags')

        </div>
    </div>

    <style>
        .image-tool--LinkImagenServer {
            border-radius: 50%;

        }

        .select2-container--default.select2-container--focus .select2-selection--multiple {
            border: solid black 1px;
            outline: 0;
            width: 210px;
        }

        .select2-container--default .select2-selection--multiple {
            width: 210px;

        }
    </style>
    <script>
        let readOnly = false;

        document.addEventListener('livewire:load', function() {


            var editorContainer = document.getElementById('editorjs');
            editorContainer.addEventListener('click', function(event) {
                var target = event.target;
                if (target.tagName === 'IMG') {
                    var imageUrl = target.src;
                    //alert('URL de la imagen: ' + imageUrl);                    
                    dispatchLoadingEvent('arrows', 600);
                    @this.set('selected_imagen_url', imageUrl);
                    @this.set('selectedImage', null);
                    
                    openwin36('uptimagenDataModal');
                }
            });

            Livewire.on('uptagsSelects', (tags) => {
                $('#tags').select2('destroy'); // Destruir el select2 existente
                $('#tags').empty(); // Vaciar las opciones del select

                tags.forEach((tag) => {
                    $('#tags').append(new Option(tag.name, tag.id, false, false));
                });

                $('#tags').select2(); // Inicializar el nuevo select2
            });
            Livewire.on('uptImgFull', imageUrl => {
                document.querySelector("#imagen-tem-app").src = imageUrl;
                document.getElementById('image').value = null;
                document.querySelector("#imagen-tempo-app").removeAttribute("src");
                //alert('alert full');
                //	document.querySelector("#imagen-tempo-app").hidden=true;
            });

            window.livewire.on('combos', () => {

                $('#tags').select2();
                //alert('combos');
                $('#tags').on('change', function(e) {
                    let data = $('#tags').select2("val");
                    @this.set('tages', data);
                });

            });

            $('#tags').select2();
            $('#tags').on('change', function(e) {
                let data = $('#tags').select2("val");
                @this.set('tages', data);
            });


            if (document.querySelector('#editorjsx-en')) {
                ClassicEditor
                    .create(document.querySelector('#editorjsx-en'))
                    .then(editorjsx => {
                        editorjsx.model.document.on('change:data', () => {
                            @this.set('en', editorjsx.getData());
                            /*	Livewire.emit('contentUpdated', {
                                                    'lang': 'en',
                                                    'data': editorjsx.getData()
                                                });
                            					*/
                        });
                    })
                    .catch(error => {
                        console.error(error);
                    });
            }


            if (document.querySelector('#editorjsx-es')) {
                ClassicEditor
                    .create(document.querySelector('#editorjsx-es'))
                    .then(editorjsx => {
                        editorjsx.model.document.on('change:data', () => {
                            @this.set('es', editorjsx.getData());
                        });
                    })
                    .catch(error => {
                        console.error(error);
                    });
            }

            window.addEventListener('load', function() {

                let editorjsData = {!! json_encode($this->editorjs) !!};

                if (editorjsData && editorjsData.length !== 0) {
                    //editor.render({!! $this->editorjs !!});
                    //editor.render(JSON.json_encode({!! $this->editorjs !!}));
                    document.querySelector("#loadJSapp").click();
                }
            });

            Livewire.on('loadeditor', function(editorData) {
                editor.render(JSON.parse(editorData));
                //alert('editor ready');                  
            });

            window.livewire.on('renderEditor', (data) => {
                //alert('render editirjs');
                /*
                            editor.render(JSON.parse(data)).catch((error) => {
                                console.error('Error al renderizar los datos del editor:', error);
                            });
                			*/

            });
        });

        async function saveEditorData() {
            try {
                const outputData = await editor.save();
                //  console.log('Article data:', outputData);
                @this.set('editorjs', JSON.stringify(outputData));
                window.livewire.emit('emit_editorjs');
                //Livewire.emit('saveJson');
                //alert('Editor ready2');
            } catch (error) {
                console.log('Saving failed:', error);
            }
        }
    </script>
