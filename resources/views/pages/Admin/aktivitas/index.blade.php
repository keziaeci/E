<x-admin-layout>

  @if ($aktivitases->isEmpty())
  <div class="space-y-4 m-5">
    <details class="group [&_summary::-webkit-details-marker]:hidden" open>
      <summary
        class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900"
      >
      <div class="flex items-center">
        <h1>Tidak ada aktivitas</h1>
      </div>
  </div>

  @else
      
    @foreach ($aktivitases as $aktivitas)
    {{-- {{ dd($aktivitas->event) }} --}}
      @switch($aktivitas->event)
        @case('login')
        <div class="space-y-4 m-5">
          <details class="group [&_summary::-webkit-details-marker]:hidden" open>
            <summary
              class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900"
            >
            <div class="flex items-center">
              <img
                src="https://api.dicebear.com/7.x/notionists-neutral/svg?seed={{ $aktivitas->causer->name }}"
                class="h-10 w-10 rounded-full object-cover"
                />
                <div class="flex-col ml-2">
                  <h1>{{ $aktivitas->description }}</h1>
                  <h1 class="block">{{ $aktivitas->created_at->diffForHumans() }}</h1>
                </div>
            </div>
        </div>
        @break
        @case('logout')
        <div class="space-y-4 m-5">
          <details class="group [&_summary::-webkit-details-marker]:hidden" open>
            <summary
              class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900"
            >
            <div class="flex items-center">
              <img
                src="https://api.dicebear.com/7.x/notionists-neutral/svg?seed={{ $aktivitas->causer->name }}"
                class="h-10 w-10 rounded-full object-cover"
                />
                <div class="flex-col ml-2">
                  <h1>{{ $aktivitas->description }}</h1>
                  <h1 class="block">{{ $aktivitas->created_at->diffForHumans() }}</h1>
                </div>
            </div>
          </summary>
        </details>
        </div>
            @break
        @default
              
      @endswitch

      @switch($aktivitas->subject_type)
          @case('App\Models\Buku')
          
          @switch($aktivitas->description)
            @case('created')
            <div class="space-y-4 m-5">
              <details class="group [&_summary::-webkit-details-marker]:hidden" open>
                <summary
                  class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900"
                >
                <div class="flex items-center">
                  <img
                    src="https://api.dicebear.com/7.x/notionists-neutral/svg?seed={{ $aktivitas->causer->name }}"
                    class="h-10 w-10 rounded-full object-cover"
                    />
                    <div class="flex-col ml-2">
                      {{-- {{ dd() }} --}}
                      @if ($aktivitas->subject->deleted_at == null)
                      <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }} buku <a href="{{ route('master-buku-detail', $aktivitas->subject->id) }}" class="underline">{{ $aktivitas->subject->judul }}</a> </h1>
                      @else
                      <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }} buku {{ $aktivitas->subject->judul }} </h1>
                      @endif
                      <h1 class="block">{{ $aktivitas->subject->created_at->diffForHumans() }}</h1>
                    </div>
                </div>
              </summary>
            </details>
            </div>

            @break
            
            @case('deleted')
            {{-- {{ dd($aktivitas->subject->judul) }} --}}
            <div class="space-y-4 m-5">
              <details class="group [&_summary::-webkit-details-marker]:hidden" open>
                <summary
                  class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900"
                >
                <div class="flex items-center">
                  <img
                    src="https://api.dicebear.com/7.x/notionists-neutral/svg?seed={{ $aktivitas->causer->name }}"
                    class="h-10 w-10 rounded-full object-cover"
                    />
                    <div class="flex-col ml-2">
                      @if ($aktivitas->deleted_at == null)
                      <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }} buku {{ $aktivitas->subject->judul }}</h1>
                      @else
                      <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }} buku {{ $aktivitas->subject->judul }} </h1>
                      <h1 class="block">{{ $aktivitas->subject->deleted_at->diffForHumans() }}</h1>
                      @endif
                    </div>
                </div>
                </summary>
              </details>
            </div>

            @break
            
            @case('restored')
            <div class="space-y-4 m-5">
              <details class="group [&_summary::-webkit-details-marker]:hidden" open>
                <summary
                  class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900"
                >
                <div class="flex items-center">
                  <img 
                    src="https://api.dicebear.com/7.x/notionists-neutral/svg?seed={{ $aktivitas->causer->name }}"
                    class="h-10 w-10 rounded-full object-cover"
                    />
                    <div class="flex-col ml-2">
                      @if ($aktivitas->subject->deleted_at == null)
                      <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }} buku <a href="{{ route('master-buku-detail', $aktivitas->subject->id) }}" class="underline">{{ $aktivitas->subject->judul }}</a> </h1>
                      @else
                      <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }} buku {{ $aktivitas->subject->judul }} </h1>
                      @endif
                      {{-- <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }} {{ $aktivitas->subject->judul }}</h1> --}}
                      <h1 class="block">{{ $aktivitas->subject->updated_at->diffForHumans() }}</h1>
                    </div>
                </div>
              </summary>
            </details>
            </div>

            @break
            @case('updated')

                {{-- <div class="space-y-4 m-5">
                  <details class="group [&_summary::-webkit-details-marker]:hidden" open>
                    <summary
                      class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900"
                    >
                    <div class="flex items-center">
                      <img
                        src="https://api.dicebear.com/7.x/notionists-neutral/svg?seed={{ $aktivitas->causer->name }}"
                        class="h-10 w-10 rounded-full object-cover"
                        />
                        <div class="flex-col ml-2">
                          <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }} buku <a href="{{ route('master-buku-detail', $aktivitas->subject->id) }}" class="underline">{{ $aktivitas->subject->judul }}</a> </h1>
                          <h1 class="block">{{ $aktivitas->subject->created_at->diffForHumans() }}</h1>
                        </div>
                    </div>
                
                      <svg
                        class="size-5 shrink-0 transition duration-300 group-open:-rotate-180"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                      </svg>
                    </summary>
                
                    <p class="mt-4 px-4 leading-relaxed text-gray-700">
                      {{ dd($aktivitas->properties) }}
                      @foreach ($aktivitas->properties as $key)
                          {{ $key['old'] }}
                      @endforeach
                      @foreach ($aktivitas->properties as $key)
                          @foreach ($key["old"] as $oldKey => $oldValue)
                          {{ $oldKey }} baklbalb {{ $oldValue }}
                          @endforeach
                          @foreach ($key["attributes"] as $attrKey => $attrValue)
                          {{ $attrKey }} baklbalb {{ $attrValue }}
                          @endforeach
                      @endforeach
                    </p>
                  </details>
                </div> --}}
                <div class="space-y-4 m-5">
                  <details class="group [&_summary::-webkit-details-marker]:hidden" open>
                    <summary
                      class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900"
                    >
                    <div class="flex items-center">
                      <img
                        src="https://api.dicebear.com/7.x/notionists-neutral/svg?seed={{ $aktivitas->causer->name }}"
                        class="h-10 w-10 rounded-full object-cover"
                        />
                        <div class="flex-col ml-2">
                          @if ($aktivitas->subject->deleted_at == null)
                          <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }} buku <a href="{{ route('master-buku-detail', $aktivitas->subject->id) }}" class="underline">{{ $aktivitas->subject->judul }}</a> </h1>
                          @else
                          <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }} buku {{ $aktivitas->subject->judul }} </h1>
                          @endif
                          <h1 class="block">{{ $aktivitas->subject->updated_at->diffForHumans() }}</h1>
                        </div>
                    </div>
                  </summary>
                </details>
                </div>

                {{-- <div class="m-5 border border-black rounded-lg p-3 items-center flex">
                  <img
                      src="https://api.dicebear.com/7.x/notionists-neutral/svg?seed={{ $aktivitas->causer->name }}"
                      class="h-10 w-10 rounded-full object-cover"
                        />
                        <div class="flex-col ml-2">
                          <h1 class="block"> <b> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }} buku <a href="{{ route('master-buku-detail', $aktivitas->subject->id) }}" class="underline">{{ $aktivitas->subject->judul }}</a> </h1>
                          <h1 class="block">{{ $aktivitas->subject->created_at->diffForHumans() }}</h1>
                        </div>
                </div> --}}
                {{-- <div class="">{{ $aktivitas->causer->name }} {{ $aktivitas->description }} Buku {{ $aktivitas->subject->judul  }} {{ $aktivitas->subject->updated_at->diffForHumans() }}</div> --}}
                    
                    @break
            @endswitch
          
          @break

          @case('App\Models\Peminjaman')
            
            @switch($aktivitas->description)
                @case('created')

                <div class="space-y-4 m-5">
                  <details class="group [&_summary::-webkit-details-marker]:hidden" open>
                    <summary
                      class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900"
                    >
                    <div class="flex items-center">
                      <img
                        src="https://api.dicebear.com/7.x/notionists-neutral/svg?seed={{ $aktivitas->causer->name }}"
                        class="h-10 w-10 rounded-full object-cover"
                        />
                        <div class="flex-col ml-2">
                          @if ($aktivitas->subject->deleted_at == null)
                          <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }} <a href="{{ route('master-peminjaman-detail', $aktivitas->subject->id) }}" class="underline">Peminjaman</a>  </h1>
                          @else
                          <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }} Peminjaman </h1>
                          @endif
                          <h1 class="block">{{ $aktivitas->subject->created_at->diffForHumans() }}</h1>
                        </div>
                    </div>
                  </summary>
                </details>
                </div>
                @break
                @case('updated')
                <div class="space-y-4 m-5">
                  <details class="group [&_summary::-webkit-details-marker]:hidden" open>
                    <summary
                      class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900"
                    >
                    <div class="flex items-center">
                      <img
                        src="https://api.dicebear.com/7.x/notionists-neutral/svg?seed={{ $aktivitas->causer->name }}"
                        class="h-10 w-10 rounded-full object-cover"
                        />
                        <div class="flex-col ml-2">

                          <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }}  <a href="{{ route('master-peminjaman-detail', $aktivitas->subject->id) }}" class="underline">Peminjaman</a> </h1>
                          <h1 class="block">{{ $aktivitas->subject->created_at->diffForHumans() }}</h1>
                        </div>
                    </div>
                  </summary>
                </details>
                </div>
                    @break
                @endswitch

            @break

            @case('App\Models\Kategori')
            
            @switch($aktivitas->description)
                @case('created')
                <div class="space-y-4 m-5">
                  <details class="group [&_summary::-webkit-details-marker]:hidden" open>
                    <summary
                      class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900"
                    >
                      <div class="flex items-center">
                        <img
                          src="https://api.dicebear.com/7.x/notionists-neutral/svg?seed={{ $aktivitas->causer->name }}"
                          class="h-10 w-10 rounded-full object-cover"
                          />
                          <div class="flex-col ml-2">
                            @if ($aktivitas->subject->deleted_at == null)
                            {{-- <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }} <a href="{{ route('master-peminjaman-detail', $aktivitas->subject->id) }}" class="underline">Peminjaman</a>  </h1> --}}
                            <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }} kategori {{ $aktivitas->subject->nama }} </h1>
                            @else
                            <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }} kategori </h1>
                            @endif
                            <h1 class="block">{{ $aktivitas->subject->created_at->diffForHumans() }}</h1>
                          </div>
                      </div>
                    </summary>
                  </details>
                </div>
                @break
                @case('updated')
                <div class="space-y-4 m-5">
                  <details class="group [&_summary::-webkit-details-marker]:hidden" open>
                    <summary
                      class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900"
                    >
                    <div class="flex items-center">
                      <img
                        src="https://api.dicebear.com/7.x/notionists-neutral/svg?seed={{ $aktivitas->causer->name }}"
                        class="h-10 w-10 rounded-full object-cover"
                        />
                        <div class="flex-col ml-2">
                          <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }} kategori {{ $aktivitas->subject->nama }} </h1>
                          <h1 class="block">{{ $aktivitas->subject->updated_at->diffForHumans() }}</h1>
                        </div>
                    </div>
                    <svg
                    class="size-5 shrink-0 transition duration-300 group-open:-rotate-180"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
                    </summary>
                    <p class="mt-4 px-4 leading-relaxed text-gray-700">
                      {{ $aktivitas->event }} {{ $aktivitas->properties['old']['nama'] }} to {{ $aktivitas->properties['attributes']['nama'] }}
                    </p>
                  </details>
                </div>
                    @break
                    @case('deleted')
            {{-- {{ dd($aktivitas->subject->judul) }} --}}
            <div class="space-y-4 m-5">
              <details class="group [&_summary::-webkit-details-marker]:hidden" open>
                <summary
                  class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900"
                >
                <div class="flex items-center">
                  <img
                    src="https://api.dicebear.com/7.x/notionists-neutral/svg?seed={{ $aktivitas->causer->name }}"
                    class="h-10 w-10 rounded-full object-cover"
                    />
                    <div class="flex-col ml-2">
                      @if ($aktivitas->deleted_at == null)
                      <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }} kategori {{ $aktivitas->subject->nama }} </h1>
                      @else
                      <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }} kategori {{ $aktivitas->subject->nama }} </h1>
                      <h1 class="block">{{ $aktivitas->subject->deleted_at->diffForHumans() }}</h1>
                      @endif
                    </div>
                </div>
                </summary>
              </details>
            </div>

            @break
            
            @case('restored')
            <div class="space-y-4 m-5">
              <details class="group [&_summary::-webkit-details-marker]:hidden" open>
                <summary
                  class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900"
                >
                <div class="flex items-center">
                  <img 
                    src="https://api.dicebear.com/7.x/notionists-neutral/svg?seed={{ $aktivitas->causer->name }}"
                    class="h-10 w-10 rounded-full object-cover"
                    />
                    <div class="flex-col ml-2">
                      @if ($aktivitas->subject->deleted_at == null)
                      <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }} kategori {{ $aktivitas->subject->nama }} </h1>
                      @else
                      <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }} kategori {{ $aktivitas->subject->nama }} </h1>
                      @endif
                      <h1 class="block">{{ $aktivitas->subject->updated_at->diffForHumans() }}</h1>
                    </div>
                </div>
              </summary>
            </details>
            </div>

            @break
            @endswitch

            @break
          
            {{-- @case('App\Models\User')
            
            @switch($aktivitas->event)
                
                @case('created')

                <div class="space-y-4 m-5">
                  <details class="group [&_summary::-webkit-details-marker]:hidden" open>
                    <summary
                      class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900"
                    >
                    <div class="flex items-center">
                      <img
                        src="https://api.dicebear.com/7.x/notionists-neutral/svg?seed={{ $aktivitas->causer->name }}"
                        class="h-10 w-10 rounded-full object-cover"
                        />
                        <div class="flex-col ml-2">
                          @if ($aktivitas->subject->deleted_at == null)
                          <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }} <a href="{{ route('master-peminjaman-detail', $aktivitas->subject->id) }}" class="underline">Peminjaman</a>  </h1>
                          @else
                          <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }} Peminjaman </h1>
                          @endif
                          <h1 class="block">{{ $aktivitas->subject->created_at->diffForHumans() }}</h1>
                        </div>
                    </div>
                  </summary>
                </details>
                </div>
                @break
                @case('updated')
                <div class="space-y-4 m-5">
                  <details class="group [&_summary::-webkit-details-marker]:hidden" open>
                    <summary
                      class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900"
                    >
                    <div class="flex items-center">
                      <img
                        src="https://api.dicebear.com/7.x/notionists-neutral/svg?seed={{ $aktivitas->causer->name }}"
                        class="h-10 w-10 rounded-full object-cover"
                        />
                        <div class="flex-col ml-2">
                          <h1 class="block"> <b class="font-semibold"> {{ $aktivitas->causer->name }}</b> {{ $aktivitas->description }}  <a href="{{ route('master-peminjaman-detail', $aktivitas->subject->id) }}" class="underline">Peminjaman</a> </h1>
                          <h1 class="block">{{ $aktivitas->subject->created_at->diffForHumans() }}</h1>
                        </div>
                    </div>
                  </summary>
                </details>
                </div>
                    @break
            @endswitch
            
          @break --}}
      @endswitch

    @endforeach
  @endif



  
    {{-- <details class="group [&_summary::-webkit-details-marker]:hidden">
      <summary
        class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray-50 p-4 text-gray-900"
      >
        <h2 class="font-medium">Lorem ipsum dolor sit amet consectetur adipisicing?</h2>
  
        <svg
          class="size-5 shrink-0 transition duration-300 group-open:-rotate-180"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </summary>
  
      <p class="mt-4 px-4 leading-relaxed text-gray-700">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis molestias culpa in,
        recusandae laboriosam neque aliquid libero nesciunt voluptate dicta quo officiis explicabo
        consequuntur distinctio corporis earum similique!
      </p>
    </details>
  </div> --}}
</x-admin-layout>