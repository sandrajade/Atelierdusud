<x-app-layout>

    <div name="header">
        <h2>Ajouter une catégorie</h2>
        <a href='{{ route('categories.index') }}'>Retour aux catégories</a>
    </div>

    <div>
        <form action='{{ route('categories.store') }}' method="POST">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="status">Status</label>
                <input type="text" id="status" name="status">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit">Enregistrer</button>
            </div>
        </form>
    </div>
</x-app-layout>
