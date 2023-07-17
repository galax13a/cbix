<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="editDataModal" data-bs-backdrop="static" role="dialog"
    aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-black text-danger">
                <h5 class="modal-title" id="editDataModal"> 
                    Edit Appeditor
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

