@section('title', __('Adminapps'))
<div class="container-fluid">

    <div class="row">

        <div class="col-12">
            <h1>Apps Models WebCam > </h1>
        </div>

        <div class="container">

            <div class="tabset">

                <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
                <label for="tab1">Apps</label>
                <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
                <label for="tab2">Plugins</label>
                <input type="radio" name="tabset" id="tab3" aria-controls="dunkles">
                <label for="tab3">OBS</label>

                <div class="tab-panels">
                    <section id="marzen" class="tab-panel">
                        <h3>Downloads Apps Webcams</h3>
                        <p>
                            the comprehensive platform designed to boost your experience in the digital world. With
                            Botchatur, you have access to a wide range of specialized applications and resources that
                            range from editing and design to web development, content sales, positioning, and much more.
                            Explore our powerful tools and take your projects to new levels of creativity and
                            efficiency.
                        </p>
                        <div class="col-2">

                            @foreach ($adminapps as $adminapp)
                                <div class="link-container shadow">
                                    <a class="text-capitalize" href="{{ url($adminapp->url) }}"
                                        target="{{ $adminapp->target }}">
                                        {!! $adminapp->icon !!}
                                        {{ $adminapp->name }}
                                    </a>
                                    <div class="font-monospace">
                                        {!! $adminapp->en !!}
                                    </div>
                                    <div class="container">
                                        <a href=""><i class='bx bx-heart-circle fs-5 text-danger'
                                                title="Favorite"></i></a>
                                    </div>


                                </div>
                            @endforeach
                        </div>
                    </section>
                    <section id="rauchbier" class="tab-panel">
                        <h2>Plugins Wc</h2>
                        <p>
                            Para complementar tu experiencia con plugins más específicos y eficientes para webcam,
                            Botchatur ha reunido una selección de herramientas que maximizarán el rendimiento y la
                            versatilidad de tus transmisiones en vivo y grabaciones. Explora nuestra variedad de plugins
                            diseñados para mejorar la calidad visual, la interactividad y la gestión de tu contenido en
                            tiempo real.</p>
                    </section>
                    <section id="dunkles" class="tab-panel">
                        <h2>Webcams</h2>
                        <p><strong>Overall Impression:</strong> A dark, strong, malty German lager beer that emphasizes
                            the malty-rich and somewhat toasty qualities of continental malts without being sweet in the
                            finish.
                        </p>
                    </section>
                </div>

            </div>

        </div>



    </div>

    <div class="row justify-content-center d-none">

        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card">

                <div class="card-header bg-transparent">
                    <x-btnmore />
                </div>

                <div class="card-body">
                    @include('livewire.adminapps.modals')
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <thead class="thead">
                                <tr>
                                    <td>#</td>
                                    <th>Name</th>
                                    <th class="text-center thead">Command</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($adminapps as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td data-record="{{ $row->id }}">{{ $row->name }}</td>
                                        <td width="90">
                                            <x-btncrud>
                                                <x-slot name="id_editar">{{ $row->id }}</x-slot>
                                            </x-btncrud>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="100%">No data Found </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="float-end">{{ $adminapps->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .link-container {
            padding: 20px 30px;
            border: 2px solid #007BFF;
            border-radius: 10px;
            display: inline-block;
            margin: 20px;
            background-color: #f8f9fa;
            transition: background-color 0.3s;
        }

        .link-container:hover {
            background-color: #e9ecef;
        }

        .link-container a {
            font-size: 20px;
            color: #007BFF;
            text-decoration: none;
        }

        .link-container a:hover {
            text-decoration: underline;
        }
    </style>

</div>
