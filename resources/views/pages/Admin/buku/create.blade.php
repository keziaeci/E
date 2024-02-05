<x-admin-layout>

    {{-- <div class="rounded-lg bg-white p-8 shadow-lg min-h-screen">

        <form action="{{ route('simpan-profil', Auth::user()->id) }}" method="POST" class="space-y-4  min-w-full">
            @csrf
            @method('PATCH')
            <div>
                <label class="sr-only" for="name">Name</label>
                <input
                value="{{ Auth::user()->name }}"
                class="w-full rounded-lg border-gray-200 p-3 text-sm"
                placeholder="Name"
                type="text"
                id="name"
                name="name"
                />
            </div>
            
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div>
                    <label class="sr-only" for="username">Username</label>
                    <input
                    value="{{ Auth::user()->username }}"
                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                    placeholder="Username"
                    type="text"
                    id="username"
                    name="username"
                    />
                </div>

                <div>
                    <label class="sr-only" for="email">Email</label>
                    <input
                        value="{{ Auth::user()->email }}"
                        class="w-full rounded-lg border-gray-200 p-3 text-sm"
                        placeholder="Email"
                        type="email"
                        id="email"
                        name="email"
                    />
                </div>
            </div>

            <div class="mt-4">
                <button
                type="submit"
                class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white sm:w-auto"
                >
                Simpan Perubahan
                </button>
            </div>
        </form>

    </div> --}}

    <div class="rounded-lg bg-white m-5 p-8 shadow-lg lg:col-span-3 lg:p-12">

        <form action="{{ route('simpan-profil', Auth::user()->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PATCH')
            {{-- <div>
                <label class="sr-only" for="judul">Judul</label>
                <input
                class="w-full rounded-lg border-gray-200 p-3 text-sm"
                placeholder="Judul"
                type="text"
                id="judul"
                name="judul"
                />
            </div> --}}
            
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div>
                    <label class="sr-only" for="judul">Judul</label>
                    <input
                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                    placeholder="Judul"
                    type="text"
                    id="judul"
                    name="judul"
                    />
                </div>
                <div>
                    <label class="sr-only" for="email">Tahun Terbit</label>
                    <input
                        class="w-full rounded-lg border-gray-200 p-3 text-sm"
                        placeholder="Tahun Terbit"
                        type="number" min="1900" max="2099" step="1"
                        id="tahun_terbit"
                        name="tahun_terbit"
                    />
                    {{-- <input type="number" min="1900" max="2099" step="1" /> --}}

                </div>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                {{-- <div>
                    <label class="sr-only" for="username">Username</label>
                    <input
                    value="{{ Auth::user()->username }}"
                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                    placeholder="Username"
                    type="text"
                    id="username"
                    name="username"
                    />
                </div> --}}

                <div>
                    <label for="HeadlineAct" class="sr-only"> Headliner </label>
                    {{-- <label for="HeadlineAct" class="block text-sm font-medium text-gray-900"> Headliner </label> --}}
                  
                    <select
                      name="HeadlineAct"
                      id="HeadlineAct"
                      class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm"
                    >
                      <option value="">Please select</option>
                      <option value="JM">John Mayer</option>
                      <option value="SRV">Stevie Ray Vaughn</option>
                      <option value="JH">Jimi Hendrix</option>
                      <option value="BBK">B.B King</option>
                      <option value="AK">Albert King</option>
                      <option value="BG">Buddy Guy</option>
                      <option value="EC">Eric Clapton</option>
                    </select>
                  </div>

                <div>
                    <label class="sr-only" for="email">Email</label>
                    <input
                        value="{{ Auth::user()->email }}"
                        class="w-full rounded-lg border-gray-200 p-3 text-sm"
                        placeholder="Email"
                        type="email"
                        id="email"
                        name="email"
                    />
                </div>
            </div>

            <div class="mt-4">
                <button
                type="submit"
                class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white sm:w-auto"
                >
                Simpan Perubahan
                </button>
            </div>
        </form>

    </div>
</x-admin-layout>