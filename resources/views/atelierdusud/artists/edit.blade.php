{{-- ce code affiche un formulaire pour éditer un artiste existant. Lorsque vous remplissez le formulaire et que vous cliquez sur le bouton "Enregistrer", les données du formulaire sont envoyées au serveur et utilisées pour mettre à jour l'artiste dans la base de données --}}
{{-- C'est un composant Blade qui inclut le layout principal de l'application. Le layout principal contient généralement des éléments qui sont communs à plusieurs pages --}}
<x-guest-layout>

    <slot>name="header">
        <h2>Editer un artiste</h2>
        <a href="{{ route('artists.index') }}">Retour aux artistes</a>
    </slot>

    <div>
        {{-- C'est le formulaire qui permet de modifier un artiste existant. L'attribut action du formulaire est défini sur la route qui gère la mise à jour des artistes  --}}
        {{-- L'attribut method est défini sur POST, qui est la méthode HTTP utilisée pour envoyer les données du formulaire. --}}

        {{-- @csrf et @method('PUT'): Ce sont des directives Blade qui génèrent un jeton CSRF et définissent la méthode HTTP du formulaire sur PUT. Ces directives sont nécessaires pour protéger contre les attaques de type cross-site request forgery et pour indiquer à Laravel que le formulaire doit envoyer une requête PUT. --}}

        <form action="{{ route('artists.update') }}" method="PUT">

            @csrf
            @method('PUT')
            <div>

                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ $artist->name }}">
            </div>

            <div>
                {{-- C'est un champ de formulaire de type texte pour l'URL de l'artiste. La valeur de ce champ est prérempli avec la valeur actuelle de l'URL de l'artiste. Lorsque le formulaire est soumis, les données saisies par l'utilisateur seront utilisées pour mettre à jour l'URL de l'artiste. --}}
                <label for="url">url</label>
                <input type="text" id="url" name="url" value="{{ $artist->url }}">
            </div>
            {{-- C'est un élément img HTML qui affiche une image de l'artiste. L'attribut src est défini sur l'URL de l'artiste, ce qui signifie que l'image sera chargée à partir de cette URL. --}}
            <img src="{{ $artist->url }}" />
            <div>
            <label for="status">status</label>
            {{-- La valeur de ce champ est prérempli avec la valeur actuelle du statut de l'artiste --}}
                <input type="text" id="status" name="status" value="{{ $artist->status }}">
            </div>
            <div>
                {{-- C'est un bouton qui soumet le formulaire. Lorsque vous cliquez sur ce bouton, les données du formulaire sont envoyées au serveur et utilisées pour mettre à jour l'artiste. --}}
                <button type="submit">Enregistrer</button>
            </div>
        </form>

</x-guest-layout>
