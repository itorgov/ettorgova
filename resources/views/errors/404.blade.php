@extends('layouts.site.general')

@section('title', 'Ошибка 404')

@section('header')
    <div class="page-title-wrap">
        <div class="container clearfix">
            <h1 class="page-title" id="entry-title">Ошибка 404</h1>
        </div>
    </div>
@endsection

@section('content')
    <div id="main">
        <div class="container">
            <div id="content">
                <section class="post">
                    <article>
                        <header class="entry-header">
                            <h2 class="entry-title">Упс! Страница не найдена :-(</h2>
                        </header>
                        <div class="entry-content clearfix">
                            <p>
                                Отчего возникает ошибка 404? В основном, эта ошибка случается когда пользователь неправильно вводит адрес страницы или переходит по некорректной ссылке.
                            </p>
                            <p>
                                Возможно, вас интересовала наша <a href="{{ route('uslugi', ['name' => 'yuridicheskaya-konsultaciya']) }}">юридическая консультация</a>? К тому же вы можете ознакомиться с перечнем всех наших <a href="{{ route('uslugi') }}">услуг</a>. Или же вы можете пройти на <a href="{{ route('site.index') }}">главную страницу</a>.
                            </p>
                        </div>
                    </article>
                </section>
            </div>
        </div>
    </div>
@endsection