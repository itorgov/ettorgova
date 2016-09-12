@extends('layouts.site.general')

@section('title', 'Статьи, которые мы пишем')

@section('page-type', 'website')
@section('page-keywords', 'юридические статьи')
@section('page-description', 'Статьи, которые мы пишем. Юридическая компания Торгова и партнёры.')

@section('header')
    <div class="page-title-wrap">
        <div class="container clearfix">
            <div class="breadcrumb">
                <span>
                    <a title="Главная страница" href="{{ route('site.index') }}" class="home">Главная страница</a>
                </span> /
                <span>
                    <span>Статьи, которые мы пишем</span>
                </span>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div id="main">
        <div class="container">
            <div id="content">
                <h1>Статьи, которые мы пишем</h1>
                <hr>
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
                                        <a href="{{ route('site.index') }}" title="Юридическая компания Торгова и партнёры"> ЮК "Торгова и партнёры" </a>
                                    </span>
                                </div>
                                <div class="date updated">
                                    <a href="#" title="16:13"> 6 мая 2016г. </a>
                                </div>
                            </div>
                        </header>
                        <div class="entry-content">
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
                <section class="post">
                    <article>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="{{ route('stati', ['name' => 'yurist-po-semejnym-delam']) }}"
                                   title="Юрист по семейным делам">
                                    Юрист по семейным делам
                                </a>
                            </h2>
                            <div class="entry-meta clearfix">
                                <div class="by-author vcard author">
                                    <span class="fn">
                                        <a href="{{ route('site.index') }}" title="Юридическая компания Торгова и партнёры"> ЮК "Торгова и партнёры" </a>
                                    </span>
                                </div>
                                <div class="date updated">
                                    <a href="#" title="16:09"> 11 сентября 2016г. </a>
                                </div>
                            </div>
                        </header>
                        <div class="entry-content">
                            <p>
                                Конфликты бывают в каждой семье. Однако в некоторых случаях они носят затяжной характер.
                                Осложнение семейных взаимоотношений сопровождается выбросом негатива, оскорблениями. На
                                таком фоне с большими амплитудами эмоций участники ссоры не могут адекватно принимать
                                правильные решения. Этому сможет помочь семейный юрист, который обладает умением
                                урегулирования обстановки, сглаживания ситуации, подведение ее к компромиссу.
                            </p>
                        </div>
                        <footer>
                            <a class="readmore" href="{{ route('stati', ['name' => 'yurist-po-semejnym-delam']) }}"
                               title="Читать статью">Читать статью</a>
                        </footer>
                    </article>
                </section>
            </div>
        </div>
    </div>
@endsection