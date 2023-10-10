<div>       
    <select class="form-select" aria-label="Select {{ $tableName }}" wire:model="{{ rtrim($tableName, 's') . '_id' }}" id="{{ rtrim($tableName, 's') . '_id' }}">
        <option selected value="">{{ isset($display) ? $display : $tableName }}</option>
        @foreach($items as $item)
            <option value="{{ $item->id }}">{{ $item->{$displayName} }}</option>
        @endforeach
    </select>
</div>