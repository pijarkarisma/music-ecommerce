<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
                <img src={{ $product->image_path }} alt="" class="h-52">
                <p class="text-lg text-white pt-7 pb-2 truncate">{{ $product->name }}</p>
                <p class="text-xl text-white font-semibold pb-2">@convert($product->price)</p>
                <button class="flex h-10 w-full text-center bg-music-red hover:bg-red-600 items-center justify-center rounded-[60px]" data-bs-toggle="modal" data-bs-target="#item1">See Details</button>
            </div>
            @endforeach
        </div>

        <button id="slideRight-{{ $category_id }}" type="button" class="pl-6">
            <svg width="22" height="38" viewBox="0 0 22 38" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-music-red hover:fill-red-600">
                <path d="M19.5334 14.9785L14.28 9.72518L5.72002 1.16518C3.90669 -0.621491 0.813354 0.658509 0.813354 3.21851V34.7918C0.813354 37.3518 3.90669 38.6318 5.72002 36.8185L19.5334 23.0052C21.7467 20.8185 21.7467 17.1918 19.5334 14.9785Z" />
            </svg>



            


    </div>


    

    <!-- Modal -->
    <div class="modal fade" id="item1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <img src="" alt="">
              <h4 class="modal-title" id="modalheadfont"><b>Add items to cart</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="modalbodyfont">
              <div class="container ">
                <table border="0">
                  <td>
                    <ul style="list-style-type:none">
                        <!-- GAMBAR DISINI -->
                      <img src={{ $product->image_path }} alt="">
                    </ul>
                  </td>
                  <td>
                    <ul style="list-style-type:none">
                      <li>
                        <!-- Deskripsi disini -->
                         <p>{{ $product->desc }}</p>
                      </li>
                      <li class="mt-5">
                        <!-- Harga disini -->
                        <p class="">@convert($product->price)</p>
                      </li>
                    </ul>
                  </td>
                </table>
                
                
                
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Close</button>
              <button type="button" class="btn btn-primary" data-bs-target="#success" data-bs-toggle="modal" data-bs-dismiss="modal">Add item to cart</button>
            </div>
          </div>
        </div>
      </div>
  
      <!--success-->
  
     




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
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="{{ asset('js/product-horizontal-scroll.js') }}" sectionId="{{ $category_id }}"></script>
</div>
