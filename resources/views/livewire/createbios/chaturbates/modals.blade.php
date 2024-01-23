<!-- modal cards playscam -->
<div>
    <div class="modal fade" id="modal-cards-playscam" tabindex="-1" aria-labelledby="modal-cards-playscamLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h2 class="modal-title" id="modal-cards-playscamLabel">🦄 Playcams Store | Cards Bio Chaturbate</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    @auth                    
                    <p>Welcome, {{ auth()->user()->name }}</p>             
                    @else
                    <a href="{{ route('login') }}" target="_blank">Login</a>
                    @endauth

                    
                    <input wire:model="keyWord" type="text" class="search-input" placeholder="Search Cards">
                  icons 
                  <i class='bx bx-pulse' ></i>
                  <i class='bx bx-shield' ></i>
                  <i class='bx bx-trophy' ></i>
                  <i class='bx bx-crown' ></i>
                  <i class='bx bx-film' ></i>
                  <i class='bx bx-store' ></i>
                  <i class='bx bx-heart-square' ></i>
                  <i class='bx bx-pointer' ></i>
                  <i class='bx bx-donate-heart' ></i>
                  <i class='bx bx-right-indent' ></i>
                  <i class='bx bx-image' ></i>
                  <i class='bx bx-clipboard' ></i>
                  <i class='bx bx-registered' ></i>
                  <i class='bx bxs-registered' ></i>

                | <i class='bx bx-navigation' ></i>
                    <div class="container shadow rounded-3 mb-3 bg-light">
                        <div class="btn-group rounded-4" role="group" aria-label="btn">
                            @foreach ($this->card_categors as $category)
                                <button id="{{ $category->id }}" class="btn-new">
                                    {!! $category->icon !!}
                                    {{ $category->name }}
                                </button>
                            @endforeach
                        </div>
                    </div>
                    
                    
                    <div class="row" id="rows-cards-playscam">
                        @foreach ($this->card_list as $index => $card)
                            <div id="card-{{ $index }}" class="card mb-3 p-3 rounded-4 shadow border-0 snipcss-PN4eX">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img src="{{ $card->image }}" class="img-fluid rounded" alt="Card title">
                                    </div>
                                    <div class="col-8">
                                        <div id="select-cards-playscam{{ $index }}" class="card-body py-0">                                    
                                            <p class="text-muted mb-0">{{ $card->name }}</p>                                 
                                            <h5 id="card-description-{{$index}}" class="card-title">bio {{ $index }} -  {{ $card->description }}</h5>
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
