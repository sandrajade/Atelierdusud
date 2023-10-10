
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Oeuvres
        </h2>
        <a href="{{ route('works.create') }}" class="border border-green-600 text-green-600 rounded-md py-2 px-3">
            Ajouter une oeuvre
        </a>
    </x-slot>

    <div class="relative overflow-x-auto mt-12 max-w-7xl mx-auto px-8">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Title</th>
                    <th scope="col" class="px-6 py-3">Artist</th>
                    <th scope="col" class="px-6 py-3">Categorie</th>
                    <th scope="col" class="px-6 py-3">Url</th>
                    <th scope="col" class="px-6 py-3">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($works as $work)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-800">
                        <td class="px-6 py-3">{{ $work->Titre }}</td>
                        <td class="px-6 py-3">{{ $work->description }}</td>
                        <td class="px-6 py-3">
                            @foreach ($work->categories as $category)
                                <div
                                    class="text-xs text-center text-gray-900  py-1 px-2 rounded-full">
                                    {{ $category->name }}</div>
                            @endforeach
                        </td>
                        <td class="flex items-center gap-2 px-6 py-3">
                            <a href="{{ route('works.show', $work) }}"
                                class="rounded-md border border-gray-800 text-sm text-gray-800 py-2 px-3 hover:bg-gray-200 hover:text-gray-400 cursor-pointer transition-all duration-200">Voir</a>
                            <a href="{{ route('works.edit', $work) }}"
                                class="rounded-md border border-gray-800 text-sm text-gray-800 py-2 px-3 hover:bg-gray-200 hover:text-gray-400 cursor-pointer transition-all duration-200">Edit</a>
                            <form action="{{ route('works.store', $work) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit"
                                    class="rounded-md border border-gray-800 text-sm text-gray-600 py-2 px-3 hover:bg-gray-200 hover:text-gray-400 cursor-pointer transition-all duration-200">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
