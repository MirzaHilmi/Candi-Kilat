<x-app-layout>


  <script type="text/javascript">
    function showTime() {
      var date = new Date(),
        utc = new Date(Date.UTC(
          date.getFullYear(),
          date.getMonth(),
          date.getDate(),
          date.getHours(),
          date.getMinutes(),
          date.getSeconds()
        ));

      document.getElementById('time').innerHTML = utc.toLocaleTimeString('en-US', {
        timeZone: 'Asia/Jakarta',
      });
    }

    setInterval(showTime, 1000);
  </script>
  <div
    class="fixed z-10 flex h-20 w-full flex-row items-center justify-between bg-white px-4 py-4 shadow-sm md:pl-[20%]">
    <button @click="open = ! open"
      class="flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none md:hidden">
      <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
          stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
          stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
    <div
      class="ml-4 flex h-full flex-1 flex-row items-center gap-2 overflow-hidden rounded-full border-2 border-slate-300">
      <div class="hidden h-full items-center bg-slate-100 px-4 sm:flex">
        <h3>Semua</h3>

      </div>
      <form action="daftar-buku?" class="flex-1">

        <input type="text" name="search_query"
          class="flex w-full flex-1 border-0 bg-transparent outline-none focus:border-0 focus:outline-none"
          placeholder="Pencarian">

      </form>
      <img src="{{ url('/images/Search.svg') }}" alt="Image" class="mr-4" />
    </div>
    <div
      class="ml-4 hidden h-full flex-row items-center justify-center gap-4 overflow-hidden rounded-full border-2 border-slate-300 px-4 md:flex">
      <div class="flex flex-row items-center">
        <img src="{{ url('/images/Vector.svg') }}" alt="Image" class="mr-2" />
        <h3 id="time"></h3>
      </div>
      <div class="flex flex-row items-center">
        <img src="{{ url('/images/Vector2.svg') }}" alt="Image" class="mr-2" />
        <h3>{{ date('d-m-Y') }}</h3>
      </div>
    </div>
  </div>
  {{-- main  --}}
  <div class="flex flex-col gap-4 px-4 pt-24 md:pl-[22%]">
    @unless (Auth::check())
      <div class="flex flex-col gap-4 md:flex-row">
        <div class="h-48 w-full rounded-lg bg-gradient-to-br from-[#062251] to-[#C2E8FF] p-6 text-white md:w-[30%]">
          <h3 class="font-bold">Quote Hari Ini</h3>
          <p>Buatlah hari ini lebih baik dari hari kemarin!</p>
        </div>
        <div class="flex h-48 w-full flex-row items-center gap-4 overflow-hidden rounded-lg md:w-[70%]">
          <div
            style="writing-mode: vertical-lr;"class="flex h-full w-12 items-center justify-center bg-[#799AC3] text-white">
            <h3 class="rotate-180 text-center">Buku Baru</h3>
          </div>
          <div class="flex h-40 flex-row items-center justify-between gap-4">
            @foreach ($books->slice(0, 3) as $item)
              <a href="/book/{{ $item->id }}"
                class="my-4 flex h-24 w-full items-center justify-center md:h-40 md:w-32">
                <img src="{{ $item->cover_url }}" alt="Image" class="h-40 w-32 object-fill" />
              </a>
            @endforeach
          </div>
        </div>
      </div>
    @endunless
    @role('librarian')
      <div
        class="flex h-48 w-full items-center justify-center rounded-lg bg-gradient-to-br from-[#062251] to-[#C2E8FF] p-6 text-center text-2xl font-bold text-white">
        Selamat Datang, {{ Auth::user()->name }}!
      </div>
    @endrole
    <div class="flex flex-col gap-4">
      <h2 class="text-2xl font-bold text-[#243F65]">Koleksi Buku</h2>
      <div class="grid w-full grid-cols-2 gap-8 sm:grid-cols-4 md:grid-cols-5">
        @foreach ($books as $book)
          <a href="/book/{{ $book->id }}" class="flex flex-col items-center duration-200 hover:scale-105">
            <img src="{{ $book->cover_url }}" alt="Image" class="h-52 w-full object-fill shadow-md" />
            <div class="flex w-full flex-col">
              <h3>{{ $book->title }}</h3>
              <span class="text-sm text-slate-500">{{ $book->author->name }}, {{ $book->release_year }}</span>
              <span class="text-sm text-slate-500">{{ $book->rating }}/5</span>
            </div>
          </a>
        @endforeach

      </div>
    </div>
  </div>
</x-app-layout>
