<x-admin-layout>

  
    {{-- //FIXME datatables table  --}}
    <div class="mx-10 my-5 flex justify-end">
        <a 
        href="{{ route('master-pengarang-create') }}" 
        class="inline-flex items-center gap-2 rounded-md px-4 py-2 text-sm bg-indigo-600 text-white hover:bg-indigo-700 focus:relative" title="Edit Product">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#FFFF" 
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
            Tambah
        </a>
    </div>
    <div class="overflow-auto mx-10 my-5 rounded-lg border border-gray-200">
        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
            <thead class="ltr:text-left rtl:text-right">
                <tr>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Nama</th>
                    {{-- <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Pengarang</th> --}}
                    {{-- <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Penerbit</th> --}}
                    {{-- <th class="px-4 py-2"></th> --}}
                </tr>
            </thead>
    
            <tbody class="divide-y divide-gray-200">
                @foreach ($pengarangs as $pengarang)
                <tr class="odd:bg-gray-50">
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $pengarang->nama }}</td>
                    {{-- <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $pengarang->nama }}</td> --}}
                    {{-- <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $pengarang->penerbit->nama }}</td> --}}
                    <td class="whitespace-nowrap px-4 py-2">
                        {{-- <a
                        href="{{ route('master-pengarang-detail' , $pengarang->id) }}"
                        class="inline-block rounded bg-indigo-600 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700"
                        >
                        Detail
                        </a> --}}
                        <span class="inline-flex">

                            <a href="{{ route('master-pengarang-edit', $pengarang->id) }}"  class="inline-block border-e p-3 text-gray-700 bg-gray-100 rounded hover:bg-gray-200 focus:relative" title="Edit Product">
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
                            <form action="{{ route('master-pengarang-delete' , $pengarang->id) }}" method="POST">
                                <button onclick="return confirm('Apakah anda yakin?');" type="submit" class="inline-block rounded p-3 bg-red-50 text-red-700 hover:bg-red-100 focus:relative" title="Delete Product">
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