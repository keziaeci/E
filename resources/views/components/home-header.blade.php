<header class="bg-gray-50">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
      <div class="flex items-center sm:justify-between sm:gap-4">
        <div class="relative hidden sm:block">
          <label class="sr-only" for="search"> Search </label>

          {{-- search bar in large screen --}}
          <form action="{{ route('cari-buku') }}" method="GET">
            <input name="search"
              class="h-10 w-full rounded-lg border-none bg-white pe-10 ps-4 text-sm shadow-sm sm:w-56"
              id="search"
              type="search"
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

        {{-- small screen --}}
        <div class="flex flex-1 items-center justify-between gap-8 sm:justify-end">
          <div class="flex gap-4">
            {{-- search bar --}}
            <form action="">
              <button
                type="button"
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
            </form>

            <a
              href="#"
              class="block shrink-0 rounded-lg bg-white p-2.5 text-gray-600 shadow-sm hover:text-gray-700"
            >
              <span class="sr-only">Academy</span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                <path
                  d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
                />
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                />
              </svg>
            </a>

            <a
              href="#"
              class="block shrink-0 rounded-lg bg-white p-2.5 text-gray-600 shadow-sm hover:text-gray-700"
            >
              <span class="sr-only">Notifications</span>
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
                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                />
              </svg>
            </a>
          </div>

          {{-- profile icon --}}
          <div class="flex gap-2 lg:flex-none m-0 p-0">
            <a href="{{ route('profil-user') }}" class="group flex shrink-0 items-center rounded-lg transition">
              <span class="sr-only">Menu</span>
              <x-profile-image h=10 w=10 />

              <p class="ms-2 hidden text-left text-xs sm:block">
                <strong class="block font-medium">{{ Auth::user()->name }}</strong>

                <span class="text-gray-500"> {{ Auth::user()->email }} </span>
              </p>

            </a>

            {{-- dropdown toggle --}}
            <div x-data="{ isActive: false }" class="relative">
              <div class="inline-flex items-center overflow-hidden rounded-md shadow-sm bg-white">
  
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

                </div>
              </div>
            </div>
            {{-- dropdown toggle end --}}
          </div>

        </div>
      </div>

      <div class="mt-8">
        <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">Selamat datang, {{ Auth::user()->name }}!</h1>

        <p class="mt-1.5 text-sm text-gray-500">
          Your website has seen a 52% increase in traffic in the last month. Keep it up! 🚀
        </p>
      </div>
    </div>
  </header>