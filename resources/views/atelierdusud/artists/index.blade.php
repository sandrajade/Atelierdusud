{{-- ce code affiche une liste d'artistes, avec des liens pour voir le détail de chaque artiste et un formulaire pour supprimer chaque artiste. Lorsque vous cliquez sur un lien ou que vous soumettez un formulaire (delete), une requête HTTP est envoyée à une route spécifique qui gère l'opération correspondante --}}

<x-app-layout>

    <div name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ajouter un artiste
        </h2>
        <a href="{{ route('artists.index') }}" class="border border-bleu_clair text-bleu_fonce rounded-md py-2 px-3">
            Retour aux artistes
        </a>
    </div>
    {{-- je crée mon tableau qui affiche une liste d'artistes, avec chaque artiste représenté par une ligne du tableau. --}}
    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col" class="px-6 py-3">url</th>
                    <th scope="col" class="px-6 py-3">Nom</th>
                    <th scope="col" class="px-6 py-3">Description</th>
                    <th scope="col" class="px-6 py-3">status</th>
                </tr>
            </thead>
            <tbody>


                {{-- foreach est une boucle Blade qui parcourt chaque artiste dans la variable $artists. Pour chaque artiste, elle génère une ligne de tableau. --}}
                @foreach ($artists as $artist)
                    <tr>
                        {{-- C'est une cellule de tableau qui affiche le nom de l'artiste. propriété name  --}}
                        <td class="px-6 py-3">{{ $artist->url }}</td>
                        <td class="px-6 py-3">{{ $artist->name }}</td>
                        <td class="px-6 py-3">{{ $artist->description }}</td>
                        <td class="px-6 py-3">{{ $artist->status }}</td>

                        <td class="px-6 py-3">
                            {{-- C'est un lien qui pointe vers la route artists.show pour l'artiste actuel. Lorsque vous cliquez sur ce lien, vous serez redirigé vers la page de détail de l'artiste. --}}
                            <a href="{{ route('artists.show', $artist) }}">Voir</a>
                            <a href="{{ route('artists.edit', $artist) }}">Edit</a>
                            <form action="{{ route('artist.destroy', $artist) }}" method="POST">

                                {{-- @csrf et @method('delete'): Ce sont des directives Blade qui génèrent un jeton CSRF (est une mesure de sécurité utilisée pour protéger les applications web contre les attaques de type cross-site request forgery (CSRF).) et définissent la méthode HTTP du formulaire sur DELETE. Ces directives sont nécessaires pour protéger contre les attaques de type cross-site request forgery et pour indiquer à Laravel que le formulaire doit envoyer une requête DELETE. --}}

                                @csrf
                                @method('delete')
                                {{-- ce code affiche un bouton qui, lorsqu'il est cliqué, soumet le formulaire et envoie les données du formulaire au serveur. cela signifie que l'utilisateur souhaite supprimer un artiste --}}

                                {{-- type="submit": Cet attribut indique que le bouton est utilisé pour soumettre un formulaire --}}
                                <button type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
