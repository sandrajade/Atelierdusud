<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Artiste
        </h2>
        <a href="{{ route('atelierdusud.artists.index') }}" class="border border-green-600 text-green-600 rounded-md py-2 px-2">Retour aux
    artistes</a>
    </x-slot>

    <div class="relative overflow-x-auto mt-12 max-w-2xl mx-auto px-8">
        <div class="flex flex-col text-sm  text-gray-500 uppercase bg-gray-50 rounded shadow-lg p-12 mt-12 dark:bg-gray-700 dark:text-gray-400">
            <div class="pb-8">
                <div class="flex justify-center text-xl font-bold h-8 px-4 w-full bg-gray-50 mt-2">
                    {{ $artist->name }}
                </div>
            </div>

            <div class="py-4">
                <label class="font-semibold text-gray-500" for="name">Description :</label>
                <div class="flex items-center text-sm h-40 px-4 w-full bg-gray-50">
                    {{ $artist->description }}
                </div>
            </div>

            <div class="py-4">
                <label class="font-semibold text-gray-500" for="name">Collections :</label>
                @foreach ($artist->collections->sortBy('step_number') as $collection)
                    <div
                        class="flex items-center h-8 px-4 w-full bg-gray-50 mt-2">
                        <ul class=" marker:text-sky-400 list-disc">
                            <li>Etape {{ $step->step_number }} -
                                {{ $step->step_desc }}
                                {{ $step->dose }} dose de
                            {{ $step->ingredient->name }}</li>
                        </ul>
                    </div>
                @endforeach
            </div>

            <div class="py-4">
                <label class="font-semibold text-gray-500" for="name">Thèmes :</label>
                @foreach ($artist->categories as $category)
                <div class="flex items-center text-xs h-8 px-4 w-48 bg-gray-50 mt-2 ">
                    <ul class="marker:text-red-400 list-disc">
                        <li>{{ $theme->name }}</li>
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
