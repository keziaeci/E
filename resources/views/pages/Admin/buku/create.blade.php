<x-admin-layout>

    <div class="rounded-lg bg-white m-5 p-8 shadow-lg lg:col-span-3 lg:p-12">
        <h1 class="text-xl font-bold">Tambah Buku</h1>
        <form action="{{ route('master-buku-store', Auth::user()->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('POST')
            
            <div class="grid items-center grid-cols-1 gap-4 sm:grid-cols-2">
                <div>
                    {{-- //TODO many to many categories with multiple select --}}
                    {{-- //FIXME form input --}}
                    <label for="judul" class="block text-xs font-medium text-gray-700"> Judul </label>
                    
                    <input
                    type="text"
                    id="judul"
                    placeholder="Judul"
                    name="judul"
                    class="w-full rounded-lg border border-gray-200 p-3 text-sm"
                    />
                    @error('judul')
                    <p class="text-xs text-red-700">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="UserEmail" class="block text-xs font-medium text-gray-700"> Tahun Terbit </label>
                    {{-- <label class="sr-only" for="email">Tahun Terbit</label> --}}
                    <input
                        class="w-full rounded-lg border border-gray-200 p-3 text-sm"
                        placeholder="Tahun Terbit"
                        type="number" min="1000" max="3000" step="1"
                        id="tahun_terbit"
                        name="tahun_terbit"
                    />
                    {{-- <input type="number" min="1900" max="2099" step="1" /> --}}
                    @error('tahun_terbit')
                    <p class="text-xs text-red-700">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div>
                    <label for="HeadlineAct" class="sr-only"> Pengarang </label>
                    {{-- <label for="HeadlineAct" class="block text-sm font-medium text-gray-900"> Headliner </label> --}}
                    
                    <select
                    name="pengarang"
                    id="HeadlineAct"
                    class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm"
                    >
                    <option @selected(true) disabled="disabled">Pengarang</option>
                    @foreach ($pengarangs as $pengarang)
                    <option value="{{ $pengarang->id }}">{{ $pengarang->nama }}</option>
                    @endforeach
                    </select>
                    @error('pengarang')
                    <p class="text-xs text-red-700">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="HeadlineAct" class="sr-only"> Penerbit </label>
                    <select name="penerbit" id="HeadlineAct"
                        class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm"
                    >
                    <option @selected(true) disabled="disabled">Penerbit</option>
                    @foreach ($penerbits as $penerbit)
                        <option value="{{ $penerbit->id }}">{{ $penerbit->nama }}</option>
                    @endforeach
                    </select>
                    @error('penerbit')
                    <p class="text-xs text-red-700">{{ $message }}</p>
                    @enderror
                </div>


            </div>
            
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div>
                    <label class="sr-only" for="email">Stok</label>
                    <input
                        class="w-full rounded-lg border-gray-200 p-3 text-sm"
                        placeholder="Stok"
                        type="number" min="1" max="3000" step="1"
                        id="stok"
                        name="stok"
                    />
                    {{-- <input type="number" min="1900" max="2099" step="1" /> --}}
                    @error('stok')
                    <p class="text-xs text-red-700">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="sr-only" for="judul">Cover</label>
                    <input
                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                    placeholder="Cover"
                    type="text"
                    id="cover"
                    name="cover"
                    />
                </div>
                @error('cover')
                <p class="text-xs text-red-700">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                <div class="form-control">
                    <label class="label">
                        {{-- <span class="label-text">Tulis</span> --}}
                    </label>
                    <textarea name="deskripsi" id="editor" placeholder="Sinopsis">
                    </textarea>
                    @error('deksripsi')
                    <p class="text-xs text-red-700">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="HeadlineAct" class="sr-only"> Kategori </label>
                    {{-- <label for="HeadlineAct" class="block text-sm font-medium text-gray-900"> Headliner </label> --}}
                    
                    <select
                    name="kategori"
                    id="HeadlineAct"
                    class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm"
                    >
                    <option @selected(true) disabled="disabled">Kategori</option>
                    @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                    @endforeach
                    </select>
                    @error('kategori')
                    <p class="text-xs text-red-700">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mt-4">
                <button
                type="submit"
                class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white sm:w-auto"
                >
                Simpan Data
                </button>
            </div>
        </form>

    </div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                    
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</x-admin-layout>