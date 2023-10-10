<x-guest-layout>
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl sm:text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Meet our leadership</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">We’re a dynamic group of individuals who are passionate about what we do and dedicated to delivering the best results for our clients.</p>
          </div>
          <ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-6 gap-y-20 sm:grid-cols-2 lg:max-w-4xl lg:gap-x-8 xl:max-w-none">

            @foreach (App\Models\Artist::all() as $artist)
            <li class="flex flex-col gap-6 xl:flex-row">
              <img class="aspect-[4/5] w-52 h-52 flex-none rounded-full object-cover" src="{{ $artist->url }}" alt="">
              <div class="flex-auto">
                <h3 class="text-lg font-semibold leading-8 tracking-tight text-gray-900">{{ $artist->name }}</h3>
                <p class="my-6 text-base leading-7 text-gray-600">
                    {{ Str::limit($artist->description, 200) }}
                </p>
                <a href="#" class="border rounded-full py-1 px-3 hover:border-yellow-300 transition-all duration-300">
                    Découvrir l'artiste <span aria-hidden="true">&rarr;</span>
                </a>
              </div>
            </li>
            @endforeach

          </ul>
        </div>
      </div>

</x-guest-layout>
