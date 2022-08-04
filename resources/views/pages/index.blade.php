@extends('index')

@section('content')
    <x-form::form :action="route('index')" :method="\App\Enums\FormMethods::DELETE">
        <div>test</div>
    </x-form::form>
@endsection