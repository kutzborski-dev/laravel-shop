<div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-black bg-opacity-25"></div>

    <div class="fixed inset-0 z-40 flex">
      <div class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
        <!-- Menu close -->
        <div class="flex px-4 pb-2 pt-5">
          <button type="button" class="relative -m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <!-- Menu -->
        <div>
            <ul role="list" class="mt-6 flex flex-col space-y-1">
                <li class="flow-root">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-my-2 py-2 pl-4 text-gray-500">
                            Men
                        </a>
                        <div class="p-4">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M12 3l10.001 9.496-10 9.501-.689-.726L20 12.996H2v-1h18l-8.688-8.271z"></path></svg>
                        </div>
                    </div>        
                </li>
                <li class="flow-root mt-0">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-my-2 py-2 pl-4 text-gray-500">
                            Women
                        </a>
                        <div class="p-4">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M12 3l10.001 9.496-10 9.501-.689-.726L20 12.996H2v-1h18l-8.688-8.271z"></path></svg>
                        </div>
                    </div>
                </li>
              </ul>
        </div>

        <!-- Panels -->
        <div class="mt-2">
            <!-- 'Men' tab panel, show/hide based on tab state. -->
            <div id="men-panel" class="absolute top-0 h-full w-full bg-white px-4 py-1" aria-labelledby="men-panel-tab" role="tabpanel" tabindex="0">
                <div class="grid grid-cols-[25%_50%_25%] border-b-[1px] border-gray-300 items-center mb-3">
                    <div>
                        <button type="button" class="p-4 pl-0" aria-role="button" aria-label="Back to menu">
                            <svg class="h-6 w-6 rotate-180" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M12 3l10.001 9.496-10 9.501-.689-.726L20 12.996H2v-1h18l-8.688-8.271z"></path></svg>
                        </button>
                    </div>
                    <div class="text-center">
                        <h3 class="text-xl font-medium">Men</h3>
                    </div>
                </div>
                <!-- Sub categories -->
                <p class="text-lg font-medium text-gray-900 flex justify-between items-center mt-6 mb-2">Categories</p>
                <div class="sub-category">
                    <a href="#" id="men-category-heading-mobile" class="py-4 block text-lg text-gray-900 flex justify-between items-center">
                        <span>Category</span>
                        <div>
                            <svg class="h-4 w-4" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M12 3l10.001 9.496-10 9.501-.689-.726L20 12.996H2v-1h18l-8.688-8.271z"></path></svg>
                        </div>
                    </a>
                </div>
            </div>

          <!-- 'Women' tab panel, show/hide based on tab state. -->
          <div id="women-panel" class="hidden space-y-10 px-4 pb-8 pt-10" aria-labelledby="women-panel-tab" role="tabpanel" tabindex="0">
            <div class="grid grid-cols-2 gap-x-4">
              <div class="group relative text-sm">
                <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                  <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-cover object-center">
                </div>
                <a href="#" class="mt-6 block font-medium text-gray-900">
                  <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                  New Arrivals
                </a>
                <p aria-hidden="true" class="mt-1">Shop now</p>
              </div>
              <div class="group relative text-sm">
                <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                  <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-cover object-center">
                </div>
                <a href="#" class="mt-6 block font-medium text-gray-900">
                  <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                  Basic Tees
                </a>
                <p aria-hidden="true" class="mt-1">Shop now</p>
              </div>
            </div>
            <div>
              <p id="women-clothing-heading-mobile" class="font-medium text-gray-900">Clothing</p>
              <ul role="list" aria-labelledby="women-clothing-heading-mobile" class="mt-6 flex flex-col space-y-6">
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Tops</a>
                </li>
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Dresses</a>
                </li>
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Pants</a>
                </li>
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Denim</a>
                </li>
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Sweaters</a>
                </li>
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">T-Shirts</a>
                </li>
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Jackets</a>
                </li>
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Activewear</a>
                </li>
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Browse All</a>
                </li>
              </ul>
            </div>
            <div>
              <p id="women-accessories-heading-mobile" class="font-medium text-gray-900">Accessories</p>
              <ul role="list" aria-labelledby="women-accessories-heading-mobile" class="mt-6 flex flex-col space-y-6">
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
                </li>
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
                </li>
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
                </li>
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Sunglasses</a>
                </li>
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
                </li>
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
                </li>
              </ul>
            </div>
            <div>
              <p id="women-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
              <ul role="list" aria-labelledby="women-brands-heading-mobile" class="mt-6 flex flex-col space-y-6">
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Full Nelson</a>
                </li>
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
                </li>
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Re-Arranged</a>
                </li>
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Counterfeit</a>
                </li>
                <li class="flow-root">
                  <a href="#" class="-m-2 block p-2 text-gray-500">Significant Other</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="space-y-6 border-t border-gray-200 px-4 py-6">
          <div class="flow-root">
            <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
          </div>
          <div class="flow-root">
            <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Create account</a>
          </div>
        </div>
      </div>
    </div>
  </div>