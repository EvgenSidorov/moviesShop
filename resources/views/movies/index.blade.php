@extends('layout.aria')
@section('content')
    <section class="mt-3">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-2 justify-content-center">
                <form action="{{route('app.movies.index', request()->toArray())}}" name="queryForm" method="GET"
                      class="d-flex">
                    <input class="form-control mx-2" type="text" value="{{request('query')}}" name="query"
                           placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark " type="submit">Search</button>
                </form>
            </div>

            <div class="row m-5">
                <div class="col-md-3"></div>
                <div class="col-md-7"><h1>{{ $title }}</h1></div>
                <div class="col-md-2">
                    <form action="{{route('app.movies.index', request()->toArray())}}" method="GET">
                        @if(request()->has('query'))
                            <input type="hidden" name="query" value="{{request('query')}}"/>
                        @endif
                        <label><b>Sorting:</b></label>
                        <select name="sort" class="form-control sortForm">
                            @foreach($sortItems as $key => $sortItem)
                                <option value="{{$key}}_asc">{{$sortItem}}: ASC</option>
                                <option value="{{$key}}_desc">{{$sortItem}}: DESC</option>
                            @endforeach
                        </select>
                        {{--                            <a href="{{route('app.movies.index', request()->merge(['sort' => 'price_asc'])->toArray())}}">PRICE: ASC</a>--}}

                        {{--                    @foreach($sortItems as $key => $sortItem)--}}
                        {{--                        <a href="{{route('app.movies.index', request()->merge(['sort' => $key.'_asc'])->toArray())}}">{{$sortItem}}: ASC</a>--}}
                        {{--                        <a href="{{route('app.movies.index', request()->merge(['sort' => $key.'_desc'])->toArray())}}">{{$sortItem}}: DESC</a>--}}
                        {{--                    @endforeach--}}

                    </form>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center mt-2">
                    <div class="col col-lg-3">

                        <div class="">
                            <form action="{{route('app.movies.index', request()->toArray())}}" name="filterPrice" class="filterForm" method="GET">
                            <p>
                                <label for="amount">Price range:</label>
                                <div class="d-flex">$
                                    <input type="text" id="amount" readonly name="price_from" value="0"
                                           style="border: 0; color:#f6931f; font-weight:bold;">
                                    <input type="text"  name="price_to" value="100"
                                           style="border: 0; color:#f6931f; font-weight:bold;">$
                                </div>


                            </p>
                            <div id="slider-range" class="mb-4"></div>
                                <button class="btn btn-primary">Filter</button>
                            </form>
                        </div>
                    </div>
                    <div class="col col-lg-9 d-flex">
                        <div class="row">
                            @foreach($movies as $movie)
                                <div class="col col-sm-3 mb-5">
                                    @include('movies.include.item', ['movie' => $movie])
                                </div>
                            @endforeach
                            {{ $movies->links() }}
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
