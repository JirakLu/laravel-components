@php
    $labelStyles = $hideLabel ? "sr-only" : "font-medium text-gray-700 select-none";


    $checkBoxStyles = [
        "h-4 w-4 text-indigo-600 border-gray-300 rounded",
        "focus:ring-indigo-500"
    ]

@endphp


<div class="relative flex items-start">
    <div class="flex items-center h-5">
        <input {{ $attributes->class($checkBoxStyles) }}
               id="{{ $id }}" aria-describedby="{{ $id }}-description"
               @isset($name) name="{{ $name }}" @endisset
               type="checkbox"
        >
    </div>
    <div class="ml-3 text-sm">
        <label for="{{ $id }}" @class($labelStyles)>{{ $label }}</label>
        <p id="{{ $id }}-description" class="text-gray-500">{{ $slot }}</p>
    </div>
</div>