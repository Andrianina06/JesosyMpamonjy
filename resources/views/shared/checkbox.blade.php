@php
    isset($class) ? $class : $class = null; 
    isset($name) ? $name : $name = ''; 
    isset($label) ? $label : $label = ucfirst($name); 
@endphp
<div @class(["form-check form-switch", $class])>
    <label for="{{ $name }}" class="form-check-label">{{ $label }}</label>
    <input type="hidden" name="{{ $name }}" value="0">
    <input type="checkbox" name="{{ $name }}" value="1" class="form-check-input @error($name) is-invalid @enderror" id="{{ $name }}" role="switch">
    @error($name)
        {{ $message }}
    @enderror
</div>