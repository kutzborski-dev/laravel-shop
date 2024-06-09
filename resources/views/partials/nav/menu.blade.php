<div class="hidden lg:ml-8 lg:block lg:self-stretch z-10">
  <div class="flex h-full space-x-8">
    @foreach($navMainCategories as $mainCategory)
      <!-- Menu link for main categories -->
      <div class="flex category-menu-item">
        <div class="relative flex category-menu-item-label">
          <a href="{{ route('category.list', ['categoryPath' => $mainCategory->slug]) }}" class="border-transparent text-gray-600 font-medium hover:text-gray-500/90 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out" aria-expanded="false" data-target="{{ $mainCategory->slug }}-category">{{ $mainCategory->name }}</a>
        </div>
        <div data-menu="{{ $mainCategory->slug }}-category" class="category-menu-item-submenu hidden absolute inset-x-0 top-full text-sm text-gray-500 border-t border-gray-200">
          <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
          <!-- <div class="absolute inset-0 top-1/2 bg-white/80 shadow" aria-hidden="true"></div> -->

          <div class="relative bg-white/85 backdrop-blur-xl">
            <div class="mx-auto max-w-7xl px-8">
              <div class="pb-9 pt-7">
                <div class="row-start-1 grid grid-cols-5 gap-x-8 gap-y-10 text-sm">
                  <!-- Column for each sub category -->
                  @foreach($navMainSubCategories[$mainCategory->id] as $mainSubCategory)
                    <div>
                      <a href="{{ route('category.list', ['categoryPath' => $mainCategory->slug .'/'. $mainSubCategory->slug]) }}" id="sub-category-heading" class="font-medium text-gray-900 text-base hover:text-gray-600">{{ $mainSubCategory->name }}</a>
                      <ul role="list" aria-labelledby="sub-category-heading" class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                        @foreach($navSubCategories[$mainSubCategory->id] as $subCategory)
                          <li class="flex">
                            <a href="{{ route('category.list', ['categoryPath' => $mainCategory->slug .'/'. $mainSubCategory->slug .'/'. $subCategory->slug]) }}" class="hover:text-gray-500/90">{{ $subCategory->name }}</a>
                          </li>
                        @endforeach
                      </ul>
                    </div>
                  @endforeach
                </div>
              </div>

              <div class="bg-gray-100/40 hover:bg-gray-100/80">
                <a class="block px-4 py-2.5 text-base text-center" href="{{ route('category.list', ['categoryPath' => $mainCategory->slug]) }}">Browse all {{ $mainCategory->name }}'s</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>