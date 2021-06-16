@extends('layouts.master')

@section('content')
@include('layouts.header')
<div class="rectangle">
<p class="thank-you">Thank you!</p>
    <p class="thank-you-message">We will get back to your request as soon as possible via e-mail</p>
    <button class="btn btn-go-back"><a href="/">Back to all the deals</a></button>
</div>
@endsection    