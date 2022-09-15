@inject('routeHelper', 'App\Services\RouteHelper')
@extends('layouts.master')

@section('meta')
    @parent
    <meta name="Keywords" content="@yield('page-keywords')"/>
    <meta name="Description" content="@yield('page-description')"/>
    <meta property="og:title" content="@yield('title') - юридическая компания «Торгова и партнёры»"/>
    <meta property="og:description" content="@yield('page-description')"/>
    <meta property="og:url" content="@yield('page-description')"/>
    <meta property="og:type" content="@yield('page-type')"/>
@endsection

@section('css')
    @parent
    <link rel="stylesheet" href="{{ url(config('app.staticUrl') . '/css/all.css') }}" type="text/css" media="all">
@endsection

@section('js')
    @parent
    <script type="text/javascript" async src="{{ url(config('app.staticUrl') . '/js/all.js') }}"></script>
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
                                <a title="Нажмите, чтобы позвонить нам."
                                   href="tel:+78312889128"
                                   onclick="yaCounter34003970.reachGoal('make_call_to_ip_phone'); return true;">
                                    288-91-28
                                </a>
                            </li>
                            <li class="email">
                                <a title="Нажмите, чтобы написать нам на электронную почту."
                                   href="mailto:jurist@ettorgova.ru">jurist@ettorgova.ru</a>
                            </li>
                            <li class="address">
                                <a title="Нажмите, чтобы посмотреть адрес на карте от Google."
                                   href="https://www.google.ru/maps/place/%D0%AE%D1%80%D0%B8%D0%B4%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F+%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D1%8F+%22%D0%A2%D0%BE%D1%80%D0%B3%D0%BE%D0%B2%D0%B0+%D0%B8+%D0%BF%D0%B0%D1%80%D1%82%D0%BD%D1%91%D1%80%D1%8B%22/@56.2796842,43.9210916,15.75z/data=!4m5!3m4!1s0x0000000000000000:0x974a0c26c216f399!8m2!3d56.2791434!4d43.9224038"
                                   target="_blank"
                                   onclick="yaCounter34003970.reachGoal('click_on_google_map'); return true;">
                                    Нижний Новгород, проспект Ленина, 51 (с.м. Двигатель Революции)
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="social-profiles clearfix">
                        <!--<ul>
                            <li class="vk">
                                <a href="https://vk.com/ettorgova"
                                   title="ЮК Торгова и партнёры в Вконтакте"
                                   onclick="yaCounter34003970.reachGoal('vk_social_button'); return true;"
                                   target="_blank">
                                </a>
                            </li>
                            <li class="facebook">
                                <a href="https://www.facebook.com/ettorgova"
                                   title="ЮК Торгова и партнёры в Facebook"
                                   onclick="yaCounter34003970.reachGoal('facebook_social_button'); return true;"
                                   target="_blank">
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="https://twitter.com/ettorgova"
                                   title="ЮК Торгова и партнёры в Twitter"
                                   onclick="yaCounter34003970.reachGoal('twitter_social_button'); return true;"
                                   target="_blank">
                                </a>
                            </li>
                        </ul>-->
                    </div>
                </div>
            </div>
            <div class="hgroup-wrap">
                <div class="container clearfix">
                    <section id="site-logo">
                        <object width="285"
                                height="55"
                                data="{{ url(config('app.staticUrl') . '/files/logotip-yuridicheskoj-kompanii-torgova-i-partnery.svg') }}">
                            <img width="285"
                                 height="55"
                                 src="{{ url(config('app.staticUrl') . '/files/logotip-yuridicheskoj-kompanii-torgova-i-partnery.png') }}"/>
                        </object>
                    </section>
                    <button class="menu-toggle">Меню</button>
                    <section class="hgroup-right">
                        <nav id="access" class="clearfix">
                            <ul class="nav-menu">
                                <li class="{{ $routeHelper->checkActiveMenuItem('', 'current-menu-item') }}">
                                    <a href="{{ route('site.index') }}">Главная</a>
                                </li>
                                <li class="{{ $routeHelper->checkActiveMenuItem('uslugi', 'current-menu-item') }}">
                                    <a href="{{ route('uslugi') }}">Юридические услуги</a>
                                    <ul class="sub-menu">
                                        <li class="{{ $routeHelper->checkActiveMenuItem('yuridicheskaya-konsultaciya', 'current-menu-item', 1) }}">
                                            <a href="{{ route('uslugi', ['name' => 'yuridicheskaya-konsultaciya']) }}">
                                                Юридическая консультация
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
                                        <li>
                                            <hr>
                                        </li>
                                        <li class="{{ $routeHelper->checkActiveMenuItem('registraciya-ip', 'current-menu-item', 1) }}">
                                            <a href="{{ route('uslugi', ['name' => 'registraciya-ip']) }}">
                                                Регистрация ИП
                                            </a>
                                        </li>
                                        <li class="{{ $routeHelper->checkActiveMenuItem('registraciya-ooo', 'current-menu-item', 1) }}">
                                            <a href="{{ route('uslugi', ['name' => 'registraciya-ooo']) }}">
                                                Регистрация ООО
                                            </a>
                                        </li>
                                        <li class="{{ $routeHelper->checkActiveMenuItem('yuridicheskoe-soprovozhdenie-biznesa', 'current-menu-item', 1) }}">
                                            <a href="{{ route('uslugi', ['name' => 'yuridicheskoe-soprovozhdenie-biznesa']) }}">
                                                Юридическое сопровождение бизнеса
                                            </a>
                                        </li>
                                        <li>
                                            <hr>
                                        </li>
                                        <li class="{{ $routeHelper->checkActiveMenuItem('predstavitelstvo-v-sude', 'current-menu-item', 1) }}">
                                            <a href="{{ route('uslugi', ['name' => 'predstavitelstvo-v-sude']) }}">
                                                Представительство в суде
                                            </a>
                                        </li>
                                        <li class="{{ $routeHelper->checkActiveMenuItem('predstavitelstvo-v-arbitrazhnyh-sudah', 'current-menu-item', 1) }}">
                                            <a href="{{ route('uslugi', ['name' => 'predstavitelstvo-v-arbitrazhnyh-sudah']) }}">
                                                Представительство в Арбитражных судах
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a href="{{ route('skidki') }}">Акции и скидки</a>
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
                                <span class="widget-title">Разделы сайта</span>

                                <div class="menu-secondary-menu-container">
                                    <ul id="menu-secondary-menu" class="menu">
                                        <li>
                                            <a href="{{ route('site.index') }}">Главная страница</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('uslugi') }}">Юридические услуги</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('skidki') }}">Акции и скидки</a>
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
                                <span class="widget-title">О компании</span>

                                <div class="textwidget">
                                    Юридическая компания "Торгова и партнёры" – профессиональная и современная
                                    юридическая компания. Постоянный мониторинг изменений в законодательстве позволяет
                                    нам заранее предугадывать ходы для решения ваших вопросов.
                                    Мы оказываем юридические услуги гражданам и юридическим лицам и предоставляем самые
                                    разные варианты сотрудничества - как разовое сопровождение, так и комплексная
                                    юридическая помощь с возможностью абонентского обслуживания. Мы стараемся понять
                                    вашу проблему и подобрать возможные пути решения.
                                </div>
                            </aside>
                        </div>

                        <div class="one-third">
                            <aside id="text-3" class="widget widget_text">
                                <span class="widget-title">Контактная информация</span>

                                <div class="textwidget">
                                    <p>Юридическая компания <strong>"Торгова и партнёры"</strong><br>
                                        603135, Нижний Новгород, проспект Ленина, 51, офис 3 (возле станции метро
                                        "Двигатель
                                        Революции")
                                    </p>

                                    <p>Телефон:
                                        <a title="Нажмите, чтобы позвонить нам."
                                           href="tel:+78312889128"
                                           onclick="yaCounter34003970.reachGoal('make_call_to_ip_phone'); return true;">
                                            8 (831) 288-91-28
                                        </a>
                                        <br>
                                        Мобильный телефон:
                                        <a title="Нажмите, чтобы позвонить нам."
                                           href="tel:+79990790781"
                                           onclick="yaCounter34003970.reachGoal('make_call_to_mobile_phone'); return true;">
                                            +7 (999) 079-078-1
                                        </a>
                                        <br>
                                        Email:
                                        <a href="mailto:jurist@ettorgova.ru"
                                           title="Нажмите, чтобы написать нам на электронную почту.">
                                            jurist@ettorgova.ru
                                        </a>
                                        <br>
                                        Сайт:
                                        <a href="{{ route('site.index') }}" target="_blank"
                                           title="Посетить наш сайт">
                                            ettorgova.ru
                                        </a>
                                    </p>
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
                                <a title="Нажмите, чтобы позвонить нам."
                                   href="tel:+78312889128"
                                   onclick="yaCounter34003970.reachGoal('make_call_to_ip_phone'); return true;">
                                    288-91-28
                                </a>
                            </li>
                            <li class="email">
                                <a title="Нажмите, чтобы написать нам на электронную почту."
                                   href="mailto:jurist@ettorgova.ru">jurist@ettorgova.ru</a>
                            </li>
                            <li class="address">
                                <a title="Нажмите, чтобы посмотреть адрес на карте от Google."
                                   href="https://www.google.ru/maps/place/%D0%AE%D1%80%D0%B8%D0%B4%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F+%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D1%8F+%22%D0%A2%D0%BE%D1%80%D0%B3%D0%BE%D0%B2%D0%B0+%D0%B8+%D0%BF%D0%B0%D1%80%D1%82%D0%BD%D1%91%D1%80%D1%8B%22/@56.2796842,43.9210916,15.75z/data=!4m5!3m4!1s0x0000000000000000:0x974a0c26c216f399!8m2!3d56.2791434!4d43.9224038"
                                   target="_blank"
                                   onclick="yaCounter34003970.reachGoal('click_on_google_map'); return true;">
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
                        <!--<ul>
                            <li class="vk">
                                <a href="https://vk.com/ettorgova"
                                   title="ЮК Торгова и партнёры в Вконтакте"
                                   onclick="yaCounter34003970.reachGoal('vk_social_button'); return true;"
                                   target="_blank">
                                </a>
                            </li>
                            <li class="facebook">
                                <a href="https://www.facebook.com/ettorgova"
                                   title="ЮК Торгова и партнёры в Facebook"
                                   onclick="yaCounter34003970.reachGoal('facebook_social_button'); return true;"
                                   target="_blank">
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="https://twitter.com/ettorgova"
                                   title="ЮК Торгова и партнёры в Twitter"
                                   onclick="yaCounter34003970.reachGoal('twitter_social_button'); return true;"
                                   target="_blank">
                                </a>
                            </li>
                        </ul>-->
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
            <div class="back-to-top"><a href="#branding"></a></div>
        </footer>
    </div>
    @if (App::environment('production'))
        <!-- Yandex.Metrika counter -->
        <noscript>
            <div>
                <img src="https://mc.yandex.ru/watch/34003970" style="position:absolute; left:-9999px;" alt=""/>
            </div>
        </noscript>
        <!-- /Yandex.Metrika counter -->
    @endif
    </body>
@endsection