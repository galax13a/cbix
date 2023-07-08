<div class="row container-fluid">

    <div class="col-12 shadow rounded-4 p-4 " wire:key="body-head-apps-create">
    
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
                    @error('name')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row g-3 align-items-center mt-1">

                <span class="input-group-text text-bold bg-light" id="inputGroup-sizing-lg">
                    <strong class="p-1 rounded-4">
                        🌐 Slug: {{ url('/') }}/apps/{{ $slug }}
                    </strong>
                </span>

                @error('slug')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror


            </div>

            <div class="col-auto">
                <span id="slugHelpInline" class="form-text">
                    Auto-generated from Name App. {{ $this->name }}
                </span>
                @if ($this->appnew)
                    <br>
                    <br>
                    <strong class="text-success shadow rounded-3 p-2 ">
                        🍒 App created successfully.
                    </strong>
                @else
                    @if ($slug)
                        <span class="badge p-1 p-1 bg-warning text-black">Enabled app</span>
                    @else
                        @if ($this->slugExists($slug))
                            <p class="text-danger shadow-sm p-2 rounded-3">
                                Slug app already exists. Please choose a different one.
                            </p>
                        @endif
                    @endif
                @endif
            </div>
   


    </div>

    @if ($appnew)

    <a href="{{ route('create.root.app', ['appid' => $this->appnew]) }}" 
        class="p-2 m-2 rounded-3 shadow-sm text-center">
        <button wire:key="btn-editor-now"  class="btn btn-primary">
            <strong>👉🏼 Editor Page App Now ⭐️</strong>
        </button>
    </a>

        <div class="container shadow border-3 rounded-3 p-3 m-2">

            <h4 class="text-capitalize bold text-center shadow-sm "> create a page for your app</h4>
            <p>En el fascinante mundo de la creación de aplicaciones, la clave para el éxito radica en contar con
                herramientas poderosas y sofisticadas que simplifiquen el proceso de desarrollo. Presentamos EditorCam,
                una herramienta revolucionaria diseñada específicamente para facilitar la creación y edición de páginas
                de aplicaciones en una interfaz intuitiva y de vanguardia. En este artículo, exploraremos las
                características y ventajas de EditorCam, la herramienta definitiva para aquellos que buscan llevar sus
                aplicaciones al siguiente nivel.</p>

            <h2>EditorCam: La Herramienta de Edición Avanzada:</h2>

            <p>EditorCam es una herramienta avanzada que combina la potencia de un editor sofisticado con la facilidad
                de uso de una interfaz intuitiva. Con EditorCam, puedes personalizar y editar las páginas de tu
                aplicación de manera eficiente y precisa, sin necesidad de conocimientos técnicos profundos. Ya sea que
                estés desarrollando una aplicación móvil o web, EditorCam ofrece las siguientes características clave:
            </p>

            <ol>
                <li><strong>Interfaz Intuitiva:</strong> EditorCam presenta una interfaz amigable y fácil de usar,
                    diseñada para agilizar el proceso de edición. Con una disposición intuitiva de herramientas y
                    opciones, te sentirás cómodo y en control mientras personalizas cada aspecto de tu página de
                    aplicación.</li>
                <li><strong>Edición en Tiempo Real:</strong> Con EditorCam, podrás ver los cambios que realices en
                    tiempo real, lo que te permite ajustar y personalizar cada detalle sin tener que recargar la página.
                    Experimenta con diferentes elementos y diseños, y observa cómo se transforma tu aplicación justo
                    frente a tus ojos.</li>
                <li><strong>Soporte para Componentes Avanzados:</strong> EditorCam admite una amplia variedad de
                    componentes avanzados, desde elementos de diseño hasta integraciones con servicios externos. Desde
                    imágenes y vídeos hasta formularios interactivos y mapas, podrás agregar fácilmente funcionalidades
                    y elementos dinámicos a tu página de aplicación.</li>
                <li><strong>Personalización Completa:</strong> Con EditorCam, tienes el control total sobre la
                    apariencia y el contenido de tu página de aplicación. Cambia colores, fuentes, estilos y disposición
                    de elementos con solo unos pocos clics. Personaliza cada detalle para adaptarlo a tu visión y marca
                    personal.</li>
            </ol>

        </div>
    @else
        <button id="btn-new" wire:key="btn-next-app"  class="p-2 m-2 rounded-3 shadow-sm" wire:click.prevent="create1()"
            @if (!$name || $this->slugExists($slug)) disabled @endif>
            <strong>Next App 🍒</strong>
        </button>
    @endif




</div>
</div>
<div class="card-footer d-flex justify-content-end">
    <strong>Apps Webmaster Botchatur</strong>
</div>
