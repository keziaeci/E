<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>
    <title>Alpine.js Sidebar</title>
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])
</head>
<body>
{{-- <body x-data="{ sidebarOpen: false }"> --}}
    <section  x-data="{ isOpen: true }" class="flex flex-row min-w-full min-h-full">
        <nav
            :class="{ 'w-16 px-2 py-2': isOpen, 'w-1/5 px-4 py-2': !isOpen }"
            class="flex flex-col border-r min-h-screen transition-all duration-300 gap-2">
            <!-- Your navigation content goes here -->
            <button x-on:click="isOpen = !isOpen">
                <div
                :class="{'justify-start ':!isOpen, 'justify-center':isOpen}"
                    class="min-w-full rounded border  flex flex-row items-center gap-x-4 p-2 bg-gray-100 text-gray-600" >
                    <svg class="h-5 w-5" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.60913 0.0634287C4.39082 0.0088505 4.16575 0.12393 4.08218 0.332867L3.1538 2.6538L0.832866 3.58218C0.702884 3.63417 0.604504 3.7437 0.566705 3.87849C0.528906 4.01329 0.555994 4.158 0.639992 4.26999L2.01148 6.09864L1.06343 9.89085C1.00944 10.1068 1.12145 10.3298 1.32691 10.4154L4.20115 11.613L5.62557 13.7496C5.73412 13.9124 5.93545 13.9864 6.12362 13.9327L9.62362 12.9327C9.62988 12.9309 9.63611 12.929 9.64229 12.9269L12.6423 11.9269C12.7923 11.8769 12.905 11.7519 12.9393 11.5976L13.9393 7.09761C13.9776 6.92506 13.9114 6.74605 13.77 6.63999L11.95 5.27499V2.99999C11.95 2.82955 11.8537 2.67373 11.7012 2.5975L8.70124 1.0975C8.67187 1.08282 8.64098 1.07139 8.60913 1.06343L4.60913 0.0634287ZM11.4323 6.01173L12.7748 7.01858L10.2119 9.15429C10.1476 9.20786 10.0995 9.2783 10.0731 9.35769L9.25382 11.8155L7.73849 10.8684C7.52774 10.7367 7.25011 10.8007 7.11839 11.0115C6.98667 11.2222 7.05074 11.4999 7.26149 11.6316L8.40341 12.3453L6.19221 12.9771L4.87441 11.0004C4.82513 10.9265 4.75508 10.8688 4.67307 10.8346L2.03046 9.73352L2.85134 6.44999H4.99999C5.24852 6.44999 5.44999 6.24852 5.44999 5.99999C5.44999 5.75146 5.24852 5.54999 4.99999 5.54999H2.72499L1.7123 4.19974L3.51407 3.47903L6.35769 4.4269C6.53655 4.48652 6.73361 4.42832 6.85138 4.28111L8.62413 2.06518L11.05 3.27811V5.19533L8.83287 6.08218C8.70996 6.13134 8.61494 6.23212 8.57308 6.35769L8.07308 7.85769C7.99449 8.09346 8.12191 8.34831 8.35769 8.4269C8.59346 8.50549 8.84831 8.37807 8.9269 8.14229L9.3609 6.84029L11.4323 6.01173ZM7.71052 1.76648L6.34462 3.47386L4.09505 2.724L4.77192 1.03183L7.71052 1.76648ZM10.2115 11.7885L12.116 11.1537L12.7745 8.19034L10.8864 9.76374L10.2115 11.7885Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                    <p 
                    :class="{ 'hidden': isOpen, 'flex items-center justify-center': !isOpen }"
                    >Admin Panel</p>
                </div>
                    
            </button>

              <a href="{{ route('master-buku') }}"
                :class="{'justify-start ':!isOpen, 'justify-center':isOpen}"
                class="min-w-full rounded border  flex flex-row items-center gap-x-4 p-2" >
                <svg class="h-5 w-5" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.60913 0.0634287C4.39082 0.0088505 4.16575 0.12393 4.08218 0.332867L3.1538 2.6538L0.832866 3.58218C0.702884 3.63417 0.604504 3.7437 0.566705 3.87849C0.528906 4.01329 0.555994 4.158 0.639992 4.26999L2.01148 6.09864L1.06343 9.89085C1.00944 10.1068 1.12145 10.3298 1.32691 10.4154L4.20115 11.613L5.62557 13.7496C5.73412 13.9124 5.93545 13.9864 6.12362 13.9327L9.62362 12.9327C9.62988 12.9309 9.63611 12.929 9.64229 12.9269L12.6423 11.9269C12.7923 11.8769 12.905 11.7519 12.9393 11.5976L13.9393 7.09761C13.9776 6.92506 13.9114 6.74605 13.77 6.63999L11.95 5.27499V2.99999C11.95 2.82955 11.8537 2.67373 11.7012 2.5975L8.70124 1.0975C8.67187 1.08282 8.64098 1.07139 8.60913 1.06343L4.60913 0.0634287ZM11.4323 6.01173L12.7748 7.01858L10.2119 9.15429C10.1476 9.20786 10.0995 9.2783 10.0731 9.35769L9.25382 11.8155L7.73849 10.8684C7.52774 10.7367 7.25011 10.8007 7.11839 11.0115C6.98667 11.2222 7.05074 11.4999 7.26149 11.6316L8.40341 12.3453L6.19221 12.9771L4.87441 11.0004C4.82513 10.9265 4.75508 10.8688 4.67307 10.8346L2.03046 9.73352L2.85134 6.44999H4.99999C5.24852 6.44999 5.44999 6.24852 5.44999 5.99999C5.44999 5.75146 5.24852 5.54999 4.99999 5.54999H2.72499L1.7123 4.19974L3.51407 3.47903L6.35769 4.4269C6.53655 4.48652 6.73361 4.42832 6.85138 4.28111L8.62413 2.06518L11.05 3.27811V5.19533L8.83287 6.08218C8.70996 6.13134 8.61494 6.23212 8.57308 6.35769L8.07308 7.85769C7.99449 8.09346 8.12191 8.34831 8.35769 8.4269C8.59346 8.50549 8.84831 8.37807 8.9269 8.14229L9.3609 6.84029L11.4323 6.01173ZM7.71052 1.76648L6.34462 3.47386L4.09505 2.724L4.77192 1.03183L7.71052 1.76648ZM10.2115 11.7885L12.116 11.1537L12.7745 8.19034L10.8864 9.76374L10.2115 11.7885Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                <p 
                :class="{ 'hidden': isOpen, 'flex items-center justify-center': !isOpen }"
                >Master Buku</p>
            </a>


        </nav>
        <div class="flex flex-col lg:w-full">
            <div class="flex-none">

              {{-- nav header --}}
                <header class="border-b">
                  <div class="mr-10 lg:mx-auto lg:max-w-screen-xl px-4 py-2 sm:px-6 lg:px-8">
                    <div class="flex items-center sm:justify-between sm:gap-4">
                      <div class="relative hidden sm:block">
                        <label class="sr-only" for="search"> Search </label>
                        
                        <form action="{{ route('cari-buku') }}" method="GET">
                          <input
                          class="h-10 w-full rounded-lg border-none bg-white pe-10 ps-4 text-sm shadow-sm sm:w-56"
                          id="search"
                          type="search"
                          name="search"
                          placeholder="Temukan buku favoritmu"
                        />
              
                        <button
                          type="submit"
                          class="absolute end-1 top-1/2 -translate-y-1/2 rounded-md bg-gray-50 p-2 text-gray-600 transition hover:text-gray-700"
                        >
                          <span class="sr-only">Search</span>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                            />
                          </svg>
                        </button>
                        </form>
                      </div>
              
                      {{-- ketika layar kecil --}}
                      <div class="flex flex-1 items-center justify-between gap-8 sm:justify-end">
                        <div class="flex gap-4">
                          <button
                            type="button" id="Search"
                            class="block shrink-0 rounded-lg bg-white p-2.5 text-gray-600 shadow-sm hover:text-gray-700 sm:hidden"
                          >
                            <span class="sr-only">Search</span>
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="h-5 w-5"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                              stroke-width="2"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                              />
                            </svg>
                          </button>
              
                          <div class="relative hidden">
                            <label for="Search" class="sr-only"> Search </label>
              
                            <input
                              type="text"
                              id="Search"
                              placeholder="Search for..."
                              class="w-full rounded-md border-gray-200 py-2.5 pe-10 shadow-sm sm:text-sm"
                            />
              
                            <span class="absolute inset-y-0 end-0 grid w-10 place-content-center">
                              <button type="button" class="text-gray-600 hover:text-gray-700">
                                <span class="sr-only">Search</span>
              
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
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
                                  />
                                </svg>
                              </button>
                            </span>
                          </div>
                        </div>
              
                        
                        {{-- profile button --}}
                        <div class="flex gap-2 lg:flex-none m-0 p-0">
                          <a href="{{ route('profil-user') }}" class="group  flex shrink-0 items-center rounded-lg transition">
                            <span class="sr-only">Menu</span>
                            <x-profile-image h=10 w=10 />
                    
                            <p class="ms-2 hidden text-left text-xs sm:block">
                              <strong class="block font-medium">{{ Auth::user()->name }}</strong>
                
                              <span class="text-gray-500"> {{ Auth::user()->email }} </span>
                            </p>
                
                          </a>
                
                          {{-- dropdown --}}
                
                          <div x-data="{ isActive: false }" class="relative">
                            <div class="inline-flex items-center overflow-hidden rounded-md lg:border bg-white">
                  
                              <button
                                x-on:click="isActive = !isActive"
                                class="h-full p-2 text-gray-600 hover:bg-gray-50 hover:text-gray-700"
                              >
                                <span class="sr-only">Menu</span>
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  class="h-4 w-4"
                                  viewBox="0 0 20 20"
                                  fill="currentColor"
                                >
                                  <path
                                    fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                  />
                                </svg>
                              </button>
                            </div>
                
                            <div
                              class="absolute end-0 z-10 mt-2 w-56 rounded-md border border-gray-100 bg-white shadow-sm"
                              role="menu"
                              x-cloak
                              x-transition
                              x-show="isActive"
                              x-on:click.away="isActive = false"
                              x-on:keydown.escape.window="isActive = false"
                            >
                              <div class="p-2">
                                <a href="{{ route('profil-user') }}" class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">
                                  Profil Saya
                                </a>
                                
                                @if (Auth::user()->role === 'Admin')
                                <a href="{{ route('admin-dashboard') }}" class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">
                                  Halaman Admin
                                </a>
                                @endif
                
                                <form method="POST" action="{{ route('logout') }}">
                                  @method('POST')
                                  @csrf
                                  <button
                                    type="submit"
                                    class="flex w-full items-center gap-2 rounded-lg px-4 py-2 text-sm text-red-700 hover:bg-red-50"
                                    role="menuitem"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      class="h-4 w-4"
                                      fill="none"
                                      viewBox="0 0 24 24"
                                      stroke="currentColor"
                                      stroke-width="2"
                                    >
                                      <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                      />
                                    </svg>
                
                                    Logout
                                  </button>
                                </form>
                
                                {{-- <form action="{{ route('logout') }}" method="POST">
                                  @csrf
                                  <button type="submit">logout</button>
                                </form> --}}
                              </div>
                            </div>
                          </div>
                
                          {{-- dropdown end --}}
                        </div>
              
                      </div>
                    </div>
                    {{-- <div class="mt-8">
                      <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">Welcome Back, Barry!</h1>
              
                      <p class="mt-1.5 text-sm text-gray-500">
                        Your website has seen a 52% increase in traffic in the last month. Keep it up! 🚀
                      </p>
                    </div> --}}
                  </div>
                      
                </header>
              {{-- nav head end --}}
                  
                    {{-- <script>
                  
                      const search = document.getElementById()
                  
                    </script> --}}
                {{-- <x-navbar/> --}}
                {{-- <button x-on:click="isOpen = !isOpen">
                    
                </button> --}}
                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg> --}}
            </div>
            <div class=" lg:flex-auto">
                {{ $slot }}
            </div>
        </div>
        
    </section>

    
    

</body>
</html>