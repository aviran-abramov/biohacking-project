@props([
    'href' => '#',
    'active' => false
])

<a href="{{ $href }}" class="{{ $active ? 'font-bold' : '' }}">{{ $slot }}</a>
