    <div class="row">
        <div class="col-8">
            <img src="https://vseoshokolade.ru/wp-content/uploads/2020/10/2245941.jpg" class="w-100" alt="{{$movie->title}}">
        </div>
        <div class="col-4 bg-light" style="">
            <div class=" d-flex m-1 justify-content-center" style="min-height: 70px;">
                <h4 class="card-title align-self-center">{{$movie->title}}</h4>
            </div>
            <p class="card-text ">
            <div class="bg-secondary text-white text-center bold mb-2">Rating: {{$rating}}</div>
            {{$movie->description}}
            </p>
            <div class="d-flex ">
                Your price: <p class="card-text mx-3">{{number_format($movie->price, 2)}} $</p>
            </div>
            <div class="d-flex mt-3 justify-content-around">
                <a href="#" class="btn btn-outline-danger">-</a>
                <h5 class="card-text text-center">Count: 1</h5>
                <a href="#" class="btn btn-outline-success">+</a>
            </div>
            <div class="d-flex mt-3 justify-content-around">
                <a href="#" class="btn btn-outline-success">Add to Cart</a>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="d-flex m-5">

                <a href="{{ route('app.movies.index') }}" class="btn btn-outline-dark"><-Back</a>
            </div>
        </div>
    </div>



