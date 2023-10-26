<x-app-layout>
    <div class="w-3/6 m-auto">
        <div class="bg-white sticky p-3 my-2 shadow-lg">
            <div class="flex items-center justify-between m-auto">
                <h2 class="font-semibold font-amaranth text-xl text-gray-800 leading-tight">
                    👩‍🎨 {{ $artist->name }}
                </h2>
                <a href="{{ route('artists.index') }}"
                    class="font-amaranth border-2 border-yellow-300 rounded-md hover:bg-yellow-300 py-2 px-3 transition-all duration-300">
                    ⬅️ Retour aux artistes
                </a>
            </div>
        </div>
        <div class="bg-white max-w-5xl mx-auto my-6 p-8 shadow-xl rounded-sm">

            <div class="flex">

                <img class="aspect-[4/5] w-52 h-52 flex-none rounded-full object-cover shadow-xl shadow-orange-500/50"
                    src="{{ $artist->url }}" alt="">
                <div class="flex-auto mx-10">
                    <h3>A propos</h3>
                    <p class="my-6 text-base leading-7 text-gray-600">
                        {{ Str::limit($artist->description, 200) }}
                    </p>
                </div>
            </div>
        </div>

</x-app-layout>
