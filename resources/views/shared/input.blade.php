@php
    isset($type) ? $type : $type = 'text'; 
    isset($class) ? $class : $class = null; 
    isset($value) ? $value : $value = null; 
    isset($name) ? $name : $name = ''; 
    isset($label) ? $label : $label = ucfirst($name); 
@endphp
<div @class(["form-group", $class])>
    <label for="{{ $name }}">{{ $label }}</label>
    @if ($type==='textarea')
        <textarea name="{{ $name }}" id="{{ $name }}" class="form-control">{{ $value }}</textarea>
    @else
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" class="form-control @error($name) is-invalid @enderror" value="{{ old($name, $value) }}">        
    @endif
    @error($name)
        {{ $message }}
    @enderror
</div>
