<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="editDataModal" data-bs-backdrop="static" role="dialog"
    aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDataModal"> Edit Appeditor
                    / {{ $this->name }}

                </h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>

                    <div wire:ignore>
                        <textarea wire:key="edit-en-textarea" id="editorjsx-en" style="height:480px;"
                            class="form-control m-2 shadow-sm @if ($this->app_idioma !== 'en') d-none @endif" aria-label="With textarea"
                            wire:model.defer="en" placeholder="💭 Description App !"></textarea>
                        <br>
                        <textarea wire:key="edit-es-textarea" id="editorjsx-es" style="height:480px;"
                            class="form-control m-2 shadow-sm @if ($this->app_idioma !== 'es') d-none @endif" aria-label="With textarea"
                            wire:model.defer="es" placeholder="💭 Descripción de la aplicación !"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="jeditor"></label>
                        <textarea wire:key="edit-en-textarea" id="editorjsx" style="height:160px;"
                            class="form-control m-2 shadow-sm" aria-label="With textarea"
                            wire:model.defer="editorjs" placeholder="💭 Description App !"></textarea>
                    </div>
                    
                   
                    <div class="form-group">
                        <label for="version"></label>
                        <input wire:model.defer="version" type="text" class="form-control" id="version"
                            placeholder="Version">
                        @error('version')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input wire:model.defer="is_approved" type="checkbox" class="form-check-input"
                                id="is_approved">
                            <label class="form-check-label" for="is_approved">Is Approved</label>
                        </div>
                        @error('is_approved')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="install">Install</label>
                        <select wire:model.defer="install" class="form-control" id="install">
                            <option value="0">Off</option>
                            <option value="1">On</option>
                        </select>
                        @error('install')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <label for="table"></label>
                    <div class="form-group">
                        <x-com-select-table table-name="apps0categors" id="apps0categor_id" display-name="name" />
                        @error('apps_categors_id')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <label for="active"></label>
                    <div class="form-group">
                        <x-com-check :active="$active" />
                    </div>
                    <div class="form-group">
                        <label for="downloads"></label>
                        <label class="visually-hidden" for="autoSizingInputGroup">downloads</label>
                        <div class="input-group">
                            <div class="input-group-text">
                                <i class="fas fa-download"></i>
                            </div>
                            <input wire:model.defer="downloads" type="text" class="form-control"
                                id="autoSizingInputGroup" placeholder="downloads">
                        </div>

                        @error('downloads')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="downloads_bot"></label>
                        <label class="visually-hidden" for="autoSizingInputGroup">downloads_bot</label>

                        <div class="input-group">
                            <div class="input-group-text">
                                <i class="fas fa-cloud-download"></i>
                            </div>
                            <input wire:model.defer="downloads_bot" type="text" class="form-control"
                                id="downloads_bot" placeholder="downloads">
                        </div>
                        @error('downloads_bot')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button id="btn-close" type="button" wire:click.prevent="cancel()"
                    class="btn btn-icon shadow-lg m-2" data-bs-dismiss="modal">❌ Close</button>
                <button id="btn-store" type="button" wire:click.prevent="store_save()"
                    class="btn btn-icon shadow-lg m-2">Save ✅</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="updateDataModal" data-bs-backdrop="static" tabindex="-1"
    role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Appeditor</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="name"></label>
                        <input wire:model.defer="name" type="text" class="form-control" id="name"
                            placeholder="Name">
                        @error('name')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="slug"></label>
                        <input wire:model.defer="slug" type="text" class="form-control" id="slug"
                            placeholder="Slug">
                        @error('slug')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="es"></label>
                        <input wire:model.defer="es" type="text" class="form-control" id="es"
                            placeholder="Es">
                        @error('es')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="en"></label>
                        <input wire:model.defer="en" type="text" class="form-control" id="en"
                            placeholder="En">
                        @error('en')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="editorjs"></label>
                        <input wire:model.defer="editorjs" type="text" class="form-control" id="editorjs"
                            placeholder="Editorjs">
                        @error('editorjs')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="version"></label>
                        <input wire:model.defer="version" type="text" class="form-control" id="version"
                            placeholder="Version">
                        @error('version')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="menu"></label>
                        <input wire:model.defer="menu" type="text" class="form-control" id="menu"
                            placeholder="Menu">
                        @error('menu')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="url"></label>
                        <input wire:model.defer="url" type="text" class="form-control" id="url"
                            placeholder="Url">
                        @error('url')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="target"></label>
                        <input wire:model.defer="target" type="text" class="form-control" id="target"
                            placeholder="Target">
                        @error('target')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="icon"></label>
                        <input wire:model.defer="icon" type="text" class="form-control" id="icon"
                            placeholder="Icon">
                        @error('icon')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image"></label>
                        <input wire:model.defer="image" type="text" class="form-control" id="image"
                            placeholder="Image">
                        @error('image')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="download_url"></label>
                        <input wire:model.defer="download_url" type="text" class="form-control" id="download_url"
                            placeholder="Download Url">
                        @error('download_url')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="is_approved"></label>
                        <input wire:model.defer="is_approved" type="text" class="form-control" id="is_approved"
                            placeholder="Is Approved">
                        @error('is_approved')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="install"></label>
                        <input wire:model.defer="install" type="text" class="form-control" id="install"
                            placeholder="Install">
                        @error('install')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <label for="table"></label>
                    <div class="form-group">
                        <x-com-select-table table-name="apps0categors" id="apps_categors_id" display-name="name" />
                        @error('apps_categors_id')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="meta_title"></label>
                        <input wire:model.defer="meta_title" type="text" class="form-control" id="meta_title"
                            placeholder="Meta Title">
                        @error('meta_title')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="meta_description"></label>
                        <input wire:model.defer="meta_description" type="text" class="form-control"
                            id="meta_description" placeholder="Meta Description">
                        @error('meta_description')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="meta_keywords"></label>
                        <input wire:model.defer="meta_keywords" type="text" class="form-control"
                            id="meta_keywords" placeholder="Meta Keywords">
                        @error('meta_keywords')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <label for="active"></label>
                    <div class="form-group">
                        <x-com-check :active="$active" />
                    </div>
                    <div class="form-group">
                        <label for="downloads"></label>
                        <input wire:model.defer="downloads" type="text" class="form-control" id="downloads"
                            placeholder="Downloads">
                        @error('downloads')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="downloads_bot"></label>
                        <input wire:model.defer="downloads_bot" type="text" class="form-control"
                            id="downloads_bot" placeholder="Downloads Bot">
                        @error('downloads_bot')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button id="btn-close" type="button" wire:click.prevent="cancel()"
                    class="btn btn-icon shadow-lg m-2" data-bs-dismiss="modal">❌ Close</button>
                <button id="btn-update" type="button" wire:click.prevent="update()"
                    class="btn btn-icon shadow-lg m-2">Save ✅</button>
            </div>
        </div>
    </div>
</div>

<style>
    .modal-dialog {
        max-width: 920px;
        margin-right: auto;
        margin-left: auto;
    }
</style>
