@extends('layout.aria')

@section('content')
{{--        @include('layout.headerBottom')--}}

    <div class="container vh-100">
        <div class="d-flex justify-content-center mt-4">
            <h3 >Это страница с заказами</h3>
        </div>
        @foreach($order as $row)
            <div class="col col-sm-3 mb-4">
                <p>{{ $row['title'] }}</p>
            </div>
        @endforeach
    </div>
@endsection
