<div class="bg-music-dark-gray px-5 h-20 drop-shadow-navbar flex min-w-sm">
    <div class="flex-none self-center">
        <a href="{{route('welcome')}}">
            <img class="h-16" src="/images/logo_music_store.png" alt="logo_home">
        </a>
    </div>
    <div class="h-full flex-1 flex flex-row">
        <div class="h-full flex flex-auto content-center justify-end items-center pr-6 lg:pr-12 shrink-0">
            <p class="text-white px-4 hidden md:block">My Cart</p>
            <img src="/images/shoppingcart_icon.png" alt="profile_icon">
        </div>
        <div class="h-full flex flex-initial content-center justify-end items-center shrink-0">
            <p class="text-white px-4 hidden md:block">Hello, {{$currentUser}}!</p>
            <div class="dropdown relative">
                <a class="dropdown-toggle" href="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="/images/profile_icon.png" alt="profile_icon">
                </a>

                <ul
                    class="
                        dropdown-menu
                        min-w-max
                        absolute
                        hidden
                        bg-white
                        text-base
                        z-50
                        float-left
                        py-2
                        list-none
                        text-left
                        rounded-lg
                        shadow-lg
                        mt-1
                        hidden
                        bg-clip-padding
                        border-none
                    "
                    aria-labelledby="dropdownMenuButton1"
                    >
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a
                            class="
                                dropdown-item
                                text-md
                                py-2
                                px-4
                                font-normal
                                block
                                w-full
                                whitespace-nowrap
                                bg-transparent
                                hover:bg-gray-200
                            "
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            this.closest('form').submit();"
                            >Log out</a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>