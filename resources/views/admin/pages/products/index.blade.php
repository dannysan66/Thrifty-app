@extends('layouts.admin')
@section('title', 'Products')
@section('content')
<div class="container justify-content-center align-items-center min-vh-100">
    <h2 class="page-title" style="text-align: center;">Products</h2>
    <div class="text-end mb-3">
        <a href="{{ route('adminpanel.products.create') }}" class="btn btn-primary">+ &nbsp; Create Product</a>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h5>Products</h5>
                </div>
                <div class="table-responsive" style="max-height: 300px;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Colors</th>
                                <th>Image</th>
                                <th>Published</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->title }}</td>
                                <td>${{ $product->price }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>
                                    @foreach ($product->colors as $color)
                                    <span class="badge" style="background: {{ $color->code }}">{{ $color->name }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <img src="{{ asset('storage/'. $product->image) }}" alt="" style="height: 40px;">
                                </td>
                                <td>{{ \Carbon\Carbon::parse($product->created_at)->format('m/d/Y') }}</td>
                                <td>
                                    <div class="d-flex" style="gap: 5px;">
                                        <a href="{{ route('adminpanel.products.edit', $product->id) }}" class="btn btn-secondary">Edit</a>
                                    <form action="{{ route('adminpanel.products.destroy', $product->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style="margin: 0; ">Delete</button>
                                    </form>
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