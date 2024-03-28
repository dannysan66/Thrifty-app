@extends('layouts.master')
@section('title','Wishlist')
@section('content')
<header class="page-header">
    <h2>Wishlist</h2>
</header>

<div class="product-row">

    @foreach ($products as $product)
        <x-product-box :product="$product" />
    @endforeach

</div>

@endsection