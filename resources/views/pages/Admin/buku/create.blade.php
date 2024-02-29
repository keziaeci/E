<x-admin-layout>

    <div class="rounded-lg bg-white m-5 p-8 shadow-lg lg:col-span-3 lg:p-12">
        <h1 class="text-xl font-bold">Tambah Buku</h1>
        <form action="{{ route('master-buku-store', Auth::user()->id) }}" method="POST" class="space-y-4" enctype="multipart/form-data">
            @csrf
            @method('POST')
            
            <div class="grid items-center grid-cols-1 gap-4 sm:grid-cols-2">
                <div>
                    {{-- //FIXME form input --}}
                    <label for="judul" class="block text-xs font-medium text-gray-700"> Judul </label>
                    
                    <input
                    type="text"
                    id="judul"
                    value="{{ old('judul') }}"
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
                    <input
                        class="w-full rounded-lg border border-gray-200 p-3 text-sm"
                        placeholder="Tahun Terbit"
                        type="number" min="1000" max="3000" step="1"
                        id="tahun_terbit"
                        value="{{ old('tahun_terbit') }}"
                        name="tahun_terbit"
                    />
                    @error('tahun_terbit')
                    <p class="text-xs text-red-700">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div>
                    <label for="pengarang" class="block text-xs font-medium text-gray-700"> Pengarang </label>
                    
                    <select
                    name="pengarang"
                    id="pengarang"
                    class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm"
                    >
                    <option @selected(true) disabled="disabled">Pengarang</option>
                    @foreach ($pengarangs as $pengarang)
                    @if (old('pengarang') == $pengarang->id)
                        <option value="{{ $pengarang->id }}" selected>{{ $pengarang->nama }}</option>
                        @endif
                    <option value="{{ $pengarang->id }}">{{ $pengarang->nama }}</option>
                    @endforeach
                    </select>
                    @error('pengarang')
                    <p class="text-xs text-red-700">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="penerbit" class="block text-xs font-medium text-gray-700"> Penerbit </label>
                    <select name="penerbit" id="penerbit"
                        class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm"
                    >
                    <option @selected(true) disabled="disabled">Penerbit</option>
                    @foreach ($penerbits as $penerbit)
                        @if (old('penerbit') == $penerbit->id)
                        <option value="{{ $penerbit->id }}" selected>{{ $penerbit->nama }}</option>
                        @endif
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
                    <div x-data="{ productQuantity: {{ old('stok', 1) }} }">
                        <label for="Quantity" class="block text-xs font-medium text-gray-700"> Stok </label>
                        <div class="flex justify-between items-center rounded border border-gray-200">
                            <button
                            type="button"
                            x-on:click="productQuantity--"
                            :disabled="productQuantity === 0"
                            class="size-10 leading-10 text-gray-600 transition hover:opacity-75"
                            >
                            &minus;
                            </button>
                            <input
                            type="number"
                            value="{{ old('stok') }}"
                            id="Quantity"
                            name="stok"
                            x-model="productQuantity"
                            class="h-10 w-16 border-transparent text-center [-moz-appearance:_textfield] sm:text-sm [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
                            />

                            <button
                            type="button"
                            x-on:click="productQuantity++"
                            class="size-10 leading-10 text-gray-600 transition hover:opacity-75"
                            >
                            &plus;
                            </button>
                        </div>
                        @error('stok')
                        <p class="text-xs text-red-700">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="cover" class="block text-xs font-medium text-gray-700"> Cover </label>
                    <input
                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                    placeholder="Cover"
                    type="file"
                    id="cover"
                    name="cover[]"
                    multiple="multiple"
                    />
                    @error('cover')
                    <p class="text-xs text-red-700">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                <div class="form-control">
                    <label for="editor" class="block text-xs font-medium text-gray-700"> Deskripsi </label>
                    <textarea name="deskripsi" id="editor" placeholder="Sinopsis">
                    </textarea>
                    @error('deskripsi')
                    <p class="text-xs text-red-700">{{ $message }}</p>
                    @enderror
                </div>
                <x-multiselect
                :kategoris="$kategoris"/>
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
 
</x-admin-layout>