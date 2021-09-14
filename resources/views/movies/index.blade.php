@extends('layout.aria')
@section('content')
    <section class="mt-3">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-2 justify-content-center">
                <form action="{{route('app.movies.index')}}" method="GET" class="d-flex" >
                    <input class="form-control mx-2" type="text" value="{{request('query')}}" name="query" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark " type="submit">Search</button>
                </form>
            </div>
            <form action="{{route('app.movies.increase')}}" class="d-flex justify-content-end mb-2">
                <button class="btn btn-outline-primary " type="submit" value="true" name="increase">price increase</button>
            </form>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($movies as $movie)
                    <div class="col mb-5">
                        @include('movies.include.item', ['movie' => $movie])
                    </div>
                @endforeach
                {{ $movies->links() }}
            </div>
        </div>
    </section>
@endsection
