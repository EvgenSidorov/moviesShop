<!DOCTYPE html>
<html lang="en">
@include('layout.header')
<body>
@include('layout.navigation')
@if(!request()->routeIs('app.home'))
{{--    <h1>{{ $title??'title' }}</h1>--}}
@endif
@yield('content')
@include('layout.footer')
</body>
</html>
<!-- вынести навигацию и хедер блок в отдельные области и подключить их хедер слайдер
  попробовать создать контроллер-->
