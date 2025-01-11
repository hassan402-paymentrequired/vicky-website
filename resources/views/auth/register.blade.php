<x-layout.guest>
    <!-- component -->
    <section class="flex flex-col md:flex-row h-screen items-center">

        <div class="bg-green-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
            <img src="{{ asset('images/register.png') }}" alt="" class="w-full h-full object-cover">
        </div>

        <div
            class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto  md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">


            <div class="w-full h-100">
                <div class="flex items-center gap-4 w-full">
                    <a href="{{ route('home') }}"
                        class="inline-flex items-center border border-green-300 px-3 py-1.5 rounded-md text-green-500 hover:bg-green-50">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16l-4-4m0 0l4-4m-4 4h18">
                            </path>
                        </svg>
                        <span class="ml-1 font-bold text-lg">Back</span>
                    </a>
                    <h1 class="text-xl md:text-2xl font-bold leading-tight font-mono ">Let's get you started</h1>
                </div>
                <form class="mt-6" action="{{ route('user.register.store') }}" method="POST">
                    @csrf

                    <x-form-input label="Full name" name="name" placeholder="Enter full name" />
                    <x-form-input label="Email Address" name="email" placeholder="Enter Email Address" type="email"/>
                    <x-form-input label="Password" name="password" placeholder="Enter password" type="password" />
                    <x-form-input label="Confirm Password" name="password_confirmation" placeholder="Enter password" type="password"/>


                    <button type="submit"
                        class="w-full block bg-green-500 hover:bg-green-400 focus:bg-green-400 text-white font-semibold rounded-lg
              px-4 py-3 mt-6">Sign
                        In</button>
                </form>

                <hr class="my-2 border-gray-300 w-full">

                <button type="button"
                    class="w-full block bg-white hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded px-4 py-1 border border-gray-300">
                    <div class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            class="w-6 h-6" viewBox="0 0 48 48">
                            <defs>
                                <path id="a"
                                    d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z" />
                            </defs>
                            <clipPath id="b">
                                <use xlink:href="#a" overflow="visible" />
                            </clipPath>
                            <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z" />
                            <path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z" />
                            <path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z" />
                            <path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z" />
                        </svg>
                        <span class="ml-4  text-sm">
                            Log in
                            with
                            Google</span>
                    </div>
                </button>

                <p class="mt-3">Already have an account? <a href="{{ route('login') }}"
                        class="text-green-500 hover:text-green-700 font-semibold">Login</a></p>


            </div>
        </div>

    </section>

</x-layout.guest>
