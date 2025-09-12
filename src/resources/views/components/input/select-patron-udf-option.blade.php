@props([
    'patronUdfOptions' => $this->form->patronUdfOptions
])
<div>
    <select {{ $attributes }} class="form-input block w-full px-4 py-3 border
        border-gray-300 rounded-md placeholder-gray-500 focus:outline-none
        focus:shadow-outline-blue focus:border-blue-300 transition duration-150
        ease-in-out">
        @foreach($patronUdfOptions as $patronUdfOption)
            <option value="{{ $patronUdfOption }}">
                {{ $patronUdfOption }}
            </option>
        @endforeach
    </select>
</div>
