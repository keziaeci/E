<a href="{{ route('detail-buku', $id) }}" class="group block m-0 p-0">
    <img
      src="https://archive.org/services/img/lccn_078073006991"
      {{-- src="https://archive.org/download/101essaysthatwillchangethewayyouthink/page/cover_t.jpg" --}}
      {{-- src="https://covers.openlibrary.org/b/isbn/1612680011-S.jpg" --}}
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