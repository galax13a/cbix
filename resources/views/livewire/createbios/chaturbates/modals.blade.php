<!-- modal cards playscam -->
<!-- resources/views/livewire/biochaturbates/view.blade.php -->

<div>
    <!-- modal cards playscam -->
    <div class="modal fade" id="modal-cards-playscam" tabindex="-1" aria-labelledby="modal-cards-playscamLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="modal-cards-playscamLabel">🦄 Playcams Store | Cards Bio Chaturbate</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    
                    <input wire:model="keyWord" type="text" class="search-input" placeholder="Search Cards">

                    <div class="container shadow rounded-3 mb-3 bg-light">
                        <div class="btn-group rounded-4" role="group" aria-label="btn">
                            <button id="addRuleButton" class="btn-new">
                                <i class='bx bx-happy-beaming fs-2' ></i></i>Bio App
                            </button>
                            <button id="changeColorButton" class="btn-new">
                                <i class='bx bx-heading fs-2' ></i></i>Headers
                            </button>                           
                            <button id="toggleShadowButton" class="btn-new">
                                <i class='bx bx-book-heart fs-2' ></i>Cards
                            </button>
                            <button id="cardImagenButton" class="btn-new">
                                <i class="bx bx-image fs-2"></i> SocialMedia
                            </button>
                            <button id="btn-noborder" class="btn-new">
                                <i class='bx bx-bookmark-heart fs-2' ></i>Links
                            </button>
                            <button id="btn-noborder" class="btn-new">
                                <i class='bx bxs-bowl-hot fs-2' ></i>Extra
                            </button>
                        </div>
                    </div>
                    
                    <div class="row" id="rows-cards-playscam">
                        <?php
                            $descrip = 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. ';
                            $cards = [
                                ['name' => 'App 1', 'image' => 'https://picsum.photos/200/150', 'description' => $descrip],
                                ['name' => 'App 1', 'image' => 'https://picsum.photos/200/150', 'description' => $descrip],
                                ['name' => 'App 2', 'image' => 'https://picsum.photos/200/150', 'description' => $descrip],
                                ['name' => 'App 1', 'image' => 'https://picsum.photos/200/150', 'description' => $descrip],
                                ['name' => 'App 4', 'image' => 'https://picsum.photos/200/150', 'description' => $descrip],
                                ['name' => 'App 1', 'image' => 'https://picsum.photos/200/150', 'description' => $descrip],
                             
                            ];
                        ?>
                        @foreach ($cards as $card)
                        <div class="card mb-3 p-3 rounded-4 shadow border-0 snipcss-PN4eX">
                            <div class="row g-0">
                              <div class="col-2">
                                <img src="https://picsum.photos/200/150"  class="img-fluid rounded" alt="Card title">
                              </div>
                              <div class="col-8">
                                <div class="card-body py-0">
                                  <p class="text-muted mb-0">
                                    <p class="text-muted mb-0">{{ $card['name'] }}</p>
                                  </p>
                             
                                    <h5 class="card-title">{{ $card['description'] }}</h5>
                                    <button class="btn btn-light text-center">Select Card</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                    @endforeach
                    </div>

                    <div class="card" id="biocontentcard">
                        <div class="card-header">
                            <h5 class="card-title"><i class='bx bxs-credit-card-front' ></i>😎 Bio Cards</h5>
                        </div>
                        <div class="card2">
                            <blockquote class="bloquequote mb-4 text-center">
                                <h2>______________  <img src="https://i.imgur.com/5wANabW.png" alt="">  <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/i/d3a5a08b-4878-48af-b76b-8aff5871fc75/d9s9u4l-b3b94109-8420-40d3-b0e1-390de0aee92e.gif" alt="">  <img src="https://i.imgur.com/5wANabW.png" alt=""> ______________</h2>
                                <p class="text-center p-2 ">Transforma tu perfil y cautiva a tu audiencia con nuestras Bio Cards. Personalizar y exhibir
                                    diferentes facetas de tu vida y contenido en Chaturbate, mejorando la presentación para una experiencia más atractiva.
                                    Elaborar una biografía detallada y convincente es fundamental, ya que le permite comunicar de forma eficaz lo que ofrece.
                                    Edite y perfeccione su perfil para destacar en varias categorías y explorar canales de promoción exclusivos para
                                    llegar a un público más amplio. Las Tarjetas ofrecen un enfoque único y creativo para promocionar su contenido,
                                    eliminando la necesidad de conocimientos de codificación o diseño web. Esto le permite gestionar y mejorar de manera eficiente su presencia en
                                    Chaturbate de una manera verdaderamente creativa.</p>
                                <p>Recuerde: una biografía bien elaborada no solo proporciona información sobre sus ofertas, sino que también crea una conexión con su audiencia.
                                    Comparte tu historia, muestra tu singularidad y deja que tu personalidad brille. ¡Eleva tu perfil y atrae una nueva ola de seguidores!</p>
                                <footer class="blockquote-footer"> 🥰 ¡Haz que tu perfil sea inolvidable! 🚀</pie de página>
                           </blockquote>
                      </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>


<!-- Add Modal -->

<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel"> New Biochaturbate</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="name"></label>
                        <input wire:model.defer="name" type="text" class="form-control" id="name" placeholder="Name">@error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="room"></label>
                        <input wire:model.defer="room" type="text" class="form-control" id="room" placeholder="Room">@error('room') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="api"></label>
                        <input wire:model.defer="api" type="text" class="form-control" id="api" placeholder="Api">@error('api') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="codex"></label>
                        <input wire:model.defer="codex" type="text" class="form-control" id="codex" placeholder="Codex">@error('codex') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="bio"></label>
                        <input wire:model.defer="bio" type="text" class="form-control" id="bio" placeholder="Bio">@error('bio') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="data"></label>
                        <input wire:model.defer="data" type="text" class="form-control" id="data" placeholder="Data">@error('data') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="code"></label>
                        <input wire:model.defer="code" type="text" class="form-control" id="code" placeholder="Code">@error('code') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="codebackup"></label>
                        <input wire:model.defer="codebackup" type="text" class="form-control" id="codebackup" placeholder="Codebackup">@error('codebackup') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="share"></label>
                        <input wire:model.defer="share" type="text" class="form-control" id="share" placeholder="Share">@error('share') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="link"></label>
                        <input wire:model.defer="link" type="text" class="form-control" id="link" placeholder="Link">@error('link') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="campaign"></label>
                        <input wire:model.defer="campaign" type="text" class="form-control" id="campaign" placeholder="Campaign">@error('campaign') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="pay"></label>
                        <input wire:model.defer="pay" type="text" class="form-control" id="pay" placeholder="Pay">@error('pay') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                  <label for="active"></label>                  
                          <x-com-check :active="$active" />
                  @error('active') <span class="error text-danger">{{ $message }}</span> @enderror       
            
                    
                    <div class="form-group">
                        <label for="pic"></label>
                        <input wire:model.defer="pic" type="text" class="form-control" id="pic" placeholder="Pic">@error('pic') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button id="btn-close" type="button" wire:click.prevent="cancel()" class="btn btn-icon shadow-lg m-2" data-bs-dismiss="modal">❌ Close</button>
                <button id="btn-store"  type="button" wire:click.prevent="store()" class="btn btn-icon shadow-lg m-2">Save ✅</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="updateDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Biochaturbate</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="name"></label>
                        <input wire:model.defer="name" type="text" class="form-control" id="name" placeholder="Name">@error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="room"></label>
                        <input wire:model.defer="room" type="text" class="form-control" id="room" placeholder="Room">@error('room') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="api"></label>
                        <input wire:model.defer="api" type="text" class="form-control" id="api" placeholder="Api">@error('api') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="codex"></label>
                        <input wire:model.defer="codex" type="text" class="form-control" id="codex" placeholder="Codex">@error('codex') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="bio"></label>
                        <input wire:model.defer="bio" type="text" class="form-control" id="bio" placeholder="Bio">@error('bio') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="data"></label>
                        <input wire:model.defer="data" type="text" class="form-control" id="data" placeholder="Data">@error('data') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="code"></label>
                        <input wire:model.defer="code" type="text" class="form-control" id="code" placeholder="Code">@error('code') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="codebackup"></label>
                        <input wire:model.defer="codebackup" type="text" class="form-control" id="codebackup" placeholder="Codebackup">@error('codebackup') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="share"></label>
                        <input wire:model.defer="share" type="text" class="form-control" id="share" placeholder="Share">@error('share') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="link"></label>
                        <input wire:model.defer="link" type="text" class="form-control" id="link" placeholder="Link">@error('link') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="campaign"></label>
                        <input wire:model.defer="campaign" type="text" class="form-control" id="campaign" placeholder="Campaign">@error('campaign') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="pay"></label>
                        <input wire:model.defer="pay" type="text" class="form-control" id="pay" placeholder="Pay">@error('pay') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                  <label for="active"></label>                  
                          <x-com-check :active="$active" />
                  @error('active') <span class="error text-danger">{{ $message }}</span> @enderror       
            
                    
                    <div class="form-group">
                        <label for="pic"></label>
                        <input wire:model.defer="pic" type="text" class="form-control" id="pic" placeholder="Pic">@error('pic') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button id="btn-close" type="button" wire:click.prevent="cancel()" class="btn btn-icon shadow-lg m-2" data-bs-dismiss="modal">❌ Close</button>
                <button id="btn-update" type="button" wire:click.prevent="update()" class="btn btn-icon shadow-lg m-2">Save ✅</button>
            </div>
       </div>
    </div>

    <style>
    .modal-lg {
        --bs-modal-width: 70%;
    }
    </style>

</div>
