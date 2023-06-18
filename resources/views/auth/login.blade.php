<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="text-center my-2">
            <h2>
                Welcome Back !
            </h2>
            <h3 class="text-[#ABABAB]">
                Sign in to continue to yourDigital Library
            </h3>
        </div>
        <!-- Email Address -->
        <div>
            <x-input-label class="font-bold" for="identifier" :value="__('Email atau NIM')" />
            <x-text-input id="identifier" class="block mt-1 w-full bg-transparent" type="text" name="identifier" :value="old('identifier')" required autofocus autocomplete="username" />
            {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label class="font-bold" for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full bg-transparent"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class=" mt-4 flex justify-between">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm">{{ __('Remember me') }}</span>
            </label>
            @if (Route::has('password.request'))
                <a class="underline text-sm hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        {{-- <div class="flex items-center justify-end mt-4"> --}}

            <x-primary-button class="w-full flex justify-center my-4 py-4 bg-[#042558]">
                {{ __('Log in') }}
            </x-primary-button>
            {{-- </div> --}}
            <div class="flex justify-between text-sm">
                <div class="flex flex-row">
                    <h4>New User?</h4>
                    <a class="underline text-sm hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                        {{ __('Register Here') }}
                    </a>
                </div>
                <button>
                    {{ __('Use as Guest ') }}
                </button>
        </div>
    </form>
</x-guest-layout>
