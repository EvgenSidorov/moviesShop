@extends('layout.aria')
@section('content')
    {{--    @include('layout.headerBottom')--}}
    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class=" justify-content-center">
                <h1>Форма регистрации пользователя</h1>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="d-flex mt-5">
                <img src="https://vseoshokolade.ru/wp-content/uploads/2020/10/2245941.jpg" class="" style="width: 60%"
                     alt="">
                {{--            </div>--}}
                <form action="{{ route('app.signUpSubmit') }}" class="mx-4" method="post">
                    @csrf
                    <div class="container d-flex">
                        <div class="row">
                            <div class="mt-3">
                                <label for="exampleDataList" class="form-label">name</label>
                                <input class="form-control" name="name" id="exampleDataList">
                            </div>
                            <div class="mt-3">
                                <label for="exampleDataList" class="form-label">email</label>
                                <input class="form-control" name="email" id="exampleDataList" >
                            </div>
                            <div class="mt-3">
                                <label for="exampleDataList" class="form-label">phone</label>
                                <input class="form-control" name="phone" id="exampleDataList" >
                            </div>
                            <div class="mt-3">
                                <label for="exampleDataList" class="form-label">password</label>
                                <input class="form-control" name="password" id="exampleDataList" >
                            </div>
                        </div>
                    </div>
                    <div class="container d-flex mt-5">
                        <div style="">
                            <button type="submit" id="submitButton" class="btn btn-outline-dark">Add User</button>
                        </div>
                    </div>
                </form>
            </div>
            <a href="{{ route('app.home') }}" class="btn btn-outline-dark m-5"><-Back</a>

        </div>
    </section>
@endsection
