<form action="{{ $action }}"
      @if($isBasicMethod()) method="{{ $method->value }}" @endif
        {{ $attributes->class(["space-y-4 w-1/2 bg-red-500"]) }}
>
    @unless($noCsrf)
        @csrf
    @endunless
    @unless($isBasicMethod())
        @method($method->value)
    @endunless
    {{ $slot }}
</form>