<nav>
    <ul>
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/supplements" :active="request()->is('supplements')">Supplements</x-nav-link>
        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
    </ul>
</nav>
