@extends('index')

@section('content')
    <x-form::form :action="route('form')" :method="\App\Enums\FormMethods::POST">
        <x-form::input label="Name" name="name" corner-hint="Please enter your full name" suffix-text="cm" remember
            required>
            <span>Description</span>
            <x-slot:prefixIcon>
                <x-icons::card-icon />
            </x-slot:prefixIcon>
        </x-form::input>

        <x-form::checkbox label="Newsletter" name="newsletter" remember>
            Do you agree to receive our newsletter?
        </x-form::checkbox>

        <x-form::form-group legend="Colors" class="flex justify-between gap-4">
            <x-slot:description>
                <p class="mb-4 text-sm text-gray-500">Choose colors you like.</p>
            </x-slot:description>
            <x-form::checkbox label="Red" name="color[]" value="red" label-class="!text-red-500" />
            <x-form::checkbox label="Green" name="color[]" value="green" label-class="!text-emerald-500" />
            <x-form::checkbox label="Blue" name="color[]" value="blue" label-class="!text-indigo-500" />
            <x-form::checkbox label="Purple" name="color[]" value="purple" label-class="!text-purple-500" />
        </x-form::form-group>

        <x-form::form-group legend="T-shirt size">
            <x-slot:description>
                <p class="text-sm text-gray-500">Choose your t-shirt size.</p>
            </x-slot:description>
            <x-form::radio label="Small" name="size" value="small">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid, architecto at deserunt ducimus
            </x-form::radio>
            <x-form::radio label="Medium" name="size" value="medium">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid, architecto at deserunt ducimus
            </x-form::radio>
            <x-form::radio label="Large" name="size" value="large">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid, architecto at deserunt ducimus
            </x-form::radio>
        </x-form::form-group>

        <button type="submit">Submit</button>
    </x-form::form>
@endsection
