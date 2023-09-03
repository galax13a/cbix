@section('title', __('Themas'))
<div class="container-fluid" >
	<div class="row justify-content-center">
			<div class="col-md-12 my-2" id="view-js-live-pages">
				<div class="card ">								
					<div class="card-header bg-transparent shadow">
						<strong>
							<i class="bi bi-window-sidebar"></i> Themes Folio
						</strong>
					</div>
					
					<div class="card-body" >
							@include('livewire.themas.modals')						
							<div id="editorjs"></div>
				</div>
		</div>
	</div>

	
<div class="floating-footer">
    <nav class="navbar navbar-light bg-light rounded-3">
        <div class="container-fluid">
			<div class="col">
				<a class="navbar-brand" href="#">Menú 1</a>
			  </div>
			  <div class="col">
				<a class="navbar-brand" href="#">Menú 1</a>
			  </div>
			  <div class="col">
				<a class="navbar-brand" href="#">Menú 1</a>
			  </div>
          	<div class="col">
				<a class="navbar-brand" href="#">Menú 1</a>
			  </div>
            <a tooltips="Save Thema" title = "SaveMe"class="navbar-brand" href="#"><i class="bi bi-save2"></i></a>
            <a class="navbar-brand" title ="See theme" href="#"><i class="bi bi-arrow-up-right-square"></i></a>
			<a class="navbar-brand" title="Create Theme" href="#"><i class="bi bi-google-play"></i></a>
        </div>
    </nav>
</div>

<style>
	.floating-footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    z-index: 1000; 

	
}

</style>
	<script>
	
	</script>
</div>