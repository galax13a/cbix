<div>             
     <?php  ?>   
     <style></style>
     <section>
        <div class="offcanvas offcanvas-start {{ $this->isOffcanvasVisible ? 'show' : '' }}" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
                <button wire:click="$set('isOffcanvasVisible', false)" type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="col">
                 
                        {{ $themasSlot }}
                  
                </div>
                <div class="float-end">{{ $themas->links() }}</div>
            </div>
        </div>
    </section>
     
</div>