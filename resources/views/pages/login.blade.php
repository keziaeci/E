<x-app-layout>

    <div class="flex items-center min-h-screen">
        
        <div class="lg:mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="max-w-lg text-center">
                <h1 class="text-2xl font-bold sm:text-3xl">Kapan lagi!</h1>
            
                <p class="mt-4 text-gray-500">
                    Eksplorasi tak terbatas di dunia literasi. Mulailah petualangan membaca Anda dengan login sekarang
                </p>
            </div>
            
            <form action="{{ route('auth') }}" class="mx-auto mb-0 mt-8 max-w-md space-y-4" method="POST">
                @method('post')
                @csrf
                <div>
                    <label for="email" class="sr-only">Username</label>
        
                    <div class="relative">
                        <input
                        required
                            type="text"
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
                </div>
                
                <div>
                    <label for="password" class="sr-only">Password</label>
            
                    <div class="relative">
                        <input
                            type="password"
                            name="password"
                            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            placeholder="Enter password"
                            required
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
                </div>
                @error('error')
                <div class="px-5">
                    <p class="text-xs text-red-700">{{ $message }}</p>
                </div>
                @enderror
                <div class="flex items-center justify-between">
                    <div class="px-5">
                        <label for="remember" class="flex gap-2 items-center">
                            <input
                            type="checkbox"
                            id="remember"
                            name="remember"
                            class="size-3 rounded-md border-gray-200 bg-white shadow-sm"
                            />
    
                            <span class="text-sm text-gray-700">
                                Remember Me
                            </span>
                        </label>
                    </div>
                    
                    <a class="text-sm underline text-gray-500">
                        Forgot Password?
                    {{-- <a class="underline" href="">Sign up</a> --}}
                    </a>
        
                </div>
                
                <div class="flex items-center justify-center">
                    <button
                        class="w-96 text-sm font-medium focus:outline-none focus:ring block text-white bg-blue-600 px-12 py-3 active:border-blue-500 active:bg-blue-500"
                        type="submit"
                        >
                        Login
                    </button>
                </div>


                
                
                <span class="relative flex justify-center">
                    <div
                    class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"
                    ></div>
                    
                    <span class="relative z-10 bg-white px-6">or</span>
                </span>
                
                <div class="flex justify-center">
                    <a href="{{ route('google-redirect') }}"
                        class="w-96 text-sm flex gap-2 justify-center  text-center font-medium focus:outline-none focus:ring focus:ring-gray-800 text-white bg-black px-12 py-3 active:border-black active:bg-gray-950"
                        >
                        Login with google
                        <svg width="22" height="22" viewBox="-0.5 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Google-color</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Color-" transform="translate(-401.000000, -860.000000)"> <g id="Google" transform="translate(401.000000, 860.000000)"> <path d="M9.82727273,24 C9.82727273,22.4757333 10.0804318,21.0144 10.5322727,19.6437333 L2.62345455,13.6042667 C1.08206818,16.7338667 0.213636364,20.2602667 0.213636364,24 C0.213636364,27.7365333 1.081,31.2608 2.62025,34.3882667 L10.5247955,28.3370667 C10.0772273,26.9728 9.82727273,25.5168 9.82727273,24" id="Fill-1" fill="#FBBC05"> </path> <path d="M23.7136364,10.1333333 C27.025,10.1333333 30.0159091,11.3066667 32.3659091,13.2266667 L39.2022727,6.4 C35.0363636,2.77333333 29.6954545,0.533333333 23.7136364,0.533333333 C14.4268636,0.533333333 6.44540909,5.84426667 2.62345455,13.6042667 L10.5322727,19.6437333 C12.3545909,14.112 17.5491591,10.1333333 23.7136364,10.1333333" id="Fill-2" fill="#EB4335"> </path> <path d="M23.7136364,37.8666667 C17.5491591,37.8666667 12.3545909,33.888 10.5322727,28.3562667 L2.62345455,34.3946667 C6.44540909,42.1557333 14.4268636,47.4666667 23.7136364,47.4666667 C29.4455,47.4666667 34.9177955,45.4314667 39.0249545,41.6181333 L31.5177727,35.8144 C29.3995682,37.1488 26.7323182,37.8666667 23.7136364,37.8666667" id="Fill-3" fill="#34A853"> </path> <path d="M46.1454545,24 C46.1454545,22.6133333 45.9318182,21.12 45.6113636,19.7333333 L23.7136364,19.7333333 L23.7136364,28.8 L36.3181818,28.8 C35.6879545,31.8912 33.9724545,34.2677333 31.5177727,35.8144 L39.0249545,41.6181333 C43.3393409,37.6138667 46.1454545,31.6490667 46.1454545,24" id="Fill-4" fill="#4285F4"> </path> </g> </g> </g> </g></svg>
                    </a>
                </div>
                <div class="flex items-center justify-center gap-2">
                    <p class="text-sm text-gray-500">Dont have an account?</p>
                    
                    <a href="{{ route('register') }}" class="text-sm underline">
                        Sign Up here
                    </a>
        
                </div>
            </form>
        </div>
    </div>  
    @if (session()->has('success'))
    <div x-data="{ open: true }" x-show="open" role="alert" class="absolute max-w-sm z-20 top-2 left-2 rounded-xl border border-gray-100 bg-white p-4">
        <div class="flex items-start gap-4">
            <span class="text-green-600">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6"
                >
                <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                />
                </svg>
            </span>
                
            <div class="flex-1">
                <strong class="block font-medium text-gray-900"> Berhasil </strong>
                <p class="mt-1 text-sm text-gray-700">{{ session('success') }}</p>
            </div>
                
            <button @click="open = false " class="text-gray-500 transition hover:text-gray-600">
                <span class="sr-only">Dismiss popup</span>
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-6 w-6"
                    >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
    @endif
</x-app-layout>