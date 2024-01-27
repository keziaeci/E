<x-app-layout>

    <x-navbar/>    
    {{-- //FIXME profile tabs menu --}}
    <div class="lg:mx-56 lg:my-10 my-5 flex flex-wrap flex-col lg:flex-nowrap">
        <div class="flex items-start gap-4">
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

        </div>
        {{-- <hr class="my-5"> --}}
{{--         
        <div>
            <h1>My Books</h1>
        </div> --}}

        <div class="my-8">
            <div class="sm:hidden">
                <label for="Tab" class="sr-only">Tab</label>
            
                <select id="Tab" class="w-full rounded-md border-gray-200">
                    <option>Settings</option>
                    <option>Messages</option>
                    <option>Archive</option>
                    <option select>Notifications</option>
                </select>
            </div>
        
            <div class="hidden sm:block">
                <div class="border-b border-gray-200">
                    <nav class="-mb-px flex gap-6" aria-label="Tabs">
                        <a href="{{ route('profil-user') }}" class="shrink-0 border-b-2 border-transparent px-1 pb-4 text-xs font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                            Buku saya
                        </a>
                
                        <a href="#" class="shrink-0 border-b-2 border-transparent px-1 pb-4 text-xs font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                            Messages
                        </a>
                
                        <a href="#" class="shrink-0 border-b-2 border-transparent px-1 pb-4 text-xs font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700" >
                            Archive
                        </a>
                
                        <a href="#" class="shrink-0 border-b-2 border-black px-1 pb-4 text-xs font-medium" aria-current="page">
                            Ubah Profil
                        </a>
                    </nav>
                </div>
            </div>
        </div>

        {{-- edit profil form --}}
        @includeWhen(Route::is('profil-user'),'pages.profile.partials.mybook')
        @includeWhen(Route::is('simpan-profil'),'pages.profile.partials.edit')
        {{-- @includeIf('pages.profile.partials.edit', [Route::is('simpan-profil')]) --}}

    </div>

</x-app-layout>