@extends('layout.aria')
@section('content')
    <section class="mt-5">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-2 justify-content-center mb-5">
                <form action="" class="d-flex" >
                    <input class="form-control" type="search" placeholder="" aria-label="Search">
                    <button class="btn btn-outline-success ml-5" type="submit">Search</button>
                </form>
            </div>
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
