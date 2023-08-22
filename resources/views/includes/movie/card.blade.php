<div class="row row-cols-4 g-3">
    @forelse ($movies as $movie)
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_title }}</h6>
                    <p class="card-text">{{ $movie->nationality }}</p>
                    <div class="card-link">Vote: <strong>{{ $movie->vote }}</strong></div>
                    <div class="card-link m-0">{{ $movie->date }}</div>
                </div>
            </div>
        </div>
    @empty
        <h1>NOn ci sono film</h1>
    @endforelse
</div>
