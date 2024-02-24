<a href="{{ route('detail-buku', $id) }}" class="group block m-0 p-0">
    <img
      src="{{ asset('/storage/' . $cover)  }}"
      alt=""
      class="h-60 w-52 hover:opacity-80 object-fit"
    />
  
    <div class="mt-3 flex flex-shrink justify-between text-sm">
      <div>
        <h3 class="font-semibold group-hover:underline group-hover:underline-offset-4">
          {{ $judul }}
        </h3>
  
        <p class="mt-1.5 max-w-[45ch] text-xs text-gray-500">
          {{ $pengarang }}
        </p>
      </div>
    </div>
  </a>