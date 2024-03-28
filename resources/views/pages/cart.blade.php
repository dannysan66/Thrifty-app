@extends('layouts.master')
@section('title','Cart')
@section('content')

<header class="page-header">
    <h2>Cart</h2>
    <h3 class="cart-amount">${{ App\Models\Cart::totalAmount() }}</h3>
</header>

@if (session()->has('success'))
    <section class="pop-up">
        <div class="pop-up-box bg-dark">
            <div class="pop-up-title text-white">
                {{ session()->get('success') }}
            </div>
            <div class="pop-up-action">
                <a href="{{ route('cart') }}" class="btn btn-secondary" style="margin-top: 10px; margin-right: 5px;">Continue Shopping</a>
                <a href="{{ route('cart') }}" class="btn btn-primary" style="margin-top: 10px;">Go To Checkout</a>
            </div>
        </div>
    </section>
@endif

<main class="cart-page">
    <div class="container">
        <div class="cart-table overflow-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Size</th>
                        <th>Color</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if(session()->has('cart') && count(session()->get('cart')) > 0)
                    @foreach (session()->get('cart') as $key => $item)
                    <tr>
                            <td>
                                <a href="{{ route('product', $item['product']['id']) }}" class="cart-item-title">
                                    <img src="{{ asset('storage/'. $item['product']['image']) }}" alt="Product-Image">
                                    <p>{{ $item['product']['title'] }}</p>
                                </a>
                            </td>
                            <td>{{ $item['product']['category']['name'] }}</td>
                            <td>{{ $item['color']['name'] }}</td>
                            <td>${{ $item['product']['price'] /100 }}</td>
                            <td>{{ $item['quantity'] }}</td>
                            <td>${{ App\Models\Cart::unitPrice($item) }}</td>
                            <td>
                                <form action="{{ route('removeFromCart', $key) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">X</button>
                                </form>
                            </td>

                    </tr>
                    @endforeach
                    <tr class="cart-total">
                        <td colspan="5" style="text-align: right">Total:</td>
                        <td>${{ App\Models\Cart::totalAmount() }}</td>
                    </tr>
                    @else
                    <tr>
                        <td colspan="6" class="empty-cart" style="text-align: center">Your Cart Is Empty</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
        @if(session()->has('cart') && count(session()->get('cart')) > 0)
        <div class="cart-actions">
            <a href="{{ route('checkout') }}" class="btn btn-primary">Go To Checkout</a>
        </div>
        @endif
    </div>
</main>

@endsection