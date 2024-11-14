@props([
    'href' => '#',
    'active' => false
])

<a href="{{ $href }}" class="p-2 {{ $active ? 'font-bold' : '' }}">{{ $slot }}</a>
