<x-app-layout>
    <div class="w-4/5 p-20 m-auto">
        <div class="bg-white sticky shadow-lg">
            <div class="flex items-center justify-between px-8 py-2">
                <h2 class="font-semibold font-amaranth text-xl text-gray-800 leading-tight">✏️ Editer une oeuvre</h2>
                <a href="{{ route('works.index') }}"
                    class="border-2 font-amaranth border-yellow-300 rounded-md hover:bg-yellow-300 py-2 px-3 transition-all duration-300">⬅️
                    Retour
                    aux oeuvres</a>
            </div>
        </div>

        <div class="bg-white max-w-5xl mx-auto my-12 p-8 shadow-xl rounded-sm">
            <form action="{{ route('works.update', $work->id) }}" method="PUT" class="flex flex-col gap-8">
                @csrf
                @method('PUT')

                <div>

                    <div>

                        <label for="url" class="block text-sm font-medium leading-6 text-gray-900">Photo</label>
                        <div class="mt-2 flex items-center gap-x-3">
                            <label for="url"
                                class="relative cursor-pointer rounded-md bg-white font-semibold text-blue-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-600 focus-within:ring-offset-2 hover:text-blue-500">
                                <span>Téléverser une photo</span>
                                <input id="url" name="url" type="file" class="sr-only">
                            </label>
                        </div>
                    </div>
                <div>
                    <div>
                        <label>Categorie:</label>
                        <select name="category_id" id="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex items-center" x-data="{ on: false }">
                        <button type="button"
                            class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 bg-gray-200"
                            role="switch" aria-checked="false" x-ref="switch" x-state:on="Enabled"
                            x-state:off="Not Enabled" :class="{ 'bg-blue-600': on, 'bg-gray-200': !(on) }"
                            aria-labelledby="annual-billing-label" :aria-checked="on.toString()" @click="on = !on">
                            <span aria-hidden="true"
                                class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-0"
                                x-state:on="Enabled" x-state:off="Not Enabled"
                                :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }"></span>
                        </button>
                        <span class="ml-3 text-sm" id="annual-billing-label" @click="on = !on">
                            <span class="font-medium text-gray-900">Activer l'oeuvre</span>
                            <span class="text-gray-500">(apparaitra en ligne)</span>
                        </span>
                    </div>

                    <button type="submit"
                        class="bg-green-500 hover:bg-green-700 text-white uppercase tracking-widest py-2 rounded-md">Enregistrer
                    </button>
                    </form>
                </div>
</x-app-layout>
