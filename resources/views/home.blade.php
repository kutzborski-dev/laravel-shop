@extends("layouts.app")

@section("content")
    <!-- Offer alert -->
    <div id="alert-additional-content-1" class="mx-auto max-w-6xl p-4 mb-12 rounded-lg bg-gray-100" role="alert">
        <div class="flex items-center justify-center text-center">
            <h3 class="text-3xl font-bold">Members get 20% off Subcategory1 and Subcategory2</h3>
        </div>
        
        <div class="mt-2 mb-8 text-sm text-center">
            Apply reward in checkout. Valid for new and existing members for limited time only. Not a member yet? Join now, it's free.
        </div>

            <div class="flex justify-center lg:gap-3 md:gap-4 mb-2 flex-wrap gap-6">
                @foreach($navMainCategories as $mainCategory)
                    <a href="{{ route('category.list', ['categoryPath' => $mainCategory->slug]) }}" class="border border-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium rounded-lg text-lg px-3 py-1.5 text-center dark:hover:bg-blue-600 dark:border-blue-600 dark:text-blue-400 dark:hover:text-white dark:focus:ring-blue-800" data-dismiss-target="#alert-additional-content-1" aria-label="Close">
                        {{ $mainCategory->name }}
                    </a>
                @endforeach
            </div>
    </div>

    @include('products.partials.product-list')
@endsection