<x-app-layout>

  <x-home-header/>
  {{-- body --}}
  {{-- buku terbaru --}}
  <div class="m-3 lg:mx-36 lg:my-8">
    <h1 class="font-bold text-pink-600 text-2xl">Terbaru</h1>
    
    <div class="grid grid-cols-2 gap-5 px-3 my-2 md:grid-cols-4 md:px-4 md:gap-2 lg:grid-cols-7 lg:p-0 lg:my-3 lg:gap-2">
      @foreach ($bukus as $buku)
      <x-book-card
          :id="$buku->id"
          :cover="$buku->images[0]->filename"
          :judul="$buku->judul"
          :pengarang="$buku->pengarang->nama"
        />
      @endforeach
    </div>

    <h1 class="font-bold text-pink-600 text-2xl">Paling disukai</h1>
    
    <div class="grid grid-cols-2 gap-5 px-3 my-2 md:grid-cols-4 md:px-4 md:gap-2 lg:grid-cols-7 lg:p-0 lg:my-3 lg:gap-2">
      @foreach ($famous as $f)
      <x-book-card
          :id="$f->id"
          :cover="$f->images[0]->filename"
          :judul="$f->judul"
          :pengarang="$f->pengarang->nama"
        />
      
      @endforeach
    </div>

  </div>

</x-app-layout>