@extends('layouts.main')
@section('content')
    <div class="row">
    <div> <a href=" {{ route('post.index') }} "> Новости</a> </div>
    <div> <a href=""> Авторизация</a> </div>
    <div> <a href=""> Регистрация</a> </div>
    </div>
@endsection
