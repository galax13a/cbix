<div>
    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-icon shadow-sm m-1 " data-bs-toggle="modal" data-bs-target="#updateDataModal" class="dropdown-item" wire:click="edit({{$id_editar}})">
            ✅
        </button>        
        <button onclick="confirm('Confirm Delete id {{$id_editar}}? \nDeleted Row cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$id_editar}})" type="button"  class="btn btn-icon shadow-sm m-1">
            ❌
        </button>
      </div>
</div>
