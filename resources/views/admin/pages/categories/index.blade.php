@extends('layouts.admin')
@section('title', 'Category')
@section('content')
<div class="container">
    <h2 class="page-title" style="text-align: center;">Categories</h2>
    <div class="row mb-5">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h5>Create Category</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('adminpanel.category.store') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group text-end">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h5>Categories</h5>
                </div>
                <div class="table-responsive" style="max-height: 300px;">
                    <table for="" class="table table-stripped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Total Products</th>
                                <th>Published</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>-</td>
                                <td>{{ \Carbon\Carbon::parse($category->created_at)->format('m/d/Y') }}</td>
                                <td>
                                    <form action="{{ route('adminpanel.category.destroy', $category->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style="margin: 0; ">Delete</button>
                                    </form>
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