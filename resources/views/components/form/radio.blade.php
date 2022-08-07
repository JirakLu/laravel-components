@php
$labelStyles = $hideLabel ? 'sr-only' : 'font-medium text-gray-700 select-none';

$radioStyles = ['h-4 w-4 mt-0.5 cursor-pointer text-indigo-500', 'focus:ring-indigo-500', 'border-red-500' => isset($name) ? $errors->has($name) : false];

@endphp

<div class="rounded-md bg-white">
    <label class="flex cursor-pointer items-start p-4">
        <input type="radio" {{ $attributes->class($radioStyles) }} id="{{ $id }}"
            @isset($name) name="{{ $name }}" @endisset
            @if ($isChecked()) checked @endif aria-labelledby="{{ $id }}-label"
            aria-describedby="{{ $id }}-description">
        <div class="ml-3 flex flex-col text-sm">
            <span id="{{ $id }}-label" @class([$labelStyles, $labelClass])>{{ $label }}</span>
            @isset($slot)
                <span id="{{ $id }}-description" class="select-none text-gray-500">{{ $slot }}</span>
            @endisset
        </div>
    </label>
</div>
