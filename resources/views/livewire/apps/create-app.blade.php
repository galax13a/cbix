<div class="row align-content-center container-sm">
   
    <div class="col-md-12 shadow rounded-4 p-4 ">
        <form wire:submit.prevent="create1">
            <div class="row g-3 align-items-center">
                <div class="input-group input-group-lg">
                    <span class="input-group-text text-bold text-warning" id="inputGroup-sizing-lg">
                        🍓 Name App
                    </span>
                    <input type="text" class="form-control shadow" wire:model="name"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                        Must be 3-26 characters long.
                    </span>
                </div>
            </div>
            <div class="row g-3 align-items-center mt-3">
                <div class="input-group input-group-lg">
                    <span class="input-group-text text-bold text-warning" id="inputGroup-sizing-lg">
                        🌐 Slug
                    </span>
                    <input type="text" class="form-control shadow" wire:model="slug"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>
                <div class="col-auto">
                    <span id="slugHelpInline" class="form-text">
                        Auto-generated from Name App.
                    </span>
                </div>
            </div>
            @if ($slug && $this->slugExists($slug))
                <p class="text-danger">Slug already exists. Please choose a different one.</p>
            @endif
            <button id="btn-new" type="submit" class="p-2 m-2 rounded-3 shadow-sm"
            @if ($slug && $this->slugExists($slug)) disabled @endif>
            <strong>Create 🍒</strong>
    </button>
        </form>
    </div>
    
    

</div>
</div>
<div class="card-footer d-flex justify-content-end">
    <strong>Apps Webmaster Botchatur</strong>
</div>
