<input {{ $attributes->merge(['class' => ' form-input block w-full mt-4 px-4 py-3 border
        border-gray-300 rounded-md placeholder-gray-500 focus:outline-none
        focus:shadow-outline-blue focus:border-blue-300 transition duration-150
        ease-in-out']) }}
        @error($attributes->whereStartsWith('wire:model')->first())
               border border-red-500
        @enderror
">
