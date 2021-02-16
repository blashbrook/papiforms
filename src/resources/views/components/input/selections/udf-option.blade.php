@props([
    'udfOptions' => $this->udfOptions,
    'firstOption' => false,
    'defaultOption' => false,
    'selectedOption' => old('User4')
])
@if($firstOption && $attributes->old('User4') === '')
    <option>{{ $firstOption }}</option>
@endif
@foreach($udfOptions as $udfOption)
    <option
        @if($selectedOption === $udfOption->OptionDesc)
        selected="selected"
        @endif
        value="{{ $udfOption->OptionDesc }}">
        {{ $udfOption->OptionDesc }}
    </option>
@endforeach
