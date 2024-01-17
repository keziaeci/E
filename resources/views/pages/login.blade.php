<x-app-layout>

    <div class="flex items-center min-h-screen">
        
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-lg text-center">
                <h1 class="text-2xl font-bold sm:text-3xl">Get started today!</h1>
            
                <p class="mt-4 text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et libero nulla eaque error neque
                    ipsa culpa autem, at itaque nostrum!
                </p>
            </div>
            
            <form action="{{ route('auth') }}" class="mx-auto mb-0 mt-8 max-w-md space-y-4" method="POST">
                @method('post')
                @csrf
                <div>
                    <label for="email" class="sr-only">Username</label>
        
                    <div class="relative">
                        <input
                            type="text"
                            name="username"
                            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            placeholder="Enter username"
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
                </div>
                
                <div>
                    <label for="password" class="sr-only">Password</label>
            
                    <div class="relative">
                        <input
                            type="password"
                            name="password"
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
                </div>
                
                <div class="flex items-center justify-between">
                    <p class="text-sm text-gray-500">
                    No account?
                    <a class="underline" href="">Sign up</a>
                    </p>
        
                    <button
                    class="group relative inline-block text-sm font-medium text-white focus:outline-none focus:ring"
                    href="/download" type="submit"
                >
                    <span class="absolute inset-0 border border-blue-600 group-active:border-blue-500"></span>
                    <span
                    class="block border border-blue-600 bg-blue-600 px-12 py-3 transition-transform active:border-blue-500 active:bg-blue-500 group-hover:-translate-x-1 group-hover:-translate-y-1"
                    >
                    Login
                    </span>
                    </button>
                </div>
                
                <span class="relative flex justify-center">
                    <div
                    class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"
                    ></div>
                    
                    <span class="relative z-10 bg-white px-6">or</span>
                </span>
                
                <div class="flex justify-center">
                    <button
                    class="group relative w-96 text-sm font-medium text-white focus:outline-none focus:ring"
                    href="/download" type="submit"
                >
                    <span class="absolute inset-0 border border-black group-active:border-black"></span>
                    <span
                        class="block border border-black bg-black px-12 py-3 transition-transform active:border-black active:bg-black group-hover:-translate-x-1 group-hover:-translate-y-1"
                    >
                    Login with google
                    </span>
                    </button>
                </div>
            </form>
        </div>
    </div>  
</x-app-layout>