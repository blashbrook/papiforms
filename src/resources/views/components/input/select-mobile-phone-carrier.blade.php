@props([
    'mobilePhoneCarriers' => $this->mobilePhoneCarriers
])
<div>
    <select {{ $attributes }} class = "form-input block w-full px-4 py-3 border
            border-gray-300 rounded-md placeholder-gray-500 focus:outline-none
            focus:shadow-outline-blue focus:border-blue-300 transition duration-150
            ease-in-out">
        <option value="">Select your phone carrier</option>
        @foreach($mobilePhoneCarriers as $mobilePhoneCarrier)
            <option value="{{ $mobilePhoneCarrier->CarrierID }}">
                {{ $mobilePhoneCarrier->CarrierName }}
            </option>
        @endforeach
    </select>
</div>
