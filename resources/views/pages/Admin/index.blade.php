<x-admin-layout>
        <div class="grid grid-rows-2 md:grid-cols-3 lg:grid-flow-col gap-2 p-2">
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
                <a href="{{ route('master-kategori') }}">
                        <article class="flex items-center gap-4 rounded-lg border border-gray-100 bg-white p-6">
                                <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                                        <svg class="h-8 w-8"
                                        xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.5 12H16c-.7 2-2 3-4 3s-3.3-1-4-3H2.5"/><path d="M5.5 5.1L2 12v6c0 1.1.9 2 2 2h16a2 2 0 002-2v-6l-3.4-6.9A2 2 0 0016.8 4H7.2a2 2 0 00-1.8 1.1z"/>
                                        </svg>             
                                </span>
                
                                <div>
                                        <p class="text-2xl font-medium text-gray-900">{{ $kategori }}</p>
                                        <p class="text-sm text-gray-500">Total Kategori</p>
                                </div>
                        </article>
                </a>
                <a href="{{ route('aktivitas') }}">
                        <article class="flex items-center gap-4 rounded-lg border border-gray-100 bg-white p-6">
                                <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                                        <svg    class="h-8 w-8"
                                                width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 1.5C0 1.22386 0.223858 1 0.5 1H2.5C2.77614 1 3 1.22386 3 1.5C3 1.77614 2.77614 2 2.5 2H0.5C0.223858 2 0 1.77614 0 1.5ZM4 1.5C4 1.22386 4.22386 1 4.5 1H14.5C14.7761 1 15 1.22386 15 1.5C15 1.77614 14.7761 2 14.5 2H4.5C4.22386 2 4 1.77614 4 1.5ZM4 4.5C4 4.22386 4.22386 4 4.5 4H11.5C11.7761 4 12 4.22386 12 4.5C12 4.77614 11.7761 5 11.5 5H4.5C4.22386 5 4 4.77614 4 4.5ZM0 7.5C0 7.22386 0.223858 7 0.5 7H2.5C2.77614 7 3 7.22386 3 7.5C3 7.77614 2.77614 8 2.5 8H0.5C0.223858 8 0 7.77614 0 7.5ZM4 7.5C4 7.22386 4.22386 7 4.5 7H14.5C14.7761 7 15 7.22386 15 7.5C15 7.77614 14.7761 8 14.5 8H4.5C4.22386 8 4 7.77614 4 7.5ZM4 10.5C4 10.2239 4.22386 10 4.5 10H11.5C11.7761 10 12 10.2239 12 10.5C12 10.7761 11.7761 11 11.5 11H4.5C4.22386 11 4 10.7761 4 10.5ZM0 13.5C0 13.2239 0.223858 13 0.5 13H2.5C2.77614 13 3 13.2239 3 13.5C3 13.7761 2.77614 14 2.5 14H0.5C0.223858 14 0 13.7761 0 13.5ZM4 13.5C4 13.2239 4.22386 13 4.5 13H14.5C14.7761 13 15 13.2239 15 13.5C15 13.7761 14.7761 14 14.5 14H4.5C4.22386 14 4 13.7761 4 13.5Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                                                </path>
                                        </svg>          
                                </span>
                
                                <div>
                                        {{-- <p class="text-2xl font-medium text-gray-900">{{ $kategori }}</p> --}}
                                        <p class="text-sm text-gray-500">Aktivitas</p>
                                </div>
                        </article>
                </a>
        </div>
        @if (session()->has('backupSuccess'))
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
                
                
                        <p class="mt-1 text-sm text-gray-700">{{ session('backupSuccess') }}</p>
                        </div>
                        
                        <button @click="open = false " class="text-gray-500 transition hover:text-gray-600">
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
        <div class="m-2 lg:float-end">
                <a
                class="inline-block rounded border border-black bg-black px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-black focus:outline-none focus:ring active:text-black"
                href="{{ route('backup') }}"
                >
                Backup Database
                </a>
        </div>
        {{-- <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi tempore nobis reprehenderit animi recusandae corporis nam veniam iure veritatis inventore mollitia maiores eius sequi distinctio accusamus ipsa, nulla sunt soluta eveniet. Nemo labore facere eos dolorum, ullam suscipit dolor esse eaque ex necessitatibus quidem placeat doloribus iste distinctio aspernatur accusantium minus. Aut, reiciendis libero rem tenetur quod, saepe provident unde vitae ratione ducimus aliquid? Unde, dolorem. Magni inventore laborum voluptate! Nesciunt delectus dolores eaque, totam error autem reiciendis, eveniet vero suscipit quae omnis iusto similique neque ad possimus, dolorum soluta est quidem officiis deleniti aliquam! Exercitationem corporis porro quia reiciendis!</h1> --}}
</x-admin-layout>