@extends('layouts.site.general')

@section('title', 'Контакты')

@section('page-keywords', 'контактная информация торгова и партнёры')
@section('page-description', 'Контактная информация юридической компании Торгова и партнёры')

@section('js')
    @parent
    <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=3tv74VP_LS9oBz-KnRdKrwAyXNn4qCAo&width=100%&height=450&lang=ru_RU&sourceType=constructor&id=map"></script>
@endsection

@section('header')
    <div class="page-title-wrap">
        <div class="container clearfix">
            <div class="breadcrumb">
                <span>
                    <a title="Главная страница" href="{{ route('site.index') }}" class="home">Главная страница</a>
                </span> /
                <span>
                    <span>Контакты</span>
                </span>
            </div>
            <h1 class="page-title" id="entry-title">Контакты</h1>
        </div>
    </div>
@endsection

@section('content')
    <div id="main">
        <div class="container">
            <div id="content">
                <section>
                    <div class="column">
                        <p>Юридическая компания "Торгова и партнёры" располагается в Нижнем Новгороде на проспекте Ленина, дом 51, офис 3.</p>
                        <p><strong>Время работы</strong>: понедельник - пятница с 10:00 до 19:00.</p>
                        <p>
                            <strong>Телефон</strong>: <a title="Нажмите, чтобы позвонить нам." href="tel:+78312889128">288-91-28</a>
                            <strong>Мобильный телефон</strong>: <a title="Нажмите, чтобы позвонить нам." href="tel:+79990790781">+7 (999) 079-078-1</a>
                        </p>
                    </div>
                </section>
                <section>
                    <div class="column" id="map"></div>
                </section>
            </div>
        </div>
    </div>
@endsection