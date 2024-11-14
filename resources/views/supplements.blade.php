<x-layout metaTitle="Supplements">
    <h1>This is the Supplements page</h1>

    <div class="flex gap-2 p-2">
        @foreach ($supplements as $supplement)
            <div class="border border-gray-300 rounded p-2">
                <div>{{ $supplement->name }}</div>
                <div>{{ $supplement->description }}</div>
                <a href="{{ $supplement->purchase_url }}">BUY IT NOW</a>
            </div>
        @endforeach
    </div>
</x-layout>
