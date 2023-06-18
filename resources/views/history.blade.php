<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="flex flex-col px-4 gap-4">
        <div class="flex flex-row h-48 gap-4">
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
