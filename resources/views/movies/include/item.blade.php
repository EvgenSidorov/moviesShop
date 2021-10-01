<div class="card h-100">
{{--    @dd($movie)--}}
    <!-- Product image-->
    <img class="card-img-top" src="https://vseoshokolade.ru/wp-content/uploads/2020/10/2245941.jpg" alt="{{$movie->title}}"/>
    <!-- Product details-->
    <div class="card-body p-4">
        <div class="text-center">
            <!-- Product name-->
            <h5 class="fw-bolder">{{$movie->title}}</h5>
            <!-- Product price-->
            <p style="color:#f6931f; font-weight:bold;">{{number_format($movie->price, 2)}}$</p>
            <p >Raiting: {{$movie->rating}}</p>
{{--            {{number_format($movie->price, 2)}}$--}}
        </div>
    </div>
    <!-- Product actions-->
    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        <div class="text-center">
            <a class="btn btn-outline-dark mt-auto"
               href="{{ route('app.movies.view', ['movie'=> $movie]) }}">View</a>
        </div>
    </div>
</div>
