@extends('layouts.app')
@section('title', __(' Models In Life - Streaming - CAMS Vivo'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card my-4">

                    <div class="card-body ">

                        <h5>
                            @guest
                                {{ __('App v1.0') }} {{ config('app.name', 'Laravel') }}
                            @else
                                ❤️‍🔥 Hi {{ Auth::user()->name }}, We are waiting for you soon..
                                @endif
                            </h5>


                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                            aria-controls="flush-collapseOne">
                                            😶‍🌫️ Ver Streaming en Vivo
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">

                                            ¡Bienvenidos a nuestro emocionante evento de streaming en vivo para vendedores de
                                            contenido e influencers!

                                            Prepárense para sumergirse en un mundo de conocimiento, estrategias y consejos
                                            prácticos para impulsar su carrera como vendedores de contenido e influencers. Este
                                            evento es una oportunidad única para conectarse con expertos de la industria,
                                            descubrir nuevas tendencias y establecer contactos valiosos en el mundo del
                                            marketing digital.

                                            Durante nuestra transmisión en vivo, experimentarás lo siguiente:

                                            Charlas inspiradoras: Escucha a destacados profesionales de la industria que
                                            compartirán sus historias de éxito, desafíos superados y estrategias innovadoras.
                                            Obtén ideas frescas y perspectivas únicas que te ayudarán a potenciar tu presencia
                                            en línea y alcanzar nuevos niveles de éxito.

                                            Paneles de discusión: Participa en dinámicos paneles de discusión donde expertos y
                                            líderes de opinión debatirán sobre temas candentes en el mundo del marketing
                                            digital. Obtén conocimientos profundos sobre estrategias de crecimiento,
                                            colaboraciones efectivas y la monetización de tu contenido.

                                            Talleres interactivos: Sumérgete en talleres prácticos diseñados para fortalecer tus
                                            habilidades y conocimientos. Aprende estrategias avanzadas de marketing en redes
                                            sociales, técnicas de creación de contenido cautivador y cómo optimizar tu presencia
                                            en línea para alcanzar una mayor audiencia y generar mayores conversiones.

                                            Networking en línea: Conéctate con otros vendedores de contenido e influencers en
                                            nuestra plataforma interactiva. Establece contactos valiosos, intercambia ideas y
                                            colabora en proyectos emocionantes. Aprovecha la oportunidad para expandir tu red de
                                            contactos y fortalecer tu presencia en la comunidad digital.

                                            Preguntas y respuestas en vivo: Tendrás la oportunidad de interactuar directamente
                                            con nuestros expertos y realizarles preguntas en tiempo real. Obtén consejos
                                            personalizados y respuestas a tus inquietudes específicas, lo que te ayudará a
                                            impulsar tu carrera y superar los desafíos que enfrentas.

                                            ¡No te pierdas este increíble evento de streaming en vivo diseñado especialmente
                                            para vendedores de contenido e influencers! Asegúrate de tener tu agenda lista,
                                            tomar notas y estar listo para absorber conocimientos valiosos que te ayudarán a
                                            llevar tu carrera al siguiente nivel.

                                            Regístrate ahora mismo y prepárate para una experiencia única de aprendizaje,
                                            conexión y crecimiento. ¡Te esperamos en nuestro evento de streaming en vivo para
                                            vendedores de contenido e influencers!
                                            <br>
                                            <a href="/en-vivo/">En vivo Ahora !</a>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed bg-transparent" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                                💟 Como funciona
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">

                                                <p class="text-center">
                                                    Our platform gives you unlimited access to a wide variety of high-quality
                                                    content, tailored to your tastes and preferences. Explore our extensive
                                                    catalog
                                                    and discover new posts, videos, live broadcasts, and special events from
                                                    Chatur and other online video chat brands, entertainment programs and
                                                    artists that you will love, just by entering your room you will be in a
                                                    fantastic night well accompanied.
                                                    We hope you are respectful with the rooms and can have a nice experience
                                                    with
                                                    all the hosts of botchatur.com
                                                </p>

                                                <p>
                                                    Descubre la emoción del contenido exclusivo en vivo
                                                    . Sumérgete en una experiencia única donde tú eres parte del
                                                    espectáculo.
                                                </p>

                                                <h2> ¡Así es como funciona! </h2>
                                                <p>
                                                    En nuestra plataforma, te ofrecemos una amplia variedad de eventos en vivo,
                                                    desde shows impresionantes hasta juegos interactivos con nuestros
                                                    anfitriones.
                                                    Únete a la acción, participa en desafíos y disfruta de momentos llenos de
                                                    adrenalina en tiempo real.

                                                    Además, hemos creado un espacio de comunidad donde puedes conectarte con
                                                    otros
                                                    seguidores. Crea tu propio perfil y biografía para compartir tus intereses y
                                                    experiencias con otros usuarios. Conoce a personas de todo el mundo, haz
                                                    amigos
                                                    y descubre nuevas oportunidades para destacarte.
                                                    <br>
                                                    En nuestra plataforma, la interacción no tiene límites. Disfruta de un chat
                                                    ilimitado y gratuito mientras disfrutas del contenido en vivo. Comparte tu
                                                    emoción, haz preguntas a los anfitriones y conéctate con otros fanáticos en
                                                    tiempo real. ¡La diversión y la conversación están a solo un mensaje de
                                                    distancia!
                                                    <hr>
                                                    Y eso no es todo, también te ofrecemos la posibilidad de integrar tus redes
                                                    sociales. Conéctate a través de tus perfiles en plataformas populares y
                                                    comparte
                                                    tus transmisiones en vivo directamente desde la aplicación. Llega a un
                                                    público
                                                    más amplio y expande tu presencia en línea mientras disfrutas de la
                                                    experiencia
                                                    en vivo de Chatur.

                                                    Además, recompensamos tu participación y tiempo invertido. Gana premios por
                                                    hora
                                                    de transmisión y tokens en nuestras salas gratuitas en vivo. Demuestra tus
                                                    habilidades, destácate entre los demás y sé recompensado por tu dedicación y
                                                    entusiasmo.

                                                    Así es como funciona: contenido en vivo interactivo, chats ilimitados y
                                                    gratuitos, perfiles personalizados, oportunidades para conocer amigos y
                                                    darte a
                                                    conocer, integración de redes sociales y premios por tu participación.
                                                    Prepárate
                                                    para vivir experiencias inolvidables y formar parte de una comunidad
                                                    apasionada.
                                                    Únete a nuestra plataforma y descubre personas reales con chat privados y
                                                    regalos para todos los

                                                </p>
                                                <h6>Registrate Gratis !!! {{ config('app.name', 'AppX') }}
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                                aria-controls="flush-collapseThree">
                                                🔑 Login / Register
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">

                                                <p class="text-wrap text-break">
                                                    ¡Bienvenido a nuestra plataforma! Regístrate o inicia sesión para acceder a
                                                    un
                                                    mundo de entretenimiento sin límites.

                                                    Para registrarte, sigue estos sencillos pasos:
                                                    <br>
                                                    Haz clic en el botón "Registrarse" en la parte superior derecha de la
                                                    página.
                                                    Completa el formulario de registro con tu nombre, dirección de correo
                                                    electrónico y una contraseña segura.
                                                    Acepta nuestros términos y condiciones y política de privacidad.
                                                    Haz clic en "Registrarse" y listo. ¡Ya eres parte de nuestra comunidad!
                                                    Si ya tienes una cuenta, simplemente inicia sesión:
                                                    <br>
                                                    Haz clic en el botón "Iniciar sesión" en la parte superior derecha de la
                                                    página.
                                                    Ingresa tu dirección de correo electrónico y contraseña asociada a tu
                                                    cuenta.
                                                    Haz clic en "Iniciar sesión" y disfruta de todo nuestro contenido.
                                                    Recuerda que al registrarte, tendrás acceso a funciones adicionales, como la
                                                    posibilidad de crear un perfil, interactuar con otros usuarios a través de
                                                    chats
                                                    y participar en sorteos y premios exclusivos. Además, podrás personalizar tu
                                                    experiencia según tus preferencias y recibir recomendaciones personalizadas.
                                                    <br>
                                                    Estamos emocionados de tenerte como parte de nuestra comunidad. Regístrate o
                                                    inicia sesión ahora y descubre un universo de entretenimiento ilimitado.
                                                    ¡Prepárate para vivir experiencias emocionantes y conectarte con personas
                                                    apasionadas como tú!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
