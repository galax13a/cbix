<div>
    <div x-data="{ open: false }">
        <!-- Sidebar -->
        <div :class="{ 'd-none': !open, '': open }" class="border-right sidebar-sticky floating-menu" id="sidebar-wrapper">
            <div class="list-group list-group-flush shadow-sm rounded-2">
                <a href="#" class="list-group-item list-group-item-action custom-link">Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action custom-link ">Profile</a>                
                <a href="#" class="list-group-item list-group-item-action custom-link ">Api Key</a>                
                <a href="#" class="list-group-item list-group-item-action custom-link">Account</a>  
                              
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
