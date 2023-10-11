{{-- ce code affiche une liste d'artistes, avec des liens pour voir le détail de chaque artiste et un formulaire pour supprimer chaque artiste. Lorsque vous cliquez sur un lien ou que vous soumettez un formulaire (delete), une requête HTTP est envoyée à une route spécifique qui gère l'opération correspondante --}}

<x-app-layout>

    <div class="bg-white sticky top-0 shadow-lg">
        <div class="flex items-center justify-between px-8 py-2">
            <h2 class="font-semibold text-xl font-amaranth text-gray-800 leading-tight">
                👩‍🎨 Artistes
            </h2>
            <a href="{{ route('artists.create') }}" class="font-amaranth border-2 border-yellow-300 rounded-md hover:bg-yellow-300 py-2 px-3 transition-all duration-300">
                ➕ Ajouter un nouvel artiste
            </a>
        </div>
    </div>

    {{-- je crée mon tableau qui affiche une liste d'artistes, avec chaque artiste représenté par une ligne du tableau. --}}
    <div class="p-8 w-full">
        <table class="w-full">
            <thead>
                <tr>
                    <th scope="col" class="px-6 py-3 text-left">Photo</th>
                    <th scope="col" class="px-6 py-3 text-left">Nom</th>
                    <th scope="col" class="px-6 py-3 text-left">Description</th>
                    <th scope="col" class="px-6 py-3 text-left">État</th>
                </tr>
            </thead>
            <tbody class="divide-y-2 shadow-xl">
                {{-- foreach est une boucle Blade qui parcourt chaque artiste dans la variable $artists. Pour chaque artiste, elle génère une ligne de tableau. --}}
                @foreach ($artists as $artist)
                <tr class="bg-white hover:bg-gray-100 transition-all duration-150">
                    {{-- C'est une cellule de tableau qui affiche le nom de l'artiste. propriété name  --}}
                    <td class="px-6 py-3">
                        <img class="rounded-full h-12 w-12 object-cover" src="{{ url($artist->url) }}" alt="{{ $artist->name }}">
                    </td>
                    <td class="px-6 py-3 font-semibold">
                        <a href="{{ route('artists.show', $artist) }}">{{ $artist->name }}</a>
                    </td>
                    <td class="px-6 py-3">
                        {{ Str::limit($artist->description, 50) }}
                        <a href="{{ route('artists.show', $artist) }}" class="ml-2 text-gray-600 text-sm hover:border-gray-300 border border-transparent py-0.5 px-2">→ lire la suite</a>
                    </td>
                    <td class="px-6 py-3">
                        @switch($artist->status)
                        @case(0)
                        <span class="rounded-full text-xs py-1 px-3 bg-red-100 border border-red-500 text-red-700">Inactif</span>
                        @break
                        @case(1)
                        <span class="rounded-full text-xs py-1 px-3 bg-green-100 border border-green-500 text-green-700">Actif</span>
                        @break
                        @endswitch
                    </td>

                    <td class="px-6 py-3 ">
                        <div class="flex items-center justify-between">
                            {{-- C'est un lien qui pointe vers la route artists.show pour l'artiste actuel. Lorsque vous cliquez sur ce lien, vous serez redirigé vers la page de détail de l'artiste. --}}
                            <a class="text-sm text-blue-600 hover:border-gray-300 border border-transparent py-0.5 px-2 transition-all duration-150" href="{{ route('artists.edit', $artist) }}">✏️ Editer</a>
                            <form action="{{ route('artist.destroy', $artist) }}" method="POST">
                                {{-- @csrf et @method('delete'): Ce sont des directives Blade qui génèrent un jeton CSRF (est une mesure de sécurité utilisée pour protéger les applications web contre les attaques de type cross-site request forgery (CSRF).) et définissent la méthode HTTP du formulaire sur DELETE. Ces directives sont nécessaires pour protéger contre les attaques de type cross-site request forgery et pour indiquer à Laravel que le formulaire doit envoyer une requête DELETE. --}}
                                @csrf
                                @method('delete')
                                {{-- ce code affiche un bouton qui, lorsqu'il est cliqué, soumet le formulaire et envoie les données du formulaire au serveur. cela signifie que l'utilisateur souhaite supprimer un artiste --}}

                                {{-- type="submit": Cet attribut indique que le bouton est utilisé pour soumettre un formulaire --}}
                                <button class="text-sm text-red-600 hover:border-gray-300 border border-transparent py-0.5 px-2 transition-all duration-150" type="submit">❌ Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
