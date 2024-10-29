@extends('layouts.admin')
@section('title', 'Order #'.$order->id)
@section('content')

<div class="page-title" style="text-align: center;">
    Order # {{ $order->id }}
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Order Details</h5>
                </div>
                <div class="card-body table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Order Id</td>
                                <td>{{ $order->id }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    <form action="{{ route('adminpanel.orders.status.update', $order->id) }}" method="post" style="display: flex; gap: 15px; max-width: 100%;">
                                        @csrf
                                        <select name="status" id="" class="form-control" style="max-height: 45px">
                                            @foreach ($states as $status)
                                                <option value="{{ $status }}" @if($order->status == $status) selected @endif>{{ $status }}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="btn btn-success">Update</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Total Amount</td>
                                <td>${{ $order->total }}</td>
                            </tr>
                            <tr>
                                <td>User</td>
                                <td>{{ $order->user->name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $order->email }}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{{ $order->phone }}</td>
                            </tr>
                            <tr>
                                <td>Student ID</td>
                                <td>{{ $order->student_id }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection