<x-app-layout>

    <div class="bg-white sticky top-0 shadow-lg">
        <div class="flex items-center justify-between px-8 py-2">
            <h2 class="font-semibold font-amaranth text-xl text-gray-800 leading-tight">
                👩‍🎨 Artistes > {{ $artist->name }}
            </h2>
            <a href="{{ route('artists.index') }}" class="font-amaranth border-2 border-yellow-300 rounded-md hover:bg-yellow-300 py-2 px-3 transition-all duration-300">
                ⬅️ Retour aux artistes
            </a>
        </div>
    </div>

    <div>
        <div>
            <div>
                <div>
                    <label for="name">Name</label>
                    {{ $artist->name }}
                </div>
            </div>
            <div>
                <label for="name">Description</label>
                <div>
                    {{ $artist->description }}
                </div>
                <div>
                    <label for="url">Url</label>
                    {{ $artist->url }}
                </div>
                <div>
                    <label for="name">Collections</label>

                    @foreach ($artist->collections as $collection)
                    <div>
                        <ul>
                            <li>Collection {{ $collection->title}}</li>
                            <label for="name">Oeuvres</label>
                            @foreach ($collection->works as $work)
                            <div>
                                <ul>
                                    <li>{{ $work->title }}</li>
                                    <li>{{ $work->url }}</li>
                                </ul>
                            </div>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
