@extends('layouts.master')

@section('content')
<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        
        <div class="col-4 text-center">
        <img class="header-logo" src={{ asset('images/Logo.png')}} width="104px" height="75px" alt="GOOD HOTEl">
        </div>
        
    </div>
</header>

<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark"
 style="text-align:center; background-image: url('{{ asset('images/Background.png')}}');"
  >
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">Welcome!</h1>
        <p class="lead my-3">Hope you have a good day.
Here are some deals to improve your
stay at the Good Hotel. </p>
        <p class="lead mb-0 some-discount"><a href="#" class="text-white font-weight-bold">Get some discounts!</a></p>
    </div>
</div>

<div class="deals">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Featured</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Deals</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Upgrades</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          @include('pages.deal_list')

        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
    </div>
</div>



@endsection    

     