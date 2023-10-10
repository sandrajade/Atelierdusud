<x-app-layout>
    <div name="header">
        <h2>Editer une catégorie</h2>
        <a href="{{ route('categories.index') }}"></a>
    </div>
    <form action="{{ route('categories.update') }}" method="PUT">
    @csrf
    @method('PUT')
    <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ $category->name }}">
            </div>
            <div>
                <label for="status">status</label>
                <input type="text" id="status" name="status" value="{{ $category->status }}">
            </div>
          <div>
            <button type="submit">Enregistrer</button>
        </div>
    </form>
</x-app-layout>
