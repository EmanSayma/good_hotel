@extends('layouts.master')

@section('content')
@include('layouts.header')

<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark"
 style="text-align:center; background-image: url('{{ asset('images/Background.png')}}');"
  >
    <div class="col-md-6 px-0">
        <h1 class="welcome">Welcome!</h1>
        <p class="lead my-3">Hope you have a good day. Here are some deals to improve your stay at the Good Hotel. </p>
        <p class="lead mb-0 some-discount"><a href="#" class="text-white font-weight-bold">Get some discounts!</a></p>
    </div>
</div>

@include('pages.tabs')

@endsection    

     