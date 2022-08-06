@php
    $styles = [
        "default" => "p-4 space-y-4 max-w-md mx-auto",
        "override" => "bg-gray-100",
    ]
@endphp


<form action="{{ $action }}"
      @if($isBasicMethod()) method="{{ $method->value }}" @endif
        {{ $attributes->class([
            $styles["default"],
            $styles["override"] => !isset($class),
        ]) }}>
    @unless($noCsrf)
        @csrf
    @endunless
    @unless($isBasicMethod())
        @method($method->value)
    @endunless
    {{ $slot }}
</form>