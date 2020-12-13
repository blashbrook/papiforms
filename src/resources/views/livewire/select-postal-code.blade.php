<div>
    <select wire:model="selectedID">
        {!! $selector !!}
    </select>
    @if($selectedID)
         <span> {{ $selectedCity }}, {{ $selectedState }}  {{ $selectedPostalCode }}</span>
    @endif
</div>

