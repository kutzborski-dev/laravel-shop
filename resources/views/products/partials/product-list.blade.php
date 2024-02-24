<div id="product-list" class="mb-5 grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-x-8">
    @foreach($products as $product)
        <x-productcard id="{{ $product->id }}" name="{{ $product->name }}" price="{{ $product->price }}" slug="{{ $product->slug }}" />
    @endforeach
</div>

{{ $products->links('vendor.pagination.tailwind', ['paginator' => $products]) }}