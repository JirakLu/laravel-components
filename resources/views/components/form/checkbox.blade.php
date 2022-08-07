@php
$labelStyles = $hideLabel ? 'sr-only' : 'font-medium text-gray-700 select-none cursor-pointer';

$checkboxStyles = ['h-4 w-4 text-indigo-600 border-gray-300 rounded cursor-pointer', 'focus:ring-indigo-500', 'border-red-500' => isset($name) ? $errors->has($name) : false];

@endphp


<div class="relative flex items-start">
    <div class="flex h-5 items-center">
        <input type="checkbox" {{ $attributes->class($checkboxStyles) }} id="{{ $id }}"
            @isset($name) name="{{ $name }}" @endisset
            aria-describedby="{{ $id }}-description" @if ($isChecked()) checked @endif>
    </div>
    <div class="ml-3 text-sm">
        <label for="{{ $id }}" @class([$labelStyles, $labelClass])>{{ $label }}</label>
        @isset($slot)
            <p id="{{ $id }}-description" class="text-gray-500">{{ $slot }}</p>
        @endisset
    </div>
</div>
