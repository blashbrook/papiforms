<div
    x-data
    x-init="new Pikaday({
        field: $refs.input,
        format: 'MM/DD/YYYY',
        yearRange: [1900, 2020]
        })"
    @change="$dispatch('input', $event.target.value)"
    class="mt-1 rounded-md shadow-sm">
           <input {{ $attributes }}
           x-ref="input"
           class = "form-input block w-full px-4 py-3 border
           border-gray-300 rounded-md placeholder-gray-500 focus:outline-none
           focus:shadow-outline-blue focus:border-blue-300 transition duration-150
           ease-in-out mb-3
           @error($attributes->whereStartsWith('wire:model')->first())
               border border-red-500 placeholder-red-500
           @enderror
           ">
</div>
