<x-app-layout>

  <x-navbar/>

  <div class="lg:m-20 flex flex-wrap lg:flex-nowrap">

      <div class="flex-none">
          <dl class="flex flex-wrap m-5 lg:inline-block lg:-my-3 lg:p-5 text-sm border-r">
              <div>
                  {{-- <img src="{{ $buku->cover }}" class="h-52 w-40 lg:h-52 lg:w-52" alt=""> --}}
                  <img src="https://archive.org/services/img/lccn_078073006991" class="h-52 w-40 lg:h-72 lg:w-52" alt="">
              </div>
        
            <div class="grid lg:grid-cols-1 lg:gap-1 py-3 sm:grid-cols-3 sm:gap-4">
              <dt class="font-medium text-gray-900">Tahun Terbit</dt>
              <dd class="text-gray-700 sm:col-span-2">{{ $buku->tahun_terbit }}</dd>
            </div>
        
            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
              <dt class="font-medium text-gray-900">Penerbit</dt>
              <dd class="text-gray-700 sm:col-span-2">{{ $buku->penerbit->nama }}</dd>
            </div>
        
            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
              <dt class="font-medium text-gray-900">Pengarang</dt>
              <dd class="text-gray-700 sm:col-span-2">{{ $buku->pengarang->nama }}</dd>
            </div>
        
            @if (is_null($status))
              <form action="{{ route('pinjam-buku', $buku->id) }}" method="POST" class=""> 
                @method('Post')
                @csrf
                <button
                  class="inline-block  border min-w-full text-center border-black bg-black px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-black focus:outline-none focus:ring active:text-indigo-500"
                >
                  Pinjam
                </button>
              </form>
              @else
              @switch($status->status)
                @case("Menunggu")
                <button class="inline-block  border min-w-full text-center border-gray-300 bg-gray-200 px-12 py-3 text-sm font-medium text-gray-500 hover:bg-gray-300 hover:text-gray-500 focus:outline-none focus:ring focus:ring-gray-200 active:text-gray-500">
                  Menunggu
                </button>
                      @break
                @case("Sedang Meminjam")
                <div class="flex flex-col gap-2">
                  <button class="inline-block  border min-w-full text-center border-black bg-black px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-black focus:outline-none focus:ring active:text-indigo-500">
                    Mulai Baca  
                  </button>

                  <form action="{{ route('kembalikan-buku' , [$buku->id , $peminjaman->id]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="inline-block  border min-w-full text-center border-pink-700 bg-pink-700 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-pink-600 focus:outline-none focus:ring active:bg-pink-500 active:text-white" type="submit">
                      Kembalikan
                    </button>
                  </form>

                </div>
                      @break
                @case("Sudah Dikembalikan")
                <button class="inline-block  border min-w-full text-center border-black bg-black px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-black focus:outline-none focus:ring focus:ring-gray-600 active:text-indigo-500">
                  Dah Dikembalikan
                </button>
                      @break
                @case("Dikembalikan Terlambat")
                <button class="inline-block  border min-w-full text-center border-black bg-black px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-black focus:outline-none focus:ring active:text-indigo-500">
                  telat su
                </button>
                      @break
              @endswitch          
            @endif
            {{-- button --}}
          </dl>
      </div>

      {{-- deskripsi --}}
      <div class="mx-5">
          <h2 class="text-5xl font-semibold my-2">{{ $buku->judul }}</h2>
          <h2 class="text-xl text-gray-600 font-normal my-2">{{ $buku->pengarang->nama }}</h2>
          <hr class="my-2">
          <h2>{{ $buku->deskripsi }}</h2>

          {{-- <hr class="my-2"> --}}
          {{-- badge kategori --}}
          <div class="my-2">
            {{-- {{ dd($buku->kategoris) }} --}}
            @foreach ($buku->kategoris as $k)
            <a href="{{ route('kategori-buku', $k->id) }}" class="px-2 py-1 whitespace-nowrap rounded-full bg-gray-300">
              {{ $k->nama }}
            </a>
            @endforeach
          </div>

      </div>

  </div>
</x-app-layout>