@extends('layouts/index')

@section('content')
    <div class="container">
        <form action="/signup" method="post">
            @csrf
            <h4>Регистрация:</h4>
            <div>
                <label for="login">Логин</label>
                <input type="text" id="login" name="login" required placeholder="user">
            </div>

            <div>
                <label for="name">ФИО</label>
                <input type="text" id="name" name="name" required placeholder="user userovich userov">
            </div>

            <div>
                <label for="email">Почта</label>
                <input type="text" id="email" name="email" required placeholder="user@email.ru">
            </div>

            <div>
                <label for="number">Номер</label>
                <input type="text" id="number" name="number" required placeholder="+7(XXX)-XXX-XX-XX">
            </div>

            <div>
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" required min="6" placeholder="••••••">
            </div>

            <div>
                <label for="password2">Подтвердите пароль</label>
                <input type="password" id="password2" name="password2" required min="6" placeholder="••••••">
            </div>

            @if($errors->any())
                <div class="error">
                    @foreach($errors->all() as $error)
                        <div>• {{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <button>
                Зарегестрироваться
            </button>

            <a href="/login" class="form_links">
                <div>
                    Есть аккаунт ?
                </div>
                <div>
                    Войти
                </div>
            </a>


        </form>
    </div>
@endsection
