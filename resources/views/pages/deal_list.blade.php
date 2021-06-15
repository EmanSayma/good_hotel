<h2 class="recommended">Recommended for you </h2>

<h6 class="recommended-desc">Handpicked experiences and deals</h6> 

<div class="row mb-2">
    @foreach($deals as $deal)
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
            <img src={{ asset('images/room.png') }} />
                <h3 class="mb-0">
                <a class="text-dark" href="#">{{ $deal->name }}</a>
                </h3>
                <div class="mb-1 text-muted">{{ $deal->meta_description}}</div>
                <p class="card-text mb-auto">{{ $deal->currency}} {{ $deal->total_amount }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>