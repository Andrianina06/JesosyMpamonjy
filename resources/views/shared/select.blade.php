@php
    isset($class) ? $class : $class = null; 
    isset($value) ? $value : $value = null; 
    isset($name) ? $name : $name = ''; 
    isset($label) ? $label : $label = ucfirst($name);
    isset($options) ? $options : $options = [];  
    isset($value) ? $value : $value = '';  
    isset($secValue) ? $secValue : $secValue = '';  
    isset($valueId) ? $valueId : $valueId = '';
    isset($multiple) ? $multiple : $multiple = false;
    isset($id) ? $id : $id = null;
@endphp

<div @class(["form-group", $class])>
    @if ($multiple == true)
        <label for="{{ $name }}">{{ $label }}</label>
        <select name="{{ $name }}[]" id="{{ $name }}" multiple>
            @foreach ($options as $k => $v)
                <option value="{{ $k }}" @if ($valueId->contains($k)) selected @endif>{{ $v }}</option>
            @endforeach
        </select>
        @error($name)
            {{ $message }}
        @enderror
    @else
        <label for="{{ $name }}">{{ $label }}</label>
        <select name="{{ $name }}" id="{{ $name }}" class="form-control ">
            <option value="">--</option>
            @foreach ($options as $option)
                <option value="{{ $option->id }}" @if ($valueId == $option->id) selected @endif>@if($secValue){{$option->$value->$secValue}}@else{{ $option->$value}}@endif</option>
            @endforeach
        </select>
        @error($name)
            {{ $message }}
        @enderror
    @endif
</div>