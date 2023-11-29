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
          class="flex w-full border-0 bg-transparent outline-none focus:border-0 focus:outline-none"
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
        <h3>{{ date('Y-m-d') }}</h3>
      </div>
    </div>
  </div>

  <div class="w-full pt-24 md:pl-[20%]">
    <table
      class="w-full table-fixed border-separate border-spacing-y-2 border-spacing-x-2 px-2 text-xs md:border-spacing-x-4 md:px-4 md:text-base">
      <thead class="text-left">
        <tr class="">
          <th class="w-[15%]">Cover</th>
          <th class="w-[20%] md:w-[35%]">Title</th>
          <th class="hidden w-[20%] sm:flex">Category</th>
          <th class="w-[15%]">Status</th>
          <th class="w-[15%]">Edit</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($books as $book)
          <tr>
            <td>
              <img src="{{ $book->cover_url }}" alt="Image" class="h-24 w-full object-fill md:h-40" />
            </td>
            <td class="">
              <div class="flex flex-col">
                <h3 class="text-sm font-bold md:text-lg">{{ $book->title }}</h3>
                <h4 class="text-sm">{{ $book->author->name }}, {{ $book->release_year }}</h4>
                <span class="text-xs">Edisi ke-{{ $book->edition }}</span>
                {{-- <span class="text-xs">Edisi Kedua</span> --}}
              </div>
            </td>
            <td class="hidden sm:inline">
              <div class="flex flex-col text-sm">
                @foreach ($book->categories->slice(0, 3) as $category)
                  <h3>
                    {{ $category->name }},
                  </h3>
                @endforeach
              </div>
            </td>
            <td>
              <div class="flex flex-col gap-2">
                <h3
                  class="{{ $book->status ? 'bg-[#052355]' : 'bg-[#7B9CC5]' }} rounded-md py-1 px-1 text-center text-white md:px-2">
                  {{ $book->status ? 'Tersedia' : 'Tidak Tersedia' }}</h3>
                <div class="{{ $book->status ? 'flex' : 'hidden' }} flex-row items-center text-sm">
                  <img src="{{ url('/images/map-pin.svg') }}" alt="Image" />
                  <span>
                    {{ $book->bookshelf }}
                  </span>
                </div>
              </div>
            </td>
            <td>
              <a href="/book/{{ $book->id }}"
                class="w-max rounded-md border border-[#517DAB] py-1 px-2 shadow-md md:border-2">
                Preview
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</x-app-layout>
