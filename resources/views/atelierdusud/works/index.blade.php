<x-app-layout>

    <div class="bg-white sticky top-0 shadow-lg">
        <div class="flex items-center justify-between px-8 py-2">
            <h2 class="font-semibold text-xl font-amaranth text-gray-800 leading-tight">
                🖼️ Oeuvres
            </h2>
            <a href="{{ route('works.create') }}"
                class="font-amaranth border-2 border-yellow-300 rounded-md hover:bg-yellow-300 py-2 px-3 transition-all duration-300">
                ➕ Ajouter une nouvelle oeuvre
            </a>
        </div>
    </div>

    <div class="p-8 w-full">
        <table class="w-full">
            <thead>
                <tr>
                    <th scope="col" class="px-6 py-3 text-left">Photo</th>
                    <th scope="col" class="px-6 py-3 text-left">Title</th>
                    <th scope="col" class="px-6 py-3 text-left">Artist</th>
                    <th scope="col" class="px-6 py-3 text-left">Categorie</th>
                    <th scope="col" class="px-6 py-3 text-left">Description</th>
                </tr>
            </thead>
            <tbody class="divide-y-2 shadow-xl">
                @foreach ($works as $work)
                    <tr class="bg-white hover:bg-gray-100 transition-all duration-150">
                        <td class="px-6 py-3">
                            <img class="rounded h-12 w-full object-cover" src="{{ url($work->url) }}"
                                alt="{{ $work->title }}">
                        </td>
                        <td class="px-6 py-3">{{ $work->title }}</td>
                        <td class="px-6 py-3">
                            @if ($work->categories)
                                @foreach ($work->categories as $category)
                                    <span
                                        class="text-xs text-center text-gray-900  py-1 px-2 rounded-full">{{ $category->name }}</span>
                                @endforeach
                            @endif
                        </td>
                        <td class="px-6 py-3 font-semibold">
                            {{ Str::limit($work->description, 50) }}
                            <a href="{{ route('works.show', $work) }}"
                                class="ml-2 text-gray-600 text-sm hover:border-gray-300 border border-transparent py-0.5 px-2">
                                → voir
                            </a>
                        </td>
                        <td class="px-6 py-3">
                            @switch($work->status)
                                @case(0)
                                    <span
                                        class="rounded-full text-xs py-1 px-3 bg-red-100 border border-red-500 text-red-700">Inactif</span>
                                @break

                                @case(1)
                                    <span
                                        class="rounded-full text-xs py-1 px-3 bg-green-100 border border-green-500 text-green-700">Actif</span>
                                @break
                            @endswitch
                        </td>

                        <td class="flex items-center gap-2 px-6 py-3">
                            <a class="text-sm text-blue-600 hover:border-gray-300 border border-transparent py-0.5 px-2 transition-all duration-150"
                                href="{{ route('works.edit', $work) }}">
                                ✏️ Editer
                            </a>
                            <form action="{{ route('works.destroy', $work) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button
                                    class="text-sm text-red-600 hover:border-gray-300 border border-transparent py-0.5 px-2 transition-all duration-150"
                                    type="submit">
                                    ❌ Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
