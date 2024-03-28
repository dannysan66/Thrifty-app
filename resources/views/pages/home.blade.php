@extends('layouts.master')
@section('name', 'Home Page')
@section('content')
<main class="homepage">


    @include('pages.components.home.header')
   
    <section class="product-section">
        <div class="container">
            <h2 class="section-title">Featured Products</h2>
            <div class="product-row">

                @foreach ($products as $product)
                    <x-product-box :product="$product" />
                @endforeach

            </div>
        </div>
    </section>

</main>
@endsection
