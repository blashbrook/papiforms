<div>
    <select wire:model="selectedDeliveryOptionID" id="selectedDeliveryOptionID" name="selectedDeliveryOptionID" class = "form-input block w-full px-4 py-3 border
            border-gray-300 rounded-md placeholder-gray-500 focus:outline-none
            focus:shadow-outline-blue focus:border-blue-300 transition duration-150
            ease-in-out">
        @foreach($deliveryOptions as $deliveryOption)
            <option value="{{$deliveryOption->DeliveryOptionID }}">{{$deliveryOption->DeliveryOption }}</option>
        @endforeach
    </select>
</div>
