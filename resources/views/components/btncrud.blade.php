<div>
    <div class="btn-group btn-group-sm mt-0 shadow-sm text-end" role="group" aria-label="CRUD Button">
        <button 
        title="{{ __('messages.btn-crud-edit') }}" 
        type="button" class="btn btn-light"
            data-bs-toggle="modal" data-bs-target="#updateDataModal" wire:click="edit({{ $id_editar }})">
            ✅ Edit
        </button>
        <button 
        type="button" 
        class="btn btn-light"
        title="{{ __('messages.btn-crud-delete') }}"
        onclick="window.confirmDelete({{ $id_editar }}, '{{ $x_delete ?? 'confirm-delete-model' }}')">
            ⛔️ Delete
    </button>
    
    </div>
</div>
