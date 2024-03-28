@extends('layouts.admin')
@section('title', 'Orders')
@section('content')
<div class="container justify-content-center align-items-center min-vh-100">
    <h2 class="page-title" style="text-align: center;">Orders</h2>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h5>Orders</h5>
                </div>
                <div class="table-responsive" style="max-height: 400px;">
                    <table for="" class="table">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>By</th>
                                <th>Items</th>
                                <th>Total</th>
                                {{-- <th>Category</th> --}}
                                <th>Date</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->user->name }}</td>
                                <td>{{ $order->items->count() }}</td>
                                <td>${{ $order->total }}</td>
                                {{-- <td>{{ $order->item->product->category->name }}</td> --}}
                                <td>{{ \Carbon\Carbon::parse($order->created_at)->format('m/d/Y') }}</td>
                                <td>
                                    <span class="badge bg-@if($order->status == 'pending')warning @elseif($order->status == 'processing')info
                                        @elseif($order->status == 'processing')info
                                        @elseif($order->status == 'delivered')success
                                        @elseif($order->status == 'cancelled')danger @endif">
                                        {{ $order->status }}
                                    </span>
                                
                                </td>
                                <td>
                                    <div class="d-flex" style="gap: 5px;">
                                        <a href="{{ route('adminpanel.orders.view', $order->id) }}" class="btn btn-secondary">View</a>
                                    
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection