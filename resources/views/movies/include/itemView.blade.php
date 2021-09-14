    <div class="row">
        <div class="col-8">
            <img src="https://vseoshokolade.ru/wp-content/uploads/2020/10/2245941.jpg" class="w-100" alt="{{$movie->title}}">
        </div>
        <div class="col-4 bg-light" style="">
            <div class=" d-flex m-3 justify-content-center" style="min-height: 70px;">
                <h3 class="card-title align-self-center">{{$movie->title}}</h3>
            </div>
            <p class="card-text ">
            <div class="text bold mb-3">Rating: {{$rating}}</div>
            {{$movie->description}}
            </p>
            <div class="d-flex mt-3">
                Your price: <p class="card-text mx-3">{{number_format($movie->price, 2)}} $</p>
            </div>
            <div class="d-flex mt-5 justify-content-between">
                <a href="#" class="btn btn-outline-dark">add count</a>
                <h5 class="card-text text-center">Count: 1</h5>
                <a href="#" class="btn btn-outline-dark">remove count</a>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="d-flex justify-content-around m-5">
                <a href="#" class="btn btn-outline-dark">Add to cart</a>
                <a href="{{ route('app.movies.index') }}" class="btn btn-outline-dark">Go back</a>
            </div>
        </div>
    </div>



