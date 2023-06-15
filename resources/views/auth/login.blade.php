@extends('layouts.auth-master')

@section('title', 'Вход')

@section('content')

    <section id="auth">
        <div class="auth-container">
            <div class="auth-form__wrapper">
                <form action="" class="auth-form">
                    <h3 class="title">Вход</h3>
                    <input type="email" name="email" class="input-email" placeholder="Электронная почта">
                    <input type="text" name="password" class="input-password" placeholder="Пароль">
                    <div class="forgot">
                        <a href="">Забыли пароль?</a>
                    </div>
                    <button type="submit" class="submit">Войти</button>
                    <div class="footer">
                        <span>Нет профиля?</span>
                        <a href="">Зарегистрируйтесь</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
