@props(['name','label', 'placeholder','type','readonly'])

<flux:input type="{{ $type }}" label="{{ $label ?? $label }}" placeholder="{{ $placeholder ?? $label }}" wire:model="{{ strtolower($name) }}"  step="any" />
