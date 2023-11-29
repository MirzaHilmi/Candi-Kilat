<x-app-layout>

  @if (Session::has('book_returned'))
    <script>
      Swal.fire({
        title: 'Pengembalian Berhasil',
        icon: 'success',
        confirmButtonText: 'Kembali'
      })
    </script>
  @endif
  <div class="pt-24 pl-0 md:pl-[20%]">

    <form method="POST" action="/pengembalian">
      @csrf
      @method('PATCH')

      <div class="flex w-full flex-col justify-center gap-4 px-8 sm:px-16 md:px-40">
        <h1 class="text-center text-4xl font-bold">Pengembalian Buku</h1>
        <div class="flex flex-col gap-2">
          <h3>Kode Buku: </h3>
          <input type="text" name="isbn" id="isbn" class="rounded-md border-2 border-[#274472]">
        </div>
        <div class="flex flex-col gap-2">
          <h3>Nama Peminjam: </h3>
          <input type="text" name="name" id="name" class="rounded-md border-2 border-[#274472]">
        </div>
        <div class="justify-start">
          <button class="w-max bg-[#274472] py-2 px-4 text-white duration-200 hover:scale-105">Kembalikan Buku</button>
        </div>
        @if ($errors->any())
          {{ implode('', $errors->all(':message')) }}
        @endif
      </div>
    </form>
  </div>

</x-app-layout>
