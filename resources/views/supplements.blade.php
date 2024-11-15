<x-layout metaTitle="Supplements">
    <header>
        <h1 class="text-center font-bold text-4xl mt-4 mb-1">Supplements List</h1>
        <h2 class="text-center font-semi text-2xl mb-4">Recommended by Experts</h2>
    </header>

    {{-- Supplements Section --}}
    <section class="flex flex-wrap justify-center gap-4 p-2 m-auto">
        @foreach ($supplements as $supplement)
            {{-- Supplement Card --}}
            <article class="flex flex-col w-[300px] border border-green-400 rounded p-4 pt-3 gap-2">
                <h3 class="font-semibold text-md">{{ $supplement->name }}</h3>
                <div class="text-sm text-gray-500 font-medium">{{ $supplement->description }}</div>

                {{-- Supplement Links --}}
                <div class="mt-auto flex flex-col gap-2">
                    <a class="text-sm text-green-500 hover:underline" href="#">Read More</a>
                    <a class="text-center border border-green-400 hover:bg-green-400 btn btn-sm bg-white" href="{{ $supplement->purchase_url }}" target="_blank">BUY IT NOW</a>
                </div>
            </article>
        @endforeach
    </section>
</x-layout>
