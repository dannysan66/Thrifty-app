@extends('layouts.master')
@section('title','Success')
@section('content')

<header class="page-header">
    <h2>Order Successfully Placed</h2>
</header>

<section class="success-page">
    <div class="container">
        <h2>Your Order Has Successfully Been Placed</h2>
        <h3>Your order ID is: {{ $order->id }}</h3>
    </div>
</section>

@endsection