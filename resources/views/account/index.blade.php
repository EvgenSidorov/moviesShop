@extends('layout.account')
@section('content')
    <section class="main container mt-3 mb-3" style="min-height: 803px;">
        <div class="row container">
            <div class="col-2 ">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
                    <a href="{{ route('app.account') }}"
                       class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                        <svg class="bi me-2" width="40" height="32">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                        <span class="fs-4">Sidebar</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
{{--                            <a href="{{ route('app.account') }}" class="nav-link active" aria-current="page">--}}
                            <a href="{{ route('app.account') }}" class="nav-link link-dark" aria-current="page">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#home"></use>
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('app.account.showAll') }}" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2"></use>
                                </svg>
                                Orders
                            </a>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>
            <div class="offset-1 col-9">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-light">
{{--                    @dd($user)--}}
{{--                    @foreach($orders as $order)--}}
{{--                        @dd($order)--}}
                            <div class=" justify-content-around border-bottom align-items-center p-2">
                                <div>name: {{ $user['name'] }} </div>
                                <div>email:  {{ $user['email'] }}$</div>
                                <div>phone:  {{ $user['phone'] }}$</div>
                                <a href="{{ route('app.account.showAll') }}" class="btn btn-outline-dark mt-4">Show orders</a>
                            </div>
{{--                            <div class="d-flex justify-content-around border-bottom align-items-center p-2">--}}
{{--                                <span>Заказ номер: {{ $order['id'] }} </span>--}}
{{--                                <span>Сумма заказа:  {{ $order['totalSum'] }}$</span>--}}
{{--                                <button type="button" class="btn btn-outline-dark">Show</button>--}}
{{--                            </div>--}}
{{--                    @endforeach--}}
                </div>
            </div>
        </div>
    </section>
@endsection
