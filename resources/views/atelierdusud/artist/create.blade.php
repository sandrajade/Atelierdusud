<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ajouter un artiste
        </h2>
        <a href="{{ route('atelierdusud.artists.index') }}" class="border border-bleu_clair text-bleu_fonce rounded-md py-2 px-3">
            Retour aux artiste
        </a>
    </x-slot>

    <div class="flex items-center overflow-x-auto mt-12 max-w-2xl mx-auto px-8 bg-sable_fonce rounded">
        <form
            class="flex flex-col text-sm bg-sable_clair text-gray-800 uppercase rounded shadow-lg mb-2.5 m-2.5 p-12 mt-12 dark:bg-gray-700 dark:text-gray-800 "
            action="{{ route('atelierdusud.artists.store') }}" method="Post">
            @csrf

            <div class="py-4">
                <label class="font-semibold text-gray-800" for="name" >Recette:</label>
                <input class="flex items-center h-8 px-4 w-96 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2"
                    type='text' name='name' placeholder="Entrer le nom de l'artiste"
                    class="border border-gray_600 @error('name') border-red_600 @enderror">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="py-4">
                <label class="font-semibold text-gray-500" for="name">Description:</label>
                <textarea class="flex items-center px-4  bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2"
                          type="text" name="description" rows="10" cols="50" placeholder="Entrer le nom de votre artiste"></textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="py-4">
                <label class="font-semibold text-gray-500" for="url">url</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2"
                    type="text" id="url" name="url">
            </div>

            <div class="py-4">
                <label class="flex px-4 mt-2 font-semibold text-gray-800" for="name">Category:</label>
                @foreach ($categories as $category)
                    <input class="flex-col checked:bg-cyan-500 active-boxOuter rounded" type="checkbox" name="categories[]" value="{{ $category->id }}">
                    <label>{{ $category->name }}</label>
                @endforeach
            </div>
            <div class="flex justify-center">
            <button type="submit" class="flex items-center justify-center h-8 px-2 w-36 hover: bg-gradient-to-b from-sable_clair to-sable-fonce via-rouge mt-8 rounded font-semibold text-sm text-gray-800 hover:bg-gradient-to-b from-red-200 to-red-500 via-cyan-400">Enregistrer</button>
            </div>
        </form>
    </div>
</x-app-layout>
