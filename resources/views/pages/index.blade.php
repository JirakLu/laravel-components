@extends('index')

@section('content')
    <x-form::form :action="route('form')" :method="\App\Enums\FormMethods::POST">
        <x-form::input label="Name" name="name" corner-hint="Please enter your full name" suffix-text="cm" remember required>
            <span>Description</span>
            <x-slot:prefixIcon>
                <x-icons::card-icon/>
            </x-slot:prefixIcon>
        </x-form::input>

        <x-form::check-box label="Newsletter" name="newsletter">
            Do you agree to receive our newsletter?
        </x-form::check-box>


        <button type="submit">Submit</button>
    </x-form::form>
@endsection