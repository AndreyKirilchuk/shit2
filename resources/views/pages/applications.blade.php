@extends('layouts/index')

@section('content')
    @include('components/header')

    <div class="container">
        <h2>
            Мои заявки:
        </h2>

        @if($applications->isNotEmpty())

            <div class="el-container">
                @foreach($applications as $application)
                    <div class="el">
                        Номер автомобиля: {{$application->number}}
                        Описание: {{$application->about}}
                        Статус: {{$application->status}}
                    </div>
                @endforeach
            </div>

        @else
            У вас нет заявок, но их можно оставить по <a href="/createApplications">ссылке</a>

        @endif
    </div>

@endsection
