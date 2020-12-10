@props([
    'label' => false,
    'for' => false,
])

<div class="my-3">
    @if($label)
        <label for="{{ $for }}"
               class="block sr-only text-sm font-medium text-gray-700 leading-5">
            {{ $label }}
        </label>
    @endif

    {{ $slot }}
        @error($attributes->whereStartsWith('wire:model')->first($for))
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
</div>
