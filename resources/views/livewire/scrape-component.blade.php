<div>
    {{-- Stop trying to control. --}}
    <div>
        <input wire:model="url" type="text" placeholder="Enter URL here">
        <button wire:click="scrape">Scrape!</button>
        @if($statusMessage)
            <div class="alert">
                {{ $statusMessage }}
            </div>
        @endif
        <p>{{ $data }}</p>
    </div>
    
    
    
</div>
