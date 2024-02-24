<div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
    <div id="mobile-menu-bg-overlay" class="fixed hidden inset-0 bg-black bg-opacity-25"></div>

    <div id="mobile-menu" class="fixed inset-0 z-40 flex hidden">
      <div class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
        <!-- Menu close -->
        <div class="flex px-4 pb-2 pt-5">
          <button id="mobile-menu-close" type="button" class="relative -m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
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
                  @foreach($navMainCategories as $mainCategory)
                    <div class="flex items-center justify-between category-menu-item-label--mobile">
                        <a href="{{ route('category.list', ['categoryPath' => $mainCategory->slug]) }}" class="-my-2 py-2 pl-4 text-gray-500 text-lg">
                            {{ $mainCategory->name }}
                        </a>
                        <button class="p-4" data-target="{{ $mainCategory->slug }}-category">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M12 3l10.001 9.496-10 9.501-.689-.726L20 12.996H2v-1h18l-8.688-8.271z"></path></svg>
                        </button>
                    </div>        
                  @endforeach
                </li>
              </ul>
        </div>

        <!-- Panels -->
        @foreach($navMainCategories as $mainCategory)
          <div class="mt-2">
              <!-- Category tab panel -->
              <div id="{{ $mainCategory->slug }}-category-panel" class="category-menu-item-submenu--mobile absolute hidden top-0 h-full w-full bg-white px-4 py-1" aria-labelledby="{{ $mainCategory->slug }}-category-panel-tab" role="tabpanel" tabindex="0" data-panel="{{ $mainCategory->slug }}-category">
                  <div class="grid grid-cols-[25%_50%_25%] border-b-[1px] border-gray-300 items-center mb-3">
                      <div>
                          <button id="{{ $mainCategory->slug }}-category-back-btn" type="button" class="p-4 pl-0" aria-role="button" aria-label="Back to menu">
                              <svg class="h-6 w-6 rotate-180" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M12 3l10.001 9.496-10 9.501-.689-.726L20 12.996H2v-1h18l-8.688-8.271z"></path></svg>
                          </button>
                      </div>
                      <div class="text-center">
                          <h3 class="text-xl font-medium">{{ $mainCategory->name }}</h3>
                      </div>
                  </div>
                  <!-- Sub categories -->
                  <p class="text-lg font-medium text-gray-900 flex justify-between items-center mt-6 mb-2">Categories</p>
                  @foreach($navMainSubCategories[$mainCategory->id] as $mainSubCategory)
                    <div class="sub-category">
                        <a href="{{ route('category.list', ['categoryPath' => $mainCategory->slug .'/'. $mainSubCategory->slug]) }}" id="men-category-heading-mobile" class="py-4 block text-lg text-gray-900 flex justify-between items-center">
                            <span>{{ $mainSubCategory->name }}</span>
                            <div>
                                <svg class="h-4 w-4" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M12 3l10.001 9.496-10 9.501-.689-.726L20 12.996H2v-1h18l-8.688-8.271z"></path></svg>
                            </div>
                        </a>
                    </div>
                  @endforeach
              </div>
          </div>
        @endforeach

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