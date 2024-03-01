<x-admin-layout>

    <div class="rounded-lg bg-white m-5 p-8 shadow-lg lg:col-span-3 lg:p-12">
        <h1 class="text-xl font-bold">Tambah Penerbit</h1>
        <form action="{{ route('master-penerbit-store') }}" method="POST" class="space-y-4">
            @csrf
            @method('POST')
            
            <div class="">
                <div>
                    <label for="judul" class="block text-xs font-medium text-gray-700"> Nama </label>
                    
                    <input
                    type="text"
                    id="nama"
                    autocomplete="off"
                    placeholder="Nama"
                    name="nama"
                    class="w-full rounded-lg border border-gray-200 p-3 text-sm"
                    />
                    @error('nama')
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
</x-admin-layout>