<div>
    <select
        wire:model="selectedOption"
        id="School"
        name="School"
        class="form-input block w-full px-4 py-3 border border-gray-300 rounded-md placeholder-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out"
    >
        <option value="">Select a notification option</option>
        @foreach($options as $option)
            <option value="{{ $option }}">{{ $option }}</option>
        @endforeach
    </select>
</div>
