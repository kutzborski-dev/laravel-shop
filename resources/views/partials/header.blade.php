<div class="bg-white mb-16">
    <!-- Mobile menu -->
    @include('partials.nav.mobile-menu')

  <header id="page-header" class="fixed top-0 left-0 w-full z-10 bg-white border-b border-gray-200">
    <div id="search-bar" class="border border-gray-200 absolute left-[50%] -ml-[25%] top-full mt-0 max-w-7xl w-full bg-white flex items-center shadow-sm hidden">
      <div class="mx-4">
        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>
      </div>
      <div class="w-full">
        <form action="{{ route('search') }}#product-list" method="GET">
          <input class="py-3 pr-3 w-full" type="text" name="q" placeholder="Search products" autocomplete="off" />
        </form>
      </div>
    </div>
    <nav aria-label="Top" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div>
        <div class="flex h-16 items-center">
          <!-- Mobile menu toggle -->
          <button id="mobile-menu-trigger" type="button" class="relative rounded-md bg-white p-2 text-gray-400 lg:hidden">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>

          <!-- Logo/title -->
          <div class="ml-4 flex lg:ml-0">
            <a href="{{ route('home') }}">
              <span class="sr-only">Shop name</span>
              <h2 class="text-2xl">Shop</h2>
            </a>
          </div>

          <!-- Flyout menus (Desktop) -->
          @include('partials.nav.menu')

          <!-- Icon links/buttons -->
          <div class="ml-auto flex items-center">
            <!-- Search -->
            <div class="flex lg:ml-6 lg:mr-1 mr-2">
              <a id="search-bar-toggle" href="#" class="p-2 text-gray-400 hover:text-gray-500">
                <span class="sr-only">Search</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
              </a>
            </div>

            <!-- Profile -->
            <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                <a href="#" class="p-2">
                    <svg class="h-6 w-6 fill-gray-400 hover:fill-gray-500" aria-hidden="true" stroke-width="1.5" fill="none" viewBox="0 0 24 24"><path d="M19.346 18.24c-1.243-.425-1.477-.511-2.047-.76-2.453-1.067-3.445-2.375-2.77-4.08.142-.36.277-.648.611-1.307l.012-.024c.279-.55.386-.772.512-1.062a5.26 5.26 0 0 0 .17-.448c.191-.575.273-1.047.381-2.173l.005-.053.005-.052c.368-3.824-.147-5.244-2.249-5.973A5.822 5.822 0 0 0 12 2.001h-.014c-.271-.004-.544.01-.814.044-.4.05-.788.138-1.149.263-2.101.73-2.616 2.15-2.247 5.974l.004.041.004.043c.108 1.137.19 1.613.382 2.193.05.153.107.302.17.448.126.29.234.512.512 1.061l.012.025c.334.658.47.947.612 1.307.674 1.705-.318 3.013-2.771 4.08-.57.249-.805.336-2.046.76-1.889.648-2.83 1.506-3.117 2.816l-.001.012c.132.037.303.076.508.118a32.46 32.46 0 0 0 2.452.369c2.318.274 5.014.445 7.505.445 2.491 0 5.186-.17 7.503-.445.99-.117 1.846-.247 2.45-.37.205-.04.375-.08.507-.116-.304-1.338-1.244-2.187-3.116-2.83zM14.304 1.364c2.647.917 3.323 2.783 2.917 7.013l-.005.052-.005.053c-.115 1.194-.208 1.731-.427 2.391-.06.182-.128.36-.203.532-.135.312-.25.55-.537 1.117l-.012.023c-.321.634-.445.898-.574 1.222-.423 1.072.217 1.916 2.24 2.796.54.235.753.314 1.972.73 2.192.753 3.399 1.855 3.785 3.65l.045.42c0 .64-1.016.846-3.878 1.185a67.263 67.263 0 0 1-7.62.452 67.32 67.32 0 0 1-7.622-.452C1.516 22.209.5 22.004.503 21.306l.05-.413c.38-1.746 1.587-2.848 3.778-3.6 1.217-.416 1.432-.495 1.971-.73 2.023-.88 2.663-1.724 2.24-2.796-.128-.324-.253-.59-.574-1.222l-.012-.025a18.808 18.808 0 0 1-.537-1.115 6.292 6.292 0 0 1-.203-.532c-.22-.666-.313-1.207-.428-2.412l-.004-.043-.004-.041c-.408-4.227.27-6.096 2.915-7.013a6.589 6.589 0 0 1 1.354-.312c.313-.038.63-.056.944-.051.8-.01 1.595.113 2.311.363z"></path></svg>
                </a>
            </div>

            <!-- Cart -->
            <div class="flow-root lg:ml-3">
              <a href="#" class="group -m-2 flex items-center p-2">
                <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
                <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-500/90">0</span>
                <span class="sr-only">items in cart, view bag</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
</div>