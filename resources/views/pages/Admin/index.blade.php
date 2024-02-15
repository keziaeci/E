<x-admin-layout>
        <div class="flex flex-wrap gap-2 p-2">
                <article class="flex items-center gap-4 rounded-lg border border-gray-100 bg-white p-6">
                        <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                                {{-- <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-8 w-8"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                                >
                                <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"
                                />
                                </svg>                                           --}}

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
                <article class="flex items-center gap-4 rounded-lg border border-gray-100 bg-white p-6">
                        <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg"  class="h-8 w-8"  
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                                stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon>
                                </svg>                         
                        </span>
        
                        <div>
                                <p class="text-2xl font-medium text-gray-900">{{ $penerbit }}</p>
                                <p class="text-sm text-gray-500">Total Penerbit</p>
                        </div>
                </article>
                <a href="{{ route('master-peminjaman') }}">
                        <article class="flex items-center gap-4 rounded-lg border border-gray-100 bg-white p-6">
                                <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg"  class="h-8 w-8"  
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon>
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
                                        <svg xmlns="http://www.w3.org/2000/svg"  class="h-8 w-8"  
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon>
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