<div class="grid grid-cols-1 p-6 lg:grid-cols-2 lg:p-0 h-screen overflow-scroll">
    <div class="bg-cover hidden lg:block" style="background-image: url('{{asset('images/landing_back_image.png')}}')"></div>
    <div class="flex justify-center items-center flex-col">
        <img class="w-[215px] mb-16" src="/images/logo_music_store.png" alt="logo_music_store">
        
        <p class="mb-24 text-white text-center text-3xl sm:text-4xl font-semibold">Welcome to<br>Karisma Music Store!</p>
        
        <div class="grid gap-y-6">
            <a type="button" class="flex h-14 w-56 lg:w-64 text-center bg-music-red items-center justify-center rounded-[60px]">
                <p class="text-xl text-white">Sign Up</p>
            </a>
            <a type="button" href="{{ route('home') }}" class="flex h-14 w-56 lg:w-64 text-center bg-music-stone items-center justify-center rounded-[60px]">
                <p class="text-xl text-white">Log In</p>
            </a>
        </div>
    </div>
</div>