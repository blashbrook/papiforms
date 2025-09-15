<div>
    <select
        wire:model="selectedOption"
        id="School"
        name="School"
        class="{{ $attrs['class'] ?? '' }}">
        <option value="">Select a school</option>
        @foreach($options as $option)
            <option value="{{ $option }}">{{ $option }}</option>
        @endforeach
    </select>
</div>
