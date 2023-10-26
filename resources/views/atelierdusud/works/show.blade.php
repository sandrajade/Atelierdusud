<x-app-layout>
    <div class="m-auto w-1/3">
        <div class="bg-white sticky p-3 my-5 shadow-lg">
            <div class="flex items-center justify-between m-auto">
                <h2 class="font-semibold font-amaranth text-xl text-gray-800 leading-tight">
                    🖼️ Oeuvres {{ $work->name }}
                </h2>
                <a href="{{ route('works.index') }}"
                    class="font-amaranth border-2 border-yellow-300 rounded-md hover:bg-yellow-300 py-2 px-3 transition-all duration-300">
                    ⬅️ Retour aux oeuvres
                </a>
            </div>
        </div>
        
        <div class="bg-white mx-auto my-2 p-8 rounded-sm shadow-2xl shadow-orange-500/40">

            <div class="flex">

                <img class="w-full" src="{{ $work->url }}" alt="">
                <div class="ml-20">
                    <h3>Description</h3>
                    <p class="my-6 text-base leading-7 text-gray-600">
                        {{ Str::limit($work->description, 200) }}
                    </p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
