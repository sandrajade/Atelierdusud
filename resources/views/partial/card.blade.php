<div class="my-12 flex flex-row justify-around">

    <div
        class="group transition cursor-pointer duration-300 ease-in-out flex flex-col items-stretch w-64  bg-sable_fonce rounded hover:shadow hover:rotate-6 hover:drop-shadow-xl relative max-w-xs overflow-hidden">
        <div>
            <div>
                <h3 class="text-center font-pacifico m-3">{{ $category->name }}</h3>
                <h3 class="text-center font-pacifico m-3">{{ $artist->name }}</h3>
            </div>
            <div class="overflow-hidden relative">
                <button wire:click.prefetch='show({{ $artist }})'>
                    <img class=" bg-cover h-full bg-no-repeat bg-center group-hover:scale-125  max-w-xs transition duration-300 ease-in-out"
                        src="{{ $artist->url }}">
                </button>
            </div>
        </div>
       

        </div>

    </div>
</div>