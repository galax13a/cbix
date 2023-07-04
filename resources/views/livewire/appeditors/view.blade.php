@section('title', __('Appeditors'))
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card">

                <div class="card-header bg-transparent shadow">

                    <strong>
                        Create Apps
                    </strong>
                </div>
           

                <div class="card-body">
                    <div class="editorbot">
                        <div class="row justify-center d-flex ">

                            <div class="col-9 text-center">
                                <div class="input-wrapper">
                                    <input type="text" id="myInput" class="input-float w-100 rounded-2 punter mx-4"
                                        wire:model="name" placeholder="Name App" />
                                </div>
                            </div>

                            <div class="col-3 text-center">
                                <h6>Apps🍒</h6>
                            </div>

                            <div class="col-9 " wire:ignore>
                                <div id="editorjs" class="">
                                </div>
                            </div>

                            <div class="col-3">

                                <div class="accordion" id="accordionExample">
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
                               

                                                <button  class="p-1 m-1 shadow rounded-4"
												onclick="saveEditorData()"
												>
                                                    <strong>
                                                        <i class="far fa-save"></i> Save JSON
                                                    </strong>
                                                </button>


                                                <button wire:click="loadJson('team-bosa.json')"
                                                    class="p-1 m-1 shadow rounded-4">
                                                    <strong>
                                                        <i class="far fa-folder-open"></i> Load JSON
                                                    </strong>
                                                </button>


                                                <div class="btn-group" role="group"
                                                    aria-label="Basic radio toggle button group">
                                                    <input type="radio" checked class="btn-check" name="btnradio"
                                                        id="btnradio1" autocomplete="off" checked>
                                                    <label class="btn btn-outline-primary" for="btnradio1">EN</label>

                                                    <input type="radio" class="btn-check" name="btnradio"
                                                        id="btnradio2" autocomplete="off">
                                                    <label class="btn btn-outline-primary" for="btnradio2">ES</label>

                                                </div>
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

                </div>

                <div class="card-footer d-flex justify-content-end">
                    <strong>Apps Webmaster Botchatur</strong>
                </div>

            </div>
        </div>
        <script>

            document.addEventListener('livewire:load', function() {
                Livewire.on('loadeditor', function(editorData) {                   
					editor.render(JSON.parse(editorData));				
					//alert('editor ready');                  
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
        <style>
            .ce-toolbar__actions {
                right: calc(100% + 3px);
                background-color: rgba(255, 255, 255, .5);
                border-radius: 4px;
            }

            .ce-editorjsColumns_col {
                border: 1px dashed #c2ccb9;
                border-radius: 5px;
                gap: 10px;
                padding-top: 10px;
            }

            .ce-editorjsColumns_col:focus-within {
                box-shadow: 0 6px 18px #e8edfa80;
            }

            #editorjs {
                background-color: rgb(255, 255, 255);
            }
        </style>
