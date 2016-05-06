@extends('layouts.site.general')

@section('title', 'Страница не найдена')

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
                            <h2 class="entry-title">Страница не найдена</h2>
                        </header>
                        <div class="entry-content clearfix">
                            <p>
                                Отчего возникает ошибка 404? В основном, ошибка 404 (Not Found, документ не найден)
                                связана с тем, что пользователь неправильно вводит URL ссылки на файл (или страницу)
                                расположенный на сайте, или этого файла (страницы) не существует.
                            </p>
                        </div>
                    </article>
                </section>
                <hr>
            </div>
        </div>
    </div>
@endsection