@extends('layouts.master')

@section('content')
    <h1 class="request-deal-title">Request deal</h1>
    <p class="request-deal-desc">In order to complete your request we need some additional details.</p>
    
    @include('layouts.errors')

    <h6 class="mb-2">Selected deal</h6>

    <div class="card">
        <div class="card-horizontal">
            <div class="img-square-wrapper deal-card-img">
                <img src={{ asset($deal->image) }}>
            </div>
            <div class="card-body">
                <h4 class="card-title">{{ $deal->name }}</h4>
                <p class="card-text">{{ $deal->meta_description }}</p>
            </div>
        </div>

    </div>

    <form method="post" action="/request" class="mt-5">
        @csrf
        <input type="hidden" class="form-control" id="deal_id" name="deal_id" value={{ $deal->id }}>

        <div class="form-group">
            <label for="from">From</label>
            <input type="date" class="form-control" id="start_date" name="start_date" placeholder="">
            <input type="time" class="form-control" id="start_time" id="start_time" placeholder="">

        </div>
        <div class="form-group">
            <label for="to">To</label>
            <input type="date" class="form-control" id="end_date" name="end_date" placeholder="">
            <input type="time" class="form-control" id="end_time" id="end_time" placeholder="">
        </div>

        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" class="form-control" id="amount" name="amount" placeholder="">
        </div>

        <div class="form-group">
            <label for="room_number">Room Number</label>
            <input type="text" class="form-control" id="room_number" name="room_number" placeholder="">
        </div>
        <hr/>

        <div class="form-group">
                <button type="button" class="btn btn-light"><a href="/">Cancel</a></button>
                <button type="submit" class="btn btn-primary btn-continue">Continue</button>
        </div>

    </form>
@endsection    

     