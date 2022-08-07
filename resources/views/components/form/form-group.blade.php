<fieldset>
    <legend class="sr-only">{{ $legend }}</legend>
    @isset($description)
        {{ $description }}
    @endisset
    <div {{ $attributes->class(['space-y-4 mt-4' => !$attributes->has('class')]) }}>
        {{ $slot }}
    </div>
</fieldset>
