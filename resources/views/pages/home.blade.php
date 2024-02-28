@extends('layouts.master')
@section('name', 'Home Page')
@section('content')
<main class="homepage">


@include('pages.components.home.header')

<form action="{{route('logout')}}" method="post">
    @csrf
    <button class="btn btn-primary">Logout</button>
</form>

</main>
@endsection