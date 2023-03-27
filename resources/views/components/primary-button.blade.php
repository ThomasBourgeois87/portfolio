@props([
    'href',
    'type' => 'button',
    'style' => 'primaryButton'
])


@isset($href)
    <a
        class="{{ $style }}"
        href="{{ $href }}"
    >{{ $slot }}</a>
@else
    <button
        class="{{ $style }}"
        type="{{ $type }}"
    >{{ $slot }}</button>
@endisset
