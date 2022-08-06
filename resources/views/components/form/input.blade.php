@php
$labelStyles = $hideLabel ? 'sr-only' : 'block text-sm font-medium text-gray-700 select-none';

$inputStyles = ['block w-full sm:text-sm border-gray-300 rounded-md', 'focus:ring-indigo-500 focus:border-indigo-500', 'placeholder-gray-500', 'border-red-500' => isset($name) ? $errors->has($name) : false, 'pl-12' => isset($prefixIcon), 'pr-12' => isset($suffixIcon), 'pl-10' => isset($prefixText), 'pr-10' => isset($suffixText)];
@endphp

<div>
    <div class="flex justify-between">
        <label for="{{ $id }}" @class($labelStyles)>
            {{ $label }}
            @if ($required)
                <span class="text-red-500">*</span>
            @endif
        </label>
        @isset($cornerHint)
            <span class="text-sm text-gray-500">{{ $cornerHint }}</span>
        @endisset
    </div>

    <div class="relative mt-2">
        @if (isset($prefixIcon) | isset($prefixText))
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                @if (isset($prefixIcon))
                    {{ $prefixIcon }}
                @endif
                @if (isset($prefixText))
                    <span class="ml-2 text-gray-500">{{ $prefixText }}</span>
                @endif
            </div>
        @endif
        <input
            {{ $attributes->merge(['type' => 'text'])->merge(['required' => $required])->merge(['value' => $getValue()])->class($inputStyles) }}
            id="{{ $id }}"
            @error($name) aria-invalid="true"
        aria-describedby="{{ $id }}-error" @enderror
            @isset($slot) aria-details="{{ $id }}-description" @endisset
            @isset($name) name="{{ $name }}" @endisset>

        @if (isset($suffixIcon) | isset($suffixText))
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500">
                @if (isset($suffixIcon))
                    {{ $suffixIcon }}
                @endif
                @if (isset($suffixText))
                    <span class="ml-2 text-gray-500">{{ $suffixText }}</span>
                @endif
            </div>
        @endif
    </div>
    @isset($name)
        @error($name)
            <p class="mt-2 text-sm italic text-red-600" id="{{ $id }}-error">{{ $message }}</p>
        @enderror
    @endisset
    @isset($slot)
        <div class="mt-2 text-sm text-gray-500" id="{{ $id }}-description">
            {{ $slot }}
        </div>
    @endisset
</div>
