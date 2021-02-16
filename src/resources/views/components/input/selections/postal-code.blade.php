@props([
    'selectedPostalCodeID' => $this->selectedPostalCodeID,
    'postalCodes' => $this->postalCodes,
    'firstOption' => false,
    'defaultOption' => false
])
@if($firstOption)
    <option>{{ $firstOption }}</option>
@endif
        @foreach($postalCodes as $postalCode)
            <option value="{{ $postalCode->id }}">
                @if($defaultOption === $postalCode->id)
                    selected="selected"
                @endif
                {{ $postalCode->City }}, {{ $postalCode->State }}  {{ $postalCode->PostalCode }}
            </option>
        @endforeach
    </select>
</div>
