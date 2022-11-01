<div>
    @foreach ($categories as $index => $category)
    <div class="mb-24">
        <p class="text-3xl text-white font-medium">{{ $category->category_name }}</p>
        @livewire('product-category-section', ['category_id' => $category->id])
    </div>
    @endforeach
</div>
