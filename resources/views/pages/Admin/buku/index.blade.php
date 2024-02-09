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
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Pengarang</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Penerbit</th>
                    {{-- <th class="px-4 py-2"></th> --}}
                </tr>
            </thead>
    
            <tbody class="divide-y divide-gray-200">
                @foreach ($bukus as $buku)
                <tr class="odd:bg-gray-50">
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $buku->judul }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $buku->pengarang->nama }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $buku->penerbit->nama }}</td>
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

</x-admin-layout>