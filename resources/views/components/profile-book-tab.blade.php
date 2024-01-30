<div>

    <div class="flex items-start gap-4">
        <x-profile-image h=1 w=14/>
        <div>
            <h3 class="text-2xl/tight font-bold">{{ Auth::user()->name }}</h3>
        
            <p class="mt-0.5 text-gray-700">
                {{ Auth::user()->username }}
            </p>
        </div>
    </div>
    
    <div class="sm:hidden mt-8 mb-5">
        <label for="Tab" class="sr-only">Tab</label>
    
        <select id="Tab" class="w-full rounded-md border-gray-200">
            <option disabled {{ Route::is("profil-user") || Route::is("profil-edit") ? 'selected' : '' }}>
                Pilih Opsi
            </option>            
            <option value="buku-saya" {{ Route::is("profil-user") ? 'selected' : '' }}>
                Buku Saya
            </option>
            <option value="ubah-profil"  {{ Route::is("profil-edit") ? 'selected' : '' }}>
                Ubah Profil
            </option>
        </select> 
    </div>

    <div class="hidden sm:block mt-8 mb-5">
        <div class="border-b border-gray-200">
            <nav class="-mb-px flex gap-6" aria-label="Tabs">
                
                <a href="{{ route('profil-user') }}" class="shrink-0 border-b-2 px-1 pb-4 text-xs font-medium  {{ Route::is('profil-user') ? 'border-black' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }}">
                    Buku saya
                </a>

                {{-- <a href="{{ route('profil-user') }}" class="shrink-0 border-b-2 border-transparent px-1 pb-4 text-xs font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                     Buku saya
                </a> --}}
                
                {{-- <a href="#" class="shrink-0 border-b-2 border-transparent px-1 pb-4 text-xs font-medium ">
                    Messages
                </a>
        
                <a href="#" class="shrink-0 border-b-2 border-transparent px-1 pb-4 text-xs font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700" >
                    Archive
                </a> --}}
        
                <a href="{{ route('profil-edit') }}" class="shrink-0 border-b-2  px-1 pb-4 text-xs font-medium {{ Route::is('profil-edit') ? 'border-black' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }}">
                    Ubah Profil
                </a>
            </nav>
        </div>
    </div>
</div>

<script>
        const tabs = document.getElementById("Tab")


        tabs.addEventListener("change", (e)=>{
            // if(e.target.value === "buku-saya"){
            //     window.location.href = "{{ route('profil-user') }}";
            // } else if {}
            switch (e.target.value) {
                case "buku-saya":
                    window.location.href = "{{ route('profil-user') }}";
                    break;
                case "ubah-profil":
                    window.location.href = "{{ route('profil-edit') }}";
                    break;
                    default:
                    break;
            }
        })


</script>