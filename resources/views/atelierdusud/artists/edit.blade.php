{{-- ce code affiche un formulaire pour éditer un artiste existant. Lorsque vous remplissez le formulaire et que vous cliquez sur le bouton "Enregistrer", les données du formulaire sont envoyées au serveur et utilisées pour mettre à jour l'artiste dans la base de données --}}
{{-- C'est un composant Blade qui inclut le layout principal de l'application. Le layout principal contient généralement des éléments qui sont communs à plusieurs pages --}}
<x-guest-layout>
    <div class="w-4/5 p-20 m-auto">

        <div class="bg-white sticky shadow-lg">
            <div class="flex items-center justify-between px-8 py-2">
                <h2 class="font-semibold font-amaranth text-xl text-gray-800 leading-tight">
                    ✏️ Editer un artiste</h2>
                    <a href="{{ route('artists.index') }}"
                        class="border-2 font-amaranth border-yellow-300 rounded-md hover:bg-yellow-300 py-2 px-3 transition-all duration-300">
                        ⬅️ Retour aux artistes</a>
            </div>
        </div>

        <div class="bg-white max-w-5xl mx-auto my-12 p-8 shadow-xl rounded-sm">
            {{-- C'est le formulaire qui permet de modifier un artiste existant. L'attribut action du formulaire est défini sur la route qui gère la mise à jour des artistes  --}}
            {{-- L'attribut method est défini sur POST, qui est la méthode HTTP utilisée pour envoyer les données du formulaire. --}}

            {{-- @csrf et @method('PUT'): Ce sont des directives Blade qui génèrent un jeton CSRF et définissent la méthode HTTP du formulaire sur PUT. Ces directives sont nécessaires pour protéger contre les attaques de type cross-site request forgery et pour indiquer à Laravel que le formulaire doit envoyer une requête PUT. --}}

            <form action="{{ route('artists.update', $artist->id) }}" method="PUT" class="flex flex-col gap-8">


                @csrf
                @method('PUT')
                <div>
                    <h3 class="text-lg font-semibold leading-8 tracking-tight text-gray-900">{{ $artist->name }}</h3>
                </div>

                <div class="flex">
                    {{-- C'est un champ de formulaire de type texte pour l'URL de l'artiste. La valeur de ce champ est prérempli avec la valeur actuelle de l'URL de l'artiste. Lorsque le formulaire est soumis, les données saisies par l'utilisateur seront utilisées pour mettre à jour l'URL de l'artiste. --}}


                    <img class="aspect-[4/5] w-52 h-52 flex-none rounded-full object-cover" src="{{ $artist->url }}"
                        alt="">
                    <div class="flex-auto mx-10">
                        <h3>A propos</h3>
                        <p class="my-6 text-base leading-7 text-gray-600">
                            {{ Str::limit($artist->description, 200) }}
                        </p>

                    </div>
                    {{-- C'est un élément img HTML qui affiche une image de l'artiste. L'attribut src est défini sur l'URL de l'artiste, ce qui signifie que l'image sera chargée à partir de cette URL. --}}


                </div>
                {{-- C'est un bouton qui soumet le formulaire. Lorsque vous cliquez sur ce bouton, les données du formulaire sont envoyées au serveur et utilisées pour mettre à jour l'artiste. --}}

                <div class="flex items-center" x-data="{ on: false }">
                    <button type="button"
                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 bg-gray-200"
                        role="switch" aria-checked="false" x-ref="switch" x-state:on="Enabled" x-state:off="Not Enabled"
                        :class="{ 'bg-blue-600': on, 'bg-gray-200': !(on) }" aria-labelledby="annual-billing-label"
                        :aria-checked="on.toString()" @click="on = !on">
                        <span aria-hidden="true"
                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-0"
                            x-state:on="Enabled" x-state:off="Not Enabled"
                            :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }"></span>
                    </button>
                    <span class="ml-3 text-sm" id="annual-billing-label" @click="on = !on">
                        <span class="font-medium text-gray-900">Activer l'artiste</span>
                        <span class="text-gray-500">(apparaitra en ligne)</span>
                    </span>
                </div>

                <button type="submit"
                    class="bg-green-500 hover:bg-green-700 text-white uppercase tracking-widest py-2 rounded-md">Enregistrer
                </button>
            </form>
        </div>
</x-app-layout>
