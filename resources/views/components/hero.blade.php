<div class="bg-white">


    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
            aria-hidden="true">
            <!-- Optional Background Decoration -->

        </div>
        <div class="mx-auto max-w-4xl py-16">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div
                    class="relative rounded-full px-3 py-1 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    @auth Hey {{ auth()->user()->name }} @endauth Discover the difference a professional clean can make.
                    <a href="#" class="font-semibold text-green-600"><span class="absolute inset-0"
                            aria-hidden="true"></span>Learn More <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="text-center">
                <h1 class="text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">Professional
                    Cleaning Services at Your Fingertips</h1>
                <p class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">
                    Sit back, relax, and let us handle the mess. From homes to offices, we deliver spotless results with
                    our trusted cleaning experts. Book your service today and experience the difference!
                </p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="{{ route('book:service') }}"
                        class="rounded-md bg-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Book
                        Now</a>
                    <a href="#" class="text-sm/6 font-semibold text-gray-900">How It Works <span
                            aria-hidden="true">→</span></a>
                    <form action="{{ route('pay') }}" method="post">
                        @csrf
                        <button>pay</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <!-- Optional Background Decoration -->
        </div>
    </div>
</div>
