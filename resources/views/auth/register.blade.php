<x-guest-layout>
    {{-- <x-auth-card> --}}
        <div class="bg-zinc-900 min-h-screen p-20 flex flex-col justify-items-center overflow-y-auto">
            <div class="justify-center flex">
                <p class="text-4xl text-white font-semibold mb-[70px]">Create an account.</p>
            </div>
    
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
    
            <form method="POST" action="{{ route('register') }}" class="gap-y-6 grid grid-cols-auto">
                @csrf
    
                {{-- <!-- Name -->
                <div>
                    <x-label for="name" :value="__('Name')" />
    
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                </div> --}}
    
                <!-- First Name -->
                <div class="flex justify-center">
                    <div class="w-1/3 grid">
                        <x-label class="text-xl text-white mb-1" for="first_name" :value="__('First Name')" />
    
                        <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus />
                    </div>
                </div>
    
                <!-- Last Name -->
                <div class="flex justify-center">
                    <div class="w-1/3 grid">
                        <x-label class="text-xl text-white mb-1" for="last_name" :value="__('Last Name')" />
    
                        <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required />
                    </div>
                </div>
    
                <!-- Email Address -->
                <div class="flex justify-center">
                    <div class="w-1/3 grid">
                        <x-label class="text-xl text-white mb-1" for="email" :value="__('Email Address')" />
    
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>
                </div>
    
                <!-- Phone Number -->
                <div class="flex justify-center">
                    <div class="w-1/3 grid">
                        <x-label class="text-xl text-white mb-1" for="phone_number" :value="__('Phone Number')" />
    
                        <x-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="old('phone_number')" required />
                    </div>
                </div>
    
                <!-- Password -->
                <div class="flex justify-center">
                    <div class="w-1/3 grid">
                        <x-label class="text-xl text-white mb-1" for="password" :value="__('Password')" />
    
                        <x-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
                    </div>
                </div>
    
                <!-- Confirm Password -->
                <div class="flex justify-center">
                    <div class="w-1/3 grid">
                        <x-label class="text-xl text-white mb-1" for="password_confirmation" :value="__('Confirm Password')" />
    
                        <x-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required />
                    </div>
                </div>
    
                {{-- Redirect to login --}}
                <div class="justify-center flex mt-4 underline text-lg text-slate-400 hover:text-slate-500">
                    <a href="{{route('login')}}">Already registered?</a>
                </div>
    
                <div class="flex items-center justify-center">
                    <x-button>
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>
        </div>
    {{-- </x-auth-card> --}}
</x-guest-layout>
