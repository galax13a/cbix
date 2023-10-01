<div>
    <label class="toggle">
        <input wire:model="active" id="active" class="theme-toggle" type="checkbox" {{ $active ? 'checked' : '' }}>
        <div class="theme-toggle"></div>
        <span class="toggle-label">{{ $active ? 'Active' : 'Inactive' }}</span>
    </label>
        
</div>