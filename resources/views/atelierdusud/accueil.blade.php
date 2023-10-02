<x-guest-layout>

    <div class="bg-gradient-to-b from-purple-500 to-purple-100">

        <div class="px-10">
            <div class="relative py-12 px-24">
                <h1
                    class="text-center font-pacifico text-5xl p-5b bg-gradient-to-b from-red-500 to-cyan-400 via-red-200 bg-clip-text text-transparent -rotate-6 py-5">
                    Atelier du sud </h1>

                <p class="text-center font-poppins text-gray-700 py-5">text pour le </p>
            </div>

            

                    </div>

                    



                </div>
                

                <div>

                    {{-- carousel debut --}}

                    <div
                        class="flex items-center justify-center w-full h-full sm:py-8 px-4 rounded-md font-pacifico text-center shadow-md">
                        <div class="w-full relative flex items-center justify-center">
                            <button aria-label="slide backward"
                                class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer"
                                id="prev">
                                <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                                <div id="slider"
                                    class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                                    <div class="flex flex-shrink-0 relative w-36 h-96 sm:w-auto bg-transparent">
                                        <img src="https://cdn.goody.buzz/media/20190625125414/cuill%C3%A8re-cocktail.jpg"
                                            alt="Cuillère à Cocktail"
                                            class="object-contain h-full object-center w-full rounded" />
                                        <div class="absolute w-full h-full p-6">
                                            <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-gray-900">
                                                Cuillère à Cocktail</h2>

                                        </div>
                                    </div>
                                    <div class="flex flex-shrink-0 relative w-full  h-96 sm:w-auto">
                                        <img src="https://i.pinimg.com/736x/fa/24/1f/fa241fa279d1cb35ef16ca76a943f426--vin-cocktails.jpg"
                                            alt="Outil à étages pour Cocktail"
                                            class="object-cover object-center w-full rounded top-10" />
                                        <div class="absolute w-full h-full p-6">
                                            <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-gray-900">
                                                Outil à étages pour Cocktail</h2>

                                        </div>
                                    </div>
                                    <div class="flex flex-shrink-0 relative w-full sm:w-auto h-96">
                                        <img src="https://media.madeindesign.com/nuxeo/products/5/0/coffret-cocktail-acier_madeindesign_350443_original.jpg"
                                            alt="Coffret Cocktail" class="object-cover object-center w-full" />
                                        <div class="absolute w-full h-full p-6">
                                            <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-gray-900">
                                                Coffret Cocktail</h2>

                                        </div>
                                    </div>
                                    <div class="flex flex-shrink-0 relative w-full sm:w-auto h-96">
                                        <img src="https://ae01.alicdn.com/kf/HTB1W_JTOXXXXXXfXXXXq6xXFXXXI/Stainless-Steel-Measuring-Shot-Cup-Ounce-Jigger-Bar-Cocktail-Drink-Mixer-Liquor-Measuring-Cup-Measurer-Mojito.jpg"
                                            alt="Verre doseur pour Cocktail"
                                            class="object-cover object-center w-full rounded" />
                                        <div class=" absolute w-full h-full p-6">
                                            <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-gray-900">
                                                Verre doseur pour Cocktail</h2>

                                        </div>
                                    </div>

                                    <div class="flex flex-shrink-0 relative w-full sm:w-auto h-96">
                                        <img src="https://m.media-amazon.com/images/I/61DhiNjIxwL._AC_SX450_.jpg"
                                            alt="Pilon pour Cocktail"
                                            class="object-cover object-center w-full rounded" />
                                        <div class=" absolute w-full h-full p-6">
                                            <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-gray-900">
                                                Verre doseur pour Cocktail</h2>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <button aria-label="slide forward"
                                class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400"
                                id="next">
                                <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    {{-- carousel fin --}}
                

        </div>
    </div>

    <div class="bg-[#fcaba6]">

        @foreach ($categories as $category)
            @include('_partial.url', $category)
        @endforeach
    </div>

</x-guest-layout>
