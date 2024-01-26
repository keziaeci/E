<a href="{{ route('detail-buku', $id) }}" class="group block m-0 p-0">
    <img
      src="https://images.unsplash.com/photo-1592921870789-04563d55041c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
      alt=""
      class="h-52 w-52 hover:opacity-80"
    />
  
    <div class="mt-3 flex flex-shrink justify-between text-sm">
      <div>
        <h3 class="text-gray-900 group-hover:underline group-hover:underline-offset-4">
          {{ $judul }}
        </h3>
  
        <p class="mt-1.5 max-w-[45ch] text-xs text-gray-500">
          {{ $pengarang }}
        </p>
      </div>
    </div>
  </a>