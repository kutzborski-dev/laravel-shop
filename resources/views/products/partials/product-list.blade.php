<div class="product-list grid grid-cols-5 gap-x-8 flex-wrap justify-center">
    @foreach($products as $product)
        <x-productcard id="{{ $product->id }}" name="{{ $product->name }}" price="{{ $product->price }}" slug="{{ $product->slug }}" />
    @endforeach
</div>