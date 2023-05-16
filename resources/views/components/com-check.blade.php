<div>
    <label class="toggle">
        <input wire:model="active" id="active" class="toggle-checkbox" type="checkbox" {{ $active ? 'checked' : '' }}>
        <div class="toggle-switch"></div>
        <span class="toggle-label">{{ $active ? 'Active' : 'Inactive' }}</span>
    </label>
        
</div>