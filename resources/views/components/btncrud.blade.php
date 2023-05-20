<div>
    <div class="btn-group" role="group" aria-label="Basic example">
        <p  class="punter m-1" data-bs-toggle="modal" data-bs-target="#updateDataModal" class="dropdown-item" wire:click="edit({{$id_editar}})">
            ✅
        </p>        
        <p   class="punter m-1" onclick="confirm('Confirm Delete Row ? \nDeleted Row cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$id_editar}})" >
            ❌
        </p>
      </div>
</div>
