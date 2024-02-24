<x-app-layout>

    <x-navbar/>    
    
    <div class="m-3 lg:mx-56 lg:my-10 my-5 flex flex-wrap flex-col lg:flex-nowrap">
        

        {{-- <div class="flex items-start gap-4">
            <img
            src="https://api.dicebear.com/7.x/avataaars/svg?seed={{ Auth::user()->name }}"
            class="w-14 rounded-full object-cover"
            />
        
            <div>
                <h3 class="text-2xl/tight font-bold">{{ Auth::user()->name }}</h3>
            
                <p class="mt-0.5 text-gray-700">
                    {{ Auth::user()->username }}
                </p>
            </div>

        </div> --}}

        <x-profile-book-tab/>
        
        {{-- main content--}}
        <div>
            {{-- <div class="sm:hidden">
                <label for="Tab" class="sr-only">Tab</label>
            

                <form action="{{ route('profil-user') }}">
                    @csrf
                    <select name="status" id="Tab" class="w-full rounded-md border-gray-200">
                        <option value="Semua" >Semua</option>
                        <option value="Menunggu" >Menunggu</option>
                        <option value="Sedang Meminjam" >Sedang Meminjam</option>
                        <option value="Sudah Dikembalikan" >Dikembalikan</option>
                    </select>
                </form>
            </div> --}}
        
            <div>
                <nav class="flex flex-wrap lg:flex-nowrap lg:gap-6" aria-label="Tabs">
                    <form action="{{ route('profil-user') }}" >
                        <button value="Semua" name="status" class="shrink-0 rounded-lg p-2 text-sm font-medium {{ request()->query('status') == 'Semua' || empty(request()->query('status')) ? ' bg-gray-100  text-gray-700' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-700' }}" >
                            Semua
                        </button>
                    </form>
                    
                    {{-- <form action="{{ route('profil-user') }}">
                        <button  name="status"  value="Menunggu" class="shrink-0 rounded-lg p-2 text-sm font-medium  {{ request()->query('status') == 'Menunggu' ? ' bg-gray-100  text-gray-700' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-700' }}">
                            Menunggu
                        </button>
                    </form> --}}
                    
                    <form action="{{ route('profil-user') }}">
                        <button name="status" value="Sedang Meminjam" class="shrink-0 rounded-lg p-2 text-sm font-medium  {{ request()->query('status') == 'Sedang Meminjam' ? ' bg-gray-100  text-gray-700' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-700' }}">
                            Sedang Meminjam
                        </button>
                    </form>

                    <form action="{{ route('profil-user') }}">
                        <button name="status" value="Sudah Dikembalikan" class="shrink-0 rounded-lg p-2 text-sm font-medium  {{ request()->query('status') == 'Sudah Dikembalikan' ? ' bg-gray-100  text-gray-700' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-700' }}">
                            Dikembalikan
                        </button>
                    </form>

                    <form action="{{ route('profil-user') }}">
                        <button name="status" value="Dikembalikan Terlambat" class="shrink-0 rounded-lg p-2 text-sm font-medium  {{ request()->query('status') == 'Dikembalikan Terlambat' ? ' bg-gray-100  text-gray-700' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-700' }}">
                            Terlambat Mengembalikan
                        </button>
                    </form>
            
                </nav>
            </div>
        </div>
        
        <div class="grid grid-cols-2 gap-5 px-3 my-2 md:grid-cols-4 md:px-4 md:gap-2 lg:grid-cols-6 lg:p-0 lg:my-3 lg:gap-4">

            @if ($bukus->isEmpty())
                <div class="">
                    <p class=" text-sm text-gray-500">Tidak ada data</p>                
                </div>
            @else
                @foreach ($bukus as $buku)
                {{-- {{ dd($buku->images) }} --}}
                <x-book-card 
                    :id="$buku->buku->id"
                    :cover="$buku->buku->images[0]->filename"
                    :judul="$buku->buku->judul"
                    :pengarang="$buku->buku->pengarang->nama"
                />
                @endforeach
            @endif

        </div>

        {{-- edit profil form --}}
        {{-- @includeWhen(Route::is('profil-user'),'pages.profile.partials.mybook')
        @includeWhen(Route::is('simpan-profil'),'pages.profile.partials.edit') --}}
        {{-- @includeIf('pages.profile.partials.edit', [Route::is('simpan-profil')]) --}}

    </div>

</x-app-layout>