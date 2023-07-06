@section('title', __('Appeditors'))
<div class="container-fluid" style="z-index:1960;">
    <div class="row justify-content-center">

        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card">

                <div class="card-header bg-transparent shadow">

                    <strong>
                        🍒 Create Apps
                    </strong>
                </div>


                <div class="card-body">
                    <div class="editorbot">
                        <div class="row justify-center d-flex ">

                            <div class="col-9 text-center">
                                <div class="input-wrapper">
                                    <input type="text" id="myInput" class="input-float w-100 rounded-2 punter "
                                        wire:model="name" placeholder="Name App" />
                                </div>

                            </div>

                            <div class="col-3 text-center ">
                                <h6 class="shadow-sm rounded-3 p-2 mx-2">
                                    Mode Editor
                                    <button onclick="toggleReadOnly()"
                                        class="border-0 shadow-sm rounded-4 bg-light text-primary"> <i
                                            class="fas fa-eye"></i>
                                    </button>
                                </h6>
                            </div>

                            <div class="col-9 text-left ">
                                <span class=" shadow-sm input-group-text text-bold bg-light" id="inputGroup-sizing-sm">
                                    <strong class="p-1 rounded-4">
                                        🌐 Slug: {{ url('/') }}/apps/{{ $slug }}
                                    </strong>
                                </span>

                            </div>

                            <div class="col-3 text-center ">
                                <h6 class="shadow-sm rounded-3 p-2 mx-2">
                                    Visit Apps
                                    <button class="border-0 shadow-sm rounded-4 bg-light text-primary">
                                        <i class="fas fa-link"></i>
                                    </button>
                                </h6>
                            </div>


                            <div class="col-9 my-4 " wire:ignore>
                                <div id="editorjs" class="">
                                </div>
                            </div>

                            <div class="col-3">

                                <div class="accordion shadow" id="accordionExample">
                                    <div class="accordion-item">

                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button text-bg-dark" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                🧁 Tools Apps
                                            </button>

                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">


                                            <button class="p-1 m-1 shadow rounded-4" onclick="saveEditorData()">
                                                <strong>
                                                    <i class="far fa-save"></i> Save JSON
                                                </strong>
                                            </button>


                                            <button wire:click="loadJson()" class="p-1 m-1 shadow rounded-4"
                                                onclick="dispatchLoadingEvent('hourglass', 600);">
                                                <strong>
                                                    <i class="far fa-folder-open"></i> Load JSON2
                                                </strong>
                                            </button>


                                            <div class="btn-group" role="group"
                                                aria-label="Basic radio toggle button group">
                                                <input type="radio" checked class="btn-check" name="btnradio"
                                                    id="btnradio1" autocomplete="off" checked>
                                                <label class="btn btn-outline-primary" for="btnradio1">EN</label>

                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2"
                                                    autocomplete="off">
                                                <label class="btn btn-outline-primary" for="btnradio2">ES</label>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                <i class="far fa-keyboard m-1"></i> SEO
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>tools seo for apps </strong>
                                                En el competitivo mundo de las aplicaciones móviles, lograr que tus apps
                                                se
                                                destaquen entre

                                            </div>
                                        </div>

                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <i class="fas fa-tags m-1"></i> Tags
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>
                                                    This is the third item's accordion body.</strong> It is hidden
                                                by
                                                default, until the
                                                collapse plugin adds the appropriate classes that we use to style
                                                each
                                                element. These

                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                <i class="fas fa-images m-1"></i> SEO Imagen
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse"
                                            aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the fourth item's accordion body.</strong> It is
                                                hidden by
                                                default, until
                                                the
                                                collapse plugin adds the appropriate classes that we use to style
                                                each
                                                element.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed  " type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                aria-expanded="false" aria-controls="collapseFive">
                                                <i class="fas fa-signal m-1"></i> Stats
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse"
                                            aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the fifth item's accordion body.</strong> It is
                                                hidden by
                                                default, until the
                                                collapse plugin adds the appropriate classes that we use to style
                                                each
                                                element.
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <div class="card-footer d-flex justify-content-end">
                    <strong>Apps Webmaster Botchatur</strong>
                </div>

            </div>



        </div>
    </div>
    <script>
        let readOnly = false;

        document.addEventListener('livewire:load', function() {

            window.addEventListener('load', function() {
                let editorjsData = {!! json_encode($this->editorjs) !!};
                if (editorjsData && editorjsData.length !== 0) {
                    editor.render({!! $this->editorjs !!});
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
                console.log('Article data:', outputData);
                @this.set('editorjs', JSON.stringify(outputData));
                window.livewire.emit('emit_editorjs');
                //Livewire.emit('saveJson');
                //alert('Editor ready2');
            } catch (error) {
                console.log('Saving failed:', error);
            }
        }
    </script>
