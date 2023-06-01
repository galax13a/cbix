<div>
    <div class="btn-group" role="group" aria-label="Basic example">
        <p  class="punter buton69 shadow-md" data-bs-toggle="modal" data-bs-target="#updateDataModal" class="dropdown-item" wire:click="edit({{$id_editar}})">
            ✅
        </p>        
        <p class="punter buton69 shadow-md" onclick='window.confirmDelete({{$id_editar}}, "confirm-delete-model")'>
            ⛔️
        </p>
        
        <p   class="punter buton69 shadow-md d-none " onclick="confirm('Confirm Delete Row ? \nDeleted Row cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$id_editar}})" >
            ❌
        </p>
      </div>
</div>
