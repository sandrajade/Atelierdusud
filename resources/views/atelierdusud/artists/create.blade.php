{{-- Mon code présente un formulaire pour créer un artiste --}}
{{-- x-app-layout contient des éléments qui sont communs a plusieurs pages --}}
<x-app-layout>
    {{-- le x-slot injecte du contenu de l'en-tête qui comprend un titre et un lien pour retourner à la liste des artistes --}}
    <x-slot name="header">
        <h2>Crée un artiste</h2>
        <a href="{{ route('artists.index')}}">
        Retour aux Artistes</a>

    </x-slot>

    <div>
        {{-- C'est le formulaire que les utilisateurs rempliront pour créer un nouvel artiste. L'attribut action du formulaire est défini sur la route qui gère la création de nouveaux artistes --}}
        <form action="{{ route('artists.store')}}" method="Post">
            {{-- L'attribut method est défini sur POST, qui est la méthode HTTP utilisée pour envoyer les données du formulaire. --}}
            @csrf
            {{-- CSRF est utilisés pour la protectino contre les attaques de type cross-site request forgery --}}
            <div>
                <label for="name">Artiste:</label>
                {{-- C'est un champ de saisie pour le nom de l'artiste. L'attribut name est défini sur 'name', qui est la clé qui sera utilisée dans les données de la requête. L'attribut placeholder fournit un indice à l'utilisateur sur ce qu'il doit entrer dans le champ. --}}
               {{-- @error ('name')...@enderror sont des directives de Blade qui affichent un message d'erreur si il y a une erreur de validation pour le champ 'name'. Si une erreur se produit, la bordure du champ de saisie sera colorée en rouge. --}}
                <input type='text' name='name' placeholder="Entrer le nom de votre artiste" class="border border-gray_600 @error('name') border-red_600 @enderror">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="name">Description</label>
                {{-- C'est un élément textarea HTML qui permet à l'utilisateur d'entrer du texte sur plusieurs lignes. --}}
{{-- name="description": C'est l'attribut qui permet de référencer les données du formulaire après la soumission du formulaire.
cols="50": Cet attribut définit la largeur du champ de texte en caractères.
rows="10": Cet attribut définit la hauteur du champ de texte en lignes. --}}
{{-- placeholder="Entrer votre description": Cet attribut affiche un texte d'indication dans le champ de texte avant que l'utilisateur n'entre du texte. --}}
                <textarea type="text" name="description" cols="50" rows="10" placeholder="Entrer votre description"></textarea>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div>
                <label for="url">url</label>
                <input type="text" id="url" name="url">
            </div>
            <div>
                {{-- C'est un champ de formulaire de type texte pour l'URL ou le statut de l'artiste. Lorsque le formulaire est soumis, les données saisies par l'utilisateur seront utilisées pour créer ou mettre à jour l'URL ou le statut de l'artiste. --}}
                <label for="status">status</label>
                <input type="text" id="status" name="status">
            </div>
        </form>
    </div>
</x-app-layout>
