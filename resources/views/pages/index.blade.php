@extends('index')

@section('content')
    <x-form::form :action="route('form')" :method="\App\Enums\FormMethods::POST">
        <x-form::input label="Name" name="name" corner-hint="Please enter your full name" suffix-text="cm" required>
            <span>Description</span>
            <x-slot:prefixIcon>
                <x-icons::card-icon/>
            </x-slot:prefixIcon>
        </x-form::input>


        <button type="submit">Submit</button>
    </x-form::form>
@endsection