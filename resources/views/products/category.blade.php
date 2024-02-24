@extends("layouts.show")

@section("content")
    <div class="py-14 container max-w-7xl px-4 mx-auto">
        @if(count($subCategories))
            <h3 class="text-xl font-medium mb-4 border-b border-gray-200 pb-2">Browse other categories:</h3>
            <div id="subcategories" class="grid grid-cols-5 gap-3 mb-20">
                @foreach($subCategories as $subCategory)
                    <a href="{{ route('category.list', ['categoryPath' => $categoryPath .'/'. $subCategory->slug]) }}" class="bg-gray-200 p-5 text-center">
                        <h4 class="text-lg">{{ $subCategory->name }}</h4>
                    </a>
                @endforeach
            </div>
        @endif

        @if(count($products))
            <h1 class="text-2xl font-medium">Category: {{ $category->name }}</h1>
            @include('products.partials.product-list')
        @endif
    </div>
@endsection