<div>
    @livewire('navbar')

    <div class="py-20 px-4 grid justify-items-center">
        <p class="text-4xl text-white font-semibold text-center">{{ $title }}</p>
    </div>

    <div class="px-16">
        <div class="pr-6">
            <div class="flex items-center gap-x-4">
                <a href="{{ route('home') }}" class="flex flex-row items-center gap-x-4">
                    <svg width="22" height="38" viewBox="0 0 22 38" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-music-red hover:fill-red-600 -rotate-180">
                        <path d="M19.5334 14.9785L14.28 9.72518L5.72002 1.16518C3.90669 -0.621491 0.813354 0.658509 0.813354 3.21851V34.7918C0.813354 37.3518 3.90669 38.6318 5.72002 36.8185L19.5334 23.0052C21.7467 20.8185 21.7467 17.1918 19.5334 14.9785Z" />
                    </svg>
                    <p class="text-xl text-white italic hover:underline hover:underline-offset-4">Back</p>
                </a>
            </div>
        </div>

        @if (count($items) > 0)
        <div class="flex flex-col justify-center mt-4 mb-20">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden justify-center flex">
                    <table class="text-left min-w-[50%] max-w-full">
                    <thead class="border-b bg-music-red">
                        <tr>
                        <th scope="col" class="text-lg font-medium text-white px-6 py-4 rounded-tl-lg">
                            
                        </th>
                        <th scope="col" class="text-lg font-medium text-white px-6 py-4">
                            Product
                        </th>
                        <th scope="col" class="text-lg font-medium text-white px-6 py-4">
                            Price
                        </th>
                        <th scope="col" class="text-lg font-medium text-white px-6 py-4">
                            Qty
                        </th>
                        <th scope="col" class="text-lg font-medium text-white px-6 py-4 rounded-tr-lg">
                            Subtotal
                        </th>
                        </tr>
                    </thead class="border-b">
                        @foreach ($items as $index => $item)
                        <tbody>
                            <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-normal text-sm font-medium text-gray-900 @if(count($items) === $index+1) rounded-bl-lg @endif">
                                <a href="" wire:click.prevent="deleteItem({{ $item->id }})">
                                    <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.3088 0.25H9.69125C3.77625 0.25 0.25 3.77625 0.25 9.69125V23.2925C0.25 29.2238 3.77625 32.75 9.69125 32.75H23.2925C29.2075 32.75 32.7338 29.2238 32.7338 23.3088V9.69125C32.75 3.77625 29.2238 0.25 23.3088 0.25ZM21.96 20.2375C22.4313 20.7087 22.4313 21.4887 21.96 21.96C21.7163 22.2037 21.4075 22.3175 21.0988 22.3175C20.79 22.3175 20.4813 22.2037 20.2375 21.96L16.5 18.2225L12.7625 21.96C12.5188 22.2037 12.21 22.3175 11.9013 22.3175C11.5925 22.3175 11.2838 22.2037 11.04 21.96C10.8133 21.7306 10.6862 21.4212 10.6862 21.0987C10.6862 20.7763 10.8133 20.4668 11.04 20.2375L14.7775 16.5L11.04 12.7625C10.8133 12.5332 10.6862 12.2237 10.6862 11.9012C10.6862 11.5788 10.8133 11.2693 11.04 11.04C11.5113 10.5688 12.2913 10.5688 12.7625 11.04L16.5 14.7775L20.2375 11.04C20.7088 10.5688 21.4888 10.5688 21.96 11.04C22.4313 11.5113 22.4313 12.2912 21.96 12.7625L18.2225 16.5L21.96 20.2375Z" fill="#951D1D"/>
                                    </svg>       
                                </a>                     
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-normal">
                                <div class="flex flex-row items-center gap-x-6">
                                    <img src="/{{$item->product->image_path}}" alt="" class="h-[142px] w-[142px] object-contain">
                                    <P class="text-lg font-semibold">{{$item->product->name}}</P>
                                </div>
                            </td>
                            <td class="text-lg text-gray-900 font-semibold px-6 py-4 whitespace-normal">
                                @convert($item->product->price)
                            </td>
                            <td class="text-lg text-gray-900 font-semibold px-6 py-4 whitespace-normal">
                                <div class="flex flex-row gap-x-4">
                                    <a href="" wire:click.prevent="subtractQuantity({{ $item->id }}, {{ $item->quantity }})">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.2375 0.5H7.7625C3.2125 0.5 0.5 3.2125 0.5 7.7625V18.225C0.5 22.7875 3.2125 25.5 7.7625 25.5H18.225C22.775 25.5 25.4875 22.7875 25.4875 18.2375V7.7625C25.5 3.2125 22.7875 0.5 18.2375 0.5ZM20.5 13.9375H5.5C4.9875 13.9375 4.5625 13.5125 4.5625 13C4.5625 12.4875 4.9875 12.0625 5.5 12.0625H20.5C21.0125 12.0625 21.4375 12.4875 21.4375 13C21.4375 13.5125 21.0125 13.9375 20.5 13.9375Z" fill="#951D1D"/>
                                        </svg>
                                    </a>
                                    
                                    {{$item->quantity}}
    
                                    <a href="" wire:click.prevent="addQuantity({{ $item->id }}, {{ $item->quantity }})">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.2375 0.5H7.7625C3.2125 0.5 0.5 3.2125 0.5 7.7625V18.225C0.5 22.7875 3.2125 25.5 7.7625 25.5H18.225C22.775 25.5 25.4875 22.7875 25.4875 18.2375V7.7625C25.5 3.2125 22.7875 0.5 18.2375 0.5ZM20.5 13.9375H13.9375V20.5C13.9375 21.0125 13.5125 21.4375 13 21.4375C12.4875 21.4375 12.0625 21.0125 12.0625 20.5V13.9375H5.5C4.9875 13.9375 4.5625 13.5125 4.5625 13C4.5625 12.4875 4.9875 12.0625 5.5 12.0625H12.0625V5.5C12.0625 4.9875 12.4875 4.5625 13 4.5625C13.5125 4.5625 13.9375 4.9875 13.9375 5.5V12.0625H20.5C21.0125 12.0625 21.4375 12.4875 21.4375 13C21.4375 13.5125 21.0125 13.9375 20.5 13.9375Z" fill="#951D1D"/>
                                        </svg>    
                                    </a>
                                </div>                          
                            </td>
                            <td class="text-lg text-gray-900 font-semibold px-6 py-4 whitespace-normal @if(count($items) === $index+1) rounded-br-lg @endif">
                                @convert($item->quantity * $item->product->price)
                            </td>
                            </tr class="bg-white border-b">
                        </tbody>
                        @endforeach
                    </table>
                </div>
                </div>
            </div>            
        @else
            <p class="text-2xl text-white text-center mt-20">Your cart is empty.</p>
        @endif
        
        </div>

        <div class="flex justify-end mx-20 mb-20 items-center gap-x-16">
            <p class="text-2xl text-white">Total</p>
            <p class="text-4xl font-semibold text-white">@convert($total)</p>
        </div>
    </div>
</div>
