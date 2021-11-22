@extends('layout.aria')

@section('content')
    {{--        @include('layout.headerBottom')--}}



    <div class="container min-vh-100">
{{--                    @dd($totalSum);--}}
        <form action="{{ route('app.order.store') }}" method="POST">
            @csrf
            <div class="row d-flex justify-content-center mt-2">
                <div class="col-8 mt-1">
                    <div class="border px-2 mb-3">
                        <div class="text-center mb-2 mt-2">
                            <h4>Заполните форму заказа</h4>
                            <hr style="margin: 2px"/>
                        </div>
                        <div class="d-flex flex-column mx-auto w-75 mt-3">
                            <div class="d-flex mb-3 text-center align-items-center">
                                <label for="name" class="form-label w-25">name</label>
                                <input class="form-control ms-2" name="name" value="{{ $user['name'] }}" id="name">
                            </div>
                            <div class="d-flex mb-3 text-center align-items-center">
                                <label for="email" class="form-label w-25">email</label>
                                <input class="form-control ms-2" name="email" value="{{ $user['email'] }}" id="email">
                            </div>
                            <div class="d-flex mb-3 text-center align-items-center">
                                <label for="phone" class="form-label w-25">phone</label>
                                <input class="form-control ms-2" name="phone" value="{{ $user['phone'] }}" id="phone">
                            </div>
                        </div>
                    </div>
                    <div class="border px-2 mb-3">
                        <div class="text-center mb-2 mt-2">
                            <h4>Выберите способ доставки</h4>
                            <hr style="margin: 2px"/>
                        </div>
                        <div class="d-flex justify-content-around align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="icons8.png" height="50">
                                <input type="radio" class="m-4" name="deliveryType" value="{{ \App\Models\Order::DELIVERY_SHIPPING }}">
                                <label for="delivery_type" class="form-label">Доставка курьером</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <label for="delivery_type" class="form-label">Самовывоз</label>
                                <input type="radio" class="m-4" name="deliveryType" value="{{ \App\Models\Order::DELIVERY_PICKUP }}" checked>
                                <img src="package.png" height="50">
                            </div>
                        </div>
                            {{--delivery--}}
                        <div class="delivery" style="display: none !important;">
                            <hr/>
                            <section class="d-flex" >
                                <div class="col-6">
                                    <div class="d-flex align-items-center text-center mb-2 flex-column">
                                        <div class="mb-2">
                                            Адрес куда доставить товар
                                        </div>
                                        <div class="">
                                            <textarea rows="3" cols="40" name="adress"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center text-center mb-2 flex-column">
                                        <div class="mb-2">
                                            Укажите время доставки
                                        </div>
                                        <div class="">
                                            <textarea rows="3" cols="40" name="time"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="border px-2 mb-3">
                        <div class="text-center mb-2 mt-2">
                            <h4>Дополнительные данные</h4>
                            <hr style="margin: 2px"/>
                        </div>
                        <div class="d-flex  align-items-center mb-2">
                        <span class="w-25">
                            Комментарий к заказу:
                        </span>
                            <textarea rows="5" cols="90" name="description"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-4 order-items">
                    <div class="d-flex justify-content-center bg-grey w-100">
                        <div class="text-center mt-2">
                            <h4>Ваш заказ</h4>
                        </div>
                    </div>
                    <div class="text-center ">
                        @foreach($basketItems as $key=>$item)
                            <div class="border mb-2 p-2">
                                <div class="mb-2">
                                    <a href="#">{{ $basketItems[$key]['title'] }}</a>
                                </div>
                                <div class="d-flex justify-content-around">
                                    <span>Количество: {{ $basketItems[$key]['count'] }}</span>
                                    <span class="price-color">Сумма: {{ $basketItems[$key]['totalPrice']}} $</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <hr/>
                    <div class="row flex-column ">
                        <div class="d-flex justify-content-around text-muted mb-2 itemSum">
                            <span>Стоимость товаров:</span>
                            <span class="price-color" name="totalSum">{{ $totalSum}} $</span>
                        </div>
                        <div class="sumDelivery" style="display: none !important;">
                            <div class="d-flex justify-content-around text-muted mb-2" >
                                <span>Стоимость доставки:</span>
                                <span class="price-color" name="deliverySum">{{ $deliverySum }} </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around totalSum">
                            <h4>Всего к оплате:</h4>
                            <h4><span class="price-color" name="totalAllSum">{{ $totalSum }} $</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-outline-dark m-2">confirm order -></button>
        </form>
    </div>

@endsection
