<x-guest-layout>
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />

  <form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="my-2 text-center">
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
      <x-text-input id="identifier" class="mt-1 block w-full bg-transparent" type="text" name="email" :value="old('identifier')"
        required autofocus autocomplete="username" />
      {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
    </div>

    <!-- Password -->
    <div class="mt-4">
      <x-input-label class="font-bold" for="password" :value="__('Password')" />

      <x-text-input id="password" class="mt-1 block w-full bg-transparent" type="password" name="password" required
        autocomplete="current-password" />

      <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Remember Me -->
    <div class="mt-4 flex justify-between">
      <label for="remember_me" class="inline-flex items-center">
        <input id="remember_me" type="checkbox"
          class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
        <span class="ml-2 text-sm">{{ __('Remember me') }}</span>
      </label>
      @if (Route::has('password.request'))
        <a class="rounded-md text-sm underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
          href="{{ route('password.request') }}">
          {{ __('Forgot your password?') }}
        </a>
      @endif
    </div>

    {{-- <div class="flex items-center justify-end mt-4"> --}}

    <x-primary-button class="my-4 flex w-full justify-center bg-[#042558] py-4">
      {{ __('Log in') }}
    </x-primary-button>
    {{-- </div> --}}
    <div class="flex justify-between text-sm">
      <div class="flex flex-row">
        <h4>New User?</h4>
        <a class="rounded-md text-sm underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
          href="{{ route('register') }}">
          {{ __('Register Here') }}
        </a>
      </div>
      <button>
        {{ __('Use as Guest ') }}
      </button>
    </div>
  </form>
</x-guest-layout>
