<div class="row container-fluid">

    <div class="col-12 shadow rounded-4 p-4 ">
        <form wire:submit.prevent="create1">
            <div class="row g-3 align-items-center">
                <div class="input-group input-group-lg">
                    <span class="bg-black input-group-text text-bold text-warning" id="inputGroup-sizing-lg">
                        🍓 Name App
                    </span>
                    <input type="text" class="form-control shadow" wire:model="name" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-lg">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                        Must be 3-26 characters long.
                    </span>
                </div>
            </div>
            <div class="row g-3 align-items-center mt-1">

                <span class="input-group-text text-bold bg-light" id="inputGroup-sizing-lg">
                    <strong class="p-1 rounded-4" >
                        🌐 Slug: {{ url('/') }}/apps/{{ $slug }}
                    </strong>
                </span>


            </div>
            <div class="col-auto">
                <span id="slugHelpInline" class="form-text">
                    Auto-generated from Name App.  {{ $this->name }}

                </span>
                @if ($slug && $this->slugExists($slug))
                    <p class="text-danger shadow-sm p-2 rounded-3">Slug app, already exists. Please choose a different
                        one.</p>
                        @elseif ($slug)
                        <span class="badge p-1 p-1 bg-warning text-black" >Enabled app</span>
                @endif
            </div>
    </div>

    <button id="btn-new" type="submit" class="p-2 m-2 rounded-3 shadow-sm"
        @if (!$slug || $this->slugExists($slug)) disabled @endif>
        <strong>Create App 🍒</strong>
    </button>

    </form>



</div>
</div>
<div class="card-footer d-flex justify-content-end">
    <strong>Apps Webmaster Botchatur</strong>
</div>
