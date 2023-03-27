@props([
    'method' => 'POST',
    'action',
])

<form {{ $attributes->merge(['method' => $method, 'action' => $action]) }}>
    @csrf
    {{ $slot }}
</form>
