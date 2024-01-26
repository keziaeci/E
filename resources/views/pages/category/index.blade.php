<x-app-layout>
    <x-navbar/>

    <div class="my-10 lg:mx-36">
        {{-- Judul --}}
        <div class="flex gap-2 flex-col items-center">
            <h1 class="text-4xl font-bold">{{ $kategoris->nama }}</h1>
            <h1 class="text-sm mt-3 text-gray-500">{{ $kategoris->bukus->count() }} buku</h1>
        </div>

        <hr class="mt-20">

        <h1 class="font-bold text-pink-600 text-2xl my-5">Buku rekomendasi</h1>
        
        <div class="grid grid-cols-2 gap-5 px-3 my-2 md:grid-cols-4 md:px-4 md:gap-2 lg:grid-cols-7 lg:p-0 lg:my-3 lg:gap-2" >
            @foreach ($kategoris->bukus as $buku)
                <x-book-card
                :id="$buku->id"
                :judul="$buku->judul"
                :pengarang="$buku->pengarang->nama"
                />
            @endforeach
        </div>
        
    </div>

</x-app-layout>
