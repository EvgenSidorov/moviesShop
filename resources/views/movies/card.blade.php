@extends('layout.aria')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
{{--                @foreach($movies as $movie)--}}

                    <div class="col" style="width: 40%">
                        @include('movies.include.itemView', ['movie' => $movie])
                    </div>
{{--                @endforeach--}}
{{--                {{ $movies->links() }}--}}
            </div>
        </div>
    </section>
@endsection
