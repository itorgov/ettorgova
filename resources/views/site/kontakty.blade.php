@extends('layouts.site.general')

@section('title', 'Контакты')

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
                            <strong>Телефон</strong>: <a title="Нажмите, чтобы позвонить нам." href="tel:2889128">288-91-28</a>
                            <strong>Мобильный телефон</strong>: <a title="Нажмите, чтобы позвонить нам." href="tel:+79990790781">+7 (999) 079-078-1</a>
                        </p>
                    </div>
                </section>
                <section>
                    <div class="column">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2214.9364627877158!2d43.92021531571865!3d56.27914595874133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414e2a6fee97841f%3A0x974a0c26c216f399!2z0K7RgNC40LTQuNGH0LXRgdC60LDRjyDQutC-0LzQv9Cw0L3QuNGPICLQotC-0YDQs9C-0LLQsCDQuCDQv9Cw0YDRgtC90ZHRgNGLIg!5e0!3m2!1sru!2sru!4v1450730770585" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection