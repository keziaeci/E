<x-admin-layout>
    <div class="m-3 lg:mx-10 lg:my-5">
        <div class="flow-root rounded-lg border border-gray-100 py-3 shadow-sm">
            <dl class="-my-3 divide-y divide-gray-100 text-sm">

                <div class="flex justify-between items-center gap-1 p-3 even:bg-gray-50">
                    <div>
                        <h1 class="text-xl font-bold">Detail Buku</h1> 
                    </div>
                    <span class="inline-flex overflow-hidden rounded-md border bg-white shadow-sm">
                        <a href="{{ route('master-buku-edit', $buku->id) }}" class="inline-block border-e p-3 text-gray-700 hover:bg-gray-50 focus:relative" title="Edit Product">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-4 w-4"
                            >
                                <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"
                                />
                            </svg>
                        </a>
                        
                        <form action="{{ route('master-buku-delete' , $buku->id) }}" method="POST">
                            <button onclick="return confirm('Apakah anda yakin?');" type="submit" class="inline-block p-3 text-red-700 hover:bg-red-50 focus:relative" title="Delete Product">
                            @method('delete')
                            @csrf
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="h-4 w-4"
                                >
                                    <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                    />
                                </svg>
                            </button>
                        </form>
                    </span>
                </div>

                <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Cover</dt>
                    <dd class="text-gray-700 sm:col-span-2">
                        @if (empty($buku->cover))
                        <img src="https://archive.org/services/img/lccn_078073006991" class="h-52 w-40 lg:h-72 lg:w-52" alt="">
                            @else
                            <img src="{{ asset('/storage/' . $buku->cover) }}" class="h-52 w-40 lg:h-72 lg:w-52" alt="">
                        @endif
                    </dd>
                </div>

                <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Judul</dt>
                    <dd class="text-gray-700 sm:col-span-2">{{ $buku->judul }}</dd>
                </div>
            
                <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Tahun Terbit</dt>
                    <dd class="text-gray-700 sm:col-span-2">{{ $buku->tahun_terbit }}</dd>
                </div>

                <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Genre</dt>
                    <dd class="text-gray-700 sm:col-span-2">
                        @foreach ($buku->kategoris as $kategori)
                        {{ $kategori->nama }}
                        @endforeach
                    </dd>
                </div>

                <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Pengarang</dt>
                    <dd class="text-gray-700 sm:col-span-2">{{ $buku->pengarang->nama }}</dd>
                </div>
            
                <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Penerbit</dt>
                    <dd class="text-gray-700 sm:col-span-2">{{ $buku->penerbit->nama }}</dd>
                </div>

                <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Stok</dt>
                    @if ($buku->isNotAvailable())
                        <dd class="text-gray-700 sm:col-span-2">Tidak Tersedia</dd>
                        @else
                        <dd class="text-gray-700 sm:col-span-2">{{ $buku->stok }}</dd>
                    @endif                    
                </div>
            
            
                <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Sinopsis</dt>
                    <dd class="text-gray-700 sm:col-span-2">
                    {!! $buku->deskripsi !!}
                    </dd>
                </div>
            </dl>
        </div>

    </div>

</x-admin-layout>