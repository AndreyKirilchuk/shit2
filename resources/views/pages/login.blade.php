@extends('layouts/index')

@section('content')
    <div class="container">
        <form action="/login" method="post">
            @csrf
            <h4>Авторизация:</h4>
            <div>
                <label for="login">Логин</label>
                <input type="text" id="login" name="login" required placeholder="user">
            </div>

            <div>
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" required min="6" placeholder="••••••">
            </div>

            @if($errors->any())
                <div>
                    @foreach($errors->all() as $error)
                        <div class="error">• {{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <button>
                Войти
            </button>

            <a href="/signup" class="form_links">
                <div>
                    Нет аккаунта ?
                </div>
                <div>
                    Зарегестрироваться
                </div>
            </a>

        </form>
    </div>
@endsection
