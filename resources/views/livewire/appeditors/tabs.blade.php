<div class="accordion shadow" id="accordionExample">
    <div class="accordion-item">

        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button text-bg-dark" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                🧁 Tools Apps
                
            </button>

        </h2>
        <div id="collapseOne"
         class="accordion-collapse collapse show
         text-center 
         " 
        aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">

            <div class="container">
                
            <button class="p-1 m-1 shadow rounded-4" onclick="saveEditorData()">
                <strong>
                    <i class="far fa-save"></i> Save
                </strong>
            </button>

                <button id="loadJSapp" wire:click="loadJson()" class="p-1 m-1 shadow rounded-4 "
                onclick="dispatchLoadingEvent('hourglass', 600);">
                <strong>
                    <i class="far fa-folder-open"></i> Load
                </strong>
            </button>

            
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input 
                onclick="dispatchLoadingEvent('hourglass', 900);"
                type="radio" class="btn-check" wire:model="app_idioma" 
                value="en" id="btnradio1"
                    autocomplete="off" {{ $app_idioma == 'en' ? 'checked' : '' }} wire:click="emit_jsoneditor">
                <label class="btn btn-outline-primary" for="btnradio1">EN</label>
            
                <input 
                onclick="dispatchLoadingEvent('hourglass', 900);"
                type="radio" class="btn-check" wire:model="app_idioma" value="es" id="btnradio2"
                    autocomplete="off" {{ $app_idioma == 'es' ? 'checked' : '' }} wire:click="emit_jsoneditor">
                <label class="btn btn-outline-primary" for="btnradio2">ES</label>
            </div>
            

            </div>

            <span class="input-group-text punter mt-1">
                <strong title="Describe App ">
                    App / 
                    <i 
                    @click="openwin36('editDataModal')"
                    title="Select Apps"
                    class="fas fa-file-edit p-2 shadow-sm"></i>
                    <i 
                    id="btnshow-menu-app"
                    title="Show Menu"
                    class="fas fa-ice-cream p-2 shadow-sm">

                    </i>
                </strong>                
            </span>
            

            <div class="input-group mt-1 shadow-sm ">
                @if ($app_idioma == 'en')
                    <textarea wire:key="en-textarea" id="en" style="height:auto;" class="form-control m-2 shadow-sm" aria-label="With textarea" id="en"
                        wire:model.defer="en" placeholder="💭 Description App !"></textarea>
                @else
                    <textarea wire:key="es-textarea" id="es" style="height:auto;" class="form-control m-2 shadow-sm" aria-label="With textarea" id="es"
                        wire:model.defer="es" placeholder="💭 Descripción de la aplicación !"></textarea>
                @endif

            </div>
            <div class="container">
                <div class="mb-3">
                    <label for="menu" class="form-label"></label>
                    <select class="form-select" id="menu" wire:model="menu">
                        <option selected>Choose...Menu</option>
                        <option value="front">Front</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="visually-hidden" for="autoSizingInputGroup">URL</label>
                    <div class="input-group">
                      <div class="input-group-text">🌐</div>
                      <input type="text" class="form-control" id="url" 
                      wire:model="url" placeholder="Enter URL">
                    </div>
                
                </div>

                <div class="mb-3">
                    
                    <select class="form-select" id="target" wire:model="target">
                        <option selected>Choose...Target</option>
                        <option value="parent">Parent</option>
                        <option value="new">New</option>
                    </select>
                </div>

                <div class="mb-3">
                    
                    <input type="text" class="form-control" id="download_url" wire:model="download_url"
                        placeholder="Enter Download URL">
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
                En el competitivo mundo de las aplicaciones móviles, lograr que tus apps
                se
                destaquen entre

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
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <i class="fas fa-images m-1"></i> SEO Imagen
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
            data-bs-parent="#accordionExample">
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
            <button class="accordion-button collapsed  " type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <i class="fas fa-signal m-1"></i> Stats
            </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
            data-bs-parent="#accordionExample">
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
