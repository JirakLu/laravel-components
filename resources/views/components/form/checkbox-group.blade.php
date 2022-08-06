<fieldset class="space-y-5">
    <legend class="sr-only">{{ $legend }}</legend>
    @isset($description)
        {{ $description }}
    @endisset
    {{ $slot }}
</fieldset>
