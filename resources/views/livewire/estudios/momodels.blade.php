<!-- Add Modal study models  -->
<div style="z-index: 1200;" id="create2DataModal" wire:ignore.self class="modal fade" id="create2DataModal"
    data-bs-backdrop="static" tabindex="-300" role="dialog" aria-labelledby="create2DataModalLabel" aria-hidden="true">
    <div class="modal-dialog shadow-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="create2DataModalLabel">💚 Add Study/ Models</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>

                    <label for="table">Study</label>
                    <div class="form-group">
                        <x-com-select-table table-name="estudios" id="estudio_id" display-name="name" />
                        @error('estudio_id')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <label for="table">Models</label>
                    <div class="form-group">
                        <x-com-select-table table-name="modelos" id="modelo_id" display-name="name" />
                        @error('modelo_id')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <br>
                    <a class="my-2 custom-link rounded-4 shadow-sm p-2" href="javascript:void(0)" data-bs-toggle="modal"
                        data-bs-target="#NewModelDataModal">👉 if the model does not exist.. Create New</a>
                    <br>

                    <br>
                    <a class="my-2 custom-link rounded-4 shadow-sm p-2" href="javascript:void(0)"
                        @click="openwin36('howmodelDataModal')">
                        👉 How does this work, click 💢.</a>

                </form>
            </div>
            <div class="modal-footer">
                <button id="btn-close" type="button" wire:click.prevent="cancel()" class="btn btn-icon shadow-lg m-2"
                    data-bs-dismiss="modal">❌ Close</button>
                <button id="btn-store" type="button" wire:click.prevent="store_estudiomodel()"
                    class="btn btn-icon shadow-lg m-2">Save ✅</button>
            </div>
        </div>
    </div>
</div>

<!-- ayuda Modal studio/models -->
<div style="z-index: 1200;" wire:ignore.self class="modal fade" id="howmodelDataModal" data-bs-backdrop="static"
    tabindex="1201" role="dialog" aria-labelledby="howmodelDataModalLabel" aria-hidden="true">
    <div class="modal-dialog shadow-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="howmodelDataModalLabel">👨‍💻Help , Study Manager</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header rounded-4 shadow-lg">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                {{ session('locale') == 'es' ? '¡Gestor de Estudios Botchatur!' : 'Intro , Study Manager Botchatur ' }}
                                
                                
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                @if (session('locale') == 'en')
                                    {{-- Mostrar contenido en inglés --}}
                                    <p> <strong> Botchatur </strong> is an innovative app designed to simplify and enhance your study
                                        management experience. Whether you're conducting research, academic projects, or
                                        simply organizing your study materials, Botchatur is here to assist you every step
                                        of the way. Start by  <x-com-link-new-studio /> <p>  and then 
                                       Add  models 
                                        to have better control of your system
<hr>
                                    <p>With Botchatur, you can easily add studies and keep them efficiently organized. You
                                        can categorize your studies by topics, dates, or any criteria of your choice, so
                                        you never lose track of your progress. Plus, you can access your studies from
                                        anywhere, anytime, whether it's on your mobile device, tablet, or computer.</p>

                                    <p>Our app allows you to  
                                        <strong class="punter custom-link " @click="openwin36('NewModelDataModal')"  > 👉 Create  models </strong> to your studies. Each model has its own
                                        dedicated page, where you can find all relevant information and associated
                                        resources. From there, you can access the necessary tools and statistics to
                                        evaluate and analyze your model's data. Whether you're working with
                                        mathematical, experimental, or theoretical models, Botchatur provides an intuitive
                                        platform to explore and understand the results of your research.</p>

                                    <p>Additionally, models participating in your studies can create their own
                                        biographies, providing a space to share their expertise and knowledge. This
                                        fosters seamless communication among participants and offers a platform for idea
                                        exchange and collaboration.</p>

                                    <p>With Botchatur, study management has never been easier. Join our learning community
                                        and discover how this app can transform your approach to studying and research.
                                    </p>
                                @else
                                    {{-- Mostrar contenido en español --}}
                                    <p>
                                        Botchatur es una innovadora aplicación diseñada para simplificar y potenciar tu
                                        experiencia en la gestión de estudios. Ya sea que estés llevando a cabo
                                        investigaciones, proyectos académicos o simplemente organizando tus materiales
                                        de estudio, Botchatur está aquí para ayudarte en cada paso del camino.

                                        Con Botchatur, puedes agregar fácilmente estudios y mantenerlos organizados de
                                        manera eficiente. Puedes clasificar tus estudios por temas, fechas o cualquier
                                        criterio que elijas, para que nunca pierdas de vista tu progreso. Además, puedes
                                        acceder a tus estudios desde cualquier lugar y en cualquier momento, ya sea
                                        desde tu dispositivo móvil, tableta o computadora.

                                        Nuestra aplicación te permite agregar modelos a tus estudios. Cada modelo tiene
                                        su propia página, donde podrás encontrar toda la información relevante y los
                                        recursos asociados. Desde ahí, podrás acceder a las herramientas y estadísticas
                                        necesarias para evaluar y analizar los datos de tus modelos. No importa si estás
                                        trabajando con modelos matemáticos, experimentales o teóricos, Botchatur te
                                        proporcionará una plataforma intuitiva para explorar y comprender los resultados
                                        de tus investigaciones.

                                        Además, las modelos que participan en tus estudios pueden crear sus propias
                                        biografías, ofreciendo un espacio para compartir su experiencia y conocimientos.
                                        Esto fomenta una comunicación fluida entre los participantes y brinda una
                                        plataforma para el intercambio de ideas y colaboración.

                                        Con Botchatur, la gestión de estudios nunca ha sido tan fácil. Únete a nuestra
                                        comunidad de aprendizaje y descubre cómo esta aplicación puede transformar tu
                                        enfoque hacia el estudio y la investigación.
                                    </p>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header rounded-4 shadow-lg">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">

                                {{ session('locale') == 'es' ? '¡como crear un  estudio en Botchatur!' : ' How to create a study ' }}

                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                @if (session('locale') == 'en')
                                    <p>To create a study in Botchatur, follow these simple steps:</p>

                                    <ol>
                                        <li>Log in to your Botchatur account or sign up for a new account if you don't have
                                            one already.</li>
                                        <li>Once logged in, navigate to the dashboard or the <a href="#studios">"Studios" </a> section.</li>
                                        <li>Click on the "Create Study" button to start creating a new study.
                                            Start by  <x-com-link-new-studio /> 

                                        </li>
                                        
                                        
                                        <li>Provide a title and a brief description for your study. This will help you
                                            easily identify and understand the purpose of the study.</li>
                                        <li>Select the appropriate category or tags for your study to make it more
                                            discoverable and organized.</li>
                                        <li>Optionally, you can upload any relevant files or documents related to your
                                            study for easy access and reference.</li>
                                        <li>Define the study's parameters, such as the start and end dates, participant
                                            requirements, or any specific instructions.</li>
                                        <li>Configure the privacy settings for your study, choosing whether it should be
                                            public or private.</li>
                                        <li>Save your study, and it will be added to your list of studies within Botchatur.
                                        </li>
                                        <li>You can now start adding models, analyzing data, and collaborating with
                                            others within your study.</li>
                                    </ol>

                                    <p>Creating a study in Botchatur is a straightforward process that enables you to
                                        efficiently organize your research, track progress, and collaborate with ease.
                                        Get started now and unlock the full potential of your academic or research
                                        endeavors with Botchatur!</p>
                                @else
                                    {{-- Mostrar contenido en español --}}
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header rounded-4 shadow-lg">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                                body. Nothing more exciting happening here in terms of content, but just filling up the
                                space to make it look, at least at first glance, a bit more representative of how this
                                would look in a real-world application.</div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button id="btn-close-update" type="button" wire:click.prevent="cancel()"
                    class="btn btn-icon shadow-lg m-2" data-bs-dismiss="modal">❌ Close</button>

            </div>
        </div>
    </div>

</div>


<!-- Edit Modal studio/models -->
<div style="z-index: 1201;" wire:ignore.self class="modal fade" id="update_estudiomodelDataModal"
    data-bs-backdrop="static" tabindex="1201" role="dialog" aria-labelledby="update_estudiomodelModalLabel"
    aria-hidden="true">
    <div class="modal-dialog shadow-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="update_estudiomodelModalLabel">💓 Update /Switch from model to studio</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" wire:model="selected_id">

                    <label for="table"></label>
                    <div class="form-group">
                        <x-com-select-table table-name="estudios" id="estudio_id" display-name="name" />
                        @error('estudio_id')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <label for="table"></label>
                    <div class="form-group">
                        <x-com-select-table table-name="modelos" id="modelo_id" display-name="name" />
                        @error('modelo_id')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button id="btn-close-update" type="button" wire:click.prevent="cancel()"
                    class="btn btn-icon shadow-lg m-2" data-bs-dismiss="modal">❌ Close</button>
                <button id="btn-update" type="button" wire:click.prevent="update_estudiomodel()"
                    class="btn btn-icon shadow-lg m-2">Move model Model ✅</button>
            </div>
        </div>
    </div>

</div>
