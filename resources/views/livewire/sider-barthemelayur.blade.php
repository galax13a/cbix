<div>
    <div x-data="{ sidebarOpenApp: localStorage.getItem('sidebarOpenApp') === 'true' ? true : false }"
    x-init="$watch('sidebarOpenApp', val => localStorage.setItem('sidebarOpenApp', val))">
   <div class="container-fluid">
       <div class="row">
           <div id="sidebar-app" x-show="sidebarOpenApp" :class="{'col-sm-auto': sidebarOpenApp, 'sticky-top': sidebarOpenApp, 'fade': !sidebarOpenApp, 'show': !sidebarOpenApp}">
               <!-- Conten sidebar theme app -->                                   
                    <div class="d-flex flex-sm-column flex-row flex-nowrap align-items-center">
                        <a href="/themas" class="p-2 text-dark " tooltips="Theme"  data-bs-placement="right" data-bs-original-title="Icon-only">
                            <i class="bi bi-window-dock fs-3"></i></i>
                        </a>
                        <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                            <li class="nav-item">
                                <a href="{{ url('/home') }}" class="nav-link link-dark py-2 px-2" tooltips="Home App"  data-bs-placement="right" data-bs-original-title="Home">
                                    <i class="bi-house fs-3"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/test-speed') }}"  class="nav-link link-dark py-2 px-2" tooltips="Test Speed"  data-bs-placement="right" data-bs-original-title="Dashboard">
                                    <i class="bi-speedometer2 fs-3"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/cbhrs') }}" class="nav-link link-dark py-2 px-2" tooltips="Stats"  data-bs-placement="right" data-bs-original-title="Orders">
                                    <i class="bi-table fs-3"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link link-dark py-2 px-2" tooltips="Favorites"  data-bs-placement="right" data-bs-original-title="Products">
                                    <i class="bi-heart fs-3"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link link-dark py-2 px-2" tooltips="Chat App"  data-bs-placement="right" >
                                    <i class="bi-chat fs-3"></i>
                                </a>                            
                            </li>
                            
                        </ul>
                        <div class="dropdown">
                            <a href="#" class="d-flex link-dark align-items-center link-dark justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-window h2"></i>
                            </a>
                            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-file-earmark-plus"></i> New Project...</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-house-add"></i> New LandingPages...</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-cpu"></i> New Components </a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-filetype-css"></i> New Css</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-filetype-js"></i> New js</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-filetype-php"></i> New Php</a></li>
                                
                            </ul>
                        </div>
                     
                    </div>
                </div>
                <div class="col-sm p-0 min-vh-100 ">          
                    <button id="siderbarappbuton" style="z-index: 333; margin-left:3px;" @click="sidebarOpenApp = !sidebarOpenApp; localStorage.setItem('sidebarOpenApp', sidebarOpenApp ? 'true' : 'false')" class="btn btn-dark position-fixed btn-sm top-1 start-2 mt-2">
                    <span class="half-button">
                        <i x-show="!sidebarOpenApp" class="fas fa-barss">></i>
                        <i x-show="sidebarOpenApp" class="fas fa-larges"><</i>
                    </span>
                </button>
                    @yield('content')
                </div>
                
            </div>
        </div>
        
    
</div>