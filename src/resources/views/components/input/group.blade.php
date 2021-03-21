@props([
    'label' => false,
    'for' => false,
    'srOnly' => 'sr-only'
])

<div class="my-3">
    @if($label)
        <label for="{{ $for }}"
               class="block {{ $srOnly }} font-medium text-gray-700 leading-5 py-2 px-2">
            {{ $label }}
        </label>
    @endif

    {{ $slot }}
        @error($attributes->whereStartsWith('wire:model')->first($for))
        <p class="mt-2 pl-2 text-sm text-red-600 italic">{{ $message }}
        </p>
        @enderror
</div>
