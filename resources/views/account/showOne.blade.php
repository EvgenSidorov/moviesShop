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
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-light w-75">
{{--                    @dd($order)--}}
                    @foreach($order as $item)
                        {{--                        @dd($order)--}}
                        <div class=" justify-content-around align-items-center p-2">
                            <div class="d-flex w-100 text-center justify-content-around bg-white py-2">
                                <div class="">
                                    Order number:
                                </div>
                                <div class="">
                                    {{ $item['id'] }}
                                </div>
                            </div>
                            <div class="d-flex w-100 text-center justify-content-around bg-white py-2">
                                <div class="">
                                    Sum order:
                                </div>
                                <div class="">
                                    {{ $item['totalSum'] }}$
                                </div>
                            </div>
                            <div class="d-flex w-100 text-center justify-content-around bg-white py-2">
                                <div class="">
                                    Adress:
                                </div>
                                <div class="">
                                    {{ $item['adress'] }}
                                </div>
                            </div>
                            <div class="d-flex w-100 text-center justify-content-around bg-white py-2">
                                <div class="">
                                    Description:
                                </div>
                                <div class="">
                                    {{ $item['description'] }}
                                </div>
                            </div>
                            <div class="d-flex w-100 text-center justify-content-around bg-white py-2">
                                <div class="">
                                    Created_at:
                                </div>
                                <div class="">
                                    {{ $item['created_at'] }}
                                </div>
                            </div>
                        </div>
                        <div class="d-flex w-100 text-center justify-content-around py-2">
                            <a href="{{ route('app.account.showAll') }}" class="btn btn-outline-dark"><-Back</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
