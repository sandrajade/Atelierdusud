{{-- En résumé, ce code génère une page HTML qui affiche les détails de chaque artiste. Chaque détail est affiché dans un bouton, avec différents boutons montrant le nom de l'artiste, la collection, la catégorie, et le travail. --}}
<x-guest-layout>

    <h1>Detail de l'artiste</h1>

    {{-- C'est une boucle qui itère sur chaque élément du tableau $artists. Pour chaque itération (processus de répétition), l'élément actuel est assigné à la variable $artist. --}}

@foreach ($artists as $artist)
<div>
    {{-- À l'intérieur de la boucle, il y a quatre éléments <button>. Chaque bouton affiche une propriété différente de l'artiste actuel : le nom de l'artiste ($artist->artist), la collection ($artist->collection), la catégorie ($artist->category), et le travail ($artist->work). --}}
    <button type="button">

        Artiste : {{$artist->artist}}
    </button>
    <button type="button">

        Collection: {{$artist->collection}}
    </button>

    <button type="button">
        category : {{$artist->category}}
    </button>

    <button type="button">
        work : {{$artist->work}}
    </button>
</div>
{{-- @endforeach: C'est la fin de la boucle. --}}
@endforeach
{{-- </x-guest-layout>: C'est la fin du composant guest-layout. --}}
</x-guest-layout>
