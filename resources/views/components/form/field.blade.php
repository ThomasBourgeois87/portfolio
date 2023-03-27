@props([
    'type' => 'text',
    'label' => '',
    'name' => Str::random(10)
])

<div class="field">
    <label {{ $attributes->merge(['for' => $name, 'name' => $name]) }}>{{ $label }}</label>
    <input {{ $attributes->merge(['type' => $type, 'id' => $name, 'name' => $name]) }} />
    @error($name)
        <div class="error">{{ $message }}</div>
    @enderror
</div>
