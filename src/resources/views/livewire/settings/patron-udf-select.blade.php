<div>
    <select
        wire:model="selectedOption"
        id="School"
        name="School"
        class="{{ $attrs['class'] ?? '' }}">
        <option value="">Select an option</option>
        @foreach($options as $option)
            <option value="{{ $option }}">{{ $option }}</option>
        @endforeach
    </select>
</div>
