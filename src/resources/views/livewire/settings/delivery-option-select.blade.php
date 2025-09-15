<div>
    <select
        wire:change="handleUpdate($event.target.value)"
        id="delivery_option"
        name="delivery_option"
        class="{{ $attrs['class'] ?? '' }}">
        <option value="">Select a notification option</option>
        @foreach($options as $id => $name)
            <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>
</div>
