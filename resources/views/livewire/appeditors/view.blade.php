@section('title', __('Appeditors'))
<div class="container-fluid" style="z-index:1960;">
    <div class="row justify-content-center">

        <a id="a-offcanvasComponents" class="btn btn-primary d-none" data-bs-toggle="offcanvas" href="#offcanvasComponents"
            role="button" aria-controls="offcanvasComponents">
            Open Offcanvas
        </a>
       
        <div class="card mb-3 w-25" style="">
            <div class="row g-0">
                <div class="col-md-4">
                    <img class="img-thumbnail" src="{{ asset('editorcam/imgs/cards/card-imagen-2.png') }}"
                        alt="Create CardLine">

                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <button class="btn btn-cb">Link Blog</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card text-start w-25 shadow border-1 rounded-3 mb-4 mt-3" id="card-4"><img
                src="/editorcam/imgs/cards/img-girl52.jpg" alt="Image for card 4"
                class="img-thumbnail shadow p-2 rounded-3 float-end mt-2">
            <div class="card-body">
                <h5 class="card-title" contenteditable="true">Hello Title 3</h5>
                <p class="card-text" contenteditable="true">here you can edit and complete your card for more
                    creativity, edit this content</p><a class="btn btn-cb shadow text-decoration-none" href="#"
                    contenteditable="true">Go Link</a>
            </div>
        </div>


        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasComponents"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h4 class="offcanvas-title" id="offcanvasLabel"> ::BotChatur, EditorCams 😸</h4>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

                <!-- Accordion Group #1 -->
                <div class="accordion" id="accordionExample1">

                    <!-- Accordion Item #1: Datasets -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne-1" aria-expanded="true" aria-controls="collapseOne-1">
                                <h4>Datasets</h4>
                            </button>
                        </h2>
                        <div id="collapseOne-1" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <p>
                                    Our app allows users to upload their own data sets or choose from a variety of
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item #2: Menus -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo-1" aria-expanded="false" aria-controls="collapseTwo-1">
                                <strong>Menus</strong>
                            </button>
                        </h2>
                        <div id="collapseTwo-1" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <strong>This is the Menus item's accordion body.</strong>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Accordion Group #2 -->
                <div class="accordion" id="accordionExample2">

                    <!-- Accordion Item #1: SocialMedia -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree-2" aria-expanded="false" aria-controls="collapseThree-2">
                                <strong>SocialMedia</strong>
                            </button>
                        </h2>
                        <div id="collapseThree-2" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <strong>This is the SocialMedia item's accordion body.</strong>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item #2: Containers -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour-2" aria-expanded="false" aria-controls="collapseFour-2">
                                <strong>Containers</strong>
                            </button>
                        </h2>
                        <div id="collapseFour-2" class="accordion-collapse collapse show"
                            aria-labelledby="headingFour" data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <p>
                                    Here you have a gallery of reactive components for your blog, page, or design of
                                    your profile,
                                    you can go exploring in different components and choose with a click the one that
                                    you like best
                                    and then edit it easily.
                                </p>

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h4>CardLine</h4>
                                        <img id="cardline1" class="pointer"
                                            src="{{ asset('editorcam/imgs/cards/card-line.png') }}" width="410px"
                                            height="160px" alt="Create CardLine">
                                    </li>
                                    <li class="list-group-item">
                                        <h4>Card-Imagen</h4>
                                        <img id="cardimagen1" class="pointer" src="" width="410px"
                                            height="200px" alt="Create CardImagen">
                                    </li>
                                    <li class="list-group-item">A third item</li>
                                    <li class="list-group-item">A fourth item</li>
                                    <li class="list-group-item">And a fifth one</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Accordion Group #3 -->
                <div class="accordion" id="accordionExample3">

                    <!-- Accordion Item #1: Chaturbate -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive-3" aria-expanded="false"
                                aria-controls="collapseFive-3">
                                <strong>Chaturbate</strong>
                            </button>
                        </h2>
                        <div id="collapseFive-3" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample3">
                            <div class="accordion-body">
                                <strong>This is the Chaturbate item's accordion body.</strong> It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing and hiding
                                via CSS transitions. You can modify any of this with custom CSS or overriding our
                                default variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item #2: Albums -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix-3" aria-expanded="false" aria-controls="collapseSix-3">
                                <strong>Albums</strong>
                            </button>
                        </h2>
                        <div id="collapseSix-3" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample3">
                            <div class="accordion-body">
                                <p>Create Albums</p>.
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>

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

                                    <button onclick="toggleReadOnly()"
                                        class="border-0 shadow-sm rounded-4 bg-light text-primary"> <i
                                            class="fas fa-eye"></i>
                                    </button>
                                    <button id="app-link" data-image_upload="{{ route('image.upload') }}"
                                        class="border-0 shadow-sm rounded-4 bg-light text-primary">
                                        <i class="fas fa-link"></i>
                                    </button>

                                    <button onclick="clearEditor()" title="Clean Editor"
                                        class="border-0 shadow-sm rounded-4 bg-light text-primary">
                                        <i class="fas fa-eraser"></i>
                                    </button>

                                    <button title="Delete" class="border-0 shadow-sm rounded-4 bg-light text-primary">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </h6>
                            </div>

                            <div class="col-9 text-right ">
                                <span class=" shadow-sm input-group-text text-bold bg-light"
                                    id="inputGroup-sizing-sm">
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

                            <div class="col-3">
                                <div class="container" wire:ignore>
                                    @include('livewire.appeditors.tabs')
                                </div>

                                <div class="container text-center">
                                    <hr>
                                    <x-storage-usage-report />
                                </div>


                            </div>

                        </div>

                    </div>



                </div>

                <button id="saveButton" class="p-1 m-1 shadow-sm rounded-4  " style="display: none;"
                    onclick="saveEditorData()">
                    <strong>
                        Save App
                    </strong>
                </button>

                <div class="card-footer d-flex justify-content-end">
                    <strong>Editor Apps Botchatur</strong>
                </div>

                @include('livewire.appeditors.list')
                @include('livewire.appeditors.tags')

            </div>
        </div>

        <style>
            .ce-popover-item__icon {
                -webkit-box-shadow: 0 0 0 0px;
            }

            .offcanvas.offcanvas-start {
                width: 560px;
                background: rgba(255, 255, 255, 0.66);
                backdrop-filter: blur(10px);
                border-radius: 3px;
            }

            select {
                background: transparent;
                border: none;
                font-size: 14px;
                height: 30px;
                padding: 5px;
                max-width: 260px;
            }

            .modal-dialog {
                max-width: 960px;
                margin-right: auto;
                margin-left: auto;
            }

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

                const cardimagen = document.getElementById('cardimagen1');
                if (!cardimagen) {
                    console.error("Element with ID 'cardimagen' not found.");
                    return;
                }

                function getRandomNumber(min, max) {
                    return Math.floor(Math.random() * (max - min + 1)) + min;
                }

                function loadRandomImage() {
                    const randomNumber = getRandomNumber(1, 6);
                    cardimagen.src = `{{ asset('editorcam/imgs/cards/card-imagen-${randomNumber}.png') }}`;
                    console.log(cardimagen.src);

                }

                setTimeout(() => {
                    document.getElementById('a-offcanvasComponents').click();
                    loadRandomImage();
                }, 2000);


                document.addEventListener('open-card-pro', function() {
                    document.getElementById('a-offcanvasComponents').click();

                });

                const cardLineImage = document.getElementById('cardline1');
                cardLineImage.addEventListener('click', () => {
                    editor.blocks.insert('cardblock', {}, {}, editor.blocks.getBlocksCount(), true);
                    console.log('cardline insert');
                });

                const cardImage = document.getElementById('cardimagen1');
                cardImage.addEventListener('click', () => {
                    editor.blocks.insert('cardblockimagen', {}, {}, editor.blocks.getBlocksCount(), true);
                });


                window.onscroll = function() { // button scroll save
                    scrollFunction();
                };

                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("saveButton").style.display = "block";
                    } else {
                        document.getElementById("saveButton").style.display = "none";
                    }
                }


                var galleryElement = document.getElementById("gallery-apps-ids");

                if (galleryElement) {
                    galleryElement.addEventListener("click", function(event) {

                        if (event.target.tagName === "IMG") {
                            var imgSelectedAppElement = document.querySelector("#img-selected-app");
                            const clickedImage = event.target;
                            const allImages = document.querySelectorAll("#gallery-apps-ids img");
                            // Remove the class from all images
                            allImages.forEach(function(image) {
                                image.classList.remove("gallery_img_shadow");
                            });
                            // Add the class to the clicked image
                            clickedImage.classList.add("gallery_img_shadow");
                            var domain = window.location.origin;
                            imgSelectedAppElement.src = clickedImage.src;
                            document.querySelector("#selectedImage").value = clickedImage.src;

                        }
                    });

                }

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

                //ck editor EN... 
                if (document.querySelector('#editorjsx-en')) {
                    ClassicEditor
                        .create(document.querySelector('#editorjsx-en'))
                        .then(editorjsx => {
                            editorjsx.model.document.on('change:data', () => {
                                @this.set('en', editorjsx.getData());
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

                    /*
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
                    */

                    let editorjsData = {!! json_encode($this->enjs) !!};

                    if (editorjsData && editorjsData.length !== 0) {
                        //editor.render({!! $this->editorjs !!});
                        //editor.render(JSON.json_encode({!! $this->editorjs !!}));
                        document.querySelector("#loadJSapp").click();
                    }
                });

                Livewire.on('loadeditor', function(editorData) {
                    if (editorData) {
                        editor.render(JSON.parse(editorData));

                    } else {
                        if (confirm('¿Deseas limpiar el editor?')) {
                            editor.clear();
                        }
                    }
                });

                window.livewire.on('renderEditor', (data) => {

                    editor.render(data).catch((error) => {
                        console.error('Error al renderizar los datos del editor:', error);
                    });

                });
            });

            function clearEditor() {
                editor.clear();
            }

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
