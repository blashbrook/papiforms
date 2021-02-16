@props([
    'deliveryOptions' => $this->deliveryOptions,
    'firstOption' => false,
    'defaultOption' => false
])
        @if($firstOption)
            <option>{{ $firstOption }}</option>
        @endif
        @foreach($deliveryOptions as $deliveryOption)
            <option
                @if($defaultOption === $deliveryOption->DeliveryOptionID)
                    selected="selected"
                @endif
                value="{{$deliveryOption->DeliveryOptionID }}">{{$deliveryOption->DeliveryOption }}</option>
        @endforeach

