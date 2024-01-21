<x-app-layout>

  <x-home-header/>

  {{-- body --}}
  {{-- buku terbaru --}}
  <div class="m-3 lg:mx-36 lg:my-8">
    <h1 class="font-bold text-pink-600 text-2xl">Terbaru</h1>
    
    <div class="grid grid-cols-2 gap-5 px-3 my-2 md:grid-cols-4 md:px-4 md:gap-2 lg:grid-cols-7 lg:p-0 lg:my-3 lg:gap-2">
      @foreach ($bukus as $buku)
      {{-- <a href="" class="group relative block bg-black w-40"> --}}
        <a href="{{ route('detail-buku', $buku->id) }}" class="group block m-0 p-0">
          <img
            src="https://images.unsplash.com/photo-1592921870789-04563d55041c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
            alt=""
            class="h-52 w-52 hover:opacity-80"
          />
        
          <div class="mt-3 flex flex-shrink justify-between text-sm">
            <div>
              <h3 class="text-gray-900 group-hover:underline group-hover:underline-offset-4">
                {{ $buku->judul }}
              </h3>
        
              <p class="mt-1.5 max-w-[45ch] text-xs text-gray-500">
                {{ $buku->pengarang->nama }}
              </p>
            </div>
          </div>
        </a>
      @endforeach
    </div>

    <h1 class="font-bold text-pink-600 text-2xl">Paling disukai</h1>
    
    <div class="grid grid-cols-2 gap-5 px-3 my-2 md:grid-cols-4 md:px-4 md:gap-2 lg:grid-cols-7 lg:p-0 lg:my-3 lg:gap-2">
      @foreach ($famous as $f)
      <a href="{{ route('detail-buku', $f->id) }}" class="group block m-0 p-0">
        <img
          src="https://images.unsplash.com/photo-1592921870789-04563d55041c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
          alt=""
          class="h-52 w-52 hover:opacity-80"
        />
      
        <div class="mt-3 flex flex-shrink justify-between text-sm">
          <div>
            <h3 class="text-gray-900 group-hover:underline group-hover:underline-offset-4">
              {{ $f->judul }}
            </h3>
      
            <p class="mt-1.5 max-w-[45ch] text-xs text-gray-500">
              {{ $f->pengarang->nama }}
            </p>
          </div>
        </div>
      </a>
      
      @endforeach
    </div>

  </div>

</x-app-layout>