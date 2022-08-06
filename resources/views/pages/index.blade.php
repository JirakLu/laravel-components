@extends('index')

@section('content')
    <x-form::form :action="route('form')" :method="\App\Enums\FormMethods::POST">
        <x-form::input label="Name" name="name" corner-hint="Please enter your full name" suffix-text="cm" remember
                       required>
            <span>Description</span>
            <x-slot:prefixIcon>
                <x-icons::card-icon/>
            </x-slot:prefixIcon>
        </x-form::input>

        <x-form::checkbox label="Newsletter" name="newsletter">
            Do you agree to receive our newsletter?
        </x-form::checkbox>

        <x-form::checkbox-group legend="Colors">
            <x-slot:description>
                <p class="text-sm text-gray-500">Choose colors you like.</p>
            </x-slot:description>
            <x-form::checkbox label="Red" name="color[]" label-class="text-red-500" />
            <x-form::checkbox label="Green" name="color[]" label-class="text-emerald-500">
                My personal favorite :)
            </x-form::checkbox>
            <x-form::checkbox label="Blue" name="color[]" label-class="text-indigo-500" />
            <x-form::checkbox label="Purple" name="color[]" label-class="text-purple-500" />
        </x-form::checkbox-group>


        <button type="submit">Submit</button>
    </x-form::form>
@endsection