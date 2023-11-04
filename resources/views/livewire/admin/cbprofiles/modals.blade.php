<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel"><i class='bx bxs-balloon'></i> New Biography</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <p>you have {{ $biousersCount }} / {{ auth()->user()->profiles }} free bios to save available biousers.
                </p>

                @if ($biousersCount >= 3)
                    <p></p>
                    In the free version you can only add one profile that will be saved to modify your biography
                    <a href="{{ url('/app/premium') }}">unlimited pro version</a>
                    <br>
                    This pro version works well for designers who work on designs requested by models, or models who
                    have more than 2 profiles on webcam sites, it would be good to have a clearer and nicer profile so
                    that users take into account their rules and demands, as well as your gifts, wish lists, social
                    networks, and webcam profiles. This tool is not only for models or designers, but simply for users
                    who want to give a different style to their profile and communication links.
                @else
                    <form>
                        <div class="form-group">
                            <label for="name"> <strong> Url/CB/NickUser </strong></label>
                            <box-icon name='right-arrow' animation='spin'></box-icon>
                            <input wire:model="room" type="text" class="form-control" id="room"
                                placeholder="🔖 Url Nick Chatur-bate">
                            @error('room')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="container text-center mt-2" wire:key='img-wc'>
                            <a id="playmodel" data-fram = "" href="javascript:void(0)">
                                <img src="{{ $this->photo }}" class="img-responsive rounded-4 shadow" width="50%"
                                    alt="{{ $this->name }}" title="{{ $this->name }}">
                            </a>
                        </div>

                        <div class="form-group mt-4 fs-3">
                            <label for="name">🥳Name Bio</label>
                            <input wire:model.defer="name" disabled style="height: 66px; font-size: 1em: "
                                type="text" class="form-control" id="name" placeholder="Name">
                            @error('name')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group d-none">
                            <label for="codex"></label>
                            <input wire:model.defer="codex" type="text" class="form-control" id="codex"
                                placeholder="Codex">
                            @error('codex')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group d-none">
                            <label for="link"></label>
                            <input wire:model.defer="link" type="text" class="form-control" id="link"
                                placeholder="Link">
                            @error('link')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group d-none">
                            <label for="pay"></label>
                            <input wire:model.defer="pay" type="text" class="form-control" id="pay"
                                placeholder="Pay">
                            @error('pay')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </form>
                @endif
            </div>

            <div class="modal-footer">
                <button id="btn-close" type="button" wire:click.prevent="cancel()" class="btn btn-icon shadow-lg m-2"
                    wire:loading.attr="disabled" data-bs-dismiss="modal">❌ Close</button>
                <button id="btn-store" type="button" wire:click.prevent="store()" wire:loading.attr="disabled"
                    class="btn btn-icon shadow-lg m-2">
                    <span wire:loading><box-icon name='balloon' type='solid' animation='fade-down'></box-icon>
                        Creating Bio ...</span>
                    <span wire:loading.remove>Save ✅</span>
                </button>
            </div>
        </div>
    </div>
</div>


<div wire:ignore.self class="modal modal-lg fade" wire:key='genere-bio' id="GenereModal" data-bs-backdrop="static"
    tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="iframeModalLabel">Genere Bio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="ratio ratio-21x9">
                    <input type="text">
                    Genero Bio de

                    <button>Generate</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div wire:ignore.self class="modal modal-lg fade" wire:key='genere-stats' id="StatsModal" data-bs-backdrop="static"
    tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="iframeModalLabel">Stats Bio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                estadisticas
            </div>
        </div>
    </div>
</div>

<div wire:ignore.self class="modal modal-lg fade" wire:key='popiframe' id="iframeModal" tabindex="-1"
    data-bs-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="iframeModalLabel">Room Content</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" wire:key='bton-frames'>
                <div class="ratio ratio-21x9">
                    @if ($this->iframevideo)
                        <iframe id="iframeContent" src="{{ $this->iframevideo }}" frameborder="0">Loanding</iframe>
                    @else
                        <iframe id="iframeContent" src="" frameborder="0">Loanding</iframe>
                    @endif

                    <div class="d-grid gap-2">
                  
                        <a class="p-1 m-1 bg-dark shadow rounded-3" style="height: 26px;" target="_blank" href="{{ env('CB_AFILIATE') }}">More
                            Cams</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div wire:ignore.self class="modal modal-lg fade" wire:key='genere-social' id="SocialModal"
    data-bs-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="iframeModalLabel">Social Bio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                social bios redes add
            </div>
        </div>
    </div>
</div>
<div wire:ignore.self class="modal modal-lg fade" wire:key='lice-pro' id="LiceModal" data-bs-backdrop="static"
    tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="iframeModalLabel">License Pro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <form wire:submit.prevent="submit">
                        <div class="mb-3">
                            @if ($this->planEspecial)
                                <div class="mb-3">
                                    <input type="radio" id="planEspecial" wire:model="selectedPlanId"
                                        value="{{ $this->planEspecial->id }}">
                                    <label for="planEspecial">{{ $this->planEspecial->name }} -
                                        {{ $this->planEspecial->value }}USD ~   just for this biography</label>
                                        <hr>
                                      
                                </div>
                            @endif
                            @if (!$this->selectedPlanId)
                                                            
                            <label for="plan_id" class="form-label">Choose a Plan</label>
                            <p>If you choose a monthly or annual plan you receive more than 100 profiles</p>
                            @if ($this->planes)
                                <select wire:model="plan_id" class="form-select" id="plan_id" required>
                                     <option value="">Select a plan</option>
                                    @foreach ($this->planes as $plan)
                                        <option value="{{ $plan->id }}">{{ $plan->name }} -
                                            {{ $plan->value }}USD</option>
                                    @endforeach
                                </select>
                            @endif

                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">License in the name of:</label>
                            
                            <input type="text" wire:model="nameLicence" placeholder="Your Name"class="form-control">
                            <label for=""></label>
                            <textarea class="form-control" id="content" rows="18" readonly>
                                END USER LICENSE AGREEMENT

                                This End User License Agreement ("Agreement") is entered into between [Botchatur] ("We" or "Licensor") and you ("User" or "Licensee") 
                                in connection with the use of the Borchatur] Product or Service] (the "Product"). By accepting this Agreement, 
                                you acknowledge and agree to the following terms and conditions:
                               
                                License in the name of  :  {{$this->nameLicence}} 
                                1. License Grant:
                                
                                1.1. We grant you a limited, non-exclusive, non-transferable license to use the Product in accordance with the terms of this Agreement.
                                
                                1.2. You have the right to use the Product for your own personal or commercial use, as permitted by the license purchased.
                                
                                2. Restrictions:
                                
                                2.1. You do not have the right to modify, redistribute, sublicense, rent, sell or transfer the Product or any part thereof to third parties without our written consent.
                                
                                2.2. Use of the Product for illegal or immoral purposes is not permitted.
                                
                                3. Affiliate Code:
                                
                                3.1. If you are provided with an affiliate code in connection with the Product, you agree to use it ethically and in accordance with applicable policies and regulations.
                                
                                4. Updates and Support:
                                
                                4.1. We may provide periodic updates to the Product. Your use of the updates will be subject to the terms of this Agreement.
                                
                                4.2. We are not obligated to provide technical support, but may do so at our discretion.
                                
                                5. Responsibility:
                                
                                5.1. You agree that use of the Product is at your own risk.
                                
                                5.2. In no event will we be liable for direct, indirect, incidental, special or consequential damages arising from the use of the Product.
                                
                                6. Termination:
                                
                                6.1. This Agreement will take effect upon your acceptance of its terms and will continue until terminated.
                                
                                6.2. We reserve the right to terminate this Agreement in the event of your failure to comply with its terms. In the event of termination, you must stop using the Product.
                                
                                7. Applicable Law:
                                
                                7.1. This Agreement shall be governed and construed in accordance with the laws of [name of jurisdiction], without regard to its conflicts of law principles.
                                
                                8. Acceptance:
                                
                                8.1. By using the Product or clicking "I Accept" or similar action, you agree to be legally bound by the terms and conditions of this Agreement.
                                
                                Please read carefully and understand the terms of this Agreement before using the Product. If you do not agree to these terms, do not use the Product. If you have any questions or concerns, please contact us at [contact email].
                                
                                Licensee's electronic signature: ______________________________
                                
                                Acceptance Date: ______________________________
                                
                                [Botchatur]
                                [Digital Global Dev]
                                
                                [botchatur360@gmail.com]
                            </textarea>
                        </div>
                        <div class="form-check">
                            <input wire:model="hasReadLicense" type="checkbox" class="form-check-input" id="hasReadLicense">
                            <label class="form-check-label" for="hasReadLicense">I have read and accept the terms and conditions</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Buy </button>
                    </form>
                </div>

            </div>


        </div>
    </div>
</div>


<!-- Add licen -->
<div wire:ignore.self class="modal modal-lg fade" id="createDataModalLicencie" data-bs-backdrop="static"
    tabindex="-1" role="dialog" aria-labelledby="createDataModalLabelLicencie" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabelLicencie"><i class='bx bxs-balloon'></i> New
                    Biography
                </h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h1>User License for botchatur.com</h1>

                <p>This document ("<strong>License</strong>") sets forth the terms and conditions under which you may
                    use the services and functionalities provided by botchatur.com ("<strong>we</strong>",
                    "<strong>our</strong>", or "<strong>the platform</strong>"). By using our platform, you agree to
                    comply with the terms of this License.</p>

                <h2>1. Free Use with Basic License:</h2>

                <p>1.1. Users can register and use the platform for free, including creating and editing bios or
                    profiles.</p>

                <p>1.2. Profiles created with a basic license may include affiliate links provided by botchatur.com.
                    These links are fixed and cannot be modified.</p>

                <h2>2. Full License to Use:</h2>

                <p>2.1. To access all the features of the platform and the ability to fully edit and modify your
                    profile, you must purchase a "<strong>Full Use License</strong>".</p>

                <p>2.2. The cost of a Full License per Usage profile is $2.99 (US dollars) or 100 tokens on Chaturbate,
                    or an annual payment of $49.99 or one thousand tokens.</p>

                <p>2.3. Users with a Full Use License have the ability to freely edit and modify their profile,
                    including the option to change or remove affiliate links provided by chaturbate.com. <a
                        href="https://chaturbate.com/affiliates/" target="_blank">Link:
                        https://chaturbate.com/affiliates/</a></p>

                <img src="https://i.imgur.com/NmI2yo7.png" class="img-responsive" alt="affiliates code chaturbate">

                <br>
                <p>
                    This helps us finance these profile designs. If you decide not to support our designs, we grant it
                    to you with these conditions. This does not affect your account, but if what you want is to create a
                    powerful affiliate system together with Chatur directly, it allows you to support the template and
                    use it your way in the pro version, if you don't mind, continue and support us with our affiliate
                    link, thank you very much
                </p>
                <h2>3. Rules of Responsibility:</h2>

                <p>3.1. By using our platform, you agree to comply with all applicable laws and regulations.</p>

                <p>3.2. You are solely responsible for the content you post on your profile. We do not allow the
                    publication of illegal or inappropriate content.</p>

                <p>3.3. botchatur.com is not responsible for affiliate links or third-party content that you may post on
                    your profile. It is your responsibility to ensure that such links comply with the relevant policies
                    and regulations of Chaturbate or any webcam site.</p>

                <h2>4. DMCA and Analysis:</h2>

                <p>4.1. Users with a Full Use License can access advanced features, such as performance analysis and
                    detection of DMCA (Digital Millennium Copyright Act) violations. As well as numerous biographies you
                    can maintain and edit whenever you want or the most important seasons you can manage multiple
                    profiles.</p>

                <p>4.2. botchatur.com strives to comply with all copyright laws and will act in accordance with the DMCA
                    policies if valid complaints are made. Write to us at <a href="{{ url('/app/support') }}">Support
                        ,
                        Ticket</a>.</p>

                <h2>5. License Modifications:</h2>

                <p>5.1. We reserve the right to modify this License at any time. Any modification will be effective
                    immediately upon publication of the updated version on botchatur.com.</p>

                <h2>6. Contact:</h2>

                <p>If you have any questions or concerns about this License, please contact us at <a
                        href="mailto:botchatur360@gmail.com">botchatur360@gmail.com</a>.</p>

                <p>By using botchatur.com, you agree to all the terms and conditions set forth in this License. We urge
                    you to read and understand these terms before using our services.</p>

                <p>Last update date: 10-26-2023</p>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div wire:ignore.self class="modal fade " id="updateDataModal" data-bs-backdrop="static" tabindex="-1"
    role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Biouser</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="name">Url/CB Room Webcam</label>
                        <input wire:model="room" type="text" class="form-control" id="room"
                            placeholder="Name">
                        @error('room')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="name">Name Bio</label>
                        <input wire:model.defer="name" type="text" class="form-control" id="name"
                            placeholder="Name">
                        @error('name')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="codex"></label>
                        <a href="#"><strong>Copy Code</strong></a>
                        <input wire:model.defer="codex" type="text" class="form-control d-none" id="codex"
                            placeholder="Codex">
                        @error('codex')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="link"></label>
                        <input wire:model.defer="link" type="text" class="form-control" id="link"
                            placeholder="Link">
                        @error('link')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pay"></label>
                        <input wire:model.defer="pay" type="text" class="form-control" id="pay"
                            placeholder="Pay">
                        @error('pay')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button id="btn-close" type="button" wire:click.prevent="cancel()"
                    class="btn btn-icon shadow-lg m-2" data-bs-dismiss="modal">❌ Close</button>
                <button id="btn-update" type="button" wire:click.prevent="update()"
                    class="btn btn-icon shadow-lg m-2">Save ✅</button>
            </div>
        </div>
    </div>
</div>
