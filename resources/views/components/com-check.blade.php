<div>
    <div class="form-check form-switch">  
        <input wire:model="active" id="active" class="form-check-input" type="checkbox" {{ $active ? 'checked' : '' }}>        
        <label class="form-check-label" for="flexSwitchCheckChecked">{{ $active ? 'Active' : 'Inactive' }}</label>
    </div>
</div>