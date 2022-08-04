@php
    $styles = [
        "default" => "space-y-4 w-1/2",
        "override" => "bg-red-500",
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