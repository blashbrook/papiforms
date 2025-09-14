<div>
    <select
        wire:model.live="selectedOption"
        id="delivery_option"
        name="delivery_option"
        class="form-input block w-full px-4 py-3 border border-gray-300 rounded-md placeholder-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out"
    >
        <option value="">Select a notification option</option>
        @foreach($options as $id => $name)
            <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>
</div>
