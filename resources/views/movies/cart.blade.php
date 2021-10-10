@extends('layout.aria')
@section('content')
    <section class="py-5">
        <div class="container" style="">
            <div>
                <h1>Cart</h1>
            </div>
            @each('movies.include.itemInCart', $movies, 'movie')
            <div class="row">
            <div class="col-8">
                <div class="d-flex m-5">
                    <a href="{{ route('app.movies.index') }}" class="btn btn-outline-dark mx-2"><-Back</a>
                    <a href="{{ route('app.movies.index') }}" class="btn btn-outline-dark">Buy-></a>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
