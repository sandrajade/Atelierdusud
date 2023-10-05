<x-guest-layout>
    <x-slot name="header">
        <h2>Ajouter une collection</h2>
        <a href="{{ route('atelierdusud.collections.index') }}">Retour aux collections</a>
    </x-slot>

    <div>
        {{-- lorsque le formulaire est soumis,
             il enverra une requête POST à la route nommée 'atelierdusud.collection.store' pour créer le nouveau thème --}}
        <form action="{{ route('atelierdusud.collections.store') }}" method="POST">
            @csrf
            <div>
                <label for="title">Titre</label>
                <input type="text" id="title" name="title">
            </div>
            <div>
                <label for="description">Description</label>
                <textarea type="text" name="description" cols="30" rows="10" placeholder="Entrer votre description"></textarea>
            </div>
            <div>
                <button type="submit">Creer</button>
            </div>
        </form>
    </div>
</x-guest-layout>
