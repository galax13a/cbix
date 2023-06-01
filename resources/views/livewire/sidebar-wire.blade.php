<div>
    <div x-data="{ open: false }">
        <!-- Sidebar -->
        <div :class="{ 'd-none': !open, '': open }" class="border-right sidebar-sticky floating-menu" id="sidebar-wrapper">
            <div class="list-group list-group-flush rounded-2">
                <a href="{{ url('/home') }}"  class="list-group-item list-group-item-action custom-link"> 🎯 Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action custom-link ">😺 My Bio*s</a>                
                <a href="/api-chaturbate/" class="list-group-item list-group-item-action custom-link ">🎨 Api Chaturbate</a>                
                <a href="/account/" class="list-group-item list-group-item-action custom-link"> 🏅 ⛔️Account <br><span class="bg-danger p-1 text-white fw-bold rounded-3">No Completed</span> </a>   
                <a href="javascript:void(0)" class="list-group-item"><livewire:com-dark-wire /></a> 
                <a href="javascript:void(0)" class="navbar-brand mb-0 h3  p-2 shadow-lg list-group-item "> </a> 
                              
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
