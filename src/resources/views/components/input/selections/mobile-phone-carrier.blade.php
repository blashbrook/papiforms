@props([
    'mobilePhoneCarriers' => $this->mobilePhoneCarriers,
    'firstOption' => false,
    'defaultOption' => false
])
@if($firstOption)
    <option>{{ $firstOption }}</option>
@endif
@foreach($mobilePhoneCarriers as $mobilePhoneCarrier)
    <option
        @if($defaultOption === $mobilePhoneCarrier->CarrierID)
        selected="selected"
        @endif
        value="{{$mobilePhoneCarrier->CarrierID }}">{{$mobilePhoneCarrier->CarrierName }}</option>
@endforeach
