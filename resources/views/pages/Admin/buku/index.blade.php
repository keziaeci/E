<x-admin-layout>

  
    {{-- //FIXME datatables table  --}}
    <div class="mx-10 my-5 flex justify-end">
        <a href="{{ route('master-buku-create') }}" class="inline-flex items-center gap-2 rounded-md px-4 py-2 text-sm bg-indigo-600 text-white hover:bg-indigo-700 focus:relative" title="Edit Product">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#FFFF" 
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
            Tambah
        </a>
    </div>
    <div class="overflow-auto mx-10 my-5 rounded-lg border border-gray-200">
        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
            <thead class="ltr:text-left rtl:text-right">
                <tr>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Judul</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Genre</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Pengarang</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Penerbit</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Stok</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Aksi</th>
                </tr>
            </thead>
    
            <tbody class="divide-y divide-gray-200">
                @if ($bukus->isEmpty())
                <tr class="bg-gray-50">
                    <td>Tidak ada buku</td>
                </tr>
                @else
                @foreach ($bukus as $buku)
                <tr class="odd:bg-gray-50">
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $buku->judul }}</td>
                    @if ($buku->kategoris->isEmpty())
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-700">-</td>
                    @else
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-700">
                        @foreach ($buku->kategoris as $kategori)
                        {{ $kategori->nama }}
                        @endforeach
                    </td>
                    @endif
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $buku->pengarang()->withTrashed()->pluck('nama')->first() }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $buku->penerbit()->withTrashed()->pluck('nama')->first() }}</td>
                    @if ($buku->isNotAvailable())
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">Tidak Tersedia</td>
                        @else
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $buku->stok }}</td>
                    @endif     
                    <td class="whitespace-nowrap px-4 py-2">
                        <a
                        href="{{ route('master-buku-detail' , $buku->id) }}"
                        class="inline-block rounded bg-indigo-600 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700"
                        >
                        Detail
                        </a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
    

    {{-- Trashed Books --}}
    <div class="mx-10">
        <h1>Buku yang dihapus</h1>
    </div>
    <div class="overflow-auto mx-10 my-5 rounded-lg border border-gray-200">
        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
            <thead class="ltr:text-left rtl:text-right">
                <tr>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Judul</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Genre</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Pengarang</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Penerbit</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Stok</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Aksi</th>
                </tr>
            </thead>
    
            <tbody class="divide-y divide-gray-200">
                @if ($trashes->isEmpty())
                <tr class="bg-gray-50">
                    <td>Tidak ada sampah</td>
                </tr>
                @else
                @foreach ($trashes as $trash)

                <tr class="odd:bg-gray-50">
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $trash->judul }}</td>
                    @if ($trash->kategoris->isEmpty())
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-700">-</td>
                    @else
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-700">
                        @foreach ($trash->kategoris as $kategori)
                        {{ $kategori->nama }}
                        @endforeach
                    </td>
                    @endif
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $trash->pengarang()->withTrashed()->pluck('nama')->first() }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $trash->penerbit()->withTrashed()->pluck('nama')->first() }}</td>
                    @if ($trash->isNotAvailable())
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">Tidak Tersedia</td>
                        @else
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $trash->stok }}</td>
                    @endif     
                    <td class="whitespace-nowrap px-4 py-2">
                        <a
                        href="{{ route('master-buku-restore' , $trash->id) }}"
                        class="inline-block rounded bg-yellow-400 px-4 py-2 text-xs font-medium text-white hover:bg-yellow-500"
                        >
                        Pulihkan
                        </a>
                        <a
                        href="{{ route('master-buku-force-delete' , $trash->id) }}" onclick="return confirm('Anda yakin ingin menghapus data ini secara permanen?')"
                        class="inline-block rounded bg-red-500 px-4 py-2 text-xs font-medium text-white hover:bg-red-600"
                        >
                        Hapus Permanen
                        </a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>

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
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
    @push('cdn')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css" />

    @endpush --}}
</x-admin-layout>