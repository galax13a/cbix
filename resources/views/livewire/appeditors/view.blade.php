@section('title', __('Appeditors'))
<div class="container-fluid" style="z-index:1960;">
    <div class="row justify-content-center">

        <a id="a-offcanvasComponents" class="btn btn-primary d-none" data-bs-toggle="offcanvas" href="#offcanvasComponents"
            role="button" aria-controls="offcanvasComponents">
            Open Offcanvas
        </a>
       
        <button id="btn-open-canvas-imgs" class="btn btn-primary d-none" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#cards-gallery-back" aria-controls="offcanvasTop">Toggle top offcanvas</button>


            <div class="modal fade" id="iframeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="ratio ratio-16x9" id="iframeContainer">
                                <div class="spinner-border text-primary" id="iframeSpinner" role="status"></div> <!-- Spinner aquí -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

        <div class="offcanvas offcanvas-top" tabindex="-1" id="cards-gallery-back" aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header shadow">
                <h4 id="offcanvasTopLabel">Cards Backgrounds</h4>
                <hr>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="col" id="image-container"></div>
                        </div>
                    </div>
                </div>
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
                <div class="accordion" id="accordionExample1">
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
                <div class="accordion" id="accordionExample2">
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
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour-2" aria-expanded="false"
                                aria-controls="collapseFour-2">
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
                                        <img id="cardline1" title="Select Push" class="punter"
                                            src="{{ asset('editorcam/imgs/cards/card-line.png') }}" width="410px"
                                            height="160px" alt="Create CardLine">
                                    </li>
                                    <li class="list-group-item">
                                        <h4>Card-ImagenV</h4>
                                        <img id="cardimagen1" title="Select Push" class="punter" width="410px"
                                            src="{{ asset('editorcam/imgs/cards/card-imagen-1.png') }}" height="200px"
                                            alt="Create CardImagen">
                                    </li>
                                    <li class="list-group-item">
                                        <h4>Card-ImagenH</h4>
                                        <img id="cardimagenH" title="Select Push" class="punter"
                                            src="{{ asset('editorcam/imgs/cards/icard-imagenH.png') }}" width="410px"
                                            height="200px" alt="Create CardImagenH">
                                    </li>
                                    <li class="list-group-item">
                                        <h4>Card-ImagenColor</h4>
                                        <img id="cardimagenH2" title="Select Push" class="punter"
                                            src="{{ asset('editorcam/imgs/cards/card-container1.png') }}"
                                            width="410px" height="200px" alt="Create CardImagenH">

                                    </li>
                                    <li class="list-group-item">And a fifth one</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="accordion" id="accordionExample3">
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
                                chatur data
                            </div>
                        </div>
                    </div>
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

                                    <button title="Magic Cards" id="cardmagic"
                                        class="border-0 shadow-sm rounded-4 bg-light text-primary">
                                        <i class="fas fa-magic"></i>
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

                <button id="saveButton" class="p-1 m-1 shadow-sm rounded-4" style="display: none;"
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
        
            .form-control-sm {
                width: 10ch;
            }

            .form-control-color {
                width: 1.9rem;

                padding: 0.375rem;
                background-color: transparent;
                border: none;
            }

            .ce-popover-item__icon {
                -webkit-box-shadow: 0 0 0 0px;
            }

            .offcanvas.offcanvas-start {
                width: 560px;
                background: rgba(255, 255, 255, 0.493);
                backdrop-filter: blur(10px);
                border-radius: 3px;
            }

            .offcanvas.offcanvas-top {
                height: 75%;
                background: rgba(255, 255, 255, 0.274);
                backdrop-filter: blur(6px);
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

            function loadImages() {

                const path = '/editorcam/imgs/cards/bck/';
                const container = document.getElementById('image-container');

                const images = container.getElementsByTagName('img');

                if (!images.length > 0) {

                    const loader = document.createElement('div');
                    loader.style.position = 'absolute';
                    loader.className = 'bg-warning p-3';
                    loader.style.left = '50%';
                    loader.style.top = '50%';
                    loader.style.transform = 'translate(-50%, -50%)';
                    loader.innerHTML = 'loading images';
                    container.appendChild(loader);

                    setTimeout(() => {
                        loader.remove();
                    }, 3000);

                    for (let i = 1; i <= 70; i++) {
                        const imgSrc = `${path}${i}.jpg`;
                        const img = document.createElement('img');
                        img.src = imgSrc;
                        img.alt = `Imagen ${i}`;
                        img.title = 'Click to Copy and Pastel Url img';
                        img.onclick = () => copyImageUrl(imgSrc);
                        container.appendChild(img);

                    }
                }


            }


            function copyImageUrl(url) {
                navigator.clipboard.writeText(url).then(() => {
                    let eventDetail = {
                        type: 'success',
                        message: 'Copy Imagen Ok!',
                        position: 'center-center',
                    };
                    let notifyEvent = new CustomEvent('notify', {
                        detail: eventDetail
                    });
                    window.dispatchEvent(notifyEvent);
                }).catch(() => {
                    let eventDetail = {
                        type: 'failure',
                        message: 'Error Copy Imagen',
                        position: 'center-center',
                    };
                    let notifyEvent = new CustomEvent('notify', {
                        detail: eventDetail
                    });
                    window.dispatchEvent(notifyEvent);
                });
            }

            document.addEventListener('livewire:load', function() { // load              

                const cardimagen = document.getElementById('cardimagen1');
                if (!cardimagen) {
                    console.error("Element with ID 'cardimagen' not found.");
                    return;
                }
                const cardimagenH = document.getElementById('cardimagenH');
                if (!cardimagen) {
                    console.error("Element with ID 'cardimagen' not found.");
                    return;
                }
                const btn_cardmagic = document.getElementById('cardmagic');
                btn_cardmagic.addEventListener('click', () => {
                    document.getElementById('a-offcanvasComponents').click();
                })

                function getRandomNumber(min, max) {
                    return Math.floor(Math.random() * (max - min + 1)) + min;
                }

                function loadRandomImage() {
                    const randomNumber = getRandomNumber(1, 6);
                    cardimagen.src = `{{ asset('editorcam/imgs/cards/card-imagen-${randomNumber}.png') }}`;
                    //console.log(cardimagen.src);

                }

                /* menu canvas
                setTimeout(() => {
                    document.getElementById('a-offcanvasComponents').click();
                    loadRandomImage();
                }, 3000);

                */


                document.addEventListener('open-card-pro', function() {
                    document.getElementById('a-offcanvasComponents').click();
                });

                document.addEventListener('open-card-pro-imgs', function() {
                    loadImages();
                    document.getElementById('btn-open-canvas-imgs').click();

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

                const cardImageH = document.getElementById('cardimagenH');
                cardImageH.addEventListener('click', () => {
                    //     alert('cardimage insert');
                    editor.blocks.insert('cardblockimagenH', {}, {}, editor.blocks.getBlocksCount(), true);
                });

                const cardImageH2 = document.getElementById('cardimagenH2');
                cardImageH2.addEventListener('click', () => {
                    //     alert('cardimage insert');
                    editor.blocks.insert('cardlineimg', {}, {}, editor.blocks.getBlocksCount(), true);
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
                    $('#tags').select2('destroy'); 
                    $('#tags').empty(); 

                    tags.forEach((tag) => {
                        $('#tags').append(new Option(tag.name, tag.id, false, false));
                    });

                    $('#tags').select2(); 
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
