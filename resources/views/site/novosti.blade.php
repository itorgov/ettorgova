@extends('layouts.site.general')

@section('title', 'Новое в российском законодательстве')

@section('page-type', 'website')
@section('page-keywords', 'новости российского законодательства, новый закон, приняли закон')
@section('page-description', 'Новое в российском законодательстве')

@section('header')
    <div class="page-title-wrap">
        <div class="container clearfix">
            <div class="breadcrumb">
                <span>
                    <a title="Главная страница" href="{{ route('site.index') }}" class="home">Главная страница</a>
                </span> /
                <span>
                    <span>Новое в российском законодательстве</span>
                </span>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div id="main">
        <div class="container">
            <div id="content">
                <h1>Новое в российском законодательстве</h1>
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