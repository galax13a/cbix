<div>
    <div x-data="{ open: false }">
        <!-- Sidebar -->
        <div :class="{ 'd-none': !open, '': open }" class="border-right sidebar-sticky floating-menu" id="sidebar-wrapper">
            <div class="list-group list-group-flush shadow-sm rounded-2">
                <a href="{{ url('/home') }}"  class="list-group-item list-group-item-action custom-link"> 🎯 Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action custom-link ">😺 My Bio*s</a>                
                <a href="/api-chaturbate/" class="list-group-item list-group-item-action custom-link ">🎨 Api Chaturbate</a>                
                <a href="#" class="list-group-item list-group-item-action custom-link"> 🏅 ⛔️Account <br><span class="bg-danger p-1 text-white fw-bold rounded-3">No Completed</span> </a>   
                <a href="#theme" class="navbar-brand mb-0 h3 my-2 mt-2 p-2 shadow-lg"> <livewire:com-dark-wire /></a> 
                              
            </div>
        </div>    
        <!-- Page Content -->
        <div class="container-fluid">
            <!-- Botón flotante en la parte superior derecha -->
            <button @click="open = !open" class="btn btn-dark floating-button">
                <i x-show="!open" class="fas fa-bars"></i>
                <i x-show="open" class="fas fa-times"></i>
            </button>
            <!-- Page Content goes here -->
        </div>    
</div>
