@extends('layouts.base')

@section('content')
<div class="container">
    <div class="logo">
        <div class="logoMetr">
        </div>
    </div>
    <div class="title">
        <h2>Регистрация Метр</h2>
    </div>
    <form action="" method="get" class="form__example">
        <div class="form__example">
            <label for="name"></label>
            <input class="login" type="text" name="name" id="name" placeholder="Имя" required>
        </div>
        <div class="form__example">
            <label for="email"></label>
            <input class="login" type="email" name="email" id="email" placeholder="Почта" required>
        </div>
        <div class="form__example">
            <input class="form__input" type="submit" value="Войти">
        </div>
    </form>
</div>
@endsection
