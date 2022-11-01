<x-guest-layout>
    {{-- <x-auth-card> --}}
        <div class="bg-zinc-900 min-h-screen p-20 flex flex-col justify-items-center overflow-y-auto">
            <div class="justify-center flex">
                <p class="text-4xl text-white font-semibold mb-[70px]">Log into existing account.</p>
            </div>
    
            <!-- Session Status -->
            <div class="flex justify-center flex">
                <x-auth-session-status class="mb-4" :status="session('status')" />
    
            <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
            </div>
    
            <form method="POST" action="{{ route('login') }}" class="gap-y-10 grid grid-cols-auto">
                @csrf
    
                <!-- Email Address -->
                <div class="justify-center flex">
                    <div class="w-1/3 grid">
                        <x-label class="text-xl text-white mb-1" for="email" :value="__('E-mail Address')" />
    
                        <x-input id="email" placeholder="name@example.com" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
                </div>
    
                <!-- Password -->
                <div class="justify-center flex">
                    <div class="w-1/3 grid">
                        <x-label class="text-xl text-white mb-1" for="password" :value="__('Password')" />
    
                        <x-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                    </div>
                </div>
    
                {{-- Redirect to register --}}
                <div class="justify-center flex mt-4 underline text-lg text-slate-400 hover:text-slate-500">
                    <a href="{{route('register')}}">Don't have an account?</a>
                </div>
    
                <!-- Remember Me -->
                <div class="flex justify-center mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-lg text-white">{{ __('Remember me') }}</span>
                    </label>
                </div>
    
                <div class="justify-center flex flex-col mt-2">
                    <div class="justify-center flex mt-4">
                        <x-button>
                            {{ __('Log In') }}
                        </x-button>
                    </div>
    
                    {{-- @if (Route::has('password.request'))
                        <div class="flex items-center justify-center mt-4">
                            <a class="underline text-lg text-slate-400 hover:text-slate-500 align-middle" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        </div>
                    @endif --}}
                </div>
            </form>
        </div>
    {{-- </x-auth-card> --}}
</x-guest-layout>
