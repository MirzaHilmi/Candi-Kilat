<x-app-layout>
  <div class="flex flex-col gap-4 px-4">
    <a href="/dashboard" class="flex flex-row items-center gap-2">
      <img src="{{ url('/images/back.svg') }}" alt="Image" class="" />
      <span>Kembali</span>
    </a>
    <div class="flex flex-row">
      <div class="flex w-[60%] flex-col">
        <div class="flex flex-1 flex-row gap-4">
          <img src="{{ url('/images/book.png') }}" alt="Image" class="" />
          <div class="flex flex-col justify-between">
            <div class="flex flex-col">
              <h1 class="text-2xl">Dont Make Me Think</h1>
              <h3 class="text-slate-700">By Steve Kurg, 2000</h3>
              <h3 class="text-slate-500">Edisi Kedua</h3>
              <span class="flex flex-row items-center text-sm">
                <img src="{{ url('/images/Star.svg') }}" alt="Image" class="h-full" />
                <img src="{{ url('/images/Star.svg') }}" alt="Image" class="h-full" />
                <img src="{{ url('/images/Star.svg') }}" alt="Image" class="h-full" />
                <img src="{{ url('/images/Star.svg') }}" alt="Image" class="h-full" />
                <img src="{{ url('/images/Star.svg') }}" alt="Image" class="h-full" />
                <span class="ml-2">
                  5.0 Penilaian
                </span>
              </span>
              <span class="text-sm">
                Dipinjam 25 Kali
              </span>
            </div>
            <div class="flex flex-col">
              <span class="font-bold">Status</span>
              <span class="w-fit rounded-md bg-green-500 py-1 px-4 text-white">In-Shelf</span>
            </div>
          </div>
        </div>
        <div class="mt-4 flex h-20 flex-row gap-8">
          <button class="flex h-full flex-col items-center justify-between font-bold">
            <img src="{{ url('/images/reviews.svg.svg') }}" alt="Image" class="w-full" />
            Review
          </button>
          <button class="flex h-full flex-col items-center justify-between font-bold">
            <img src="{{ url('/images/notes.svg.svg') }}" alt="Image" class="w-full" />
            Notes
          </button>
          <button class="flex h-full flex-col items-center justify-between font-bold">
            <img src="{{ url('/images/share.svg.svg') }}" alt="Image" class="w-full" />
            Share
          </button>
        </div>
      </div>
      <div class="flex w-[40%] flex-col gap-2">
        <h2 class="text-lg font-bold"><span class="text-[#F27851]">Tentang</span> <span>Penulis</span></h2>
        <h2 class="text-lg text-slate-600">Steve Kurg</h2>
        <p class="text-sm text-slate-600">Steve Krug adalah konsultan usability yang memiliki pengalaman lebih dari 30
          tahun sebagai ahli usability untuk perusahaan seperti Apple, Netscape, AOL, Lexus, dan lainnya. Sebagian
          berdasarkan kesuksesan buku pertamanya, Don't Make Me Think, dia telah menjadi pembicara yang sangat dicari
          tentang desain usability.</p>
        <h2 class="font-bold text-slate-800">Buku Lainnya</h2>
        <div class="flex flex-1 flex-row gap-4 px-4">
          <a href="#" class="flex items-center justify-center">
            <img src="{{ url('/images/book.png') }}" alt="Image" class="" />
          </a>
          <a href="#" class="flex items-center justify-center">
            <img src="{{ url('/images/book.png') }}" alt="Image" class="" />
          </a>
        </div>
      </div>
    </div>
    {{-- <div class="flex flex-row h-48 gap-4">
            <div class="h-full w-[30%] rounded-lg text-white bg-slate-700 p-6">
                <h3 class="font-bold">Quote Hari Ini</h3>
                <p>Buatlah hari ini lebih baik dari hari kemarin!</p>
            </div>
            <div class="flex flex-1 flex-row rounded-lg overflow-hidden gap-4 items-center">
                <div class="bg-slate-500 h-full w-12 flex text-white items-center justify-center">
                    <h3 class="origin-center -rotate-90">Buku_Baru</h3>
                </div>
                <a href="#" class="h-full flex items-center justify-center">
                    <img src="{{url('/images/book.png')}}" alt="Image" class="shadow-md" />
                </a>
                <a href="#" class="h-full flex items-center justify-center">
                    <img src="{{url('/images/book.png')}}" alt="Image" class="shadow-md" />
                </a>
                <a href="#" class="h-full flex items-center justify-center">
                    <img src="{{url('/images/book.png')}}" alt="Image" class="shadow-md" />
                </a>
                <a href="#" class="h-full flex items-center justify-center">
                    <img src="{{url('/images/book.png')}}" alt="Image" class="shadow-md" />
                </a>
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <h2 class="text-2xl text-[#243F65] font-bold">Koleksi Buku</h2>
            <div class="w-full grid grid-cols-5 gap-4">
                <a href="#" class="h-full flex flex-col items-center justify-center">
                    <img src="{{url('/images/book.png')}}" alt="Image" class="shadow-md" />
                    <div class="flex flex-col">
                        <h3>Dont Make Me Think</h3>
                        <span class="text-sm text-slate-500">Steve Krug, 2000</span>
                        <span class="text-sm text-slate-500">4.5/5</span>
                    </div>
                </a>
                <a href="#" class="h-full flex flex-col items-center justify-center">
                    <img src="{{url('/images/book.png')}}" alt="Image" class="shadow-md" />
                    <div class="flex flex-col">
                        <h3>Dont Make Me Think</h3>
                        <span class="text-sm text-slate-500">Steve Krug, 2000</span>
                        <span class="text-sm text-slate-500">4.5/5</span>
                    </div>
                </a>
                <a href="#" class="h-full flex flex-col items-center justify-center">
                    <img src="{{url('/images/book.png')}}" alt="Image" class="shadow-md" />
                    <div class="flex flex-col">
                        <h3>Dont Make Me Think</h3>
                        <span class="text-sm text-slate-500">Steve Krug, 2000</span>
                        <span class="text-sm text-slate-500">4.5/5</span>
                    </div>
                </a>
                <a href="#" class="h-full flex flex-col items-center justify-center">
                    <img src="{{url('/images/book.png')}}" alt="Image" class="shadow-md" />
                    <div class="flex flex-col">
                        <h3>Dont Make Me Think</h3>
                        <span class="text-sm text-slate-500">Steve Krug, 2000</span>
                        <span class="text-sm text-slate-500">4.5/5</span>
                    </div>
                </a>
                <a href="#" class="h-full flex flex-col items-center justify-center">
                    <img src="{{url('/images/book.png')}}" alt="Image" class="shadow-md" />
                    <div class="flex flex-col">
                        <h3>Dont Make Me Think</h3>
                        <span class="text-sm text-slate-500">Steve Krug, 2000</span>
                        <span class="text-sm text-slate-500">4.5/5</span>
                    </div>
                </a>
                <a href="#" class="h-full flex flex-col items-center justify-center">
                    <img src="{{url('/images/book.png')}}" alt="Image" class="shadow-md" />
                    <div class="flex flex-col">
                        <h3>Dont Make Me Think</h3>
                        <span class="text-sm text-slate-500">Steve Krug, 2000</span>
                        <span class="text-sm text-slate-500">4.5/5</span>
                    </div>
                </a>
                <a href="#" class="h-full flex flex-col items-center justify-center">
                    <img src="{{url('/images/book.png')}}" alt="Image" class="shadow-md" />
                    <div class="flex flex-col">
                        <h3>Dont Make Me Think</h3>
                        <span class="text-sm text-slate-500">Steve Krug, 2000</span>
                        <span class="text-sm text-slate-500">4.5/5</span>
                    </div>
                </a>
                <a href="#" class="h-full flex flex-col items-center justify-center">
                    <img src="{{url('/images/book.png')}}" alt="Image" class="shadow-md" />
                    <div class="flex flex-col">
                        <h3>Dont Make Me Think</h3>
                        <span class="text-sm text-slate-500">Steve Krug, 2000</span>
                        <span class="text-sm text-slate-500">4.5/5</span>
                    </div>
                </a>
                <a href="#" class="h-full flex flex-col items-center justify-center">
                    <img src="{{url('/images/book.png')}}" alt="Image" class="shadow-md" />
                    <div class="flex flex-col">
                        <h3>Dont Make Me Think</h3>
                        <span class="text-sm text-slate-500">Steve Krug, 2000</span>
                        <span class="text-sm text-slate-500">4.5/5</span>
                    </div>
                </a>
            </div>
        </div> --}}
  </div>
</x-app-layout>
