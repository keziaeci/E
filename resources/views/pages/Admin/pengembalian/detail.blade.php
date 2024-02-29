<x-admin-layout>
    <div class="m-3 lg:mx-10 lg:my-5">
        <a
        class="inline-block rounded-full border border-black p-3  hover:bg-black hover:text-white focus:outline-none focus:ring active:bg-indigo-500"
        href="{{ url()->previous() }}"
        >
            <span class="sr-only"> Download </span>
            <svg 
            width="15" height="15" 
            viewBox="0 0 15 15" 
            fill="none" 
            xmlns="http://www.w3.org/2000/svg">
                <path d="M8.84182 3.13514C9.04327 3.32401 9.05348 3.64042 8.86462 3.84188L5.43521 7.49991L8.86462 11.1579C9.05348 11.3594 9.04327 11.6758 8.84182 11.8647C8.64036 12.0535 8.32394 12.0433 8.13508 11.8419L4.38508 7.84188C4.20477 7.64955 4.20477 7.35027 4.38508 7.15794L8.13508 3.15794C8.32394 2.95648 8.64036 2.94628 8.84182 3.13514Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
            </svg>
        </a>
        <div class="flow-root rounded-lg border border-gray-100 py-3 mt-5 shadow-sm">
            <dl class="-my-3 divide-y divide-gray-100 text-sm">

                <div class="flex justify-between items-center gap-1 p-3 even:bg-gray-50">
                    <div>
                        <h1 class="text-xl font-bold">Detail pengembalian</h1> 
                    </div>
                    <span class="inline-flex overflow-hidden rounded-md border bg-white shadow-sm">
                        <a href="{{ route('master-pengembalian-edit', $pengembalian->id) }}" class="inline-block border-e p-3 text-gray-700 hover:bg-gray-50 focus:relative" title="Edit Product">
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
                        
                        {{-- <form action="{{ route('master-pengembalian-delete' , $pengembalian->id) }}" method="POST">
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
                        </form> --}}
                    </span>
                </div>

                {{-- <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Cover</dt>
                    <dd class="text-gray-700 sm:col-span-2">
                        <img src="https://archive.org/services/img/lccn_078073006991" class="h-52 w-40 lg:h-72 lg:w-52" alt="">
                    </dd>
                </div> --}}

                <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Buku</dt>
                    <a href="{{ route('master-buku-detail',$pengembalian->peminjaman->buku_id) }}">
                        <dd class="text-gray-700 underline sm:col-span-2">{{ $pengembalian->peminjaman->buku->judul }}</dd>
                    </a>
                </div>

                <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Peminjam</dt>
                    <dd class="text-gray-700 sm:col-span-2">{{ $pengembalian->peminjaman->user->name }}</dd>
                </div>
            
                <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Tanggal Kembali</dt>
                    <dd class="text-gray-700 sm:col-span-2">{{ date('H:m:s, d-m-Y', strtotime($pengembalian->tanggal_kembali)) }}</dd>
                </div>

                {{-- <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Genre</dt>
                    <dd class="text-gray-700 sm:col-span-2">
                        @foreach ($pengembalian->kategoris as $kategori)
                        {{ $kategori->nama }}
                        @endforeach
                    </dd>
                </div> --}}

                <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Detail Peminjaman</dt>
                    <a href="{{ route('master-peminjaman-detail',$pengembalian->peminjaman_id) }}">
                        <dd class="text-gray-700 underline sm:col-span-2">{{ $pengembalian->peminjaman_id }}</dd>
                    </a>
                    {{-- <dd class="text-gray-700 sm:col-span-2">{{ $pengembalian->peminjaman_id }}</dd> --}}
                </div>

                <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Status</dt>
                    @switch($pengembalian->peminjaman->status)
                        @case('Sudah Dikembalikan')
                        <dd class="text-gray-700 sm:col-span-2">
                            <span
                            class="inline-flex items-center justify-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-emerald-700"
                            >
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="-ms-1 me-1.5 h-4 w-4"
                            >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                            </svg>
    
                            <p class="whitespace-nowrap text-sm">Sudah Dikembalikan</p>
                            </span>
                        </dd>
                            @break
                        @case('Sedang Meminjam')
                        <dd class="text-gray-700 sm:col-span-2">
                            <span
                            class="inline-flex items-center justify-center rounded-full bg-amber-100 px-2.5 py-0.5 text-amber-700"
                            >
                            <svg 
                            viewBox="0 0 15 15" 
                            fill="none" 
                            class="-ms-1 me-1.5 h-4 w-4"
                            xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.49998 0.849976C7.22383 0.849976 6.99998 1.07383 6.99998 1.34998V3.52234C6.99998 3.79848 7.22383 4.02234 7.49998 4.02234C7.77612 4.02234 7.99998 3.79848 7.99998 3.52234V1.8718C10.8862 2.12488 13.15 4.54806 13.15 7.49998C13.15 10.6204 10.6204 13.15 7.49998 13.15C4.37957 13.15 1.84998 10.6204 1.84998 7.49998C1.84998 6.10612 2.35407 4.83128 3.19049 3.8459C3.36919 3.63538 3.34339 3.31985 3.13286 3.14115C2.92234 2.96245 2.60681 2.98825 2.42811 3.19877C1.44405 4.35808 0.849976 5.86029 0.849976 7.49998C0.849976 11.1727 3.82728 14.15 7.49998 14.15C11.1727 14.15 14.15 11.1727 14.15 7.49998C14.15 3.82728 11.1727 0.849976 7.49998 0.849976ZM6.74049 8.08072L4.22363 4.57237C4.15231 4.47295 4.16346 4.33652 4.24998 4.25C4.33649 4.16348 4.47293 4.15233 4.57234 4.22365L8.08069 6.74051C8.56227 7.08599 8.61906 7.78091 8.19998 8.2C7.78089 8.61909 7.08597 8.56229 6.74049 8.08072Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                                </path>
                            </svg>
    
                            <p class="whitespace-nowrap text-sm">Sedang Meminjam</p>
                            </span>
                        </dd>
                            @break
                        @case('Dikembalikan Terlambat')
                        <dd class="text-gray-700 sm:col-span-2">
                            <span
                            class="inline-flex items-center justify-center rounded-full bg-red-100 px-2.5 py-0.5 text-red-700"
                            >
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="-ms-1 me-1.5 h-4 w-4"
                            >
                                <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"
                                />
                            </svg>
    
                            <p class="whitespace-nowrap text-sm">Dikembalikan Terlambat</p>
                            </span>
                        </dd>
                            @break
                        @case('Menunggu')
                        <dd class="text-gray-700 sm:col-span-2">
                            <span
                            class="inline-flex items-center justify-center rounded-full bg-gray-300 px-2.5 py-0.5 text-gray-700"
                            >
                            <svg 
                            width="15" height="15" 
                            viewBox="0 0 15 15" 
                            fill="none" 
                            class="-ms-1 me-1.5 h-4 w-4"
                            xmlns="http://www.w3.org/2000/svg">
                                <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M7.50009 0.877014C3.84241 0.877014 0.877258 3.84216 0.877258 7.49984C0.877258 11.1575 3.8424 14.1227 7.50009 14.1227C11.1578 14.1227 14.1229 11.1575 14.1229 7.49984C14.1229 3.84216 11.1577 0.877014 7.50009 0.877014ZM1.82726 7.49984C1.82726 4.36683 4.36708 1.82701 7.50009 1.82701C10.6331 1.82701 13.1729 4.36683 13.1729 7.49984C13.1729 10.6328 10.6331 13.1727 7.50009 13.1727C4.36708 13.1727 1.82726 10.6328 1.82726 7.49984ZM8 4.50001C8 4.22387 7.77614 4.00001 7.5 4.00001C7.22386 4.00001 7 4.22387 7 4.50001V7.50001C7 7.63262 7.05268 7.7598 7.14645 7.85357L9.14645 9.85357C9.34171 10.0488 9.65829 10.0488 9.85355 9.85357C10.0488 9.65831 10.0488 9.34172 9.85355 9.14646L8 7.29291V4.50001Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                                </path>
                            </svg>
    
                            <p class="whitespace-nowrap text-sm">Menunggu</p>
                            </span>
                        </div>
                        </dd>
                            @break
                        @default
                            
                    @endswitch
                </div>
            
                {{-- <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Penerbit</dt>
                    <dd class="text-gray-700 sm:col-span-2">{{ $pengembalian->penerbit->nama }}</dd>
                </div> --}}

                {{-- <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Stok</dt>
                    @if ($pengembalian->isNotAvailable())
                        <dd class="text-gray-700 sm:col-span-2">Tidak Tersedia</dd>
                        @else
                        <dd class="text-gray-700 sm:col-span-2">{{ $pengembalian->stok }}</dd>
                    @endif                    
                </div> --}}
            
            
                {{-- <div class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Sinopsis</dt>
                    <dd class="text-gray-700 sm:col-span-2">
                    {!! $pengembalian->deskripsi !!}
                    </dd>
                </div> --}}
            </dl>
        </div>

    </div>

</x-admin-layout>