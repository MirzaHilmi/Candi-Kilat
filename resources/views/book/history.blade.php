<x-app-layout>
  <div class="w-full" x-data="{ modal: false }">


    <table
      class="w-full table-fixed border-separate border-spacing-y-2 border-spacing-x-2 px-2 text-xs md:border-spacing-x-4 md:px-4 md:text-sm lg:text-base">
      <thead class="text-left">
        <tr class="">
          <th class="w-[10%]">Cover</th>
          <th class="w-[30%] md:w-[40%]">Title</th>
          <th class="hidden w-[20%] sm:flex">Category</th>
          <th class="w-[15%]">Status</th>
          <th class="w-[15%]">Edit</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <img src="{{ url('/images/book.png') }}" alt="Image" class="shadow-md" />
          </td>
          <td class="">
            <div class="flex flex-col">
              <h3 class="text-sm font-bold md:text-lg">Dont Make Me Think</h3>
              <h4 class="text-sm">Steve Kurg, 2000</h4>
              <span class="text-xs">Edisi Kedua</span>
            </div>
          </td>
          <td class="hidden sm:flex">
            <div class="flex flex-col">
              <h3>Ilmu Komputer</h3>
              <h4 class="text-sm">UX Design</h4>
            </div>
          </td>
          <td>
            <div class="flex flex-col gap-2">
              <h3 class="rounded-md bg-[#052355] py-1 px-1 text-center text-white md:px-2">Terpinjam</h3>
              <div class="flex flex-row items-center text-sm">
                Fayzul
              </div>
            </div>
          </td>
          <td>
            <button @click="modal = ! modal" class="w-max rounded-md border border-[#517DAB] py-1 px-2 md:border-2">
              Update Status
            </button>
          </td>
        </tr>
        <tr>
          <td>
            <img src="{{ url('/images/book.png') }}" alt="Image" class="shadow-md" />
          </td>
          <td class="">
            <div class="flex flex-col">
              <h3 class="text-sm font-bold md:text-lg">Dont Make Me Think</h3>
              <h4 class="text-sm">Steve Kurg, 2000</h4>
              <span class="text-xs">Edisi Kedua</span>
            </div>
          </td>
          <td class="hidden sm:flex">
            <div class="flex flex-col">
              <h3>Ilmu Komputer</h3>
              <h4 class="text-sm">UX Design</h4>
            </div>
          </td>
          <td>
            <div class="flex flex-col gap-2">
              <h3 class="rounded-md bg-[#052355] py-1 px-1 text-center text-white md:px-2">Terpinjam</h3>
              <div class="flex flex-row items-center text-sm">
                Fayzul
              </div>
            </div>
          </td>
          <td>
            <button @click="modal = ! modal" class="w-max rounded-md border border-[#517DAB] py-1 px-2 md:border-2">
              Update Status
            </button>
          </td>
        </tr>
        <tr>
          <td>
            <img src="{{ url('/images/book.png') }}" alt="Image" class="shadow-md" />
          </td>
          <td class="">
            <div class="flex flex-col">
              <h3 class="text-sm font-bold md:text-lg">Dont Make Me Think</h3>
              <h4 class="text-sm">Steve Kurg, 2000</h4>
              <span class="text-xs">Edisi Kedua</span>
            </div>
          </td>
          <td class="hidden sm:flex">
            <div class="flex flex-col">
              <h3>Ilmu Komputer</h3>
              <h4 class="text-sm">UX Design</h4>
            </div>
          </td>
          <td>
            <div class="flex flex-col gap-2">
              <h3 class="rounded-md bg-[#052355] py-1 px-1 text-center text-white md:px-2">Terpinjam</h3>
              <div class="flex flex-row items-center text-sm">
                Fayzul
              </div>
            </div>
          </td>
          <td>
            <button @click="modal = ! modal" class="w-max rounded-md border border-[#517DAB] py-1 px-2 md:border-2">
              Update Status
            </button>
          </td>
        </tr>
        <tr>
          <td>
            <img src="{{ url('/images/book.png') }}" alt="Image" class="shadow-md" />
          </td>
          <td class="">
            <div class="flex flex-col">
              <h3 class="text-sm font-bold md:text-lg">Dont Make Me Think</h3>
              <h4 class="text-sm">Steve Kurg, 2000</h4>
              <span class="text-xs">Edisi Kedua</span>
            </div>
          </td>
          <td class="hidden sm:flex">
            <div class="flex flex-col">
              <h3>Ilmu Komputer</h3>
              <h4 class="text-sm">UX Design</h4>
            </div>
          </td>
          <td>
            <div class="flex flex-col gap-2">
              <h3 class="rounded-md bg-[#052355] py-1 px-1 text-center text-white md:px-2">Terpinjam</h3>
              <div class="flex flex-row items-center text-sm">
                Fayzul
              </div>
            </div>
          </td>
          <td>
            <button @click="modal = ! modal" class="w-max rounded-md border border-[#517DAB] py-1 px-2 md:border-2">
              Update Status
            </button>
          </td>
        </tr>
        <tr>
          <td>
            <img src="{{ url('/images/book.png') }}" alt="Image" class="shadow-md" />
          </td>
          <td class="">
            <div class="flex flex-col">
              <h3 class="text-sm font-bold md:text-lg">Dont Make Me Think</h3>
              <h4 class="text-sm">Steve Kurg, 2000</h4>
              <span class="text-xs">Edisi Kedua</span>
            </div>
          </td>
          <td class="hidden sm:flex">
            <div class="flex flex-col">
              <h3>Ilmu Komputer</h3>
              <h4 class="text-sm">UX Design</h4>
            </div>
          </td>
          <td>
            <div class="flex flex-col gap-2">
              <h3 class="rounded-md bg-[#052355] py-1 px-1 text-center text-white md:px-2">Terpinjam</h3>
              <div class="flex flex-row items-center text-sm">
                Fayzul
              </div>
            </div>
          </td>
          <td>
            <button @click="modal = ! modal" class="w-max rounded-md border border-[#517DAB] py-1 px-2 md:border-2">
              Update Status
            </button>
          </td>
        </tr>
        <tr>
          <td>
            <img src="{{ url('/images/book.png') }}" alt="Image" class="shadow-md" />
          </td>
          <td class="">
            <div class="flex flex-col">
              <h3 class="text-sm font-bold md:text-lg">Dont Make Me Think</h3>
              <h4 class="text-sm">Steve Kurg, 2000</h4>
              <span class="text-xs">Edisi Kedua</span>
            </div>
          </td>
          <td class="hidden sm:flex">
            <div class="flex flex-col">
              <h3>Ilmu Komputer</h3>
              <h4 class="text-sm">UX Design</h4>
            </div>
          </td>
          <td>
            <div class="flex flex-col gap-2">
              <h3 class="rounded-md bg-[#052355] py-1 px-1 text-center text-white md:px-2">Terpinjam</h3>
              <div class="flex flex-row items-center text-sm">
                Fayzul
              </div>
            </div>
          </td>
          <td>
            <button @click="modal = ! modal" class="w-max rounded-md border border-[#517DAB] py-1 px-2 md:border-2">
              Update Status
            </button>
          </td>
        </tr>
        <tr>
          <td>
            <img src="{{ url('/images/book.png') }}" alt="Image" class="shadow-md" />
          </td>
          <td class="">
            <div class="flex flex-col">
              <h3 class="text-sm font-bold md:text-lg">Dont Make Me Think</h3>
              <h4 class="text-sm">Steve Kurg, 2000</h4>
              <span class="text-xs">Edisi Kedua</span>
            </div>
          </td>
          <td class="hidden sm:flex">
            <div class="flex flex-col">
              <h3>Ilmu Komputer</h3>
              <h4 class="text-sm">UX Design</h4>
            </div>
          </td>
          <td>
            <div class="flex flex-col gap-2">
              <h3 class="rounded-md bg-[#052355] py-1 px-1 text-center text-white md:px-2">Terpinjam</h3>
              <div class="flex flex-row items-center text-sm">
                Fayzul
              </div>
            </div>
          </td>
          <td>
            <button @click="modal = ! modal" class="w-max rounded-md border border-[#517DAB] py-1 px-2 md:border-2">
              Update Status
            </button>
          </td>
        </tr>
        <tr>
          <td>
            <img src="{{ url('/images/book.png') }}" alt="Image" class="shadow-md" />
          </td>
          <td class="">
            <div class="flex flex-col">
              <h3 class="text-sm font-bold md:text-lg">Dont Make Me Think</h3>
              <h4 class="text-sm">Steve Kurg, 2000</h4>
              <span class="text-xs">Edisi Kedua</span>
            </div>
          </td>
          <td class="hidden sm:flex">
            <div class="flex flex-col">
              <h3>Ilmu Komputer</h3>
              <h4 class="text-sm">UX Design</h4>
            </div>
          </td>
          <td>
            <div class="flex flex-col gap-2">
              <h3 class="rounded-md bg-[#052355] py-1 px-1 text-center text-white md:px-2">Terpinjam</h3>
              <div class="flex flex-row items-center text-sm">
                Fayzul
              </div>
            </div>
          </td>
          <td>
            <button @click="modal = ! modal" class="w-max rounded-md border border-[#517DAB] py-1 px-2 md:border-2">
              Update Status
            </button>
          </td>
        </tr>
      </tbody>
    </table>

    <!-- Main modal -->
    <div :class="{ 'block': modal, 'hidden': !modal }" id="authentication-modal" tabindex="-1" aria-hidden="true"
      class="bg fixed top-0 left-0 right-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">

      <div class="fixed h-full w-full bg-slate-800 opacity-50">

      </div>
      <div class="relative top-[50%] left-[50%] max-h-full w-full max-w-md -translate-y-[50%] -translate-x-[50%]">
        <!-- Modal content -->
        <div class="relative rounded-lg bg-white shadow">
          <button @click="modal = ! modal" type="button"
            class="absolute top-3 right-2.5 ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-800 dark:hover:text-white"
            data-modal-hide="authentication-modal">
            <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
          <div class="px-6 py-6 lg:px-8">
            <form method="POST" action="{{ route('peminjaman') }}">
              @csrf

              <div class="my-2 text-center">
                <h2 class="font-bold">
                  Isi Data Diri
                </h2>
              </div>
              <!-- Email Address -->
              <div>
                <x-input-label class="font-bold" for="from" :value="__('Dari')" />
                <x-text-input id="from" class="mt-1 block w-full bg-transparent" type="date" name="from"
                  :value="old('from')" required />
                {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
              </div>

              <!-- Password -->
              <div class="mt-4">
                <x-input-label class="font-bold" for="to" :value="__('To')" />

                <x-text-input id="to" class="mt-1 block w-full bg-transparent" type="date" name="to"
                  required />

                {{-- <x-input-error :messages="$errors->get('to')" class="mt-2" /> --}}
              </div>
              <!-- Nama -->
              <div class="mt-4">
                <x-input-label class="font-bold" for="nama" :value="__('Nama: ')" />

                <x-text-input id="nama" class="mt-1 block w-full bg-transparent" type="text" name="nama"
                  required />

                {{-- <x-input-error :messages="$errors->get('to')" class="mt-2" /> --}}
              </div>
              <!-- Email -->
              <div class="mt-4">
                <x-input-label class="font-bold" for="Email" :value="__('Email: ')" />

                <x-text-input id="Email" class="mt-1 block w-full bg-transparent" type="email" name="Email"
                  required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>

              {{-- <div class="flex items-center justify-end mt-4"> --}}

              <div class="flex w-full justify-center">

                <x-primary-button class="my-4 flex w-max justify-center bg-[#042558] px-8 py-4">
                  {{ __('Pinjam') }}
                </x-primary-button>
              </div>
              {{-- </div> --}}
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>

</x-app-layout>
