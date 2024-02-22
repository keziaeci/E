<x-admin-layout>
        <div class="m-2">
                <a
                class="inline-block rounded border border-black bg-black px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-black focus:outline-none focus:ring active:text-black"
                href="{{ route('backup') }}"
                >
                Download
                </a>
        </div>
        <div class="flex flex-wrap gap-2 p-2">
                <a href="{{ route('master-buku') }}">
                        <article class="flex items-center gap-4 rounded-lg border border-gray-100 bg-white p-6">
                                <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2" >
                                        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"  stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                </span>
                
                                <div>
                                        <p class="text-2xl font-medium text-gray-900">{{ $buku }}</p>
                
                                        <p class="text-sm text-gray-500">Total Buku</p>
                                </div>
                        </article>
                </a>
                <a href="{{ route('master-user') }}">
                        <article class="flex items-center gap-4 rounded-lg border border-gray-100 bg-white p-6">
                                <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" 
                                        class="h-8 w-8"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2" >
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" 
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                        <circle cx="12" cy="7" r="4"></circle></svg>                              
                                </span>
                
                                <div>
                                        <p class="text-2xl font-medium text-gray-900">{{ $user }}</p>
                
                                        <p class="text-sm text-gray-500">Total Pengguna</p>
                                </div>
                        </article>
                </a>
                <a href="{{ route('master-pengarang') }}">
                        <article class="flex items-center gap-4 rounded-lg border border-gray-100 bg-white p-6">
                                <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg"  class="h-8 w-8"  
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon>
                                        </svg>                         
                                </span>
                
                                <div>
                                        <p class="text-2xl font-medium text-gray-900">{{ $pengarang }}</p>
                
                                        <p class="text-sm text-gray-500">Total Pengarang</p>
                                </div>
                        </article>
                </a>
                <a href="{{ route('master-penerbit') }}">
                        <article class="flex items-center gap-4 rounded-lg border border-gray-100 bg-white p-6">
                                <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                                        stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"/><path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"/></svg>               
                                </span>
                
                                <div>
                                        <p class="text-2xl font-medium text-gray-900">{{ $penerbit }}</p>
                                        <p class="text-sm text-gray-500">Total Penerbit</p>
                                </div>
                        </article>
                </a>
                <a href="{{ route('master-peminjaman') }}">
                        <article class="flex items-center gap-4 rounded-lg border border-gray-100 bg-white p-6">
                                <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" class="h-8 w-8"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.81825 1.18188C7.64251 1.00615 7.35759 1.00615 7.18185 1.18188L4.18185 4.18188C4.00611 4.35762 4.00611 4.64254 4.18185 4.81828C4.35759 4.99401 4.64251 4.99401 4.81825 4.81828L7.05005 2.58648V9.49996C7.05005 9.74849 7.25152 9.94996 7.50005 9.94996C7.74858 9.94996 7.95005 9.74849 7.95005 9.49996V2.58648L10.1819 4.81828C10.3576 4.99401 10.6425 4.99401 10.8182 4.81828C10.994 4.64254 10.994 4.35762 10.8182 4.18188L7.81825 1.18188ZM2.5 9.99997C2.77614 9.99997 3 10.2238 3 10.5V12C3 12.5538 3.44565 13 3.99635 13H11.0012C11.5529 13 12 12.5528 12 12V10.5C12 10.2238 12.2239 9.99997 12.5 9.99997C12.7761 9.99997 13 10.2238 13 10.5V12C13 13.104 12.1062 14 11.0012 14H3.99635C2.89019 14 2 13.103 2 12V10.5C2 10.2238 2.22386 9.99997 2.5 9.99997Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                        </svg>                     
                                </span>
                
                                <div>
                                        <p class="text-2xl font-medium text-gray-900">{{ $peminjaman }}</p>
                                        <p class="text-sm text-gray-500">Total Peminjaman</p>
                                </div>
                        </article>
                </a>
                <a href="{{ route('master-pengembalian') }}">
                        <article class="flex items-center gap-4 rounded-lg border border-gray-100 bg-white p-6">
                                <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" class="h-8 w-8"
                                        xmlns="http://www.w3.org/2000/svg"><path d="M7.50005 1.04999C7.74858 1.04999 7.95005 1.25146 7.95005 1.49999V8.41359L10.1819 6.18179C10.3576 6.00605 10.6425 6.00605 10.8182 6.18179C10.994 6.35753 10.994 6.64245 10.8182 6.81819L7.81825 9.81819C7.64251 9.99392 7.35759 9.99392 7.18185 9.81819L4.18185 6.81819C4.00611 6.64245 4.00611 6.35753 4.18185 6.18179C4.35759 6.00605 4.64251 6.00605 4.81825 6.18179L7.05005 8.41359V1.49999C7.05005 1.25146 7.25152 1.04999 7.50005 1.04999ZM2.5 10C2.77614 10 3 10.2239 3 10.5V12C3 12.5539 3.44565 13 3.99635 13H11.0012C11.5529 13 12 12.5528 12 12V10.5C12 10.2239 12.2239 10 12.5 10C12.7761 10 13 10.2239 13 10.5V12C13 13.1041 12.1062 14 11.0012 14H3.99635C2.89019 14 2 13.103 2 12V10.5C2 10.2239 2.22386 10 2.5 10Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                        </svg>                     
                                </span>
                
                                <div>
                                        <p class="text-2xl font-medium text-gray-900">{{ $pengembalian }}</p>
                                        <p class="text-sm text-gray-500">Total Pengembalian</p>
                                </div>
                        </article>
                </a>
        </div>
        {{-- <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi tempore nobis reprehenderit animi recusandae corporis nam veniam iure veritatis inventore mollitia maiores eius sequi distinctio accusamus ipsa, nulla sunt soluta eveniet. Nemo labore facere eos dolorum, ullam suscipit dolor esse eaque ex necessitatibus quidem placeat doloribus iste distinctio aspernatur accusantium minus. Aut, reiciendis libero rem tenetur quod, saepe provident unde vitae ratione ducimus aliquid? Unde, dolorem. Magni inventore laborum voluptate! Nesciunt delectus dolores eaque, totam error autem reiciendis, eveniet vero suscipit quae omnis iusto similique neque ad possimus, dolorum soluta est quidem officiis deleniti aliquam! Exercitationem corporis porro quia reiciendis!</h1> --}}
</x-admin-layout>