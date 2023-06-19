<x-app-layout>
  {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

  <div class="flex flex-col gap-4 px-4">
    <div class="flex flex-col gap-4 md:flex-row">
      <div class="h-48 w-full rounded-lg bg-slate-700 p-6 text-white md:w-[30%]">
        <h3 class="font-bold">Quote Hari Ini</h3>
        <p>Buatlah hari ini lebih baik dari hari kemarin!</p>
      </div>
      <div class="flex h-48 w-[-70%] flex-row items-center gap-4 overflow-hidden rounded-lg">
        <div
          style="writing-mode: vertical-lr;"class="flex h-full w-12 items-center justify-center bg-slate-500 text-white">
          <h3 class="rotate-180 text-center">Buku Baru</h3>
        </div>
        <a href="#" class="flex h-full items-center justify-center">
          <img src="{{ url('/images/book.png') }}" alt="Image" class="shadow-md" />
        </a>
        <a href="#" class="flex h-full items-center justify-center">
          <img src="{{ url('/images/book.png') }}" alt="Image" class="shadow-md" />
        </a>
        <a href="#" class="flex h-full items-center justify-center">
          <img src="{{ url('/images/book.png') }}" alt="Image" class="shadow-md" />
        </a>
        <a href="#" class="flex h-full items-center justify-center">
          <img src="{{ url('/images/book.png') }}" alt="Image" class="shadow-md" />
        </a>
      </div>
    </div>
    <div class="flex flex-col gap-4">
      <h2 class="text-2xl font-bold text-[#243F65]">Koleksi Buku</h2>
      <div class="grid w-full grid-cols-2 gap-4 sm:grid-cols-4 md:grid-cols-5">
        <a href="#" class="flex h-full flex-col items-center justify-center">
          <img src="{{ url('/images/book.png') }}" alt="Image" class="shadow-md" />
          <div class="flex flex-col">
            <h3>Dont Make Me Think</h3>
            <span class="text-sm text-slate-500">Steve Krug, 2000</span>
            <span class="text-sm text-slate-500">4.5/5</span>
          </div>
        </a>
        <a href="#" class="flex h-full flex-col items-center justify-center">
          <img src="{{ url('/images/book.png') }}" alt="Image" class="shadow-md" />
          <div class="flex flex-col">
            <h3>Dont Make Me Think</h3>
            <span class="text-sm text-slate-500">Steve Krug, 2000</span>
            <span class="text-sm text-slate-500">4.5/5</span>
          </div>
        </a>
        <a href="#" class="flex h-full flex-col items-center justify-center">
          <img src="{{ url('/images/book.png') }}" alt="Image" class="shadow-md" />
          <div class="flex flex-col">
            <h3>Dont Make Me Think</h3>
            <span class="text-sm text-slate-500">Steve Krug, 2000</span>
            <span class="text-sm text-slate-500">4.5/5</span>
          </div>
        </a>
        <a href="#" class="flex h-full flex-col items-center justify-center">
          <img src="{{ url('/images/book.png') }}" alt="Image" class="shadow-md" />
          <div class="flex flex-col">
            <h3>Dont Make Me Think</h3>
            <span class="text-sm text-slate-500">Steve Krug, 2000</span>
            <span class="text-sm text-slate-500">4.5/5</span>
          </div>
        </a>
        <a href="#" class="flex h-full flex-col items-center justify-center">
          <img src="{{ url('/images/book.png') }}" alt="Image" class="shadow-md" />
          <div class="flex flex-col">
            <h3>Dont Make Me Think</h3>
            <span class="text-sm text-slate-500">Steve Krug, 2000</span>
            <span class="text-sm text-slate-500">4.5/5</span>
          </div>
        </a>
        <a href="#" class="flex h-full flex-col items-center justify-center">
          <img src="{{ url('/images/book.png') }}" alt="Image" class="shadow-md" />
          <div class="flex flex-col">
            <h3>Dont Make Me Think</h3>
            <span class="text-sm text-slate-500">Steve Krug, 2000</span>
            <span class="text-sm text-slate-500">4.5/5</span>
          </div>
        </a>
        <a href="#" class="flex h-full flex-col items-center justify-center">
          <img src="{{ url('/images/book.png') }}" alt="Image" class="shadow-md" />
          <div class="flex flex-col">
            <h3>Dont Make Me Think</h3>
            <span class="text-sm text-slate-500">Steve Krug, 2000</span>
            <span class="text-sm text-slate-500">4.5/5</span>
          </div>
        </a>
        <a href="#" class="flex h-full flex-col items-center justify-center">
          <img src="{{ url('/images/book.png') }}" alt="Image" class="shadow-md" />
          <div class="flex flex-col">
            <h3>Dont Make Me Think</h3>
            <span class="text-sm text-slate-500">Steve Krug, 2000</span>
            <span class="text-sm text-slate-500">4.5/5</span>
          </div>
        </a>
        <a href="#" class="flex h-full flex-col items-center justify-center">
          <img src="{{ url('/images/book.png') }}" alt="Image" class="shadow-md" />
          <div class="flex flex-col">
            <h3>Dont Make Me Think</h3>
            <span class="text-sm text-slate-500">Steve Krug, 2000</span>
            <span class="text-sm text-slate-500">4.5/5</span>
          </div>
        </a>
      </div>
    </div>
    {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div> --}}
  </div>
</x-app-layout>
