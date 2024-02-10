<x-admin-layout>
    <div class="rounded-lg bg-white m-5 p-8 shadow-lg lg:col-span-3 lg:p-12">
        <h1 class="text-xl font-bold">Tambah User</h1>
        <form action="{{ route('master-user-store') }}" method="POST" class="space-y-4">
            @csrf
            @method('POST')
            
            <div class="grid items-center grid-cols-1 gap-4 sm:grid-cols-2">
                <div>
                    <label for="judul" class="block text-xs font-medium text-gray-700"> Nama </label>
                    
                    <input
                    type="text"
                    id="nama"
                    placeholder="Nama"
                    name="nama"
                    class="w-full rounded-lg border border-gray-200 p-3 text-sm"
                    />
                    @error('nama')
                    <p class="text-xs text-red-700">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="judul" class="block text-xs font-medium text-gray-700"> Username </label>
                    
                    <input
                    type="text"
                    id="username"
                    placeholder="username"
                    name="username"
                    class="w-full rounded-lg border border-gray-200 p-3 text-sm"
                    />
                    @error('username')
                    <p class="text-xs text-red-700">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            
            <div class="grid items-center grid-cols-1 gap-4 sm:grid-cols-2">
                <div>
                    <label for="judul" class="block text-xs font-medium text-gray-700"> Email </label>
                    
                    <input
                    type="email"
                    id="email"
                    placeholder="email"
                    name="email"
                    class="w-full rounded-lg border border-gray-200 p-3 text-sm"
                    />
                    @error('email')
                    <p class="text-xs text-red-700">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="judul" class="block text-xs font-medium text-gray-700"> Password </label>
                    
                    <input
                    type="password"
                    id="password"
                    placeholder="password"
                    name="password"
                    class="w-full rounded-lg border border-gray-200 p-3 text-sm"
                    />
                    @error('password')
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