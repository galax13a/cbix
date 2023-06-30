<div class="row align-content-center container-sm">
   
    <div class="col-md-10 shadow rounded-4 p-4 mr-3 ">
   
        <form>
            <div class="row g-3 align-items-center">
                <div class="input-group input-group-lg">
                    <span class="input-group-text" id="inputGroup-sizing-lg">
                        Name App
                    </span>
                    <input type="text" class="form-control shadow" 
                    aria-label="Sizing example input" 
                    aria-describedby="inputGroup-sizing-lg">
                  </div>
                <div class="col-auto">
                  <span id="passwordHelpInline" class="form-text">
                    Must be 3-26 characters long.
                  </span>
                </div>
              </div>
            <button type="submit"  wire:click.prevent="create1()" class="btn btn-primary">Create</button>
          </form>
    </div>

</div>
</div>
<div class="card-footer d-flex justify-content-end">
    <strong>Apps Webmaster Botchatur</strong>
</div>
