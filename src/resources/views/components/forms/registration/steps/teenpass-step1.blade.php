<div class="text-md font-bold text-gray-700 mt-5 leading-tight" xmlns:x-papiforms="http://www.w3.org/1999/html">First,
    let's determine if you are eligible for a Teen Pass.
</div>
<x-papiforms::input.group label="What is your birthdate?" for="Birthdate">
    <x-papiforms::input.datepicker wire:model.defer="Birthdate" id="Birthdate" name="Birthdate" type="text"
                                   placeholder="MM/DD/YYYY" value="{{ old('Birthdate') }}"/>
</x-papiforms::input.group>
<div class="text-md text-gray-700 mt-3 mb-10 leading-tight">You must be between the ages of 13 and 18 to apply for a
    Teen Pass.
</div>
<div>
