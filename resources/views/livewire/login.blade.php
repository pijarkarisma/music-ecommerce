<div class="bg-zinc-900 h-screen p-36 flex flex-col justify-items-center">
    <div class="justify-center flex">
        <p class="text-4xl text-white font-semibold mb-[70px]">Log into existing account.</p>
    </div>
    <form wire:submit.prevent="LoginUser">
        <div class="gap-y-10 grid grid-cols-auto">
            <div class="justify-center flex">
                <div class="w-1/3 grid">
                    <p class="text-xl text-white mb-1">E-mail Address</p>
                    <input type="text" class="w-full h-8" placeholder="name@example.com" id="email">
                </div>
            </div>
            <div class="justify-center flex">
                <div class="w-1/3 grid">
                    <p class="text-xl text-white mb-1">Password</p>
                    <input type="text" class="w-full h-8" placeholder="*****" id="password">
                </div>
            </div>
            <a href="{{route('signup')}}" class="justify-center flex mt-9  text-primary text-white">Belum punya akun?</a>
            <div class="justify-center flex mt-11">
                <a type="button" class="flex h-14 w-56 lg:w-64 text-center bg-music-red items-center justify-center rounded-[60px]">
                    <p class="text-xl text-white">Log In</p>
                </a>
            </div>
        </div>
        
    </form>
</div>
