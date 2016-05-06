@extends('layouts.site.general')

@section('title', 'Статьи, которые мы пишем')

@section('header')
    <div class="page-title-wrap">
        <div class="container clearfix">
            <div class="breadcrumb">
                <span>
                    <a title="Главная страница" href="{{ route('site.index') }}" class="home">Главная страница</a>
                </span> /
                <span>
                    <span>Статьи</span>
                </span>
            </div>
            <h1 class="page-title" id="entry-title">Статьи, которые мы пишем</h1>
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
                            <h2 class="entry-title">
                                <a href="{{ route('stati', ['name' => 'ne-vydacha-trudovoj-knizhki-rabotniku-pri-uvolnenii']) }}"
                                   title="Не выдача трудовой книжки работнику при увольнении по его инициативе">
                                    Не выдача трудовой книжки работнику при увольнении по его инициативе
                                </a>
                            </h2>
                            <div class="entry-meta clearfix">
                                <div class="by-author vcard author">
                                    <span class="fn">
                                        <a href="{{ route('site.index') }}" title='Юридическая компания "Торгова и партнёры"'> ЮК "Торгова и партнёры" </a>
                                    </span>
                                </div>
                                <div class="date updated">
                                    <a href="{{ route('stati') }}" title="16:13"> 6 мая 2016г. </a>
                                </div>
                            </div>
                        </header>
                        <div class="entry-content clearfix">
                            <p>
                                Может ли случиться ситуация, когда работодатель отказывается выдать трудовую книжку работнику?
                                Может и не выдать – ответите Вы, однако законны ли такие действия?
                                На самом деле у работодателя законных оснований отказать в выдаче трудовой книжки при
                                увольнении по Вашей инициативе – нет.
                            </p>
                        </div>
                        <footer>
                            <a class="readmore" href="{{ route('stati', ['name' => 'ne-vydacha-trudovoj-knizhki-rabotniku-pri-uvolnenii']) }}"
                               title="Читать статью">Читать статью</a>
                        </footer>
                    </article>
                </section>
            </div>
        </div>
    </div>
@endsection