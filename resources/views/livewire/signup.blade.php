<div class="bg-zinc-900 h-screen p-16 flex flex-col justify-items-center overflow-y-auto">
    <div class="justify-center flex">
        <p class="text-4xl text-white font-semibold mb-[70px]">Create an account.</p>
    </div>
   <form wire:submit.prevent="registerUser">
    <div class="gap-y-8 grid grid-cols-auto">
        <div class="justify-center flex">
            <div class="w-1/3 grid">
                <p class="text-xl text-white mb-1">First Name</p>
                <input type="text" class="w-full h-8" id="first_name">
            </div>
        </div>
        <div class="justify-center flex">
            <div class="w-1/3 grid">
                <p class="text-xl text-white mb-1">Last Name</p>
                <input type="text" class="w-full h-8" id="last_name">
            </div>
        </div>
        <div class="justify-center flex">
            <div class="w-1/3 grid">
                <p class="text-xl text-white mb-1">Email Address</p>
                <input type="text" class="w-full h-8" id="email">
            </div>
        </div>
        <div class="justify-center flex">
            <div class="w-1/3 grid">
                <p class="text-xl text-white mb-1">Phone Number</p>
                <input type="text" class="w-full h-8" id="phone">
            </div>
        </div>
        <div class="justify-center flex">
            <div class="w-1/3 grid">
                <p class="text-xl text-white mb-1">Password</p>
                <input type="text" class="w-full h-8" id="password">
            </div>
        </div>
        <div class="justify-center flex">
            <div class="w-1/3 grid">
                <p class="text-xl text-white mb-1">Confirm Password</p>
                <input type="text" class="w-full h-8" id="password_confirmation">
            </div>
        </div>
        <div class="justify-center flex mt-11">
            <button type="submit" class="flex h-14 w-56 lg:w-64 text-center bg-music-red items-center justify-center rounded-[60px] text-white">Sign Up</button>

            </a>
        </div>
    </form>
    </div>
</div>
