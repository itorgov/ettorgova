@extends('layouts.site.general')

@section('title', 'Услуги')

@section('header')
    <div class="page-title-wrap">
        <div class="container clearfix">
            <div class="breadcrumb">
                <span>
                    <a title="Главная страница" href="{{ route('site.index') }}" class="home">Главная страница</a>
                </span> /
                <span>
                    <span>Услуги</span>
                </span>
            </div>
            <h1 class="page-title" id="entry-title">Услуги</h1>
        </div>
    </div>
@endsection

@section('content')
    <div id="main">
        <div class="container clearfix">
            <div id="content">
                <section id="interface_service_widget-2" class="widget widget_service">
                    <div class="column clearfix">
                        Привет!
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection