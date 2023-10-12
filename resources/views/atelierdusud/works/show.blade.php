<x-app-layout>

    <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
            <h2 class="font-semibold font-amaranth text-xl text-gray-800 leading-tight">
                🖼️ Oeuvres > {{ $work->name }}
            </h2>
            <a href="{{ route('works.index') }}"
                class="font-amaranth border-2 border-yellow-300 rounded-md hover:bg-yellow-300 py-2 px-3 transition-all duration-300">
                ⬅️ Retour aux oeuvres
            </a>
        </div>


 
        <div>
            <div>
                <div>
                    <label for="name">Titre</label>
                    {{ $work->title }}
                </div>
            </div>
            <div>
                <label for="name">Description</label>
                <div>
                    {{ $work->description }}
                </div>
                <div>
                    <label for="url">Url</label>
                    {{ $work->url }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
