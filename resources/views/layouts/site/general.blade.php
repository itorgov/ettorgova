@extends('layouts.master')

@section('meta')
    @parent
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
    <body class="page page-template-default full-width-template">
    <div class="wrapper">
        <header id="branding">
            <div class="info-bar">
                <div class="container clearfix">
                    <div class="info clearfix">
                        <ul>
                            <li class="phone-number">
                                <a title="Нажмите, чтобы позвонить нам." href="tel:2889128">288-91-28</a>
                            </li>
                            <li class="email">
                                <a title="Нажмите, чтобы написать нам."
                                   href="mailto:jurist@ettorgova.ru">jurist@ettorgova.ru</a>
                            </li>
                            <li class="address">
                                <a title="Нажмите, чтобы посмотреть на карте 2gis."
                                   href="http://2gis.ru/n_novgorod/firm/70000001020079197/center/43.920625%2C56.279145/tab/firms/zoom/17"
                                   target="_blank">
                                    Нижний Новгород, проспект Ленина, 51 (с.м. Двигатель Революции)
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="social-profiles clearfix">
                        <ul>
                            <li class="facebook">
                                <a href="#"
                                   title="ЮК Торгова и партнёры в Facebook"
                                   target="_blank">
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="#"
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
                                <li class="{{ explode('/', Route::getCurrentRoute()->getUri())[0] == '' ? 'current-menu-item' : '' }}">
                                    <a href="{{ route('site.index') }}">Главная</a>
                                </li>
                                <li class="{{ explode('/', Route::getCurrentRoute()->getUri())[0] == 'uslugi' ? 'current-menu-item' : '' }}">
                                    <a href="{{ route('uslugi') }}">Услуги</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                            <a href="{{ route('yuridicheskoe-konsultirovanie') }}">
                                                Юридическое консультирование
                                            </a>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                            <a href="{{ route('registraciya-predprinimatelej') }}">
                                                Регистрация предпринимателей
                                            </a>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                            <a href="{{ route('registraciya-organizacij') }}">
                                                Регистрация организаций
                                            </a>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                            <a href="{{ route('yuridicheskoe-soprovozhdenie-biznesa') }}">
                                                Юридическое сопровождение бизнеса
                                            </a>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                            <a href="{{ route('predstavitelstvo-v-arbitrazhnyh-sudah') }}">
                                                Представительство в Арбитражных судах
                                            </a>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                            <a href="{{ route('predstavitelstvo-v-sude') }}">
                                                Представительство в суде
                                            </a>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                            <a href="{{ route('podgotovka-yuridicheskih-dokumentov') }}">
                                                Подготовка юридических документов
                                            </a>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                            <a href="{{ route('soprovozhdenie-sdelok-s-nedvizhimostyu') }}">
                                                Сопровождение сделок с недвижимостью
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="#">Акции</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="#">Полезная информация</a>
                                </li>
                                <li class="{{ explode('/', Route::getCurrentRoute()->getUri())[0] == 'kontakty' ? 'current-menu-item' : '' }}">
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
                                        <li id="menu-item-162"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-162">
                                            <a href="{{ route('site.index') }}">Главная страница</a></li>
                                        <li id="menu-item-165"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-165">
                                            <a href="{{ route('uslugi') }}">Услуги</a>
                                        </li>
                                        <li id="menu-item-166"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-166">
                                            <a href="#">Акции</a>
                                        </li>
                                        <li id="menu-item-166"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-166">
                                            <a href="#">Полезная информация</a>
                                        </li>
                                        <li id="menu-item-166"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-166">
                                            <a href="#">Контакты</a>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>

                        <div class="one-third">
                            <aside id="text-9" class="widget widget_text">
                                <h2 class="widget-title">О компани</h2>

                                <div class="textwidget">
                                    ЮК "Торгова и партнеры" - молодая и активно развивающаяся компания. Непрерывное
                                    отслеживание нововведений в области права позволяет заранее предугадывать ходы
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

                                    <p>Телефон: 8 (831) 288-91-28<br>
                                        Мобильный телефон: +7 (999) 079-078-1<br>
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
                                <a title="Нажмите, чтобы позвонить нам." href="tel:2889128">288-91-28</a>
                            </li>
                            <li class="email">
                                <a title="Нажмите, чтобы написать нам."
                                   href="mailto:jurist@ettorgova.ru">jurist@ettorgova.ru</a>
                            </li>
                            <li class="address">
                                <a title="Нажмите, чтобы посмотреть на карте 2gis."
                                   href="http://2gis.ru/n_novgorod/firm/70000001020079197/center/43.920625%2C56.279145/tab/firms/zoom/17"
                                   target="_blank">
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
                                <a href="#"
                                   title="ЮК Торгова и партнёры в Facebook"
                                   target="_blank">
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="#"
                                   title="ЮК Торгова и партнёры в Twitter"
                                   target="_blank">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="copyright">
                        Copyright &copy;
                        <a href="{{ route('site.index') }}"
                           title='Юридическая компания "Торгова и партнёры"'>
                            <span>ЮК "Торгова и партнеры"</span>
                        </a> 2015 | Дизайн компании
                        <a href="http://themehorse.com"
                           target="_blank"
                           title="Theme Horse">
                            <span>Theme Horse</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="back-to-top"><a href="#branding"> </a></div>
        </footer>
    </div>
    <!-- Yandex.Metrika counter --><script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter34003970 = new Ya.Metrika({ id:34003970, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/34003970" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
    </body>
@endsection