<div>
    <div x-data="{ open: false, activeButton: null }" @click.away="open = false" class="wrapper">
        <button @click="open = !open" class="rounded-3 shadow-sm main-button">💢</button>
    
        <div x-show="open" class="menu-table">
            {{ $slot }}
        </div>
    </div>
    
    
</div>