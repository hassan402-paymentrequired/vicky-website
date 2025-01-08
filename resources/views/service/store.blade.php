<x-layout.app>
    <section class="container relative flex flex-col  h-full max-w-6xl px-10 mx-auto xl:px-0 mt-28" id="service"
        x-data="{
            selected_flat: 'flat',
        }">


        <h1 class="text-5xl font-gob  max-sm:text-4xl text-center uppercase">book your cleaning session.</h1>

        <div class="flex items-center mt-16 w-full max-w-3xl flex-col mb-10 mx-auto justify-center">
            <p class="text-center text-2xl font-gob">Tell us about your home</p>

            {{-- flat type --}}
            <div class="flex w-full justify-center gap-5 items-center mt-10">
                <label for="flat" :class="{ 'border-green-800  bg-green-50': selected_flat == 'flat' }"
                    @click="$refs.text.click()"
                    class="w-[250px] cursor-pointer h-[110px] justify-center rounded-md bg-white border border-[#ccc] flex flex-col items-center spacey-2">
                    <input type="radio" id="flat" name="type" class="hidden" x-ref="text" @change="selected_flat = 'flat'">
                    <span class="ml-2 text-sm font-gob">Flat</span>
                    <span class="text-xs text-gray-500 font-mono">A House with only one floor</span>
                </label>

               <label for="duplet" :class="{ 'border-green-800  bg-green-50': selected_flat == 'duplet' }"
                    @click="$refs.btn.click()"
                    class="w-[250px] cursor-pointer h-[110px] justify-center rounded-md bg-white border border-[#ccc] flex flex-col items-center spacey-2">
                    <input type="radio" id="duplet" name="type" class="hidden" x-ref="btn" @change="selected_flat = 'duplet'">
                    <span class="ml-2 text-sm font-gob">Duplet</span>
                    <span class="text-xs text-gray-500 font-mono text-center">A House with more than <br /> one
                        floor</span>
                </label>
            </div>


        </div>
    </section>
</x-layout.app>
