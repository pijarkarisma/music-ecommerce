<div>
  <div class="flex flex-row mt-7">
      <button id="slideLeft-{{ $category_id }}" type="button" class="pr-6">
          <svg width="22" height="38" viewBox="0 0 22 38" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-music-red hover:fill-red-600 -rotate-180">
              <path d="M19.5334 14.9785L14.28 9.72518L5.72002 1.16518C3.90669 -0.621491 0.813354 0.658509 0.813354 3.21851V34.7918C0.813354 37.3518 3.90669 38.6318 5.72002 36.8185L19.5334 23.0052C21.7467 20.8185 21.7467 17.1918 19.5334 14.9785Z" />
          </svg>
      </button>

      <div id="productHomeContainer-{{ $category_id }}" class="grid grid-flow-col gap-16 w-full justify-start overflow-auto scrollbar-hide">
          @foreach ($products as $index => $product)
          <div class="w-52 snap-center">
              <img src="/{{ $product->image_path }}" alt="" class="h-52">
              <p class="text-lg text-white pt-7 pb-2 truncate">{{ $product->name }}</p>
              <p class="text-xl text-white font-semibold pb-2">@convert($product->price)</p>
              <a href="{{ route('product.detail', $product->id) }}" class="flex h-10 w-full text-center bg-music-red hover:bg-red-600 items-center justify-center rounded-[60px]">
                  <p class="text-md text-white">See Details</p>
              </a>
          </div>
          @endforeach
      </div>

      <button id="slideRight-{{ $category_id }}" type="button" class="pl-6">
          <svg width="22" height="38" viewBox="0 0 22 38" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-music-red hover:fill-red-600">
              <path d="M19.5334 14.9785L14.28 9.72518L5.72002 1.16518C3.90669 -0.621491 0.813354 0.658509 0.813354 3.21851V34.7918C0.813354 37.3518 3.90669 38.6318 5.72002 36.8185L19.5334 23.0052C21.7467 20.8185 21.7467 17.1918 19.5334 14.9785Z" />
          </svg>
      </button>
  </div>

  <style>
      /* For Webkit-based browsers (Chrome, Safari and Opera) */
  .scrollbar-hide::-webkit-scrollbar {
      display: none;
  }
  
  /* For IE, Edge and Firefox */
  .scrollbar-hide {
      -ms-overflow-style: none;  /* IE and Edge */
      scrollbar-width: none;  /* Firefox */
  }
  </style>

  <script src="{{ asset('js/product-horizontal-scroll.js') }}" sectionId="{{ $category_id }}"></script>
</div>
