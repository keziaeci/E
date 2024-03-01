<x-admin-layout>
    <div class="rounded-lg bg-white m-5 p-8 shadow-lg lg:col-span-3 lg:p-12">
        <h1 class="text-xl font-bold">Ubah Buku</h1>
        <form action="{{ route('master-buku-update',  $buku->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('patch')
            
            <div class="grid items-center grid-cols-1 gap-4 sm:grid-cols-2">
                <div>
                    <label for="judul" class="block text-xs font-medium text-gray-700"> Judul </label>
                    
                    <input
                    type="text"
                    id="judul"
                    placeholder="Judul"
                    name="judul"
                    value="{{ old('judul',$buku->judul) }}"
                    class="w-full rounded-lg border border-gray-200 p-3 text-sm"
                    />
                    @error('judul')
                    <p class="text-xs text-red-700">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="UserEmail" class="block text-xs font-medium text-gray-700"> Tahun Terbit </label>
                    <input
                        class="w-full rounded-lg border border-gray-200 p-3 text-sm"
                        placeholder="Tahun Terbit"
                        value="{{ old('tahun_terbit',$buku->tahun_terbit) }}"
                        type="number" min="1000" max="3000" step="1"
                        id="tahun_terbit"
                        name="tahun_terbit"
                    />
                    @error('tahun_terbit')
                    <p class="text-xs text-red-700">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div>
                    <label for="pengarang" class="block text-xs font-medium text-gray-700"> Pengarang </label>
                    
                    <select
                    name="pengarang"
                    id="pengarang"
                    class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm"
                    >
                    <option @selected(true) disabled="disabled">Pengarang</option>
                    @foreach ($pengarangs as $pengarang)
                    @if ($buku->pengarang_id == $pengarang->id)
                    <option value="{{ $pengarang->id }}" selected>{{ $pengarang->nama }}</option>
                    @else
                    <option value="{{ $pengarang->id }}">{{ $pengarang->nama }}</option>
                    @endif
                    @endforeach
                    </select>
                    @error('pengarang')
                    <p class="text-xs text-red-700">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="penerbit" class="block text-xs font-medium text-gray-700"> Penerbit </label>
                    <select name="penerbit" id="penerbit"
                        class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm"
                    >
                    <option @selected(true) disabled="disabled">Penerbit</option>
                    @foreach ($penerbits as $penerbit)
                        @if ($buku->penerbit_id == $penerbit->id)
                        <option value="{{ $penerbit->id }}" selected>{{ $penerbit->nama }}</option>
                            @else
                            <option value="{{ $penerbit->id }}">{{ $penerbit->nama }}</option>
                        @endif
                    @endforeach
                    </select>
                    @error('penerbit')
                    <p class="text-xs text-red-700">{{ $message }}</p>
                    @enderror
                </div>


            </div>
            
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div>
                    <div x-data="{ productQuantity: {{ old('stok',$buku->stok) }} }">
                        <label for="Quantity" class="block text-xs font-medium text-gray-700"> Stok </label>
                        <div class="flex justify-between items-center rounded border border-gray-200">
                            <button
                            type="button"
                            x-on:click="productQuantity--"
                            :disabled="productQuantity === 0"
                            class="size-10 leading-10 text-gray-600 transition hover:opacity-75"
                            >
                            &minus;
                            </button>
                            <input
                            type="number"
                            id="Quantity"
                            name="stok"
                            x-model="productQuantity"
                            class="h-10 w-16 border-transparent text-center [-moz-appearance:_textfield] sm:text-sm [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
                            />

                            <button
                            type="button"
                            x-on:click="productQuantity++"
                            class="size-10 leading-10 text-gray-600 transition hover:opacity-75"
                            >
                            &plus;
                            </button>
                        </div>
                        @error('stok')
                        <p class="text-xs text-red-700">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    {{-- <input
                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                    placeholder="Cover"
                    value="{{ old('cover',$buku->cover) }}"
                    type="text"
                    id="cover"
                    name="cover"
                    /> --}}
                    <label for="cover" class="block text-xs font-medium text-gray-700"> Cover </label>
                    <input
                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                    placeholder="Cover"
                    type="file"
                    id="cover"
                    name="cover[]"
                    multiple="multiple"
                    />
                </div>
                @error('cover')
                <p class="text-xs text-red-700">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                
                <div class="form-control">
                    <label for="editor" class="block text-xs font-medium text-gray-700"> Deskripsi </label>
                    <textarea name="deskripsi" id="editor" placeholder="Sinopsis">
                        {{   old('deskripsi', $buku->deskripsi)    }}
                    </textarea>
                    @error('deksripsi')
                    <p class="text-xs text-red-700">{{ $message }}</p>
                    @enderror
                </div>
                
                
                <div class="form-control">
                    <label for="kategori" class="block text-xs font-medium text-gray-700"> Kategori </label>
                    <div>
                        <select multiple x-data="multiselect" name="kategoris_id[]">
                            <optgroup label="Kategori">
                            @foreach ($kategoris as $kategori)
                                @if ($buku->kategoris->contains('id',$kategori->id))
                                <option value="{{ $kategori->id }}" selected="true">{{ $kategori->nama }}</option>
                                @else
                                <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                                @endif
                            @endforeach
                            </optgroup>
                        </select>
                    </div>

                    @error('kategoris_id')
                    <p class="text-xs text-red-700">{{ $message }}</p>
                    @enderror
                </div>
                
            </div>

            <div class="mt-4">
                <button
                type="submit"
                class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white sm:w-auto"
                >
                Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
    
    <div class="rounded-lg bg-white m-5 p-8 shadow-lg flex lg:col-span-3 lg:p-12">
        <h1 class="text-xl font-bold">Cover</h1>
        @foreach ($buku->images as $image)
        <div class="inline">
            <img src="{{ '/storage/' . $image->filename }}" class="h-52 w-40 lg:h-72 lg:w-52" alt="">
            <form action="{{ route('master-buku-cover-delete', [$buku->id, $image->id]) }}" class="block" method="POST">
                @method('DELETE')
                @csrf
                <button  class="underline text-red-500">Delete</button>
            </form>
        </div>
        @endforeach
    </div>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                    
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
    {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
    <script>
        document.addEventListener("alpine:init", () => {
        Alpine.data("multiselect", () => ({
            style: {
            wrapper: "w-full relative",
            select:
                "border w-full border-gray-300 rounded-lg py-2 px-2 text-sm flex gap-2 items-center cursor-pointer bg-white",
            menuWrapper:
                "w-full rounded-lg py-1.5 text-sm mt-1 shadow-lg absolute bg-white z-10",
            menu: "max-h-52 overflow-y-auto",
            textList: "overflow-x-hidden text-ellipsis grow whitespace-nowrap",
            trigger: "px-2 py-2 rounded bg-neutral-100",
            badge: "py-1.5 px-3 rounded-full bg-neutral-100",
            search:
                "px-3 py-2 w-full border-0 border-b-2 border-neutral-100 pb-3 outline-0 mb-1",
            optionGroupTitle:
                "px-3 py-2 text-neutral-400 uppercase font-bold text-xs sticky top-0 bg-white",
            clearSearchBtn: "absolute p-3 right-0 top-1 text-neutral-600",
            label: "hover:bg-neutral-50 cursor-pointer flex py-2 px-3"
            },

            icons: {
            times:
                '<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-4 h-4"><g xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-linecap="round" stroke-width="2"><path d="M6 18L18 6M18 18L6 6"/></g></svg>',
            arrowDown:
                '<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-4 h-4"><path xmlns="http://www.w3.org/2000/svg" stroke-linecap="round" stroke-width="2" d="M5 10l7 7 7-7"/></svg>'
            },

            init() {
            const style = this.style;

            const originalSelect = this.$el;
            originalSelect.classList.add("hidden");

            const wrapper = document.createElement("div");
            wrapper.className = style.wrapper;
            wrapper.setAttribute("x-data", "newSelect");

            const newSelect = document.createElement("div");
            newSelect.className = style.select;
            newSelect.setAttribute("x-bind", "selectTrigger");

            const textList = document.createElement("span");
            textList.className = style.textList;

            const triggerBtn = document.createElement("button");
            triggerBtn.className = style.trigger;
            triggerBtn.innerHTML = this.icons.arrowDown;

            const countBadge = document.createElement("span");
            countBadge.className = style.badge;
            countBadge.setAttribute("x-bind", "countBadge");

            newSelect.append(textList);
            newSelect.append(countBadge);
            newSelect.append(triggerBtn);

            const menuWrapper = document.createElement("div");
            menuWrapper.className = style.menuWrapper;
            menuWrapper.setAttribute("x-bind", "selectMenu");

            const menu = document.createElement("div");
            menu.className = style.menu;

            const search = document.createElement("input");
            search.className = style.search;
            search.setAttribute("x-bind", "search");
            search.setAttribute("placeholder", "filter");

            const clearSearchBtn = document.createElement("button");
            clearSearchBtn.className = style.clearSearchBtn;
            clearSearchBtn.setAttribute("x-bind", "clearSearchBtn");
            clearSearchBtn.innerHTML = this.icons.times;

            menuWrapper.append(search);
            menuWrapper.append(menu);
            menuWrapper.append(clearSearchBtn);

            originalSelect.parentNode.insertBefore(
                wrapper,
                originalSelect.nextSibling
            );

            const itemGroups = originalSelect.querySelectorAll("optgroup");

            if (itemGroups.length > 0) {
                itemGroups.forEach((itemGroup) => processItems(itemGroup));
            } else {
                processItems(originalSelect);
            }

            function processItems(parent) {
                const items = parent.querySelectorAll("option");
                const subMenu = document.createElement("ul");
                const groupName = parent.getAttribute("label") || null;

                if (groupName) {
                const groupTitle = document.createElement("h5");
                groupTitle.className = style.optionGroupTitle;
                groupTitle.innerText = groupName;
                groupTitle.setAttribute("x-bind", "groupTitle");
                menu.appendChild(groupTitle);
                }

                items.forEach((item) => {
                const li = document.createElement("li");
                li.setAttribute("x-bind", "listItem");

                const checkBox = document.createElement("input");
                checkBox.classList.add("mr-3", "mt-1");
                checkBox.type = "checkbox";
                checkBox.value = item.value;
                checkBox.id = originalSelect.name + "_" + item.value;

                const label = document.createElement("label");
                label.className = style.label;
                label.setAttribute("for", checkBox.id);
                label.innerText = item.innerText;

                checkBox.setAttribute("x-bind", "checkBox");

                if (item.hasAttribute("selected")) {
                    checkBox.checked = true;
                }
                label.prepend(checkBox);
                li.append(label);
                subMenu.appendChild(li);
                });
                menu.appendChild(subMenu);
            }

            wrapper.appendChild(newSelect);
            wrapper.appendChild(menuWrapper);

            Alpine.data("newSelect", () => ({
                open: false,
                showCountBadge: false,
                items: [],
                selectedItems: [],
                filterBy: "",
                init() {
                this.regenerateTextItems();
                },

                regenerateTextItems() {
                this.selectedItems = [];
                this.items.forEach((item) => {
                    const checkbox = item.querySelector("input[type=checkbox]");
                    const text = item.querySelector("label").innerText;
                    if (checkbox.checked) {
                    this.selectedItems.push(text);
                    }
                });

                if (this.selectedItems.length > 1) {
                    this.showCountBadge = true;
                } else {
                    this.showCountBadge = false;
                }

                if (this.selectedItems.length === 0) {
                    textList.innerHTML = '<span class="text-neutral-400">select</span>';
                } else {
                    textList.innerText = this.selectedItems.join(", ");
                }
                },

                selectTrigger: {
                ["@click"]() {
                    this.open = !this.open;

                    if (this.open) {
                    this.$nextTick(() =>
                        this.$root.querySelector("input[x-bind=search]").focus()
                    );
                    }
                }
                },
                selectMenu: {
                ["x-show"]() {
                    return this.open;
                },
                ["x-transition"]() {},
                ["@keydown.escape.window"]() {
                    this.open = false;
                },
                ["@click.away"]() {
                    this.open = false;
                },
                ["x-init"]() {
                    this.items = this.$el.querySelectorAll("li");
                    this.regenerateTextItems();
                }
                },
                checkBox: {
                ["@change"]() {
                    const checkBox = this.$el;

                    if (checkBox.checked) {
                    originalSelect
                        .querySelector("option[value='" + checkBox.value + "']")
                        .setAttribute("selected", true);
                    } else {
                    originalSelect
                        .querySelector("option[value='" + checkBox.value + "']")
                        .removeAttribute("selected");
                    }
                    this.regenerateTextItems();
                }
                },
                countBadge: {
                ["x-show"]() {
                    return this.showCountBadge;
                },
                ["x-text"]() {
                    return this.selectedItems.length;
                }
                },
                search: {
                ["@keydown.escape.stop"]() {
                    this.filterBy = "";
                    this.$el.blur();
                },
                ["@keyup"]() {
                    this.filterBy = this.$el.value;
                },
                ["x-model"]() {
                    return this.filterBy;
                }
                },
                clearSearchBtn: {
                ["@click"]() {
                    this.filterBy = "";
                },
                ["x-show"]() {
                    return this.filterBy.length > 0;
                }
                },
                listItem: {
                ["x-show"]() {
                    return (
                    this.filterBy === "" ||
                    this.$el.innerText
                        .toLowerCase()
                        .startsWith(this.filterBy.toLowerCase())
                    );
                }
                },
                groupTitle: {
                ["x-show"]() {
                    if (this.filterBy === "") return true;

                    let atLeastOneItemIsShown = false;

                    this.$el.nextElementSibling
                    .querySelectorAll("li")
                    .forEach((item) => {
                        console.log(this.filterBy);
                        if (
                        item.innerText
                            .toLowerCase()
                            .startsWith(this.filterBy.toLowerCase())
                        )
                        atLeastOneItemIsShown = true;
                    });
                    return atLeastOneItemIsShown;
                }
                }
            }));
            }
        }));
    });

    </script>
</x-admin-layout>