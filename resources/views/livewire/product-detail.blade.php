<div>
    @livewire('navbar')

    <div class="py-20 px-4 grid justify-items-center">
        <p class="text-4xl text-white font-semibold text-center">{{ $title }}</p>
    </div>

    <div class="px-16">
        <div class="pr-6">
            <a href="{{ route('home') }}" class="flex flex-row items-center gap-x-4">
                <svg width="22" height="38" viewBox="0 0 22 38" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-music-red hover:fill-red-600 -rotate-180">
                    <path d="M19.5334 14.9785L14.28 9.72518L5.72002 1.16518C3.90669 -0.621491 0.813354 0.658509 0.813354 3.21851V34.7918C0.813354 37.3518 3.90669 38.6318 5.72002 36.8185L19.5334 23.0052C21.7467 20.8185 21.7467 17.1918 19.5334 14.9785Z" />
                </svg>
                <p class="text-xl text-white italic hover:underline hover:underline-offset-4">Back</p>
            </a>
        </div>

        <div class="mt-16">
            <div class="flex flex-row">
                <img src="/{{ $product->image_path }}" alt="{{ $product->image_path }}_img" class="h-[375px]">
                <div class="flex flex-col ml-8 gap-y-6">
                    <p class="text-2xl font-semibold text-white">{{ $product->name }}</p>
                    <p class="text-4xl text-white">@convert($product->price)</p>
                    <div class="flex flex-row gap-x-2">
                        <p class="text-xl font-semibold text-white">Status:</p>
                        @if ($product->inventory->quantity > 0)
                        <p class="text-xl text-green-500">In stock</p>
                        @else
                        <p class="text-xl text-red-500">Out of stock</p>
                        @endif
                    </div>
                    <div class="flex flex-col gap-y-1">
                        <p class="text-xl font-semibold text-white">Description</p>
                        <p class="text-xl text-white">{{ $product->desc }}</p>
                    </div>
                    <div class="flex flex-row gap-x-2">
                        <p class="text-xl font-semibold text-white">Category:</p>
                        <p class="text-xl text-white">{{ $product->category->category_name }}</p>
                    </div>
                    <div class="flex flex-row gap-x-2">
                        <p class="text-xl font-semibold text-white">SKU:</p>
                        <p class="text-xl text-white">{{ $product->sku }}</p>
                    </div>
                    <div class="flex flex-row items-center gap-x-10">
                        <div class="flex flex-row gap-x-4 text-xl text-white items-center content-center font-semibold mt-8">
                            <button type="button" wire:click.prevent="subtractQuantity">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.2375 0.5H7.7625C3.2125 0.5 0.5 3.2125 0.5 7.7625V18.225C0.5 22.7875 3.2125 25.5 7.7625 25.5H18.225C22.775 25.5 25.4875 22.7875 25.4875 18.2375V7.7625C25.5 3.2125 22.7875 0.5 18.2375 0.5ZM20.5 13.9375H5.5C4.9875 13.9375 4.5625 13.5125 4.5625 13C4.5625 12.4875 4.9875 12.0625 5.5 12.0625H20.5C21.0125 12.0625 21.4375 12.4875 21.4375 13C21.4375 13.5125 21.0125 13.9375 20.5 13.9375Z" fill="#951D1D"/>
                                </svg>
                            </button>
                            
                            {{ $quantity }}
    
                            <button type="button" wire:click.prevent="addQuantity">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.2375 0.5H7.7625C3.2125 0.5 0.5 3.2125 0.5 7.7625V18.225C0.5 22.7875 3.2125 25.5 7.7625 25.5H18.225C22.775 25.5 25.4875 22.7875 25.4875 18.2375V7.7625C25.5 3.2125 22.7875 0.5 18.2375 0.5ZM20.5 13.9375H13.9375V20.5C13.9375 21.0125 13.5125 21.4375 13 21.4375C12.4875 21.4375 12.0625 21.0125 12.0625 20.5V13.9375H5.5C4.9875 13.9375 4.5625 13.5125 4.5625 13C4.5625 12.4875 4.9875 12.0625 5.5 12.0625H12.0625V5.5C12.0625 4.9875 12.4875 4.5625 13 4.5625C13.5125 4.5625 13.9375 4.9875 13.9375 5.5V12.0625H20.5C21.0125 12.0625 21.4375 12.4875 21.4375 13C21.4375 13.5125 21.0125 13.9375 20.5 13.9375Z" fill="#951D1D"/>
                                </svg>    
                            </button>
                            <a href="" class="flex h-14 w-56 lg:w-64 text-center bg-music-red items-center justify-center rounded-[60px] ml-4">
                                <p class="text-xl text-white font-normal">Add to cart</p>
                            </a>  
                        </div>        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
