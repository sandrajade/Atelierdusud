<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editer un artiste
        </h2>
        <a href="{{ route('artists.index') }}" class="border border-green-600 text-green-600 rounded-md py-2 px-3">
            Retour aux artistes
        </a>
    </x-slot>

    <div class="">
     <form class="flex flex-col w-6/12 mx-auto" method="post" action="{{ route('artistes.update', $artist) }}">
            @method('put')
            @csrf
            <input class="my-4 rounded" type='text' name='name' value="{{ $artist->name }}">
            <textarea class="rounded" type="text" name="description" rows="10" cols="50">{{ $artist->description }}</textarea>

            <div class="py-4">
                <label class="font-semibold text-gray-500" for="url">url</label>
                <input class="flex items-center h-8 px-4 w-48 bg-gray-50 mt-2 rounded focus:outline-none focus:ring-2" type="text" name="url" value="{{ $artist->url }}">

            </div>
            @foreach ( $categories as $category )

            <div class="">
                <input type="checkbox" name="categories[]" value="{{ $category->id }}" @if ($artist->categories->contains($category->id))
                checked
                @endif
                class="border-gray-800">
                <label>{{ $category->name }}</label>

                @endforeach
                <button type="submit" class="btn px-2 py-3 bg-blue-300 rounded hover:scale-105 hover:bg-blue-400 ease-in-out duration-200">Enregistrer</button>
            </div>

        </form>
    </div>
</x-app-layout>
