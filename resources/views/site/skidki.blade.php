@extends('layouts.site.general')

@section('title', 'Акции и скидки')

@section('page-type', 'website')
@section('page-keywords', 'акции торгова и партнёры, скидки на юридические услуги')
@section('page-description', 'Акции и скидки юридической компании Торгова и партнёры')

@section('header')
    <div class="page-title-wrap">
        <div class="container clearfix">
            <div class="breadcrumb">
                <span>
                    <a title="Главная страница" href="{{ route('site.index') }}" class="home">Главная страница</a>
                </span> /
                <span>
                    <span>Акции и скидки</span>
                </span>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div id="main">
        <div class="container">
            <div id="content">
                <h1>Акции и скидки</h1>
                <hr>
                <section class="post">
                    <article>
                        <div class="entry-content">
                            <section class="widget widget_promotional_bar clearfix">
                                <div class="promotional-text">
                                    Акции и скидки отсутствуют
                                    <span>В данный момент акции и скидки отсутствуют, но они обязательно появятся! Заглядывайте почаще ;-)</span>
                                </div>
                            </section>
                        </div>
                    </article>
                </section>
            </div>
        </div>
    </div>
@endsection