<button {{ $attributes->merge(['type' => 'submit', 'class' => "flex h-14 w-56 lg:w-64 text-center bg-music-red hover:bg-red-700 items-center justify-center rounded-[60px] text-white text-xl"]) }}>
    {{ $slot }}
</button>
