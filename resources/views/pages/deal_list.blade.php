<h2 class="recommended">Recommended for you </h2>

<h6 class="recommended-desc">Handpicked experiences and deals</h6> 


<div class="album py-5 bg-light">
    <div class="container">

      <div class="row p-5">
      @foreach($deals as $deal)

        <div class="col-md-3">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src={{ asset($deal->image) }}>
            <div class="card-body">
              <h4><a href="request/{{$deal->id}}"> {{ $deal->name }}</a></h2>
              <p class="card-text">{{ $deal->meta_description}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">{{ $deal->currency}} {{ $deal->total_amount }}</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
</div>
