<div class="row ">

    <div class="row border-1">

        <div class="col-10">
            <div class="input-wrapper">
                <input type="text" id="myInput" 
                class="input-float w-75 rounded-2 punter"
                 wire:model="name" />
            </div>
        </div>
        <div class="col">
            <h6 class="p-2 text-bold rounded-3 shadow">
                <strong>
                    🍒 Editor Apps .:::
                </strong>
            </h6>
        </div>

        <div class="col-9">
            <div id="editorjs" class=" rounded-2  p-3"></div>
        </div>
        <div class="col">

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button text-bg-dark" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            🧁 Tools Apps
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <button id="btn-new" type="submit" wire:click.prevent="editorcreate()"
                                class="p-1 m-1 shadow rounded-4">
                                <strong>
                                    <i class="far fa-save"></i> Saveme
                                </strong>
                            </button>

                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" checked class="btn-check" name="btnradio" id="btnradio1"
                                    autocomplete="off" checked>
                                <label class="btn btn-outline-primary" for="btnradio1">EN</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2"
                                    autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio2">ES</label>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="far fa-keyboard m-1"></i> SEO
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>tools seo for apps </strong>
                            En el competitivo mundo de las aplicaciones móviles, lograr que tus apps se destaquen entre
                            la multitud puede ser un desafío. Con millones de aplicaciones disponibles en plataformas
                            como Botchatur, es fundamental utilizar estrategias efectivas para aumentar la visibilidad y
                            la popularidad de tus aplicaciones. En este artículo, presentaremos una poderosa herramienta
                            de SEO diseñada específicamente para aplicaciones
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="fas fa-tags m-1"></i> Tags
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>
                                This is the third item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <i class="fas fa-images m-1"></i> SEO Imagen
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the fourth item's accordion body.</strong> It is hidden by default, until
                            the
                            collapse plugin adds the appropriate classes that we use to style each element.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed  " type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <i class="fas fa-signal m-1"></i> Stats
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the fifth item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element.
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </div>

</div>
</div>
<div class="card-footer d-flex justify-content-end">
    <strong>Editor Apps Botchatur</strong>
</div>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/nested-list@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/checklist@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/embed@2.5.3/dist/bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/table@2.2.2/dist/table.min.js"></script>

<script>
    const editor = new EditorJS({
        holder: 'editorjs',
        autofocus: true,
        tools: {
            header: {
                class: Header,
                inlineToolbar: true
            },
            list: {
                class: NestedList,
                inlineToolbar: true,
                config: {
                    defaultStyle: 'unordered'
                },
            },

            checklist: {
                class: Checklist,
                inlineToolbar: true,
            },
            table: {
      class: Table,
      inlineToolbar: true,
      config: {
        rows: 2,
        cols: 3,
      },
    },

            image: SimpleImage,
            embed: Embed,
            

        },
    })
</script>
