<div class="card h-100">
    <!-- Product image-->
    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..."/>
    <!-- Product details-->
    <div class="card-body p-4">
        <div class="text-center">
            <!-- Product name-->
            <h5 class="fw-bolder">{{$movie->title}}</h5>
            <!-- Product price-->
            {{number_format($movie->price, 2)}}$
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
