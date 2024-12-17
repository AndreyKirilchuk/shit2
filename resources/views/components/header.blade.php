<div class="header_container">
    <div class="container">
        <header>
            <div class="logo">
                <h1>Нарушителям.Нет</h1>
            </div>

            <nav>
                <a href="/">Мои заявки</a>
                <a href="/createApplication">Создать заявку</a>

                @auth()
                    @if(auth()->user()->level == 'admin')
                        <a href="/adminPanel">Админ панель</a>
                    @endif
                @endauth

                <form action="/logout" method="post">
                    @csrf
                    <button>
                        Выйти
                    </button>
                </form>
            </nav>
        </header>
    </div>
</div>
