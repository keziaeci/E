<x-admin-layout>
    {{-- //FIXME datatables table  --}}
    <div class="mx-10 my-5 flex">
        {{-- <a href="{{ route('master-peminjaman-create') }}" class="inline-flex items-center gap-2 rounded-md px-4 py-2 text-sm bg-indigo-600 text-white hover:bg-indigo-700 focus:relative" title="Edit Product">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#FFFF" 
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
            Tambah
        </a> --}}
        <h1 class="text-2xl font-bold">Data Peminjaman</h1>
    </div>
    <div class="overflow-auto mx-10 my-5 rounded-lg border border-gray-200">
        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
            <thead class="ltr:text-left rtl:text-right">
                <tr>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Nama Peminjam</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Tanggal Pinjam</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Buku</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Status</th>
                </tr>
            </thead>
    
            <tbody class="divide-y divide-gray-200">
                @foreach ($peminjamans as $peminjaman)
                <tr class="odd:bg-gray-50">
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $peminjaman->user->name }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ date('D-m-Y', strtotime($peminjaman->tanggal_pinjam)) }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $peminjaman->buku->judul }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                    @switch($peminjaman->status)
                        @case('Sudah Dikembalikan')
                        <div class="text-gray-700 sm:col-span-2">
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
                        </div>
                            @break
                        @case('Sedang Meminjam')
                        <div class="text-gray-700 sm:col-span-2">
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
                        </div>
                            @break
                        @case('Dikembalikan Terlambat')
                        <div class="text-gray-700 sm:col-span-2">
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
                        </div>
                            @break
                        @default
                            
                    @endswitch
                    </td>
                    <td class="whitespace-nowrap px-4 py-2">
                        <a
                        href="{{ route('master-peminjaman-detail' , $peminjaman->id) }}"
                        class="inline-block rounded bg-indigo-600 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700"
                        >
                        Detail
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Data pemohon --}}
    <div class="mx-10 my-5 flex">
        {{-- <a href="{{ route('master-peminjaman-create') }}" class="inline-flex items-center gap-2 rounded-md px-4 py-2 text-sm bg-indigo-600 text-white hover:bg-indigo-700 focus:relative" title="Edit Product">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#FFFF" 
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
            Tambah
        </a> --}}
        <h1 class="text-2xl font-bold">Data Permohonan Baca Ulang</h1>
    </div>
    <div class="overflow-auto mx-10 my-5 rounded-lg border border-gray-200">
        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
            <thead class="ltr:text-left rtl:text-right">
                <tr>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Nama Peminjam</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Tanggal Pinjam</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Buku</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Status</th>
                </tr>
            </thead>
    
            <tbody class="divide-y divide-gray-200">
                {{-- {{ dd($permohonans) }} --}}
                @foreach ($permohonans as $permohonan)
                <tr class="odd:bg-gray-50">
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $permohonan->user->name }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ date('D-m-Y', strtotime($permohonan->tanggal_pinjam)) }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $permohonan->buku()->withTrashed()->pluck('judul')->first() }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                        <div class="">
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
        
                                <p class="whitespace-nowrap text-sm">{{ $permohonan->status }}</p>
                                </span>
                            </div>
                    </td>
                    <td class="whitespace-nowrap px-4 py-2">
                        <form action="{{ route('master-peminjaman-update' , [$permohonan->id, $permohonan->buku()->withTrashed()->pluck('id')->first()]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button
                            type="submit"
                            class="inline-block rounded bg-yellow-500 px-4 py-2 text-xs font-medium text-white hover:bg-yellow-600"
                            >
                            Ijinkan
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- //FIXME success alert position after inserting data --}}
    @if (session()->has('success'))
    <div x-data="{ open: true }" x-show="open" role="alert" class="absolute max-w-sm z-20  top-10 rounded-xl border border-gray-100 bg-white p-4">
        
        <div class="flex items-start gap-4">
            <span class="text-green-600">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6"
                >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                />
                </svg>
            </span>
            
            <div class="flex-1">
                <strong class="block font-medium text-gray-900"> Berhasil </strong>
        
                {{-- <p class="mt-1 text-sm text-gray-700">Wasu</p> --}}
        
                <p class="mt-1 text-sm text-gray-700">{{ session('success') }}</p>
            </div>
            
            <button @click="open = false" class="text-gray-500 transition hover:text-gray-600">
                <span class="sr-only">Dismiss popup</span>
        
                <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6"
                >
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
    @endif
    
    @if (session()->has('error'))
    <div x-data="{ open: true }" x-show="open" role="alert" class="absolute max-w-sm z-20  top-10 rounded-xl border border-gray-100 bg-white p-4">
        
        <div class="flex items-start gap-4">
            <span class="text-red-600">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6"
                >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                />
                </svg>
            </span>
            
            <div class="flex-1">
                <strong class="block font-medium text-gray-900"> Gagal </strong>
        
                {{-- <p class="mt-1 text-sm text-gray-700">Wasu</p> --}}
        
                <p class="mt-1 text-sm text-gray-700">{{ session('error') }}</p>
            </div>
            
            <button @click="open = false" class="text-gray-500 transition hover:text-gray-600">
                <span class="sr-only">Dismiss popup</span>
        
                <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6"
                >
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
    @endif

</x-admin-layout>