@props([
    'selectedPostalCodeID' => $this->selectedPostalCodeID,
    'postalCodes' => $this->postalCodes
])
<div>
    <select {{ $attributes }} class = "form-input block w-full px-4 py-3 border
            border-gray-300 rounded-md placeholder-gray-500 focus:outline-none
            focus:shadow-outline-blue focus:border-blue-300 transition duration-150
            ease-in-out
       @error($attributes->whereStartsWith('wire:model')->first())
        border border-red-500 placeholder-red-500
        @enderror
        ">
        <option>Select your city and postal code</option>
        @foreach($postalCodes as $postalCode)
            <option value="{{ $postalCode->id }}">
                {{ $postalCode->City }}, {{ $postalCode->State }}  {{ $postalCode->PostalCode }}
            </option>
        @endforeach
    </select>
</div>
