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

  @if (Session::has('book_deleted'))
    <script>
      Swal.fire({
        title: 'Berhasil Dihapus',
        icon: 'success',
        confirmButtonText: 'Kembali'
      })
    </script>
  @endif
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
  <div class="w-full pt-24 md:pl-[20%]" x-data="{ activeTab: 'overview' }">

    <div class="flex flex-col gap-4 px-2 md:px-8">
      <a href="/daftar-buku" class="flex flex-row items-center gap-2">
        <img src="{{ url('/images/back.svg') }}" alt="Image" class="" />
        <span>Kembali</span>
      </a>
      <div class="flex flex-col gap-4 md:flex-row md:gap-0">
        <div class="flex w-full flex-col md:w-[60%]">
          <div class="flex flex-row gap-4">
            <img src="{{ $book->cover_url }}" alt="Image" class="w-24 sm:w-40" />
            <div class="flex w-full flex-col justify-between">
              <div class="flex flex-col">
                <h1 class="text-lg md:text-2xl">{{ $book->title }}</h1>
                <h3 class="text-slate-700">{{ $book->author->name }}, {{ $book->release_year }}</h3>
                <h3 class="text-slate-500">Edisi ke-{{ $book->edition }}</h3>
                <span class="flex flex-row items-center text-sm">
                  <img src="{{ url('/images/Star.svg') }}" alt="Image" class="h-4 w-4" />
                  <img src="{{ url('/images/Star.svg') }}" alt="Image" class="h-4 w-4" />
                  <img src="{{ url('/images/Star.svg') }}" alt="Image" class="h-4 w-4" />
                  <img src="{{ url('/images/Star.svg') }}" alt="Image" class="h-4 w-4" />
                  <img src="{{ url('/images/Star.svg') }}" alt="Image" class="h-4 w-4" />
                  <span class="ml-2">
                    {{ $book->rating }} Penilaian
                  </span>
                </span>
                <span class="text-sm">
                  Dipinjam 25 Kali
                </span>
              </div>
              <div class="flex flex-col">
                <span class="font-bold">Status</span>
                <span
                  class="{{ $book->status ? 'bg-[#42BB4E]' : 'bg-slate-400' }} w-fit rounded-md py-1 px-4 text-white">
                  {{ $book->status ? 'Tersedia' : 'Tidak Tersedia' }}</span>
              </div>
            </div>
          </div>
          <div class="mt-4 flex flex-row gap-8 text-slate-700">
            <button class="flex h-full flex-col items-center justify-between text-sm font-bold">
              <img src="{{ url('/images/reviews.svg.svg') }}" alt="Image" class="h-8" />
              Review
            </button>
            <button class="flex h-full flex-col items-center justify-between text-sm font-bold">
              <img src="{{ url('/images/notes.svg.svg') }}" alt="Image" class="h-8" />
              Notes
            </button>
            <button class="flex h-full flex-col items-center justify-between text-sm font-bold">
              <img src="{{ url('/images/share.svg.svg') }}" alt="Image" class="h-8" />
              Share
            </button>
            @role('librarian')
              <form action={{ route('book.destroy', ['book' => $book->id]) }} method="post" style="display: inline;">
                @method('delete')
                @csrf
                <input type="hidden" name="_method" value="delete" />
                <input type="text" name="book_id" id="book_id" class="hidden" value="{{ $book->id }}">
                <button type="submit" class="flex h-full flex-col items-center justify-between text-sm font-bold">
                  <img src="{{ url('/images/trash.svg') }}" alt="Image" class="h-8"
                    style="margin-top: 0.05rem; width: 1.4rem" />
                  Delete
                </button>
              </form>
            @endrole
          </div>
        </div>
        <div class="flex w-full flex-col gap-1 md:w-[40%]">
          <h2 class="text-lg font-bold"><span class="text-[#F27851]">Tentang</span> <span>Penulis</span></h2>
          <h2 class="text-lg text-slate-600">{{ $book->author->name }}</h2>
          <p class="text-sm text-slate-600">{{ $book->author->biography }}</p>
          <div class="flex flex-1 flex-col justify-end">

            <h2 class="font-bold text-slate-800">Buku Lainnya</h2>
            <div class="flex flex-row gap-4">
              @foreach ($randomBooks as $randomBook)
                <a href="#" class="flex items-center justify-center">
                  <img src="{{ $randomBook->cover_url }}" alt="Image" class="h-24" />
                </a>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="flex w-full flex-row gap-4">
        <button @click="activeTab = 'overview'" class="flex flex-1 justify-center border-b-2"
          :class="{ 'border-[#F27851]': activeTab == 'overview', 'border-slate-400': activeTab != 'overview' }">Overview</button>
        <button @click="activeTab = 'details'" class="flex flex-1 justify-center border-b-2"
          :class="{ 'border-[#F27851]': activeTab == 'details', 'border-slate-400': activeTab != 'details' }">Details</button>
        <button @click="activeTab = 'reviews'" class="flex flex-1 justify-center border-b-2"
          :class="{ 'border-[#F27851]': activeTab == 'reviews', 'border-slate-400': activeTab != 'reviews' }">Reviews</button>
      </div>
      <div class="flex w-full flex-col"
        :class="{ 'flex': activeTab == 'overview', 'hidden': activeTab != 'overview' }">
        <div class="flex flex-col gap-1 text-xs text-slate-600 md:flex-row md:gap-4 md:text-sm">
          <div class="flex w-full flex-row">

            <div class="flex flex-1 flex-col items-center justify-center border py-1 px-2 md:py-2 md:px-4">
              <span>Tahun Terbit</span>
              <span>
                {{ $book->release_year }}
              </span>

            </div>
            <div class="flex flex-1 flex-col items-center justify-center border py-1 px-2 md:py-2 md:px-4">
              <span>Penerbit</span>
              <span class="text-center">
                {{ $book->publisher }}
              </span>

            </div>
          </div>
          <div class="flex w-full flex-row">
            <div class="flex flex-1 flex-col items-center justify-center border py-1 px-2 md:py-2 md:px-4">
              <span>Bahasa</span>
              <span>
                {{ $book->language }}
              </span>

            </div>
            <div class="flex flex-1 flex-col items-center justify-center border py-1 px-2 md:py-2 md:px-4">
              <span>Halaman</span>
              <span>
                {{ $book->total_page }}
              </span>
            </div>
          </div>
        </div>
        <h3>Previews available in: {{ $book->hard_copy_available ? 'Hard Copy' : null }}
          {{ $book->ebook_available ? 'Ebook' : null }}
          {{ $book->audio_book_available ? 'Audio Book' : null }}
        </h3>
        <p class="my-4 text-sm">{{ $book->synopsis }}</p>
        <div class="flex w-full flex-col gap-4 sm:flex-row">
          <div class="flex w-full flex-col gap-4 border border-slate-600 p-8">
            <h2 class="text-xl font-bold">Detail Buku</h2>
            <div class="flex flex-col">
              <h3 class="text-sm font-bold">Diterbitkan di:</h3>
              <span class="text-sm">{{ $book->published_from }}</span>
            </div>
          </div>
          <div class="flex w-full flex-col gap-2 border border-slate-600 p-8">
            <h2 class="mb-2 text-xl font-bold">Community Reviews</h2>
            <div class="flex flex-row items-center gap-4">
              <h3 class="text-sm font-bold">Pace</h3>
              <span class="rounded-full border-2 px-2 py-1 text-sm">Meandering 100%</span>
            </div>
            <div class="flex flex-row items-center gap-4">
              <h3 class="text-sm font-bold">Enjoyability</h3>
              <span class="rounded-full border-2 px-2 py-1 text-sm">Interesting 100%</span>
            </div>
            <div class="flex flex-row items-center gap-4">
              <h3 class="text-sm font-bold">Difficulty</h3>
              <span class="rounded-full border-2 px-2 py-1 text-sm">Advanced 100%</span>
            </div>
            <div class="flex flex-row items-center gap-4">
              <h3 class="text-sm font-bold">Genres</h3>

              @foreach ($book->categories->slice(0, 1) as $category)
                <span class="rounded-full border-2 px-2 py-1 text-sm">
                  {{ $category->name }}
                  66%
                </span>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="w-full" :class="{ 'flex': activeTab == 'details', 'hidden': activeTab != 'details' }">
        Details
      </div>
      <div class="w-full" :class="{ 'flex': activeTab == 'reviews', 'hidden': activeTab != 'reviews' }">
        Reviews
      </div>
    </div>
  </div>
</x-app-layout>
