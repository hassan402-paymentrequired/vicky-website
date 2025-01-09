<x-layout.app>
    <section class="container relative flex flex-col h-full max-w-6xl px-10 mx-auto xl:px-0 mt-28" id="service"
        x-data="{
            selected_flat: 'flat',
            freq: 'once',
            price: 0,
            counts: {
                bedroom: 0,
                dining: 0,
                bathroom: 0,
                kitchen: 0,
                balcony: 0,
                store: 0,
            },
            showModal: false,
            formData: {
                name: '',
                address: '',
                email: '',
                phone: ''
            },
            roomPrices: {
                bedroom: 2000,
                dining: 1500,
                bathroom: 1000,
                kitchen: 1200,
                balcony: 800,
                store: 700,
            },
            roomTypes: {
                bedroom: 'Bedroom',
                dining: 'Living Rooms / Dining Areas',
                bathroom: 'Toilets / Bathrooms',
                kitchen: 'Kitchen',
                balcony: 'Outdoor / Balcony',
                store: 'Store',
            },
            calculatePrice() {
                this.price = Object.keys(this.counts).reduce((total, key) => {
                    return total + this.counts[key] * this.roomPrices[key];
                }, 0);
                if (this.freq === 'recurring') {
                    this.price *= 0.9; // Apply a 10% discount for recurring services
                }
            }
        }"
        x-effect="calculatePrice()">

        <h1 class="text-5xl font-gob max-sm:text-3xl text-center uppercase">Book Your Cleaning Session</h1>

        <div class="flex items-center mt-16 w-full max-w-2xl flex-col mb-10 mx-auto justify-center bg-white p-5">
            <p class="text-center text-2xl font-gob max-sm:text-xl">Tell us about your home</p>

            <!-- Flat Type -->
            <div class="flex w-full justify-center gap-5 items-center mt-10 max-md:flex-col">
                <label for="flat" :class="{ 'border-green-800 bg-green-50': selected_flat === 'flat' }"
                    @click="$refs.flat.click()"
                    class="w-[250px] cursor-pointer h-[110px] justify-center rounded-md bg-white border border-[#ccc] flex flex-col items-center spacey-2">
                    <input type="radio" id="flat" name="type" class="hidden" x-ref="flat"
                        @change="selected_flat = 'flat'">
                    <span class="ml-2 text-sm font-gob">Flat</span>
                    <span class="text-xs text-gray-500 font-mono">A house with only one floor</span>
                </label>

                <label for="duplet" :class="{ 'border-green-800 bg-green-50': selected_flat === 'duplet' }"
                    @click="$refs.duplet.click()"
                    class="w-[250px] cursor-pointer h-[110px] justify-center rounded-md bg-white border border-[#ccc] flex flex-col items-center spacey-2">
                    <input type="radio" id="duplet" name="type" class="hidden" x-ref="duplet"
                        @change="selected_flat = 'duplet'">
                    <span class="ml-2 text-sm font-gob">Duplet</span>
                    <span class="text-xs text-gray-500 font-mono text-center">A house with more than one floor</span>
                </label>
            </div>

            <hr class="h-[1px] bg-gray-300 my-5 w-full" />

            <!-- Room Counters -->
            <template x-for="(label, countKey) in roomTypes" :key="countKey">
                <div class="flex w-full justify-between px-5 items-center mt-8">
                    <h3 class="text-base font-gob max-sm:text-xs" x-text="label"></h3>
                    <div class="flex items-center gap-4">
                        <button @click="counts[countKey]--; calculatePrice()" x-bind:disabled="counts[countKey] === 0"
                            :class="{ 'bg-gray-300': counts[countKey] <= 0 }"
                            class="w-7 h-7 flex items-center justify-center rounded-md bg-green-900 text-white font-gob">
                            -
                        </button>
                        <span x-text="counts[countKey]" class="text-sm font-gob"></span>
                        <button @click="counts[countKey]++; calculatePrice()"
                            class="w-7 h-7 flex items-center justify-center rounded-md bg-green-900 text-white font-gob">
                            +
                        </button>
                    </div>
                </div>
            </template>

            <!-- Frequency -->
            <div class="w-full mt-10">
                <h1 class="text-xl font-mono text-center uppercase">Frequency</h1>
                <div class="flex w-full justify-center gap-5 items-center mt-10">
                    <label for="once" :class="{ 'border-green-800 bg-green-50': freq === 'once' }"
                        @click="$refs.once.click(); calculatePrice()"
                        class="w-[250px] cursor-pointer h-[50px] justify-center rounded-md bg-white border border-[#ccc] flex flex-col items-center spacey-2">
                        <input type="radio" id="once" name="type" class="hidden" x-ref="once"
                            @change="freq = 'once'">
                        <span class="ml-2 text-sm font-mono">Once</span>
                    </label>

                    <label for="recurring" :class="{ 'border-green-800 bg-green-50': freq === 'recurring' }"
                        @click="$refs.recurring.click(); calculatePrice()"
                        class="w-[250px] cursor-pointer h-[50px] justify-center rounded-md bg-white border border-[#ccc] flex flex-col items-center spacey-2">
                        <input type="radio" id="recurring" name="type" class="hidden" x-ref="recurring"
                            @change="freq = 'recurring'">
                        <span class="ml-2 text-sm font-mono">Recurring</span>
                    </label>
                </div>
            </div>

            <hr class="h-[1px] bg-gray-300 my-5 w-full" />

            <div class="w-full flex items-center justify-center gap-2 flex-col">
                <h3 class="text-lg text-gray-500 font-mono">Price</h3>
                <span class="text-2xl font-gob">
                    ₦
                    <span x-text="price.toFixed(2)"></span>
                </span>
            </div>

            <button @click="showModal = !showModal" class="w-full h-10 rounded-sm bg-green-500 text-white font-gob text-sm mt-5">
                Continue
            </button>
             <x-service-modal />
        </div>
    </section>
</x-layout.app>
