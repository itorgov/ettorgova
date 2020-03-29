<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#63C6AE">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <title>Юридическая компания Торгова и партнёры</title>

    <link rel="canonical" href="https://ettorgova.ru"/>
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap&subset=cyrillic">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body class="container">
<header class="header">
    <div class="header__contacts-bg">
        <div class="header__contacts">
            <div class="header__contact">
                <svg class="header__contact-icon">
                    <use xlink:href="{{ asset('img/sprite.svg#icon-phone') }}"></use>
                </svg>
                <a class="header__contact-link" href="tel:+78312889128" title="Нажмите, чтобы позвонить нам.">
                    288-91-28
                </a>
            </div>
            <div class="header__contact">
                <svg class="header__contact-icon">
                    <use xlink:href="{{ asset('img/sprite.svg#icon-mail') }}"></use>
                </svg>
                <a class="header__contact-link" href="mailto:jurist@ettorgova.ru" title="Нажмите, чтобы написать нам.">
                    jurist@ettorgova.ru
                </a>
            </div>
            <div class="header__contact">
                <svg class="header__contact-icon">
                    <use xlink:href="{{ asset('img/sprite.svg#icon-location') }}"></use>
                </svg>
                <a class="header__contact-link"
                   href="https://www.google.ru/maps/place/%D0%AE%D1%80%D0%B8%D0%B4%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F+%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D1%8F+%22%D0%A2%D0%BE%D1%80%D0%B3%D0%BE%D0%B2%D0%B0+%D0%B8+%D0%BF%D0%B0%D1%80%D1%82%D0%BD%D1%91%D1%80%D1%8B%22/@56.2796842,43.9210916,15.75z/data=!4m5!3m4!1s0x0000000000000000:0x974a0c26c216f399!8m2!3d56.2791434!4d43.9224038"
                   title="Нажмите, чтобы посмотреть адрес на карте от Google."
                   target="_blank">
                    Нижний Новгород, проспект Ленина, 51 (с.м. Двигатель Революции)
                </a>
            </div>
            <div class="header__social">
                <div class="social-block">
                    <a class="social-block__link social-block__link--vk"
                       href="https://vk.com/ettorgova"
                       title="ЮК Торгова и партнёры в Вконтакте"
                       target="_blank">
                        <svg>
                            <use xlink:href="{{ asset('img/sprite.svg#icon-vk') }}"></use>
                        </svg>
                    </a>
                    <a class="social-block__link social-block__link--facebook"
                       href="https://www.facebook.com/ettorgova"
                       title="ЮК Торгова и партнёры в Facebook"
                       target="_blank">
                        <svg>
                            <use xlink:href="{{ asset('img/sprite.svg#icon-facebook') }}"></use>
                        </svg>
                    </a>
                    <a class="social-block__link social-block__link--twitter"
                       href="https://twitter.com/ettorgova"
                       title="ЮК Торгова и партнёры в Twitter"
                       target="_blank">
                        <svg>
                            <use xlink:href="{{ asset('img/sprite.svg#icon-twitter') }}"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="header__navigation-bg">
        <div class="header__navigation">
            <img src="{{ asset('img/logotip-yuridicheskoj-kompanii-torgova-i-partnery.svg') }}"
                 alt="Логотип юридической компании Торгова и партнёры"
                 class="header__logo">
            <ul class="header__navigation-list">
                <li class="header__navigation-item">
                    <a href="#" class="header__navigation-link header__navigation-link--active">Главная</a>
                </li>
                <li class="header__navigation-item">
                    <a href="#" class="header__navigation-link">Юридические услуги</a>
                    <ul class="header__navigation-sublist">
                        <li class="header__navigation-subitem">
                            <a href="#" class="header__navigation-sublink">Юридическая консультация</a>
                        </li>
                        <li class="header__navigation-subitem">
                            <a href="#" class="header__navigation-sublink">Подготовка юридических документов</a>
                        </li>
                        <li class="header__navigation-subitem">
                            <a href="#" class="header__navigation-sublink">Сопровождение сделок с недвижимостью</a>
                        </li>
                        <li class="header__navigation-subitem header__navigation-divider"></li>
                        <li class="header__navigation-subitem">
                            <a href="#" class="header__navigation-sublink">Регистрация ИП</a>
                        </li>
                        <li class="header__navigation-subitem">
                            <a href="#" class="header__navigation-sublink">Регистрация ООО</a>
                        </li>
                        <li class="header__navigation-subitem">
                            <a href="#" class="header__navigation-sublink">Юридическое сопровождение бизнеса</a>
                        </li>
                        <li class="header__navigation-subitem header__navigation-divider"></li>
                        <li class="header__navigation-subitem">
                            <a href="#" class="header__navigation-sublink">Представительство в суде</a>
                        </li>
                        <li class="header__navigation-subitem">
                            <a href="#" class="header__navigation-sublink">Представительство в Арбитражных судах</a>
                        </li>
                    </ul>
                </li>
                <li class="header__navigation-item">
                    <a href="#" class="header__navigation-link">Акции и скидки</a>
                </li>
                <li class="header__navigation-item">
                    <a href="#" class="header__navigation-link">Полезная информация</a>
                    <ul class="header__navigation-sublist">
                        <li class="header__navigation-subitem">
                            <a href="#" class="header__navigation-sublink">Статьи, которые мы пишем</a>
                        </li>
                    </ul>
                </li>
                <li class="header__navigation-item">
                    <a href="#" class="header__navigation-link">Контакты</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="header__quote-bg">
        <div class="header__quote">
            <blockquote class="header__quote-text">
                «Право есть возможность делать то, что справедливо»
                <cite class="header__quote-author">Готфрид Вильгельм Лейбниц</cite>
            </blockquote>
        </div>
    </div>
    <div class="header__hero-bg">
        <div class="header__hero"></div>
    </div>
</header>
<section class="features">Features</section>
<section class="articles">Articles</section>
<footer class="footer">Footer</footer>

@if(app()->environment('local'))
    <script src="http://localhost:35729/livereload.js"></script>
@endif
</body>
</html>
