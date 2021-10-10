
<div class="row mt-4 bg-light">
    <div class="col-2 mt-2">
        <img src="https://vseoshokolade.ru/wp-content/uploads/2020/10/2245941.jpg" class="w-75"
             alt="{{$movie['title']}}">
    </div>
    <div class="col-2 offset-1 mt-2" style="">
        <div class=" d-flex m-1 justify-content-center" style="min-height: 70px;">
            <h4 class="card-title align-self-center">{{$movie['title']}}</h4>
        </div>

    </div>
    <div class="col-2 offset-1 mt-2">
        <div class="d-flex mt-3 justify-content-around">
            <a href="#" class="btn btn-danger minus">-</a>
            <h5>Count: </h5><h5 class="card-text text-center count">{{ $movie['count'] }}</h5>
            <a href="#" class="btn btn-success plus">+</a>
        </div>
        <div class="d-flex mt-4 mx-2" style="">
            Your price: <p class="card-text mx-3 moviePrice"
                           style="color:#f6931f; font-weight:bold;">{{number_format($movie['price'], 2)}}</p> $
        </div>
    </div>
    <div class="col-2 mt-2">
        <div class="d-flex mt-3 justify-content-around">
            <h5 class="card-text text-center ">Total price</h5>

        </div>
        <div class="d-flex mt-4 mx-2" style="">
            Total price: <p class="card-text mx-3 countTotal"
                           style="color:#f6931f; font-weight:bold;">{{number_format($movie['price'], 2)}} </p>$
        </div>
    </div>
    <div class="col-2 mt-2">
        <div class="d-flex mt-3 justify-content-around">
            <a class="btn btn-danger mt-auto"
{{--               href="#">DELETE</a>--}}
               href="{{ route('app.basket.remove', $movie['id']) }}">DELETE</a>
        </div>
    </div>

</div>




