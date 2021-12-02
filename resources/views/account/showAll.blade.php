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
                            <a href="#" class="nav-link link-dark">
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
                    @foreach($orders as $order)
                        <div class="d-flex justify-content-around border-bottom align-items-center" style="height: 50px;">
                            <span>Order number: {{ $order['id'] }} </span>
                            <span>Sum order:  {{ $order['totalSum'] }}$</span>
                            <a href="{{ route('app.account.show', $order->id) }}" class="btn btn-outline-dark">Details</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
