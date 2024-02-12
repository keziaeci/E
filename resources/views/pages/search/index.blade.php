
<x-app-layout>
    <x-navbar/>

    <div class="m-3 lg:mx-36">
        <h1 class="font-bold text-pink-600 text-2xl">Hasil pencarian</h1>
        {{-- {{ $buku->isEmpty() }} --}}
        @if ($data->isEmpty())
        <p class="mt-1.5 text-sm text-gray-500">
            Maaf, pencarian Anda tidak dapat ditemukan, mungkin anda tertarik dengan buku lain dibawah
        </p>
        @endif
        
        <div class="grid grid-cols-2 gap-5 px-3 my-2 md:grid-cols-4 md:px-4 md:gap-2 lg:grid-cols-7 lg:p-0 lg:my-3 lg:gap-2">
            @foreach ($data as $d)
            <x-book-card
            :id="$d->id"
            :judul="$d->judul"
            :pengarang="$d->pengarang->nama"
            /> 
            @endforeach
        </div>
        
        <h1 class="font-bold text-pink-600 text-xl">Mungkin anda suka</h1>
        
        <div class="grid grid-cols-2 gap-5 px-3 my-2 md:grid-cols-4 md:px-4 md:gap-2 lg:grid-cols-7 lg:p-0 lg:my-3 lg:gap-2">
            @foreach ($bukus as $buku)
            <x-book-card
            :id="$buku->id"
            :judul="$buku->judul"
            :pengarang="$buku->pengarang->nama"
            /> 
            @endforeach
        </div>

    </div>

</x-app-layout>