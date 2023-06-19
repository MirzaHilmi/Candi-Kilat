<nav :class="{ 'flex': open, 'hidden': !open }"
  class="fixed z-20 h-screen w-[80%] flex-col items-center justify-between gap-4 border-b border-gray-100 bg-[#C2E8FF] p-4 md:flex md:w-[20%]">
  <div class="flex w-full flex-col">

    <div class="flex w-full justify-start md:hidden">
      <button @click="open = ! open"
        class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none">
        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
          <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
    <div class="flex flex-col items-center gap-4 px-8 md:px-2">
      <div class="mb-4">
        <img src="{{ url('/images/mybookshelf.png') }}" alt="Image" />
      </div>
      <a class="flex w-full flex-row items-center gap-4" href="{{ route('login') }}">
        <img src="{{ url('/images/home.svg') }}" alt="Image" class="w-4" />
        {{ __('Beranda') }}
      </a>
      <a class="flex w-full flex-row items-center gap-4" href="{{ route('login') }}">
        <img src="{{ url('/images/Search.svg') }}" alt="Image" class="w-4" />
        {{ __('Pencarian Buku') }}
      </a>
      <a class="flex w-full flex-row items-center gap-4" href="{{ route('daftar-buku') }}">
        <img src="{{ url('/images/Bookshelf.svg') }}" alt="Image" class="w-4" />
        {{ __('Daftar Buku') }}
      </a>
      <a class="flex w-full flex-row items-center gap-4" href="{{ route('peminjaman') }}">
        <img src="{{ url('/images/gift.svg') }}" alt="Image" class="w-4" />
        {{ __('Peminjaman Buku') }}
      </a>
      <a class="flex w-full flex-row items-center gap-4" href="{{ route('pengembalian') }}">
        <img src="{{ url('/images/gift.svg') }}" alt="Image" class="w-4" />
        {{ __('Pengembalian Buku') }}
      </a>
      <a class="flex w-full flex-row items-center gap-4" href="{{ route('history') }}">
        <img src="{{ url('/images/riwayat.svg') }}" alt="Image" class="w-4" />
        {{ __('Riwayat') }}
      </a>
    </div>
  </div>

  <div class="flex w-full flex-col px-8 md:px-2">

    <form method="POST" action="{{ route('logout') }}">
      @csrf

      <button :href="route('logout')"
        onclick="event.preventDefault();
                                this.closest('form').submit();">
        {{ __('Log Out') }}
      </button>
    </form>
    <a class="flex w-full flex-row items-center gap-4" href="{{ route('login') }}">
      {{ __('Tentang') }}
    </a>
    <a class="flex w-full flex-row items-center gap-4" href="{{ route('login') }}">
      {{ __('Syarat dan Ketentuan') }}
    </a>

  </div>


  {{-- <div class="fixed flex flex-row ">
            <div class="flex flex-row items-center gap-2 border border-slate-300 rounded-full py-2">
            <h3>Semua</h3>
            <input type="text">
        </div> --}}

  <!-- Primary Navigation Menu -->
  {{-- <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 justify-between">
      <div class="flex">
        <!-- Logo -->
        <div class="flex shrink-0 items-center">
          <a href="{{ route('dashboard') }}">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
          </a>
        </div>

        <!-- Navigation Links -->
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
          <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
          </x-nav-link>
        </div>
      </div>

      <!-- Settings Dropdown -->
      <div class="hidden sm:ml-6 sm:flex sm:items-center">
        <x-dropdown align="right" width="48">
          <x-slot name="trigger">
            <button
              class="inline-flex items-center rounded-md border border-transparent bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none">
              <div>{{ Auth::user()->name }}</div>

              <div class="ml-1">
                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
                </svg>
              </div>
            </button>
          </x-slot>

          <x-slot name="content">
            <x-dropdown-link :href="route('profile.edit')">
              {{ __('Profile') }}
            </x-dropdown-link>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
              @csrf

              <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                {{ __('Log Out') }}
              </x-dropdown-link>
            </form>
          </x-slot>
        </x-dropdown>
      </div>

      <!-- Hamburger -->
      <div class="-mr-2 flex items-center sm:hidden">
        <button @click="open = ! open"
          class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none">
          <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Responsive Navigation Menu -->
  <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
    <div class="space-y-1 pt-2 pb-3">
      <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
      </x-responsive-nav-link>
    </div>

    <!-- Responsive Settings Options -->
    <div class="border-t border-gray-200 pt-4 pb-1">
      <div class="px-4">
        <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
        <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
      </div>

      <div class="mt-3 space-y-1">
        <x-responsive-nav-link :href="route('profile.edit')">
          {{ __('Profile') }}
        </x-responsive-nav-link>

        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
          @csrf

          <x-responsive-nav-link :href="route('logout')"
            onclick="event.preventDefault();
                                        this.closest('form').submit();">
            {{ __('Log Out') }}
          </x-responsive-nav-link>
        </form>
      </div>
    </div>
  </div> --}}
</nav>
