<div>
    <select id="postalCode">
        @foreach($postalCodes as $postalCode)
            <option value="{{ $postalCode->id }}">
                {{ $postalCode->City }}, {{ $postalCode->State }}  {{ $postalCode->PostalCode }}
            </option>
        @endforeach
    </select>
</div>
git status
