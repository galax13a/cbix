@section('title', __('Themas'))

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card">
                <div class="card-header bg-transparent shadow">
                    <div class="row">
                        <div class="col-4">
                            <strong><i class="bi bi-window-sidebar"></i> File Thema</strong>

                            <button onclick="" title="New Document"
                                class="border-0 shadow-sm rounded-4 bg-light text-primary">
                                <i class="bi bi-plus-square-dotted"></i>
                            </button>
                        </div>
                        <div class="col-6 align-items-center">
							
                            <a tooltips="Save Thema" title="SaveMe" class="navbar-brand" href="#"><i
                                    class="bi bi-save2"></i> Save</a>
                            |
                            <button onclick="toggleReadOnly()"
                                class="border-0 shadow-sm rounded-4 bg-light text-primary"> <i class="fas fa-eye"></i>
                            </button>
                            |
                            <a class="navbar-brand" title="Create Theme" href="#">
                                <i class="bi bi-google-play"> Generate </i></a>
                            |
                            <button onclick="clearEditor()" title="Clean Editor"
                                class="border-0 shadow-sm rounded-4 bg-light text-primary">
                                <i class="fas fa-eraser"></i>
                            </button>
                        </div>
                    </div>

                </div>

                <div class="card-body">
                    @include('livewire.themas.modals')
					
                    <div id="editorjs"></div>
                </div>
            </div>
        </div>

        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card">
                <div class="card-header bg-transparent shadow">
                    <div class="row">
                        <div class="col-10">
                            <strong><i class="bi bi-window-sidebar"></i> Folios Themas</strong>

							 
                        </div>
                        <div class="col-2">
                            <a tooltips="Save Thema" title="SaveMe" class="navbar-brand" href="#"><i
                                    class="bi bi-cloud-upload"></i> UpLoad File</a>

                        </div>
                        <col class="col-4">

						 <div class="componentes">
								componentes
								<x-themacoms.lista1 />
								<x-themacoms.btnup />
								<x-themacoms.navbar-flex />	
								<x-themacoms.home-one-flex />				
								<hr>
								<x-themacoms.botones-all />
						 </div>

						<ul class="list-group list-group-flush">
							<li class="list-group-item">Theme App.html</li>
							<li class="list-group-item">Css App.css</li>
							<li class="list-group-item">Script Js App.js</li>
							<li class="list-group-item">Script php App.php</li>
							<li class="list-group-item">Imagen Thema App</li>
							
						  </ul>
						<col class="col-8">
             
                    </div>
                </div>

            </div>

            <div class="card-body">
                @include('livewire.themas.modals')
                <div id="editorjs"></div>
            </div>
        </div>
    </div>

    <script>
        function clearEditor() {
            editor.clear();
        }

    </script>
</div>
