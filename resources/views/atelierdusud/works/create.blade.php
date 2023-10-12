<x-app-layout>
    <div>
        <h2>🖼️ Ajouter une oeuvre </h2>
        <a href="{{ route('works.index') }}">
            ⬅️ Retour aux oeuvres</a>
    </div>

    <div>
        <form action="{{ route('works.store') }}" method="POST">
            @csrf
            <div>
                <label for="url">url</label>
                <input type="text" id="url" name="url">
            </div>
            <div>
                <label for="title ">Titre:</label>
                <input type="text" name="title" placeholder="Entrer le titre de votre oeuvre"
                    @error('name') class="border-red_600 @enderror">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="description"></label>
                <textarea type="text" name="description" id="description" cols="30" rows="10"></textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="category">Categorie:</label>
                <input type="checkbox" name="categories[]" value="{{ $category->id }}">
                @foreach ($categories as $category)
                    <label>{{ $category->name }}</label>
                @endforeach
            </div>
            <div>
                <label for="status">Status</label>
                <input type="text" id="status" id="status">
            </div>
            <div>
                <button type="submit">Enregistrer</button>
            </div>
    </div>
</x-app-layout>
