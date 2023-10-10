<x-app-layout>
    <div>
        <h2>Artistes</h2>
        <a href="{{ route('artists.index') }}">Retour aux artistes</a>
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
                    <label for="name">Oeuvres</label>
                    @foreach ($artist->works as $work)
                        <div>
                            <ul>
                                <li>{{ $work->title }}</li>
                                <li>{{ $work->url }}</li>
                                @foreach ($work->categories as $category)
                                    <ul>
                                        <li>{{ $category->name }}</li>
                                    </ul>
                                @endforeach
                            </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
