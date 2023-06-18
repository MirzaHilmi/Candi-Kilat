
<div class="flex flex-row fixed justify-between bg-white shadow-sm items-center w-full h-20 py-4 z-10 pl-[20%]">
    <div class="flex flex-row flex-1 items-center h-full gap-2 border-2 border-slate-300 rounded-full ml-4 overflow-hidden">
        <div class="bg-slate-100 h-full items-center px-4 flex">
        <h3>Semua</h3>
        
        </div>
        <input type="text" class="flex flex-1 bg-transparent border-0 focus:outline-none outline-none focus:border-0" placeholder="Pencarian">
        
        <img src="{{url('/images/Search.svg')}}" alt="Image" class="mr-4" />
    </div>
    <div class="flex flex-row items-center h-full gap-4 border-2 px-4 justify-center border-slate-300 rounded-full ml-4 overflow-hidden">
        <div class="flex flex-row items-center">
            <img src="{{url('/images/Vector.svg')}}" alt="Image" class="mr-2" />
            <h3>{{date("h:i:s")}}</h3>
            {{-- <h3>09.00 HRS</h3> --}}
        </div>
        <div class="flex flex-row items-center">
            <img src="{{url('/images/Vector2.svg')}}" alt="Image" class="mr-2" />
            {{-- <h3>4-MAR-2023</h3> --}}
            <h3>{{date('Y-m-d')}}</h3>
        </div>
    </div>
</div>      