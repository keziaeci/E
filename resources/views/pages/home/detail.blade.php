<x-app-layout>

  <x-navbar/>

  <div class="m-20 flex">
      <div class="flex-none">
          <dl class="-my-3 p-5 text-sm border-r">
              <div>
                  <img src="{{ $buku->cover }}" class="h-52 w-52" alt="">
              </div>
            {{-- <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
              <dt class="font-medium text-gray-900">Title</dt>
              <dd class="text-gray-700 sm:col-span-2">{{ $buku->judul }}</dd>
            </div> --}}
        
            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
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
        
            {{-- <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
              <dt class="font-medium text-gray-900">Deskripsi</dt>
              <dd class="text-gray-700 sm:col-span-2">
                  {{ $buku->deskripsi }}
              </dd>
            </div> --}}
            {{-- <a
              class="group relative inline-block text-sm font-medium text-black focus:outline-none focus:ring active:text-indigo-500"
              href="#"
            >
              <span
                class="absolute inset-0 translate-x-0 translate-y-0 bg-black transition-transform group-hover:translate-x-0.5 group-hover:translate-y-0.5"
              ></span>

              <span class="relative block border border-current bg-white px-8 py-3"> Pinjam </span>
            </a> --}}
            {{-- {{ dd(is_null($status)) }} --}}
            @if (is_null($status))
              <form action="{{ route('pinjam-buku', $buku->id) }}" method="POST">
                @method('Post')
                @csrf
                <button
                  class="inline-block rounded border min-w-full text-center border-black bg-black px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-black focus:outline-none focus:ring active:text-indigo-500"
                >
                  Pinjam
                </button>
              </form>
              @else
              @switch($status->status)
              @case("Menunggu")
                <button class="inline-block rounded border min-w-full text-center border-gray-300 bg-gray-200 px-12 py-3 text-sm font-medium text-gray-500 hover:bg-gray-300 hover:text-gray-500 focus:outline-none focus:ring focus:ring-gray-200 active:text-gray-500">
                  Menunggu
                </button>
                  {{-- <button class="inline-block rounded border min-w-full text-center border-gray-300 bg-gray-200 px-12 py-3 text-sm font-medium text-gray-500" disabled>
                  Menunggu Antrean
                </button> --}}
                      @break
                  @case("Sedang Meminjam")
                  <button
                  class="inline-block rounded border min-w-full text-center border-black bg-black px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-black focus:outline-none focus:ring active:text-indigo-500"
                >
                  Mulai Baca
                </button>
                      @break
                  @case("Sudah Dikembalikan")
                      <p>hash</p>
                      @break
              @endswitch          
            @endif
            {{-- button --}}
          </dl>
      </div>

      <div class="mx-5">

          <h2 class="text-5xl font-semibold my-2">{{ $buku->judul }}</h2>
          <h2 class="text-xl font-normal my-2">{{ $buku->pengarang->nama }}</h2>
          <hr class="my-2">
          <h2>{{ $buku->deskripsi }}</h2>
      </div>
      {{-- <div class="flow-root">
          <dl class="-my-3 divide-y divide-gray-100 text-sm">
              <div>
                  <img src="{{ $buku->cover }}" class="h-52 w-52" alt="">
              </div>
            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
              <dt class="font-medium text-gray-900">Title</dt>
              <dd class="text-gray-700 sm:col-span-2">{{ $buku->judul }}</dd>
            </div>
        
            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
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
        
            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
              <dt class="font-medium text-gray-900">Deskripsi</dt>
              <dd class="text-gray-700 sm:col-span-2">
                  {{ $buku->deskripsi }}
              </dd>
            </div>
          </dl>
        </div> --}}

  </div>
</x-app-layout>