{{-- <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script> --}}

<header class="border-b">

  {{-- //TODO add toast setiap adanya operasi dengan data --}}
  {{-- //FIXME all icon and field on small breakpoints  --}}
    <div class="mx-0 lg:mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
      <div class="flex items-center sm:justify-between sm:gap-4">
        <div class="hidden sm:block">
          <a
            class="inline-block rounded border border-black bg-black px-3 py-2.5 text-sm font-medium text-white focus:outline-none active:outline-gray-900"
            href="{{ route('bukus') }}"
          >
            <svg class="h-5 w-5" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.07926 0.222253C7.31275 -0.007434 7.6873 -0.007434 7.92079 0.222253L14.6708 6.86227C14.907 7.09465 14.9101 7.47453 14.6778 7.71076C14.4454 7.947 14.0655 7.95012 13.8293 7.71773L13 6.90201V12.5C13 12.7761 12.7762 13 12.5 13H2.50002C2.22388 13 2.00002 12.7761 2.00002 12.5V6.90201L1.17079 7.71773C0.934558 7.95012 0.554672 7.947 0.32229 7.71076C0.0899079 7.47453 0.0930283 7.09465 0.32926 6.86227L7.07926 0.222253ZM7.50002 1.49163L12 5.91831V12H10V8.49999C10 8.22385 9.77617 7.99999 9.50002 7.99999H6.50002C6.22388 7.99999 6.00002 8.22385 6.00002 8.49999V12H3.00002V5.91831L7.50002 1.49163ZM7.00002 12H9.00002V8.99999H7.00002V12Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
          </a>
        </div>
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
            <div class="flex lg:hidden md:hidden ">
              <a
                class="inline-block rounded border  border-black bg-black px-3 py-2.5 text-sm font-medium text-white focus:outline-none active:outline-gray-900"
                href="{{ route('bukus') }}"
              >
                <svg class="h-5 w-5" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.07926 0.222253C7.31275 -0.007434 7.6873 -0.007434 7.92079 0.222253L14.6708 6.86227C14.907 7.09465 14.9101 7.47453 14.6778 7.71076C14.4454 7.947 14.0655 7.95012 13.8293 7.71773L13 6.90201V12.5C13 12.7761 12.7762 13 12.5 13H2.50002C2.22388 13 2.00002 12.7761 2.00002 12.5V6.90201L1.17079 7.71773C0.934558 7.95012 0.554672 7.947 0.32229 7.71076C0.0899079 7.47453 0.0930283 7.09465 0.32926 6.86227L7.07926 0.222253ZM7.50002 1.49163L12 5.91831V12H10V8.49999C10 8.22385 9.77617 7.99999 9.50002 7.99999H6.50002C6.22388 7.99999 6.00002 8.22385 6.00002 8.49999V12H3.00002V5.91831L7.50002 1.49163ZM7.00002 12H9.00002V8.99999H7.00002V12Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
              </a>
            </div>
            <div x-data="{ isOpen: false }" class="flex transition-all duration-300" :class="{'relative': isOpen , 'relative' : !isOpen}">
              <label for="Search" class="sr-only"> Search </label>
              <form action="{{ route('cari-buku') }}" method="GET">
                <input 
                  :class="{'hidden' : isOpen , 'w-full px-2' : !isOpen}"
                  type="text"
                  name="search"
                  id="Search"
                  placeholder="Search for..."
                  class="w-full md:hidden lg:hidden inline rounded-md border-gray-200 py-2.5 pe-10 shadow-sm sm:text-sm"
                />
              </form>

              
              <button x-on:click="isOpen = !isOpen"
                {{-- :class="{'hidden' : isOpen}" --}}
                class="inline shrink-0 rounded-lg bg-white p-2.5 text-gray-600 shadow-sm hover:text-gray-700 sm:hidden"
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
{{-- 
  <script>

    const search = document.getElementById()

  </script> --}}