@extends('layouts.master')
@section('title','Wishlist')
@section('content')
<header class="page-header">
    <h2>Wishlist</h2>
</header>

<section class="product-section">
<div class="container" style="margin-top: 70px;">
    <div class="product-row">
        @foreach ($products as $product)
            <x-product-box :product="$product" />
        @endforeach
    </div>
</div>
</section>
@endsection