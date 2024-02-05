<x-admin-layout>
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
                <tr>
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
</x-admin-layout>