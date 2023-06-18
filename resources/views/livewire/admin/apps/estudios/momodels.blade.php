<!-- Add Modal study models  -->
<div style="z-index: 1200;"  id="create2DataModal" wire:ignore.self class="modal fade" id="create2DataModal"
    data-bs-backdrop="static"  role="dialog" aria-labelledby="create2DataModalLabel" aria-hidden="true">
    <div class="modal-dialog shadow-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="create2DataModalLabel">💚 Add Study/ Models</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>

                    <label for="table">Studio</label>
                    <div class="form-group">
                        <x-com-select-table table-name="estudios" id="estudio_id" display-name="name" />
                        @error('estudio_id')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    Select the model to add to this Studio
                    <div class="col">
                        <div class="form-group mt-2">                          
                            <select class="select2" id="models-select" wire:ignore.self wire:model="modelo_id">
                                <option value=""> Select-ADD-Modelo-X </option>
                                @foreach ($mymodels as $modelox)
                                    <option value="{{ $modelox->id }}"> {{ Str::upper($modelox->name) }}
                                    </option>
                                @endforeach
                            </select>
                            <br>
                            @error('modelo_id')
                            <span class="error text-danger m-3">{{ $message }}</span>
                        @enderror
                        </div>
                        <br>
                    </div>                
       
                    <br>
                    <a class="my-2 custom-link rounded-4 p-2" href="javascript:void(0)" data-bs-toggle="modal"
                        data-bs-target="#NewModelDataModal">👉 if the model does not exist.. Create New</a>
                    <br>

                    <br>
                    <a class="my-2 custom-link rounded-4 p-2" href="javascript:void(0)"
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
     role="dialog" aria-labelledby="howmodelDataModalLabel" aria-hidden="true">
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
                                    <p> <strong> Botchatur </strong> is an innovative app designed to simplify and
                                        enhance your study
                                        management experience. Whether you're conducting research, chatur projects, or
                                        simply organizing your models materials, Botchatur is here to assist you every
                                        step
                                        of the way. Start by
                                        <x-com-link-new-studio />
                                    <p> and then
                                        Add models
                                        to have better control of your system
                                        <hr>
                                    <p>With Botchatur, you can easily add studies and keep them efficiently organized.
                                        You
                                        can categorize your studies by topics, dates, or any criteria of your choice, so
                                        you never lose track of your progress. Plus, you can access your studies from
                                        anywhere, anytime, whether it's on your mobile device, tablet, or computer.</p>

                                    <p>Our app allows you to
                                        <x-com-link-new-modelo /> to your studies. Each model has its own
                                        dedicated page, where you can find all relevant information and associated
                                        resources. From there, you can access the necessary tools and statistics to
                                        evaluate and analyze your model's data. Whether you're working with
                                        mathematical, experimental, or theoretical models, Botchatur provides an
                                        intuitive
                                        platform to explore and understand the results of your research.
                                    </p>

                                    <p>Additionally, models participating in your studies can create their own
                                        biographies, providing a space to share their expertise and knowledge. This
                                        fosters seamless communication among participants and offers a platform for idea
                                        exchange and collaboration.</p>

                                    <p>With Botchatur, study management has never been easier. Join our learning
                                        community
                                        and discover how this app can transform your approach to studying and research.
                                    </p>
                                    <p>
                                        "This tool is not intended to be the ultimate solution for webcam studios
                                        dedicated solely to this activity. In that case, we recommend cam4studio.com in
                                        Spanish. It offers a better application experience that is tailored to meet your
                                        specific needs. Here, you will find an easy and fast way to manage your models
                                        and your team. Whether you are an independent monitor, manager, or a model,
                                        cam4studio.com provides a comprehensive administration platform for webcam
                                        studios."
                                    </p>
                                @else
                                    {{-- Mostrar contenido en español --}}
                                    <p> <strong>Botchatur</strong> es una aplicación innovadora diseñada para
                                        simplificar y mejorar tu experiencia en la gestión de estudios. Ya sea que estés
                                        realizando investigaciones, proyectos de chatur o simplemente organizando tus
                                        modelos de estudio, Botchatur está aquí para ayudarte en cada paso del camino.
                                        Comienza por
                                        <x-com-link-new-studio />

                                    </p>

                                    <p>Luego, agrega modelos para tener un mejor control de tu sistema</p>
                                    <hr>
                                    <p>Con Botchatur, puedes agregar fácilmente estudios y mantenerlos organizados de
                                        manera eficiente. Puedes categorizar tus estudios por temas, fechas o cualquier
                                        criterio que elijas, para que nunca pierdas el seguimiento de tu progreso.
                                        Además, puedes acceder a tus estudios desde cualquier lugar y en cualquier
                                        momento, ya sea en tu dispositivo móvil, tableta o computadora.</p>

                                    <p>Nuestra aplicación te permite agregar modelos a tus estudios. Cada modelo tiene
                                        su propia página dedicada, donde puedes encontrar toda la información relevante
                                        y los recursos asociados. Desde allí, puedes acceder a las herramientas y
                                        estadísticas necesarias para evaluar y analizar los datos de tu modelo. Ya sea
                                        que estés trabajando con modelos matemáticos, experimentales o teóricos,
                                        Botchatur proporciona una plataforma intuitiva para explorar y comprender los
                                        resultados de tu investigación.</p>

                                    <p>Además, los modelos que participan en tus estudios pueden crear sus propias
                                        biografías, lo que les brinda un espacio para compartir su experiencia y
                                        conocimientos. Esto fomenta una comunicación fluida entre los participantes y
                                        ofrece una plataforma para el intercambio de ideas y la colaboración.</p>

                                    <p>Con Botchatur, la gestión de estudios nunca ha sido tan fácil. Únete a nuestra
                                        comunidad de aprendizaje y descubre cómo esta aplicación puede transformar tu
                                        enfoque hacia el estudio e investigación.</p>

                                    <p>
                                        "Esta herramienta no pretende ser la solución definitiva para estudios de
                                        webcams especializados en esta actividad. En ese caso, recomendamos
                                        cam4studio.com en español. Esta plataforma ofrece una experiencia de aplicación
                                        más completa y personalizada, diseñada específicamente para satisfacer las
                                        necesidades de estudios de webcams. En cam4studio.com encontrarás una forma
                                        fácil y rápida de gestionar tus modelos y equipo de trabajo. Ya sea que seas un
                                        monitor, un manager independiente o un modelo individual, este sitio proporciona
                                        una plataforma de administración integral para los estudios de webcams."

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

                                {{ session('locale') == 'es' ? '¡Como crear un  estudio en Botchatur!' : ' How to create a study ' }}

                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                @if (session('locale') == 'en')
                                    <p>To create a study in Botchatur, follow these simple steps:</p>
                                    <ol>
                                        <li>Log in to your Botchatur account or sign up for a new account if you don't
                                            have
                                            one already.</li>
                                        <li>Once logged in, navigate to the dashboard or the <a
                                                href="#studios">"Studios" </a> section.</li>
                                        <li>Click on the "Create Study" button to start creating a new study.
                                            Start by
                                            <x-com-link-new-studio />
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
                                        <li>Save your study, and it will be added to your list of studies within
                                            Botchatur.
                                        </li>
                                        <li>You can now start adding models, analyzing data, and collaborating with
                                            others within your study.</li>
                                    </ol>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <a href="javascript:void(openwin36('createDataModal'))">
                                                    <img src="https://i.imgur.com/ErrFq8m.png" class="img-fluid cover"
                                                        alt="Imagen" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <p>Para crear un estudio en Botchatur, sigue estos simples pasos:</p>
                                    <ol>
                                        <li>Inicia sesión en tu cuenta de Botchatur o regístrate para obtener una cuenta
                                            nueva si no tienes una.</li>
                                        <li>Una vez iniciado sesión, navega hacia el panel de control o la sección de <a
                                                href="#studios">"Estudios"</a>.</li>
                                        <li>Haz clic en el botón "Crear Estudio" para comenzar a crear un nuevo estudio.
                                            Comienza por
                                            <x-com-link-new-studio />
                                        </li>
                                        <li>Proporciona un título y una breve descripción para tu estudio. Esto te
                                            ayudará a identificarlo y entender su propósito fácilmente.</li>
                                        <li>Selecciona la categoría o etiquetas apropiadas para tu estudio para que sea
                                            más fácilmente descubrible y organizado.</li>
                                        <li>Opcionalmente, puedes subir archivos o documentos relevantes relacionados
                                            con tu estudio para tener un acceso y referencia sencillos.</li>
                                        <li>Define los parámetros del estudio, como las fechas de inicio y finalización,
                                            requisitos de los participantes o instrucciones específicas.</li>
                                        <li>Configura los ajustes de privacidad para tu estudio, eligiendo si debe ser
                                            público o privado.</li>
                                        <li>Guarda tu estudio y se añadirá a tu lista de estudios en Botchatur.</li>
                                        <li>Ahora puedes comenzar a agregar modelos, analizar datos y colaborar con
                                            otros dentro de tu estudio.</li>
                                    </ol>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <a href="javascript:void(openwin36('createDataModal'))">
                                                    <img src="https://i.imgur.com/ErrFq8m.png" class="img-fluid cover"
                                                        alt="Imagen" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header rounded-4 shadow-lg">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                {{ session('locale') == 'es' ? '¡Como agregar modelos a su estudio en Botchatur!' : 'How to add models to your studio in botchatur' }}
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                @if (session('locale') == 'en')
                                    <h2>How to Add Models to Your Studio in Botchatur and Enhance Their Presence on
                                        Chaturbate</h2>

                                    <p>In the Botchatur platform, you can take advantage of various tools and features
                                        to manage and improve the experience of your models on Chaturbate. One of the
                                        key advantages is the ability to add models to your studio and provide them with
                                        a variety of resources to stand out on the platform. In this article, we will
                                        explore how to add models to your studio and leverage the available features to
                                        boost their presence on Chaturbate.</p>
                                    <x-com-link-new-modelo />

                                    <ol>
                                        <li>Adding Models to the Studio:</li>
                                        <p>Once you have created your studio in Botchatur, you can easily start adding
                                            models. Simply follow these steps:</p>
                                        <ul>
                                            <li>Log in to your Botchatur account and navigate to the studio management
                                                section.</li>
                                            <li>Look for the "Add Model" or "Add New Model" option and click on it.</li>
                                            <li>Provide the required information, such as the model's name, contact
                                                details, and preferences.</li>
                                            <x-com-link-new-modelo />
                                            <li>Complete the registration process, and the model will be successfully
                                                added to your studio.</li>
                                        </ul>

                                        <li>Chaturbate API Integration:</li>
                                        <p>Botchatur offers the capability to integrate the Chaturbate API into your
                                            models' profiles. This allows them to display real-time information such as
                                            follower count, online status, tokens received, and other relevant data. By
                                            leveraging this feature, your models can build trust and attract more users
                                            to their broadcasts.</p>

                                        <li>Free Generation of Model Biographies:</li>
                                        <p>Botchatur also provides a unique function that enables you to generate free
                                            biographies for your models. These biographies are an excellent way to
                                            present your models and highlight their unique characteristics. With just a
                                            few clicks, you can create professional and appealing biographies that can
                                            be shared on Chaturbate profiles, capturing the attention of viewers and
                                            generating interest in their broadcasts.</p>

                                        <li>Generation of Biography Codes:</li>
                                        <p>In addition to biography generation, Botchatur simplifies the process of
                                            creating biography codes. These codes allow your models to quickly share
                                            their personalized biographies on their Chaturbate profiles. With this
                                            feature, your models can keep their information updated and present it
                                            efficiently, providing viewers with a more comprehensive and engaging view
                                            of their profiles.</p>

                                        <li>Adding Social Media and Personal Model Websites:</li>
                                        <p>Botchatur offers the option to add social media links and links to each
                                            model's personal website. This provides them with the opportunity to
                                            generate traffic to their own websites or personal platforms, allowing them
                                            to build a strong brand and establish a wider online presence.</p>
                                    </ol>

                                    <p>With Botchatur, adding models to your studio and enhancing their presence on
                                        Chaturbate is a simple and effective process. From model recruitment to
                                        Chaturbate API integration, free biography generation, and the ability to add
                                        social media and personal model websites, Botchatur offers a wide range of
                                        options to optimize your models' experience on Chaturbate.</p>

                                    <p>Take advantage of these functionalities and empower your models to stand out on
                                        the platform, generating more engagement and success in their Chaturbate
                                        broadcasts!</p>


                                    <p>By providing these tools, you can help your models increase their visibility and
                                        expand their follower base.</p>
                                @else
                                    <h2>Cómo añadir modelos a tu estudio en Botchatur y potenciar su presencia en
                                        Chaturbate</h2>

                                    <p>En la plataforma de <strong>Botchatur</strong>, puedes aprovechar diversas
                                        herramientas y funciones para administrar y mejorar la experiencia de tus
                                        modelos en <strong>Chaturbate</strong>. Una de las principales ventajas es la
                                        posibilidad de añadir modelos a tu estudio y proporcionarles una variedad de
                                        recursos para destacarse en la plataforma. En este artículo, exploraremos cómo
                                        añadir modelos a tu estudio y aprovechar las funciones disponibles para impulsar
                                        su presencia en Chaturbate.</p>

                                    <ol>
                                        <li>Añadir modelos al estudio:</li>
                                        <p>Una vez que hayas creado tu estudio en Botchatur, puedes comenzar a añadir
                                            modelos fácilmente. Simplemente sigue estos pasos:</p>
                                        <ul>
                                            <li>Inicia sesión en tu cuenta de Botchatur y navega hacia la sección de
                                                gestión de estudios.</li>
                                            <li>Busca la opción "Añadir modelo" o "Agregar nuevo modelo" y haz clic en
                                                ella.</li>
                                            <x-com-link-new-modelo />
                                            <li>Proporciona la información requerida, como el nombre del modelo,
                                                detalles de contacto y preferencias.</li>
                                            <li>Completa el proceso de registro y el modelo será añadido exitosamente a
                                                tu estudio.</li>
                                        </ul>

                                        <li>Inserción del API de Chaturbate:</li>
                                        <p>Botchatur ofrece la posibilidad de insertar el API de Chaturbate en los
                                            perfiles de tus modelos. Esto les permite mostrar información en tiempo
                                            real, como el número de seguidores, el estado en línea, tokens recibidos,
                                            entre otros datos relevantes. Al aprovechar esta función, tus modelos pueden
                                            generar confianza y atraer a más usuarios a sus transmisiones.</p>

                                        <li>Generación gratuita de biografías de modelos:</li>
                                        <p>Botchatur también ofrece una función única que permite generar biografías
                                            para tus modelos de forma gratuita. Estas biografías son una excelente
                                            manera de presentar a tus modelos y destacar sus características únicas. Con
                                            solo algunos clics, podrás generar biografías profesionales y atractivas que
                                            pueden ser compartidas en los perfiles de Chaturbate, capturando la atención
                                            de los espectadores y generando interés en sus transmisiones.</p>

                                        <li>Generación de códigos de biografías:</li>
                                        <p>Además de la generación de biografías, Botchatur facilita la creación de
                                            códigos de biografías. Estos códigos permiten a tus modelos compartir
                                            rápidamente su biografía personalizada en sus perfiles de Chaturbate. Con
                                            esta función, tus modelos pueden mantener su información actualizada y
                                            presentarla de manera eficiente, brindando a los espectadores una visión más
                                            completa y atractiva de sus perfiles.</p>

                                        <li>Añadir redes sociales y página personal del modelo:</li>
                                        <p>Botchatur ofrece la opción de añadir redes sociales y enlaces a la página
                                            personal de cada modelo. Esto les brinda la oportunidad de generar tráfico a
                                            su sitio web o plataforma personal, permitiéndoles construir una marca
                                            sólida y establecer una presencia en línea más amplia.
                                @endif



                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                {{ session('locale') == 'es' ? '¡Como ganar tokens y jugar y ganar créditos!' : 'How to earn tokens and play and earn  credits ! ' }}

                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">

                                @if (session('locale') == 'en')
                                    <h2>How to Earn Tokens on BotChatur</h2>

                                    <p>On BotChatur, you can earn tokens by actively participating on the platform and
                                        taking advantage of various opportunities. Here are some ways to earn tokens:
                                    </p>

                                    <ol>
                                        <li><strong>Engage in chats:</strong> Join public or private chats and earn
                                            tokens for actively participating. Share your ideas, help other members, and
                                            engage in interesting conversations to increase your earnings.</li>
                                        <li><strong>Complete missions and challenges:</strong> BotChatur offers regular
                                            missions and challenges that allow you to earn additional tokens. These may
                                            include specific tasks such as taking surveys, writing reviews, or
                                            contributing to collaborative projects.</li>
                                        <li><strong>Invite new members:</strong> Utilize BotChatur's referral system to
                                            invite your friends and acquaintances to join the platform. For each
                                            referred member who joins and actively participates, you can earn tokens as
                                            a reward.</li>
                                        <li><strong>Stand out in the community:</strong> If you contribute significantly
                                            to the BotChatur community by sharing valuable knowledge, being an inspiring
                                            leader, or receiving recognition from other members, you may be rewarded
                                            with additional tokens.</li>
                                        <li><strong>Participate in special events:</strong> BotChatur organizes themed
                                            events or competitions where users can earn tokens by participating and
                                            excelling in various event-related activities.</li>
                                        <li><strong>Share quality content:</strong> Publish valuable content such as
                                            tutorials, analyses, research, or useful resources on BotChatur. If your
                                            content is well-received and appreciated by other members, you can earn
                                            tokens as recognition.</li>
                                        <li><strong>Collaborate on joint projects:</strong> Join collaborative projects
                                            on BotChatur, where you can work with other members on research, content
                                            creation, or product development. By actively participating and contributing
                                            to the project, you can earn additional tokens.</li>
                                        <li><strong>Take part in rewards programs:</strong> BotChatur offers special
                                            rewards programs for members who excel in specific areas or achieve certain
                                            milestones. These programs provide additional opportunities to earn valuable
                                            tokens.</li>
                                    </ol>

                                    <p>Remember, the tokens you earn on BotChatur can be used to access premium
                                        features, purchase products or services within the platform, or redeem them for
                                        exclusive rewards.</p>

                                    <p>Don't miss out on all the available ways to earn tokens on BotChatur and make the
                                        most of your experience on the platform! Share these opportunities with other
                                        members to create a vibrant and active community on BotChatur.</p>
                                @else
                                    <h2>Cómo ganar tokens en BotChatur</h2>

                                    <p>En BotChatur, puedes ganar tokens participando activamente en la plataforma y
                                        aprovechando diversas oportunidades. Aquí te mostramos algunas formas de obtener
                                        tokens:</p>

                                    <ol>
                                        <li><strong>Interactúa en chats:</strong> Al unirte a las conversaciones en los
                                            chats públicos o privados, podrás ganar tokens por tu participación activa.
                                            Comparte tus ideas, ayuda a otros miembros y mantén conversaciones
                                            interesantes para aumentar tus ganancias.</li>
                                        <li><strong>Completa misiones y desafíos:</strong> BotChatur ofrece misiones y
                                            desafíos periódicos que te permiten ganar tokens adicionales. Estos pueden
                                            incluir tareas específicas como participar en encuestas, escribir reseñas o
                                            contribuir en proyectos colaborativos.</li>
                                        <li><strong>Invita a nuevos miembros:</strong> Aprovecha el sistema de referidos
                                            de BotChatur para invitar a tus amigos y conocidos a unirse a la plataforma.
                                            Por cada miembro referido que se una y participe activamente, podrás recibir
                                            tokens como recompensa.</li>
                                        <li><strong>Destaca en la comunidad:</strong> Si contribuyes de manera destacada
                                            en la comunidad de BotChatur, como brindar valiosos conocimientos, ser un
                                            líder inspirador o recibir reconocimientos de otros miembros, podrías ser
                                            recompensado con tokens adicionales.</li>
                                        <li><strong>Participa en eventos especiales:</strong> BotChatur organiza eventos
                                            temáticos o competiciones especiales donde los usuarios pueden ganar tokens
                                            participando y destacando en diferentes actividades relacionadas con el
                                            evento.</li>
                                        <li><strong>Comparte contenido de calidad:</strong> Publica contenido valioso,
                                            como tutoriales, análisis, investigaciones o recursos útiles en BotChatur.
                                            Si tu contenido es bien recibido y apreciado por otros miembros, podrás
                                            recibir tokens como reconocimiento.</li>
                                        <li><strong>Colabora en proyectos conjuntos:</strong> Únete a proyectos
                                            colaborativos en BotChatur, donde puedes trabajar junto con otros miembros
                                            en investigaciones, creación de contenido o desarrollo de productos. Al
                                            participar activamente y aportar al proyecto, podrás ganar tokens
                                            adicionales.</li>
                                        <li><strong>Participa en programas de recompensas:</strong> BotChatur ofrece
                                            programas de recompensas especiales para aquellos miembros que se destaquen
                                            en ciertas áreas o alcancen hitos específicos. Estos programas brindan
                                            oportunidades adicionales para ganar tokens valiosos.</li>
                                    </ol>

                                    <p>Recuerda que los tokens que ganas en BotChatur pueden ser utilizados para acceder
                                        a funciones premium, comprar productos o servicios dentro de la plataforma, o
                                        canjearlos por recompensas exclusivas.</p>

                                    <p>¡No pierdas la oportunidad de aprovechar todas las formas disponibles para ganar
                                        tokens en BotChatur y disfruta al máximo de tu experiencia en la plataforma!
                                        Comparte estas oportunidades con otros miembros para crear una comunidad
                                        vibrante y activa en BotCh
                                @endif

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" id="accordionExample">
                        <!-- ...código de los ítems anteriores... -->

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">

                                    {{ session('locale') == 'es' ? '¡Gana 1,000 mil tokens, en creditos en Botchatur 💰!' : 'Earn 1,000 thousand tokens, in credits  Botchatur 💰' }}

                                </button>

                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    @if (session('locale') == 'en')
                                        <p><strong><span class="badge text-bg-warning">Get 1,000 credits b</span> by
                                                validating your account on our platform!</strong>

                                        </p>

                                        <p>At Botchatur, we value your security and want to ensure an authentic and
                                            protected experience. That's why we offer a special promotion to all our
                                            users: when you validate your account, you will receive 1000 credits as a
                                            thank you for joining our community.</p>

                                        <p>Validating your account is a simple and quick process. Here's how to do it:
                                        </p>

                                        <ol>
                                            <li>
                                                <strong>Phone Number Validation (30% - 300 credits):</strong> Provide
                                                your valid phone number and receive a verification code via text message
                                                or phone call. Enter the code in the corresponding form, and your phone
                                                number will be validated.
                                            </li>
                                            <li>
                                                <strong>WhatsApp Validation (30% - 300 credits):</strong> If you prefer
                                                to use WhatsApp for notifications and communication, simply link your
                                                WhatsApp phone number to your Botchatur account. We will send you a
                                                verification code, which you'll need to enter to complete the
                                                validation.
                                            </li>
                                            <li>
                                                <strong>Telegram Validation (20% - 200 credits):</strong> If you are a
                                                Telegram user, we also offer the option to link your Botchatur account
                                                with your Telegram phone number. Similar to the previous steps, you will
                                                receive a verification code on Telegram that you need to enter to
                                                finalize the validation.
                                            </li>
                                            <li>
                                                <strong>Email Validation (20% - 200 credits):</strong> Email validation
                                                is another important step to ensure the authenticity of your account.
                                                Verify your email address by clicking the verification link we will send
                                                you via email after registering on Botchatur.
                                            </li>
                                        </ol>

                                        <p>Once you have completed these validation steps, you will receive 1000 credits
                                            in your Botchatur account. You can use these credits to access premium
                                            features, acquire additional resources, and enhance your experience on our
                                            platform.</p>

                                        <p>In addition, with your credits, you have the opportunity to play and have
                                            fun. You can use your credits in platform games, participate in competitions
                                            and challenges, and earn even more credits as rewards. Fun is guaranteed!
                                        </p>

                                        <p>You can also share your generosity by sending and transferring your credits
                                            to other platform users. To do so, simply visit our special link: <a
                                                href="#/winercredits" class="custom-link">#/winercredits</a>. From
                                            there, you can select the users you want to send your credits to and allow
                                            them to enjoy all the benefits that Botchatur has to offer.</p>

                                        <p>Don't miss this opportunity to get extra credits and fully enjoy Botchatur.
                                            Register now and start efficiently and securely managing your studies and
                                            models.</p>

                                        <p>Join our community and discover everything that Botchatur can do for your
                                            research projects, academic endeavors, and more!</p>
                                    @else
                                        <p><strong>¡Obtén 1,000 créditos al validar tu cuenta en nuestra
                                                plataforma!</strong></p>

                                        <p>En Botchatur, valoramos tu seguridad y queremos asegurarnos de que tu
                                            experiencia sea auténtica y protegida. Por eso, ofrecemos una promoción
                                            especial para todos nuestros usuarios: al validar tu cuenta, recibirás 1000
                                            créditos como agradecimiento por unirte a nuestra comunidad.</p>

                                        <p>Validar tu cuenta es un proceso sencillo y rápido. Aquí te explicamos cómo
                                            hacerlo:</p>

                                        <ol>
                                            <li>
                                                <strong>Validación del número de teléfono (30% - 300 créditos):</strong>
                                                Proporciona tu número de teléfono válido y recibirás un código de
                                                verificación por mensaje de texto o llamada telefónica. Ingresa el
                                                código en el formulario correspondiente y tu número de teléfono quedará
                                                validado.
                                            </li>
                                            <li>
                                                <strong>Validación de WhatsApp (30% - 300 créditos):</strong> Si
                                                prefieres utilizar WhatsApp para recibir notificaciones y comunicarte
                                                con nosotros, simplemente enlaza tu número de teléfono de WhatsApp con
                                                tu cuenta de Botchatur. Te enviaremos un mensaje con un código de
                                                verificación que deberás ingresar para completar la validación.
                                            </li>
                                            <li>
                                                <strong>Validación de Telegram (20% - 200 créditos):</strong> Si eres
                                                usuario de Telegram, también ofrecemos la opción de vincular tu cuenta
                                                de Botchatur con tu número de teléfono de Telegram. Al igual que en los
                                                pasos anteriores, recibirás un código de verificación en Telegram que
                                                deberás ingresar para finalizar la validación.
                                            </li>
                                            <li>
                                                <strong>Validación de correo electrónico (20% - 200 créditos):</strong>
                                                La validación de correo electrónico es otro paso importante para
                                                asegurar la autenticidad de tu cuenta. Verifica tu dirección de correo
                                                electrónico haciendo clic en el enlace de verificación que te enviaremos
                                                por correo electrónico después de registrarte en Botchatur.
                                            </li>
                                        </ol>

                                        <p>Una vez completados estos pasos de validación, recibirás tus 1000 créditos en
                                            tu cuenta de Botchatur. Estos créditos podrás utilizarlos para acceder a
                                            funciones premium, adquirir recursos adicionales y potenciar tu experiencia
                                            en nuestra plataforma.</p>

                                        <p>Además, con tus créditos, tienes la posibilidad de jugar y divertirte. Puedes
                                            utilizar tus créditos en juegos dentro de la plataforma, participar en
                                            competiciones y desafíos, y ganar aún más créditos como recompensa. ¡La
                                            diversión está garantizada!</p>

                                        <p>También puedes compartir tu generosidad enviando y transfiriendo tus créditos
                                            a otros usuarios de la plataforma. Para hacerlo, simplemente visita nuestro
                                            enlace especial: <a href="#/winercredits"
                                                class="custom-link">#/winercredits</a>. Desde allí, podrás seleccionar
                                            a qué usuarios deseas enviar tus créditos y hacer que disfruten de todas las
                                            ventajas que Botchatur tiene para ofrecer.</p>

                                        <p>No pierdas esta oportunidad de obtener créditos extra y disfrutar al máximo
                                            de Botchatur. Regístrate ahora y comienza a gestionar tus estudios y modelos
                                            de manera eficiente y segura.</p>
                                        <p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" id="accordionExample">
                        <!-- ...código de los ítems anteriores... -->

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">

                                    {{ session('locale') == 'es' ? '¡Como crear una linda biografía en chaturbate 🎈 !' : 'How to create a cute biography on chaturbate 🎈 ' }}


                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    @if (session('locale') == 'en')
                                        <p><strong>Supercharge Your Models' Profiles on Chaturbate with Our Cutting-Edge
                                                Biography Editor!</strong></p>

                                        <p>Looking to stand out and capture users' attention on Chaturbate? Our
                                            innovative Biography Editor is the perfect tool to customize your models'
                                            profiles in an attractive and professional way. And the best part? It's
                                            completely free!</p>

                                        <p>Unleash Your Creativity:</p>

                                        <p>With our Biography Editor, the possibilities for customization are endless.
                                            Choose from a wide variety of designs, themes, and templates to create
                                            unique and captivating biographies. From elegant and sophisticated styles to
                                            vibrant and eye-catching options, we have everything you need to make your
                                            models shine on Chaturbate. Let your imagination run wild and create
                                            biographies that captivate your audience!</p>

                                        <p>User-Friendly Interface:</p>

                                        <p>Don't worry if you're not a web design expert. Our Biography Editor is
                                            incredibly user-friendly. With an intuitive and friendly interface, you can
                                            customize your models' profiles in minutes. Simply drag and drop elements,
                                            adjust image sizes, add text and links, and voilà! Your models will have
                                            attractive and professional biographies without any technical hassle.</p>

                                        <p>Boost Their Presence:</p>

                                        <p>The Biography Editor is a powerful tool to elevate your models' presence on
                                            Chaturbate. With customized and visually striking biographies, your models
                                            will stand out from the crowd and capture users' attention. This translates
                                            into more followers, increased interaction, and higher earnings for your
                                            models. It's the key to taking their careers to the next level!</p>

                                        <p>Additional Functionalities:</p>

                                        <p>In addition to customization options, we offer additional functionalities to
                                            help you stand out even more. With our Biography Editor, you can integrate
                                            links to your models' social media accounts, promote their personal
                                            websites, share relevant information, and much more. These features
                                            contribute to building a solid and appealing image for your models on
                                            Chaturbate.</p>

                                        <p>Gift Pro Memberships:</p>

                                        <p>As if that wasn't enough, you have the ability to gift Pro memberships to
                                            your favorite models. These memberships provide exclusive benefits such as
                                            ad removal, personalized emoticons, and access to advanced features. It's a
                                            special way to show your support and help your models have an even more
                                            successful experience on Chaturbate. Make your models feel like true stars!
                                        </p>

                                        <p>In conclusion, our Biography Editor is the winning tool to boost your models'
                                            profiles on Chaturbate. From customization options to additional
                                            functionalities and the ability to gift Pro memberships, we provide all the
                                            necessary tools for your models to shine and succeed on the platform.</p>
                                    @else
                                        <p><strong>Potencia el perfil de tus modelos en Chaturbate con nuestro Editor de
                                                Biografía de última generación!</strong></p>

                                        <p>¿Quieres destacar y captar la atención de los usuarios en Chaturbate? Nuestro
                                            innovador Editor de Biografía es la herramienta perfecta para personalizar
                                            los perfiles de tus modelos de una manera atractiva y profesional. ¡Y lo
                                            mejor de todo es que es completamente gratis!</p>

                                        <p>Creatividad ilimitada:</p>

                                        <p>Con nuestro Editor de Biografía, desbloquearás un mundo de posibilidades
                                            creativas. Podrás elegir entre una amplia variedad de diseños, temas y
                                            plantillas para crear biografías únicas y cautivadoras. Desde estilos
                                            elegantes y sofisticados hasta opciones vibrantes y llamativas, tenemos todo
                                            lo que necesitas para que tus modelos destaquen en Chaturbate. ¡Deja volar
                                            tu imaginación y crea biografías que cautiven al público!</p>

                                        <p>Facilidad de uso:</p>

                                        <p>Aunque parezca increíble, no necesitas ser un experto en diseño web para
                                            utilizar nuestro Editor de Biografía. Con una interfaz intuitiva y amigable,
                                            podrás personalizar los perfiles de tus modelos en cuestión de minutos.
                                            Simplemente arrastra y suelta elementos, ajusta el tamaño de las imágenes,
                                            añade texto y enlaces, ¡y voilà! Tus modelos tendrán biografías atractivas y
                                            profesionales sin ningún esfuerzo técnico.</p>

                                        <p>Impulsa su presencia:</p>

                                        <p>El Editor de Biografía es una herramienta poderosa para impulsar la presencia
                                            de tus modelos en Chaturbate. Con biografías personalizadas y visualmente
                                            impactantes, tus modelos destacarán entre la multitud y captarán la atención
                                            de los usuarios. Esto se traduce en más seguidores, más interacción y
                                            mayores ingresos para tus modelos. ¡Es la clave para llevar su carrera al
                                            siguiente nivel!</p>

                                        <p>Funcionalidades adicionales:</p>

                                        <p>Además de las opciones de personalización, también ofrecemos funcionalidades
                                            adicionales para ayudarte a destacar aún más. Con nuestro Editor de
                                            Biografía, podrás integrar enlaces a las redes sociales de tus modelos,
                                            promocionar sus páginas personales, compartir información relevante y mucho
                                            más. Todo esto contribuirá a construir una imagen sólida y atractiva para
                                            tus modelos en Chaturbate.</p>

                                        <p>Regala 🏅 Membresías Pro:</p>

                                        <p>Y como si fuera poco, tienes la posibilidad de regalar membresías Pro a tus
                                            modelos favoritas. Estas membresías les otorgan beneficios exclusivos, como
                                            la eliminación de anuncios, emoticonos personalizados y acceso a funciones
                                            avanzadas. Es una forma especial de mostrarles tu apoyo y ayudarlas a tener
                                            una experiencia aún más exitosa en Chaturbate. ¡Haz que tus modelos se
                                            sientan como verdaderas estrellas!</p>
                                    @endif

                                </div>
                            </div>
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
    data-bs-backdrop="static" role="dialog" aria-labelledby="update_estudiomodelModalLabel"
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
