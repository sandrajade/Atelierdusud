<x-app-layout>
    <x-slot>
        <h2>Editer une oeuvre</h2>
        <a href="{{ route('works.index') }}">Retour aux oeuvres</a>
    </x-slot>

    <div>
        <form action="{{ route('works.update', $work) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="title">Titre</label>
                <input type="text" name="title" value="{{ $work->title }}">
            </div>
            <div>
                <label for="description">Description</label>
                <textarea type="text" name="description" cols="30" rows="10"></textarea>
            </div>
            <img src="{{ $work->url }}" />
            <div>
                <label for="status">status</label>
                {{-- La valeur de ce champ est prérempli avec la valeur actuelle du statut de l'artiste --}}
                <input type="text" id="status" name="status" value="{{ $work->status }}">
            </div>
            <div>
                <button type="submit">Enregistrer</button>
            </div>
        </form>
    </div>
</x-app-layout>
