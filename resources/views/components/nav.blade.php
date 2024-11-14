<nav class="p-4 pl-0 flex items-center gap-8 w-[1100px] m-auto">
    <a class="font-bold text-2xl" href="/">My Longevity Protocols</a>

    <ul class="flex items-center gap-4">
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/supplements" :active="request()->is('supplements')">Supplements</x-nav-link>
        <x-nav-link href="/articles" :active="request()->is('articles')">Articles</x-nav-link>
        <x-nav-link href="/products" :active="request()->is('products')">Products</x-nav-link>
        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
    </ul>
</nav>
