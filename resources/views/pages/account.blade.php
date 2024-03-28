@extends('layouts.master')
@section('title','Account')
@section('content')

<div class="accounts-page">
<div class="container">
    <section class="u-box">
        <div class="user-info">
            <p class="user-name">
                {{ auth()->user()->name }}
            </p>
            <p class="user-email">
                {{ auth()->user()->email }}
            </p>
        </div>
        <div class="user-btn">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="btn btn-primary">Logout</button>
            </form>
        </div>
    </section>

    <p class="order-box orders-box-title">Orders</p>


    <div class="order-box table-responsive" style="max-height: 500px">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Items</th>
                    <th>Category</th>
                    <th>Total</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @if(auth()->user()->orders && auth()->user()->orders->count())
                @foreach (auth()->user()->orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->items->count() }}</td>
                    <td>{{ $order->categories }}</td>
                    <td>${{ $order->total }}</td>
                    <td>{{ \Carbon\Carbon::parse($order->created_at)->format('m/d/Y') }}</td>
                    <td>{{ $order->status }}</td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="6" style="text-align: center; font-weight: 600;">No Orders</td>
                </tr>
                @endif 
            </tbody>
        </table>
    </div>

</div>

@endsection