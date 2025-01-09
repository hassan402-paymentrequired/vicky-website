  <div x-show="showModal" x-cloak class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
      <div class="bg-white rounded-lg w-full max-w-md p-6 shadow-lg overflow-y-auto h-[90vh] overflow-hidden">
          <h2 class="text-xl font-bold text-center mb-4 font-gob">Complete your cleaning booking</h2>

          <div class="w-full bg-green-50 p-3 rounded-sm">
              <div class="flex justify-between items-center ">
                  <h4 class="text-base font-gob">Your Order</h4>
                  <h4>😊</h4>
              </div>
              <div class="flex flex-col w-full">
                  <div class="flex justify-between items-center ">
                      <h4 class="text-lg font-mono">Deep House Cleaning</h4>
                      <h4 x-text="price.toFixed(2)" class="font-mono"></h4>
                  </div>
              </div>
              <span>
                  <span x-text="">21</span>
                  rooms
              </span>

          </div>

          <form @submit.prevent="console.log(formData)" class="mt-10">
              <h1 class="my-3 text-lg font-jost text-gray-500">Recipient information</h1>
              <div class="mb-4">
                  <label class="block text-sm font-medium font-jost text-gray-700">First Name</label>
                  <input type="text" x-model="formData.name" class="mt-1 p-2 block w-full border rounded-md"
                      required>
              </div>
              <div class="mb-4">
                  <label class="block text-sm font-medium font-jost text-gray-700">Last Name</label>
                  <input type="text" x-model="formData.address" class="mt-1 p-2 block w-full border rounded-md"
                      required>
              </div>
              <div class="mb-4">
                  <label class="block text-sm font-medium font-jost text-gray-700">Email</label>
                  <input type="email" x-model="formData.email" class="mt-1 p-2 block w-full border rounded-md"
                      required>
              </div>
              <hr class="h-[1px] bg-gray-300 my-5 w-full" />



              <h1 class="my-3 text-lg font-jost text-gray-500">Delivery information</h1>


              <div class="mb-4">
                  <label class="block text-sm font-medium font-jost text-gray-700">Cleaning Date</label>
                  <input type="tel" x-model="formData.phone" class="mt-1 p-2 block w-full border rounded-md"
                      required>
              </div>
              <div class="mb-4">
                  <label class="block text-sm font-medium font-jost text-gray-700">Delivery Location</label>
                  <input type="tel" x-model="formData.phone" class="mt-1 p-2 block w-full border rounded-md"
                      required>
              </div>
              <div class="mb-4">
                  <label class="block text-sm font-medium font-jost text-gray-700">Delivery Area</label>
                  <input type="tel" x-model="formData.phone" class="mt-1 p-2 block w-full border rounded-md"
                      required>
              </div>
              <div class="mb-4">
                  <label class="block text-sm font-medium font-jost text-gray-700">Anything You Will like us to know</label>
                  <textarea rows="3" x-model="formData.phone" class="mt-1 p-2 block resize-none w-full border rounded-md"
                      required></textarea>
              </div>
              <div class="flex justify-end gap-4">
                  <button type="button" @click="showModal = false" class="bg-gray-500 text-white px-4 py-2 rounded-md">
                      Cancel
                  </button>
                  <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md">
                      Submit
                  </button>
              </div>
          </form>
      </div>
  </div>
