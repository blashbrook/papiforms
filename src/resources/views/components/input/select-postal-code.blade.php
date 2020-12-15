<div>
    <select wire:model="postalcode.selectedID" id="selectedID" name="selectedID">
        @foreach($postalCodes as $postalCode)
            <option value="{{ $postalCode->id }}">
                {{ $postalCode->City }}, {{ $postalCode->State }}  {{ $postalCode->PostalCode }}
            </option>
        @endforeach
    </select>
    @if($selectedArray)
   <span>{{ $selectedArray->City }}, {{ $selectedArray->State }}  {{ $selectedArray->PostalCode }}</span>
        @endif
</div>

