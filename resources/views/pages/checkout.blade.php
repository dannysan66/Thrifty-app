@extends('layouts.master')
@section('title','Checkout')
@section('content')

<header class="page-header">
    <h2>Checkout</h2>
    <h3 class="cart-amount">${{ App\Models\Cart::totalAmount() }}</h3>
</header>


<section class="cheeckout-page" style="margin-top: 35px; margin-bottom: 35px;">

    <div class="container d-flex justify-content-center align-items-center min-vh-100" style="max-width: 50%">

        <div class="row border rounded-3 p-3 bg-white box-area">

            <div class="row align-items-center">
                <div class="header-text mb-4">
                    <h2 class="text-center">Checkout</h2>
        
            <form action="{{ route('payment') }}" id="payment-form" method="post">
                @csrf

                    <label for="name" class="control-label">Full Name</label>
                    <input type="text" id="name" name="name"
                        class="form-group form-control @error('name') is-invalid border-danger @enderror"
                        style="max-width: 100%;" placeholder="John Doe" value="{{ old('name') ? old('name') : auth()->user()->name }}" required>
                    @error('name')
                        <div id="name" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="email" class="control-label">Email</label>
                    <input type="email" id="email" name="email"
                        class="form-group form-control @error('email') is-invalid border-danger @enderror"
                        style="max-width: 100%;" placeholder="John@gmail.com" value="{{ old('email') ? old('email') : auth()->user()->email }}" required>
                    @error('email')
                        <div id="email" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="phone" class="control-label">Phone</label>
                    <input type="number" id="phone" name="phone"
                        class="form-group form-control @error('phone') is-invalid border-danger @enderror"
                        style="max-width: 100%;" placeholder="(000)000-0000" value="{{ old('phone') ? old('phone') : auth()->user()->phone }}" required>
                    @error('phone')
                        <div id="phone" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="student_id" class="control-label">Student ID #</label>
                    <input type="number" id="student_id" name="student_id"
                        class="form-group form-control @error('student_id') is-invalid border-danger @enderror"
                        style="max-width: 100%;" placeholder="000000" value="{{ old('student_id') ? old('student_id') : auth()->user()->student_id }}" required>
                    @error('student_id')
                        <div id="student_id" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <button class="btn btn-primary btn-block" style="margin-top: 20px;">Reserve</button>
            </form>
        </div>
        </div>
    </div>
    </div>
</main>

@endsection