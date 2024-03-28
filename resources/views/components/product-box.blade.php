<section class="product-box">
    <div class="image">
        <img src="{{ asset('storage/'.$product->image) }}" alt="Product-img">
        <form action="{{ route('addToWishlist', $product->id) }}" method="post">
            @csrf
            <button class="add-to-wishlist btn btn-secondary" type="submit">Add To Wishlist</button>
        </form>
    </div>
    <a href="{{ route('product', $product->id) }}">
    <div class="product-title">{{ $product->title }}</div>
    <div class="color-palettes">

        @foreach ($product->colors as $color)
        <div class="color-palette" style="background:{{ $color->code }};"></div>
        @endforeach
    </div>
    <div class="product-category">Size: {{ $product->category->name }}</div>
    <div class="product-price">${{ $product->price /100 }}</div>
    <div class="product-catch">FREE!</div>
</a>
</section>