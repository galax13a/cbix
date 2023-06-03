<div>
    <div class="btn-group btn-group-sm mt-0 shadow-sm" role="group" aria-label="CRUD Button">
        <button 
        title="{{ __('messages.btn-crud-edit') }}" 
        type="button" class="btn btn-light"
            data-bs-toggle="modal" data-bs-target="#updateDataModal" wire:click="edit({{ $id_editar }})">
            ✅
        </button>
        <button 
        type="button" class="btn btn-light"
             onclick='window.confirmDelete({{ $id_editar }}, "confirm-delete-model")'
            title="{{ __('messages.btn-crud-delete') }} " type="button" class="btn btn-primary">
            ⛔️
        </button>
    </div>
</div>
