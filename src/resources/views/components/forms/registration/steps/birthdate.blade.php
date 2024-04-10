<div class="text-md font-bold text-gray-700 mt-5 leading-tight" xmlns:x-papiforms="http://www.w3.org/1999/html">First, let's determine if you can apply for a card online.</div>
<x-papiforms::input.group label="What is your birthdate?" for="Birthdate">
    <x-papiforms::input.datepicker wire:model.defer="Birthdate" id="Birthdate" name="Birthdate" type="text" placeholder="MM/DD/YYYY" value="{{ old('Birthdate') }}"/>
</x-papiforms::input.group>
<div class="text-md text-gray-700 mt-5 leading-tight">You must be 13 or older to use this online form.  If you are under the age of 13, please ask you parent or legal guardian to complete this application for you.</div>
