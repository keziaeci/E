<x-app-layout>

  <header class="bg-gray-50">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
      <div class="flex items-center sm:justify-between sm:gap-4">
        <div class="relative hidden sm:block">
          <label class="sr-only" for="search"> Search </label>

          <input
            class="h-10 w-full rounded-lg border-none bg-white pe-10 ps-4 text-sm shadow-sm sm:w-56"
            id="search"
            type="search"
            placeholder="Search website..."
          />

          <button
            type="button"
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
        </div>

        <div class="flex flex-1 items-center justify-between gap-8 sm:justify-end">
          <div class="flex gap-4">
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

          <button type="button" class="group flex shrink-0 items-center rounded-lg transition">
            <span class="sr-only">Menu</span>
            <img
              alt="Man"
              src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
              class="h-10 w-10 rounded-full object-cover"
            />

            <p class="ms-2 hidden text-left text-xs sm:block">
              <strong class="block font-medium">Eric Frusciante</strong>

              <span class="text-gray-500"> eric@frusciante.com </span>
            </p>

            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="ms-4 hidden h-5 w-5 text-gray-500 transition group-hover:text-gray-700 sm:block"
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
      </div>

      <div class="mt-8">
        <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">Welcome Back, Barry!</h1>

        <p class="mt-1.5 text-sm text-gray-500">
          Your website has seen a 52% increase in traffic in the last month. Keep it up! 🚀
        </p>
      </div>
    </div>
  </header>

  <div class="m-3 lg:mx-36 lg:my-8">
    <h1 class="font-bold text-2xl">Terbaru</h1>
    
    <div class="grid grid-cols-2 gap-1 px-3 my-2 md:grid-cols-4 md:px-4 md:gap-2 lg:grid-cols-7 lg:p-0 lg:my-3 lg:gap-2">
      @foreach ($bukus as $buku)
      <a href="{{ route('detail-buku', $buku->id) }}" class="group relative block bg-black w-40">
        <img
          alt="Developer"
          src="https://images.unsplash.com/photo-1603871165848-0aa92c869fa1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=772&q=80"
          class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50"
        />
      
        <div class="relative p-4 sm:p-6 lg:p-8 w-40 h-52">
          <p class="text-sm font-medium uppercase tracking-widest text-pink-500">{{ $buku->pengarang->nama }}</p>
      
          <p class="text-xl font-bold text-white sm:text-2xl">{{ $buku->judul }}</p>
      
          <div class="mt-5 sm:mt-0 lg:mt-0">
            <div
              class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
            >
              <p class="text-sm text-white">
                {{ $buku->stok }}
              </p>
            </div>
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
    {{-- <div class="flex flex-row">

        <div class="basis-1/4 flex h-screen flex-col justify-between border-e bg-white">
            <div class="px-4 py-6">
              <span class="grid h-10 w-32 place-content-center rounded-lg bg-gray-100 text-xs text-gray-600">
                Logo
              </span>
          
              <ul class="mt-6 space-y-1">
                <li>
                  <a href="" class="block rounded-lg bg-gray-100 px-4 py-2 text-sm font-medium text-gray-700">
                    General
                  </a>
                </li>
          
                <li>
                  <details class="group [&_summary::-webkit-details-marker]:hidden">
                    <summary
                      class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                    >
                      <span class="text-sm font-medium"> Teams </span>
          
                      <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-5 w-5"
                          viewBox="0 0 20 20"
                          fill="currentColor"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                          />
                        </svg>
                      </span>
                    </summary>
          
                    <ul class="mt-2 space-y-1 px-4">
                      <li>
                        <a
                          href=""
                          class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                        >
                          Banned Users
                        </a>
                      </li>
          
                      <li>
                        <a
                          href=""
                          class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                        >
                          Calendar
                        </a>
                      </li>
                    </ul>
                  </details>
                </li>
          
                <li>
                  <a
                    href=""
                    class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                  >
                    Billing
                  </a>
                </li>
          
                <li>
                  <a
                    href=""
                    class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                  >
                    Invoices
                  </a>
                </li>
          
                <li>
                  <details class="group [&_summary::-webkit-details-marker]:hidden">
                    <summary
                      class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                    >
                      <span class="text-sm font-medium"> Account </span>
          
                      <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-5 w-5"
                          viewBox="0 0 20 20"
                          fill="currentColor"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                          />
                        </svg>
                      </span>
                    </summary>
          
                    <ul class="mt-2 space-y-1 px-4">
                      <li>
                        <a
                          href=""
                          class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                        >
                          Details
                        </a>
                      </li>
          
                      <li>
                        <a
                          href=""
                          class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                        >
                          Security
                        </a>
                      </li>
          
                      <li>
                        <form action="/logout">
                          <button
                            type="submit"
                            class="w-full rounded-lg px-4 py-2 text-sm font-medium text-gray-500 [text-align:_inherit] hover:bg-gray-100 hover:text-gray-700"
                          >
                            Logout
                          </button>
                        </form>
                      </li>
                    </ul>
                  </details>
                </li>
              </ul>
            </div>
          
            <div class="sticky inset-x-0 bottom-0 border-t border-gray-100">
              <a href="#" class="flex items-center gap-2 bg-white p-4 hover:bg-gray-50">
                <img
                  alt="Man"
                  src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                  class="h-10 w-10 rounded-full object-cover"
                />
          
                <div>
                  <p class="text-xs">
                    <strong class="block font-medium">Eric Frusciante</strong>
          
                    <span> eric@frusciante.com </span>
                  </p>
                </div>
              </a>
            </div>
          </div>
          
          <div>

          </div>
    </div> --}}
</x-app-layout>