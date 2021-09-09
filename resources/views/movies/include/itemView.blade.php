<div class="card border-success" style="">
    <img src="https://vseoshokolade.ru/wp-content/uploads/2020/10/2245941.jpg" class="card-img-top " alt="{{$movie->title}}">
    <div class="card-body " style="">
        <div class=" d-flex bg-success m-3 justify-content-center" style="min-height: 70px;">
            <h5 class="card-title text-white align-self-center">{{$movie->title}}</h5>
        </div>
        <p class="card-text ">{{$movie->description}}</p>
        <div class="text-center bg-success mb-5">
            <p class="card-text text-white">Your price: {{number_format($movie->price, 2)}} $</p>
        </div>

        <a href="#" class="btn btn-success">Add to cart</a>
        <a href="{{ route('app.movies.index') }}" class="btn btn-success">Go back</a>
    </div>
</div>
