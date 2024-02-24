@extends("layouts.show")

@section("content")
    <div class="container max-w-7xl mx-auto px-4 py-14">
        <div class="category-container mb-12">
            <div class="category-header flex justify-between items-end border-b border-gray-250 py-2">
                <div class="category-name">
                    <h4 class="font-medium text-xl text-gray-700">Main category 1</h4>
                </div>

                <div>
                    <a href="#" class="text-gray-700 hover:text-gray-500 flex items-center gap-2"><span>Browse all</span><svg class="h-3 w-3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M12 3l10.001 9.496-10 9.501-.689-.726L20 12.996H2v-1h18l-8.688-8.271z"></path></svg></a>
                </div>
            </div>

            <div class="category-products">
                @include('products.partials.product-list')
            </div>
        </div>
    </div>
@endsection