@extends('layouts.master')

@section('meta')
    @parent
@endsection

@section('css')
    @parent
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css'
          href='{{ asset('plugins/contact-form-7/includes/css/styles.css') }}' type='text/css' media='all'>
    <link rel='stylesheet' id='wp-pagenavi-css' href='{{ asset('plugins/wp-pagenavi/pagenavi-css.css') }}'
          type='text/css' media='all'>
    <link rel='stylesheet' id='interface_style-css' href='{{ asset('style.css') }}'
          type='text/css' media='all'>
    <link rel='stylesheet' id='interface-responsive-css' href='{{ asset('css/responsive.css') }}'
          type='text/css' media='all'>
    <link rel='stylesheet' id='google_fonts-css'
          href='//fonts.googleapis.com/css?family=PT+Sans%3A400%2C700italic%2C700%2C400italic&#038;ver=4.3.1'
          type='text/css' media='all'>
    <link rel='stylesheet' id='jetpack_css-css' href='{{ asset('plugins/jetpack/css/jetpack.css') }}'
          type='text/css' media='all'>
    <style type='text/css'>img#wpstats {
            display: none
        }</style>
@endsection

@section('js')
    @parent
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "http://s.w.org/images/core/emoji/72x72/",
            "ext": ".png",
            "source": {"concatemoji": "http://themehorse.com/preview/interface/wp-includes/js/wp-emoji-release.min.js"}
        };
        !function (a, b, c) {
            function d(a) {
                var c = b.createElement("canvas"), d = c.getContext && c.getContext("2d");
                return d && d.fillText ? (d.textBaseline = "top", d.font = "600 32px Arial", "flag" === a ? (d.fillText(String.fromCharCode(55356, 56812, 55356, 56807), 0, 0), c.toDataURL().length > 3e3) : (d.fillText(String.fromCharCode(55357, 56835), 0, 0), 0 !== d.getImageData(16, 16, 1, 1).data[0])) : !1
            }

            function e(a) {
                var c = b.createElement("script");
                c.src = a, c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }

            var f, g;
            c.supports = {simple: d("simple"), flag: d("flag")}, c.DOMReady = !1, c.readyCallback = function () {
                c.DOMReady = !0
            }, c.supports.simple && c.supports.flag || (g = function () {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function () {
                "complete" === b.readyState && c.readyCallback()
            })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <script type='text/javascript' src='{{ asset('js/jquery/jquery.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/jquery/jquery-migrate.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/backtotop.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/scripts.js') }}'></script>
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
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="#">Контакты</a>
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

    <script type='text/javascript' src='{{ asset('plugins/contact-form-7/includes/js/jquery.form.min.js') }}'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var _wpcf7 = {
            "loaderUrl": "http://themehorse.com/preview/interface/wp-content/plugins/contact-form-7/images/ajax-loader.gif",
            "sending": "Sending ..."
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('plugins/contact-form-7/includes/js/scripts.js') }}'></script>
    <script type='text/javascript' src='http://s0.wp.com/wp-content/js/devicepx-jetpack.js?ver=201540'></script>
    <script type='text/javascript' src='{{ asset('js/jquery.cycle.all.min.js') }}'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var interface_slider_value = {
            "transition_effect": "fade",
            "transition_delay": "4000",
            "transition_duration": "1000"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('js/interface-slider-setting.js') }}'></script>
    </body>
@endsection