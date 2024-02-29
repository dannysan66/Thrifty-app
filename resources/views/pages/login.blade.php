@extends('layouts.master')
@section('title','Login')
@section('content')
<section class="login-page">

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <div class="row border rounded-5 p-3 bg-white box-area">

            <!-- Left Box -->
            <div class="col-md-6 rounded-5 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: #5111a3 ;">
                <div class="featured-image mb-3">
                    <img src="{{ url('/img/clipart.PNG') }}" alt="Join-Us" class="img-fluid" style="width: 550px;">
                </div>
                <p class="text-white fs-2 catch-one" style="font-family: 'Satisfy', cursive; font-weight: 550;">Login To
                    Start Shopping!</p>
                <small class="text-white text-wrap text-center catch-two"
                    style="width: 17rem; font-family: 'Poppins', sans-serif;">We have a wide selection of
                    clothing.</small>
            </div>


            <!-- Right box -->
            <div class="col-md-6 right-box">

                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2 class="text-center">Login</h2>
                        <form action="{{ route('login') }}" method="post">
                            @csrf

                            <label for="email" class="control-label">Email</label>
                            <input type="email" id='email' name="email"
                                class="form-group form-control @error('email') is-invalid border-danger @enderror"
                                placeholder="john@gmail.com">
                            @error('email')
                                <div id="name" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="password" class="control-label">Password</label>
                            <input type="password" id="password" name="password"
                                class="form-group form-control @error('password') is-invalid border-danger @enderror"
                                placeholder="********">
                            @error('password')
                                <div id="name" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="input-group mb-5 d-flex justify-content-between">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="formCheck">
                                    <label for="formCheck" class="form-check-label text-secondary"><small>Remember
                                            Me</small></label>
                                </div>
                                <div class="forgot">
                                    <small><a href="#">Forgot Password?</a></small>
                                </div>
                            </div>

                            <div class="input-group mb-2">

                                <button type="submit" class="btn btn-primary btn-block">Login</button>

                            </div>

                            <div class="row">
                                <small>Don't have an account? <a href="/register">Sign Up</a></small>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
@endsection
