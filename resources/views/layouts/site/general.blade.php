@inject('routeHelper', 'App\Services\RouteHelper')
@extends('layouts.master')

@section('meta')
    @parent
    <meta name="Keywords" content="@yield('page-keywords')"/>
    <meta name="Description" content="@yield('page-description')"/>
    <meta property="og:title" content="@yield('title') - ЮК Торгова и партнёры"/>
    <meta property="og:description" content="@yield('page-description')"/>
@endsection

@section('css')
    @parent
    <link rel='stylesheet' href='{{ url(config('app.staticUrl') . '/css/all.css') }}' type='text/css' media='all'>
@endsection

@section('js')
    @parent
    <script type='text/javascript' src='{{ url(config('app.staticUrl') . '/js/all.js') }}'></script>
@endsection

@section('body')
    <body class="full-width-template">
    <div class="wrapper">
        <header id="branding">
            <div class="info-bar">
                <div class="container clearfix">
                    <div class="info clearfix">
                        <ul>
                            <li class="phone-number">
                                <a title="Нажмите, чтобы позвонить нам." href="tel:+78312889128">288-91-28</a>
                            </li>
                            <li class="email">
                                <a title="Нажмите, чтобы написать нам."
                                   href="mailto:jurist@ettorgova.ru">jurist@ettorgova.ru</a>
                            </li>
                            <li class="address">
                                <a title="Нажмите, чтобы посмотреть на карте от Яндекс."
                                   href="https://yandex.ru/maps/-/CVHsFSmB"
                                   target="_blank"
                                   rel="nofollow">
                                    Нижний Новгород, проспект Ленина, 51 (с.м. Двигатель Революции)
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="social-profiles clearfix">
                        <ul>
                            <li class="facebook">
                                <a href="https://vk.com/ettorgova"
                                   title="ЮК Торгова и партнёры в VK"
                                   target="_blank">
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="https://twitter.com/ettorgova"
                                   title="ЮК Торгова и партнёры в Twitter"
                                   target="_blank">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="hgroup-wrap">
                <div class="container clearfix">
                    <section id="site-logo" class="clearfix">
                        <h1 id="site-title">
                            <a href="{{ route('site.index') }}" title='Юридическая компания "Торгова и партнеры"'>
                                ЮК "Торгова и партнеры"
                            </a>
                        </h1>
                    </section>
                    <button class="menu-toggle">Меню</button>
                    <section class="hgroup-right">
                        <nav id="access" class="clearfix">
                            <ul class="nav-menu">
                                <li class="{{ $routeHelper->checkActiveMenuItem('', 'current-menu-item') }}">
                                    <a href="{{ route('site.index') }}">Главная</a>
                                </li>
                                <li class="{{ $routeHelper->checkActiveMenuItem('uslugi', 'current-menu-item') }}">
                                    <a href="{{ route('uslugi') }}">Услуги</a>
                                    <ul class="sub-menu">
                                        <li class="{{ $routeHelper->checkActiveMenuItem('yuridicheskoe-konsultirovanie', 'current-menu-item', 1) }}">
                                            <a href="{{ route('uslugi', ['name' => 'yuridicheskoe-konsultirovanie']) }}">
                                                Юридическое консультирование
                                            </a>
                                        </li>
                                        <li class="{{ $routeHelper->checkActiveMenuItem('registraciya-predprinimatelej', 'current-menu-item', 1) }}">
                                            <a href="{{ route('uslugi', ['name' => 'registraciya-predprinimatelej']) }}">
                                                Регистрация предпринимателей
                                            </a>
                                        </li>
                                        <li class="{{ $routeHelper->checkActiveMenuItem('registraciya-organizacij', 'current-menu-item', 1) }}">
                                            <a href="{{ route('uslugi', ['name' => 'registraciya-organizacij']) }}">
                                                Регистрация организаций
                                            </a>
                                        </li>
                                        <li class="{{ $routeHelper->checkActiveMenuItem('yuridicheskoe-soprovozhdenie-biznesa', 'current-menu-item', 1) }}">
                                            <a href="{{ route('uslugi', ['name' => 'yuridicheskoe-soprovozhdenie-biznesa']) }}">
                                                Юридическое сопровождение бизнеса
                                            </a>
                                        </li>
                                        <li class="{{ $routeHelper->checkActiveMenuItem('predstavitelstvo-v-arbitrazhnyh-sudah', 'current-menu-item', 1) }}">
                                            <a href="{{ route('uslugi', ['name' => 'predstavitelstvo-v-arbitrazhnyh-sudah']) }}">
                                                Представительство в Арбитражных судах
                                            </a>
                                        </li>
                                        <li class="{{ $routeHelper->checkActiveMenuItem('predstavitelstvo-v-sude', 'current-menu-item', 1) }}">
                                            <a href="{{ route('uslugi', ['name' => 'predstavitelstvo-v-sude']) }}">
                                                Представительство в суде
                                            </a>
                                        </li>
                                        <li class="{{ $routeHelper->checkActiveMenuItem('podgotovka-yuridicheskih-dokumentov', 'current-menu-item', 1) }}">
                                            <a href="{{ route('uslugi', ['name' => 'podgotovka-yuridicheskih-dokumentov']) }}">
                                                Подготовка юридических документов
                                            </a>
                                        </li>
                                        <li class="{{ $routeHelper->checkActiveMenuItem('soprovozhdenie-sdelok-s-nedvizhimostyu', 'current-menu-item', 1) }}">
                                            <a href="{{ route('uslugi', ['name' => 'soprovozhdenie-sdelok-s-nedvizhimostyu']) }}">
                                                Сопровождение сделок с недвижимостью
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="#">Акции</a>
                                </li>
                                <li class="{{ $routeHelper->checkActiveMenuItem('useful', 'current-menu-item') }}">
                                    <a href="#">Полезная информация</a>
                                    <ul class="sub-menu">
                                        <li class="{{ $routeHelper->checkActiveMenuItem('stati', 'current-menu-item', 1) }}">
                                            <a href="{{ route('stati') }}">
                                                Статьи, которые мы пишем
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="{{ $routeHelper->checkActiveMenuItem('kontakty', 'current-menu-item') }}">
                                    <a href="{{ route('kontakty') }}">Контакты</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="search-toggle"></div>
                        <div id="search-box" class="hide">
                            <form action="/" method="get"
                                  class="searchform clearfix">
                                <label class="assistive-text">Поиск</label>
                                <input type="search" placeholder="Введите для поиска..." class="s field" name="s">
                                <input type="submit" value="Искать" class="search-submit">
                            </form>
                            <span class="arrow"></span>
                        </div>
                    </section>
                </div>
            </div>
            @yield('header')
        </header>
        @yield('content')
        <footer id="colophon" class="clearfix">
            <div class="widget-wrap">
                <div class="container">
                    <div class="widget-area clearfix">
                        <div class="one-third">
                            <aside id="nav_menu-2" class="widget widget_nav_menu">
                                <h2 class="widget-title">Разделы сайта</h2>

                                <div class="menu-secondary-menu-container">
                                    <ul id="menu-secondary-menu" class="menu">
                                        <li>
                                            <a href="{{ route('site.index') }}">Главная страница</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('uslugi') }}">Услуги</a>
                                        </li>
                                        <li>
                                            <a href="#">Акции</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('stati') }}">Статьи, которые мы пишем</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('kontakty') }}">Контакты</a>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>

                        <div class="one-third">
                            <aside id="text-9" class="widget widget_text">
                                <h2 class="widget-title">О компани</h2>

                                <div class="textwidget">
                                    ЮК "Торгова и партнёры" - молодая и активно развивающаяся компания. Непрерывное
                                    отслеживание нововведений в области права позволяет нам заранее предугадывать ходы
                                    для
                                    решения ваших вопросов.<br/>Мы оказываем юридические услуги гражданам и юридическим
                                    лицам, предлагаем различные варианты сотрудничества - от разового сопровождения
                                    до
                                    комплексной юридической помощи. Для наших клиентов мы стараемся подобрать
                                    наиболее
                                    стратегически продуманные решения поставленных целей и задач.
                                </div>
                            </aside>
                        </div>

                        <div class="one-third">
                            <aside id="text-3" class="widget widget_text">
                                <h2 class="widget-title">Контактная информация</h2>

                                <div class="textwidget">
                                    <p>Юридическая компания <strong>"Торгова и партнёры"</strong><br>
                                        Нижний Новгород, проспект Ленина, 51, офис 3 (возле станции метро Двигатель
                                        Революции)
                                    </p>

                                    <p>Телефон: <a title="Нажмите, чтобы позвонить нам." href="tel:+78312889128">
                                            8 (831) 288-91-28</a>
                                        <br>
                                        Мобильный телефон: <a title="Нажмите, чтобы позвонить нам."
                                                              href="tel:+79990790781">
                                            +7 (999) 079-078-1</a>
                                        <br>
                                        Email: <a href="mailto:jurist@ettorgova.ru"
                                                  title="Написать нам">jurist@ettorgova.ru</a><br>
                                        Сайт: <a href="{{ route('site.index') }}" target="_blank"
                                                 title="Посетить наш сайт">ettorgova.ru</a></p>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info-bar">
                <div class="container clearfix">
                    <div class="info clearfix">
                        <ul>
                            <li class="phone-number">
                                <a title="Нажмите, чтобы позвонить нам." href="tel:+78312889128">288-91-28</a>
                            </li>
                            <li class="email">
                                <a title="Нажмите, чтобы написать нам."
                                   href="mailto:jurist@ettorgova.ru">jurist@ettorgova.ru</a>
                            </li>
                            <li class="address">
                                <a title="Нажмите, чтобы посмотреть на карте от Яндекс."
                                   href="https://yandex.ru/maps/-/CVHsFSmB"
                                   target="_blank"
                                   rel="nofollow">
                                    Нижний Новгород, проспект Ленина, 51 (с.м. Двигатель Революции)
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="site-generator">
                <div class="container clearfix">
                    <div class="social-profiles clearfix">
                        <ul>
                            <li class="facebook">
                                <a href="https://vk.com/ettorgova"
                                   title="ЮК Торгова и партнёры в VK"
                                   target="_blank">
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="https://twitter.com/ettorgova"
                                   title="ЮК Торгова и партнёры в Twitter"
                                   target="_blank">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="copyright">
                        Copyright &copy;
                        <a href="{{ route('site.index') }}" title='Юридическая компания "Торгова и партнёры"'>
                            <span>ЮК "Торгова и партнеры"</span>
                        </a> 2015 - 2016
                        <!--noindex-->
                        | Дизайн компании
                        <a href="http://themehorse.com" target="_blank" title="Дизайн компании Theme Horse"
                           rel="nofollow">
                            <span>Theme Horse</span>
                        </a>
                        <!--/noindex-->
                    </div>
                </div>
            </div>
            <div class="back-to-top"><a href="#branding"> </a></div>
        </footer>
    </div>
    @if (App::environment('production'))
            <!-- Yandex.Metrika counter -->
    <script type="text/javascript"> (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter34003970 = new Ya.Metrika({
                        id: 34003970,
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true
                    });
                } catch (e) {
                }
            });
            var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () {
                n.parentNode.insertBefore(s, n);
            };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";
            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks"); </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/34003970" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript> <!-- /Yandex.Metrika counter -->
    @endif
    </body>
@endsection