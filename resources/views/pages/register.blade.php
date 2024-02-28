@extends('layouts.master')
@section('title','Register')
@section('content')
<section class="login-page">

<div class="container d-flex justify-content-center align-items-center min-vh-100">

<div class="row border rounded-5 p-3 bg-white box-area">

<!-- Left Box -->
<div class="col-md-6 rounded-5 d-flex justify-content-center align-items-center flex-column left-box" style="background: #5111a3 ;">
<div class="featured-image mb-3">
        <img src="{{url('/img/register-img.png')}}" alt="Join Us-" class="img-fluid" style="width: 250px;">
    </div>
    <p class="text-white fs-2" style="font-family: 'Satisfy', cursive; font-weight: 550;">Register With Us To Start Shopping!</p>
    <small class="text-white text-wrap text-center" style="width: 17rem; font-family: 'Poppins', sans-serif;">We have a wide selection of clothing.</small>
</div>


<!-- Right box -->
<div class="col-md-6 right-box">

<div class="row align-items-center">
    <div class="header-text mb-4">
        <h2 class="text-center">Register</h2>
     <form action="{{route('register')}}" method="post">
        <!-- <div class="input-group col-xs-4 ">
        <label for="name" class="control-label">Name</label>
            <input type="text" id="name" name="name" class="form-control form-control-lg bg-light fs-6" placeholder="John Doe">
        </div> -->

        
        <label for="name" class="control-label">Name</label>
        <input type="text" id="name" name="name" class="form-group form-control" style="max-width: 100%;" placeholder="John Doe">
    
        <label for="name" class="control-label">Email</label>
        <input type="email" id='email' name="email" class="form-group form-control" placeholder="john@gmail.com">
    
  
        <label for="name" class="control-label">Password</label>
        <input type="password" id="password" name="password"  class="form-group form-control" placeholder="********">
   

  
        <label for="name" class="control-label">Password Confirmation</label>
        <input type="password" id="password" name="password_confirmation"  class="form-group form-control" placeholder="********">
   

  
    <button type="submit" class="btn btn-primary btn-block">Register</button>
    
    </form>
    </div>
</div>

</div>
    
</div>

</div>
</section>




    <!-- <div class="login-form-box">
        <div class="login-title">Register</div>
        <div class="login-form">
            <form action="{{route('register')}}" method="post">
            @csrf
                <div class="field">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="John Doe">
                </div>

                <div class="field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="john@gmail.com">
                </div>

                <div class="field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="**********">
                </div>

                <div class="field">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password" name="password_confirmation" placeholder="**********">
                </div>

                <div class="field">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>

            </form>
        </div>
    </div> -->

@endsection