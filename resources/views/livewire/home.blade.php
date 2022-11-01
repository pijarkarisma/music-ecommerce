<div>
    @livewire('navbar')

    <div class="py-20 px-4 grid justify-items-center">
        <p class="text-4xl text-white font-semibold text-center">{{ $title }}</p>
    </div>

    <div class="px-16">
        @livewire('product-category')
    </div>
</div>
