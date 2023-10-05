<x-app-layout>
    <x-slot>
    <h2>Artistes</h2>
    <a href="{{ route('artists.index')}}">Retour aux artistes</a>
    </x-slot>

    <div>
        <div>
            <div>
                <div>
                    <label for="name">Name</label>
                    {{ $artiste->name }}
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
                        </ul>
                    </div>

                </div>
                <div>
                    <label for="name">Oeuvres</label>
                    @foreach ($collection->works as $work)
                    <div>
                        <ul>
                            <li>{{ $work->title }}</li>
                            <li>{{ $work->url }}</li>

                        </ul>
                    </div>

                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
