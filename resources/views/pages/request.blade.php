@extends('layouts.master')

@section('content')
    <h1 class="request-deal-title">Request deal</h1>
    <p class="request-deal-desc">In order to complete your request we need some additional details.</p>
    <h6>Selected deal</h6>
    <!-- <div class="deal-card mb-5">
        <img class="deal-card-img" src={{ asset('images/room.png') }}>
        <h6 class="deal-card-title">Waterview Room</h6>
        <p class="deal-card-description">A standard room but with waterfront view</p>
    </div> -->
    <form method="post" action="/request" class="mt-5">
        @csrf
        <input type="hidden" class="form-control" id="deal_id" name="deal_id" value={{ $dealId }}>

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

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-light">Cancel</button>
        </div>
    </form>
@endsection    

     