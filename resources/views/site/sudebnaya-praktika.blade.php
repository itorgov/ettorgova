@extends('layouts.site.general')

@section('title', 'Выигранные суды (судебная практика)')

@section('page-type', 'website')
@section('page-keywords', 'судебная практика, выигранные суды, торгова и партнёры')
@section('page-description', 'Судебная практика юридической компании Торгова и партнёры')

@section('header')
    <div class="page-title-wrap">
        <div class="container clearfix">
            <div class="breadcrumb">
                <span>
                    <a title="Главная страница" href="{{ route('site.index') }}" class="home">Главная страница</a>
                </span> /
                <span>
                    <span>Выигранные суды (судебная практика)</span>
                </span>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div id="main">
        <div class="container">
            <div id="content">
                <h1>Выигранные суды (судебная практика)</h1>
                <hr>
                <section class="post">
                    <article>
                        <div class="entry-content">
                            <section class="widget widget_promotional_bar clearfix">
                                <div class="promotional-text">
                                    Страница в разработке
                                    <span>Позвоните нам или приходите к нам в офис и мы с удовольствием расскажем вам о нашем опыте и ответим на любые ваши вопросы.</span>
                                </div>
                            </section>
                        </div>
                    </article>
                </section>
            </div>
        </div>
    </div>
@endsection