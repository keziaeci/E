<x-app-layout>

    <div class="flex items-center min-h-screen">
        
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-lg text-center">
                <h1 class="text-2xl font-bold sm:text-3xl">Create an account</h1>
            
                <p class="mt-4 text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et libero nulla eaque error neque
                    ipsa culpa autem, at itaque nostrum!
                </p>
            </div>
            
            <form action="{{ route('register-store') }}" class="mx-auto mb-0 mt-8 max-w-md space-y-4" method="POST">
                @method('post')
                @csrf
                <div>
                    <label for="name" class="sr-only">Name</label>
        
                    <div class="relative">
                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            placeholder="Enter name"
                        />
            
                        <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                            <svg 
                            class="h-4 w-4 text-gray-400"
                            viewBox="0 0 15 15" fill="currentColor" 
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3.68979 2.75C3.89667 2.74979 4.08232 2.87701 4.15679 3.07003L7.36662 11.39C7.46602 11.6477 7.33774 11.9371 7.0801 12.0365C6.82247 12.1359 6.53304 12.0076 6.43365 11.75L5.3825 9.02537H2.01133L0.966992 11.749C0.868128 12.0068 0.578964 12.1357 0.321126 12.0369C0.0632878 11.938 -0.0655864 11.6488 0.0332774 11.391L3.22344 3.07099C3.29751 2.87782 3.4829 2.75021 3.68979 2.75ZM3.69174 4.64284L5.05458 8.17537H2.33724L3.69174 4.64284ZM10.8989 5.20703C9.25818 5.20703 8.00915 6.68569 8.00915 8.60972C8.00915 10.6337 9.35818 12.0124 10.8989 12.0124C11.7214 12.0124 12.5744 11.6692 13.1543 11.0219V11.53C13.1543 11.7785 13.3557 11.98 13.6043 11.98C13.8528 11.98 14.0543 11.7785 14.0543 11.53V5.72C14.0543 5.47147 13.8528 5.27 13.6043 5.27C13.3557 5.27 13.1543 5.47147 13.1543 5.72V6.22317C12.6054 5.60095 11.7924 5.20703 10.8989 5.20703ZM13.1543 9.79823V7.30195C12.7639 6.58101 11.9414 6.05757 11.0868 6.05757C10.1088 6.05757 9.03503 6.96581 9.03503 8.60955C9.03503 10.1533 10.0088 11.1615 11.0868 11.1615C11.9701 11.1615 12.7719 10.4952 13.1543 9.79823Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </div> 
                    @error('name')
                    <div class="m-2">
                        <p class="text-xs text-red-700">{{ $message }}</p>
                    </div>
                    @enderror
                </div>

                <div>
                    <label for="username" class="sr-only">Username</label>
        
                    <div class="relative">
                        <input
                            type="text"
                            value="{{ old('username') }}"
                            name="username"
                            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            placeholder="Enter username"
                        />
            
                        <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                            <svg 
                            class="h-4 w-4 text-gray-400"
                            viewBox="0 0 15 15" fill="currentColor" 
                            xmlns="http://www.w3.org/2000/svg">
                            <path 
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M7.5 0.875C5.49797 0.875 3.875 2.49797 3.875 4.5C3.875 6.15288 4.98124 7.54738 6.49373 7.98351C5.2997 8.12901 4.27557 8.55134 3.50407 9.31167C2.52216 10.2794 2.02502 11.72 2.02502 13.5999C2.02502 13.8623 2.23769 14.0749 2.50002 14.0749C2.76236 14.0749 2.97502 13.8623 2.97502 13.5999C2.97502 11.8799 3.42786 10.7206 4.17091 9.9883C4.91536 9.25463 6.02674 8.87499 7.49995 8.87499C8.97317 8.87499 10.0846 9.25463 10.8291 9.98831C11.5721 10.7206 12.025 11.8799 12.025 13.5999C12.025 13.8623 12.2376 14.0749 12.5 14.0749C12.7623 14.075 12.975 13.8623 12.975 13.6C12.975 11.72 12.4778 10.2794 11.4959 9.31166C10.7244 8.55135 9.70025 8.12903 8.50625 7.98352C10.0187 7.5474 11.125 6.15289 11.125 4.5C11.125 2.49797 9.50203 0.875 7.5 0.875ZM4.825 4.5C4.825 3.02264 6.02264 1.825 7.5 1.825C8.97736 1.825 10.175 3.02264 10.175 4.5C10.175 5.97736 8.97736 7.175 7.5 7.175C6.02264 7.175 4.825 5.97736 4.825 4.5Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </div> 
                    @error('username')
                    <div class="m-2">
                        <p class="text-xs text-red-700">{{ $message }}</p>
                    </div>
                    @enderror
                </div>

                <div>
                    <label for="email" class="sr-only">Email</label>
        
                    <div class="relative">
                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            placeholder="Enter email"
                        />
            
                        <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 text-gray-400"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                            />
                            </svg>
                        </span>
                    </div> 
                    @error('email')
                    <div class="m-2">
                        <p class="text-xs text-red-700">{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                
                <div>
                    <label for="password" class="sr-only">Password</label>
            
                    <div class="relative">
                        <input
                            type="password"
                            name="password"
                            value="{{ old('password') }}"
                            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            placeholder="Enter password"
                        />
                
                        <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 text-gray-400"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                            />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                            />
                            </svg>
                        </span>
                    </div>
                    @error('password')
                    <div class="m-2">
                        <p class="text-xs text-red-700">{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                
                <div class="flex justify-center">
                    {{-- <button
                    class="group relative w-96 text-sm font-medium text-white focus:outline-none focus:ring"
                    href="/download" type="submit"
                >
                    <span class="absolute inset-0 border border-black group-active:border-black"></span>
                    <span
                        class="block border border-black bg-black px-12 py-3 transition-transform active:border-black active:bg-black group-hover:-translate-x-1 group-hover:-translate-y-1"
                    >
                    Sign In
                    </span>
                    </button> --}}

                    <button
                    type="submit"
                        class="w-96 text-sm flex gap-2 justify-center  text-center font-medium focus:outline-none focus:ring focus:ring-gray-800 text-white bg-black px-12 py-3 active:border-black active:bg-gray-950"
                        >
                        Sign In
                    </button>
                </div>
                <div class="flex items-center justify-center gap-2">
                {{-- <div class="flex"> --}}
                    <p class="text-sm text-gray-500">Already have an account?</p>
                    
                    <a href="{{ Route('login') }}" class="text-sm underline ">
                        Log In
                    {{-- <a class="underline" href="">Sign up</a> --}}
                    </a>
        
                </div>
            </form>
        </div>
    </div>  
</x-app-layout>