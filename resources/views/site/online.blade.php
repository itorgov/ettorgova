@extends('layouts.site.general')

@section('title', 'Задать вопрос нашему юристу')

@section('page-type', 'website')
@section('page-keywords', 'задать вопрос юристу, юридическая консультация бесплатно')
@section('page-description', 'Задать вопрос юристу юридической компании Торгова и партнёры онлайн')

@section('header')
    <div class="page-title-wrap">
        <div class="container clearfix">
            <div class="breadcrumb">
                <span>
                    <a title="Главная страница" href="{{ route('site.index') }}" class="home">Главная страница</a>
                </span> /
                <span>
                    <span>Задать вопрос нашему юристу</span>
                </span>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div id="main">
        <div class="container">
            <div id="content">
                <h1>Задать вопрос нашему юристу</h1>
                <hr>
                <section class="post">
                    <article>
                        <div class="entry-content">
                            <section class="widget widget_promotional_bar clearfix">
                                <div class="promotional-text">
                                    Страница в разработке
                                </div>
                            </section>
                        </div>
                    </article>
                </section>
            </div>
        </div>
    </div>
@endsection