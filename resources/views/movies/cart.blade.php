@extends('layout.aria')
@section('content')
    <section class="py-5">
        <div class="container" style="">
            <div>
                <h1>Cart</h1>
            </div>
            @each('movies.include.itemInCart', $movies, 'movie')
            <div class="row">
                <div class="col mt-5 d-flex justify-content-around">
                    <a href="{{ route('app.movies.index') }}" class="btn btn-outline-dark mx-2"><-Back</a>
                    <a href="{{ route('app.order') }}" class="btn btn-outline-dark">Order-></a>
                </div>
                <div class="col mt-5 d-flex justify-content-center">
                    <a href="{{ route('app.basket.removeAll') }}" class="btn btn-danger">DELETE ALL</a>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
