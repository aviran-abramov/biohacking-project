<x-layout metaTitle="Supplements">
    <h1>This is the Supplements page</h1>

    {{-- Supplements Section --}}
    <section class="flex gap-2 p-2">
        @foreach ($supplements as $supplement)
            {{-- Supplement Card --}}
            <div class="flex flex-col border border-gray-300 rounded p-4 pt-3 gap-2 flex-1">
                <div class="font-semibold text-md">{{ $supplement->name }}</div>
                <div class="text-sm text-gray-500 font-medium">{{ $supplement->description }}</div>
                <a class="mt-auto text-center border border-green-400 hover:bg-green-400 btn btn-sm bg-white" href="{{ $supplement->purchase_url }}" target="_blank">BUY IT NOW</a>
            </div>
        @endforeach
    </section>
</x-layout>
