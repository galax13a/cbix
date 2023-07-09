<div class="accordion shadow" id="accordionExample">
    <div class="accordion-item">

        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button text-bg-dark" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                🧁 Tools Apps

            </button>

        </h2>
        <div id="collapseOne" class="accordion-collapse collapse 
         text-center 
         "
            aria-labelledby="headingOne" data-bs-parent="#accordionExample">

            <div class="container">

                <button class="p-1 m-1 shadow rounded-4" onclick="saveEditorData()">
                    <strong>
                        <i class="far fa-save"></i>
                        Save
                    </strong>
                </button>

                <button id="loadJSapp" wire:click="loadJson()" class="p-1 m-1 shadow rounded-4 "
                    onclick="dispatchLoadingEvent('hourglass', 600);">
                    <strong>
                        <i class="far fa-folder-open"></i> Load
                    </strong>
                </button>


                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input onclick="dispatchLoadingEvent('hourglass', 900);" type="radio" class="btn-check"
                        wire:model="app_idioma" value="en" id="btnradio1" autocomplete="off"
                        {{ $app_idioma == 'en' ? 'checked' : '' }} wire:click="emit_jsoneditor">
                    <label class="btn btn-outline-primary" for="btnradio1">EN</label>

                    <input onclick="dispatchLoadingEvent('hourglass', 900);" type="radio" class="btn-check"
                        wire:model="app_idioma" value="es" id="btnradio2" autocomplete="off"
                        {{ $app_idioma == 'es' ? 'checked' : '' }} wire:click="emit_jsoneditor">
                    <label class="btn btn-outline-primary" for="btnradio2">ES</label>
                </div>


            </div>

            <span class="input-group-text punter mt-1">
                <strong title="Describe App ">
                    App /
                    <i @click="openwin36('editDataModal')" title="Select Apps"
                        class="fas fa-file-edit p-2 shadow-sm"></i>
                    <i id="btnshow-menu-app" title="Show Menu" class="fas fa-ice-cream p-2 shadow-sm">

                    </i>
                </strong>
            </span>


            <div class="input-group mt-1 shadow-sm ">
                @if ($app_idioma == 'en')
                    <textarea wire:key="en-textarea" id="en" style="height:auto;" class="form-control m-2 shadow-sm"
                        aria-label="With textarea" id="en" wire:model.defer="en" placeholder="💭 Description App !"></textarea>
                @else
                    <textarea wire:key="es-textarea" id="es" style="height:auto;" class="form-control m-2 shadow-sm"
                        aria-label="With textarea" id="es" wire:model.defer="es" placeholder="💭 Descripción de la aplicación !"></textarea>
                @endif

            </div>
            <div class="container">
                <div class="mb-3">
                    <label for="menu" class="form-label"></label>
                    <select class="form-select" id="menu" wire:model.defer="menu">
                        <option selected>Choose...Menu</option>
                        <option value="front">Front</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="visually-hidden" for="autoSizingInputGroup">URL</label>
                    <div class="input-group">
                        <div class="input-group-text">🌐</div>
                        <input type="text" class="form-control" id="url" wire:model.defer="url"
                            placeholder="Enter URL">
                    </div>

                </div>

                <div class="mb-3">

                    <select class="form-select" id="target" wire:model.defer="target">
                        <option selected>Choose...Target</option>
                        <option value="parent">Parent</option>
                        <option value="new">New</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="visually-hidden" for="autoSizingInputGroup">URL</label>
                    <div class="input-group">
                        <div class="input-group-text">Ⓜ️</div>
                        <input type="text" class="form-control" id="download_url" wire:model.defer="download_url"
                            placeholder="Enter Download URL">
                    </div>

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

                <div class="form-group">
                    <label for="meta_title">Meta Title</label>
                    <textarea wire:model.defer="meta_title" id="meta_title" class="form-control m-2 shadow-sm"
                        aria-label="With textarea" placeholder="💭 Meta Title"></textarea>
                    @error('meta_title')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="meta_description">Meta Description</label>
                    <textarea wire:model.defer="meta_description" id="meta_description" class="form-control m-2 shadow-sm"
                        aria-label="With textarea" placeholder="💭 Meta Description"></textarea>
                    @error('meta_description')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="meta_keywords">Meta Keywords</label>
                    <textarea wire:model.defer="meta_keywords" id="meta_keywords" class="form-control m-2 shadow-sm"
                        aria-label="With textarea" placeholder="💭 Meta Keywords"></textarea>
                    @error('meta_keywords')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="container">
                    <button wire:key="btn-saveseo" wire:click.prevent="saveSeo" class="btn btn-primary">
                        Guardar SEO
                    </button>

                </div>


            </div>
        </div>

    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <i class="fas fa-tags m-1"></i> Tags
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">                

                    
                        <select  class="js-example-basic-multiple" multiple="multiple" wire:key="select-tags"
                            wire:model="tages" id="tags" name="tags[]">
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                   
                        <div class="container">
                            <button wire:key="btn-savetags" wire:click.prevent="saveTags"
                                class="rounded-4 p-1 shadow-sm mt-1 border-0 custom-link">
                                Save
                                <i class="fas fa-save"></i>
                            </button>
                                <a href="{{ route('admin.tags') }}" target="_blank">
                                    <button class="rounded-4 p-1 shadow-sm mt-1 border-0 custom-link"
                                        wire:key="btn-tages">
                                        <strong>
                                            #Tags
                                            <i class="fas fa-bookmark"></i>
                                        </strong>
                                    </button>
                                </a>
                      
                                 <button @click="openwin36('tagsDataModal')"
                                class="rounded-4 p-1 shadow-sm mt-1 border-0 custom-link" wire:key="btn-tagersers-create">
                                <strong>
                                    Create
                                    <i class="fas fa-cloud-upload"></i></i>
                                </strong>
                                </button>            

                        
                            </div>


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
            <div class="container">


                <div class="mt-2 text-center" wire:key="div-imagen-app">
                    <img id="imagen-tem-app"
                        src="@if ($this->app->image) {{ Storage::url($this->app->image) }} @endif"
                        class="img-thumbnail" style="max-width:230px; max-height: 210px;">
                </div>

                <div class="mt-2" wire:key="div-imagen-app">
                    📸Replace
                    <img id="imagen-tempo-app" src="" class="img-thumbnail"
                        style="max-width:230px; max-height: 210px;">
                </div>

            </div>

            <form wire:submit.prevent="save_imagen" enctype="multipart/form-data">
                <div class="form-group">

                    <input type="file" class="form-control" id="image" name="image" wire:model="image">
                    @error('image')
                        <span class="error">{{ $message }}</span>
                    @enderror

                    <!-- Image Preview -->
                    @if ($image)
                        <img src="{{ $image->temporaryUrl() }}" class="img-thumbnail mt-3">
                    @endif
                </div>
                <br>
                <button type="submit" onclick="dispatchLoadingEvent('dots', 1600);" class="btn btn-primary shadow">
                    <i class="fas fa-cloud-upload"></i>
                    Upload Imagen
                </button>
            </form>

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
    <div id="collapseFive" class="accordion-collapse collapse " aria-labelledby="headingFive"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <div class="container">
                <table class="table table-striped table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th>Downloads</th>
                            <th>Downloads Bot</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="text-center">
                            <td>{{ $this->app->downloads }}</td>
                            <td>{{ $this->app->downloads_bot }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

</div>
