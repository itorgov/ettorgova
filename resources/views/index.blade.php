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
            <input type="checkbox" id="mobile-menu" class="mobile-menu__checkbox">
            <label for="mobile-menu" class="mobile-menu__button">
                <span class="mobile-menu__icon"></span>
            </label>
            <ul class="header__navigation-list">
                <li class="header__navigation-item">
                    <a href="javascript:void(0)" class="header__navigation-link header__navigation-link--active">Главная</a>
                </li>
                <li class="header__navigation-item">
                    <a href="javascript:void(0)" class="header__navigation-link">Юридические услуги</a>
                    <ul class="header__navigation-sublist">
                        <li class="header__navigation-subitem">
                            <a href="javascript:void(0)" class="header__navigation-sublink">Юридическая консультация</a>
                        </li>
                        <li class="header__navigation-subitem">
                            <a href="javascript:void(0)" class="header__navigation-sublink">Подготовка юридических документов</a>
                        </li>
                        <li class="header__navigation-subitem">
                            <a href="javascript:void(0)" class="header__navigation-sublink">Сопровождение сделок с недвижимостью</a>
                        </li>
                        <li class="header__navigation-subitem header__navigation-divider"></li>
                        <li class="header__navigation-subitem">
                            <a href="javascript:void(0)" class="header__navigation-sublink">Регистрация ИП</a>
                        </li>
                        <li class="header__navigation-subitem">
                            <a href="javascript:void(0)" class="header__navigation-sublink">Регистрация ООО</a>
                        </li>
                        <li class="header__navigation-subitem">
                            <a href="javascript:void(0)" class="header__navigation-sublink">Юридическое сопровождение бизнеса</a>
                        </li>
                        <li class="header__navigation-subitem header__navigation-divider"></li>
                        <li class="header__navigation-subitem">
                            <a href="javascript:void(0)" class="header__navigation-sublink">Представительство в суде</a>
                        </li>
                        <li class="header__navigation-subitem">
                            <a href="javascript:void(0)" class="header__navigation-sublink">Представительство в Арбитражных судах</a>
                        </li>
                    </ul>
                </li>
                <li class="header__navigation-item">
                    <a href="javascript:void(0)" class="header__navigation-link">Акции и скидки</a>
                </li>
                <li class="header__navigation-item">
                    <a href="javascript:void(0)" class="header__navigation-link">Полезная информация</a>
                    <ul class="header__navigation-sublist">
                        <li class="header__navigation-subitem">
                            <a href="javascript:void(0)" class="header__navigation-sublink">Статьи, которые мы пишем</a>
                        </li>
                    </ul>
                </li>
                <li class="header__navigation-item">
                    <a href="javascript:void(0)" class="header__navigation-link">Контакты</a>
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
<main class="main">
    <section class="section-features">
        <div class="feature">
            <svg class="feature__icon">
                <use xlink:href="{{ asset('img/sprite.svg#icon-graduation-cap') }}"></use>
            </svg>
            <h3 class="h3">Грамотные юристы</h3>
            <p class="paragraph">
                Все юристы нашей компании окончили юридический факультет ННГУ имени Н. И. Лобачевского и имеют высшее
                образование.
                У них большой опыт работы за плечами, поэтому вы можете не сомневаться в том, что получите грамотную
                юридическую помощь.
            </p>
        </div>
        <div class="feature">
            <svg class="feature__icon">
                <use xlink:href="{{ asset('img/sprite.svg#icon-shield') }}"></use>
            </svg>
            <h3 class="h3">Забота о клиенте</h3>
            <p class="paragraph">
                Мы своевременно информируем своих клиентов о проделанной работе и её результатах.
                Мы очень ценим отношения с каждым своим клиентом и поэтому всегда готовы предоставить индивидуальные
                условия сотрудничества.
                Все наши услуги и расчеты полностью прозрачны.
            </p>
        </div>
        <div class="feature">
            <svg class="feature__icon">
                <use xlink:href="{{ asset('img/sprite.svg#icon-price-tag') }}"></use>
            </svg>
            <h3 class="h3">Честные цены</h3>
            <p class="paragraph">
                Большинство юридических компаний помимо стоимости услуги требуют процент от присуждённых неустоек,
                штрафов и прочих выплат, а то и полностью забирают их себе.
                Мы же берем за свои услуги только оплату за проделанную нами работу.
            </p>
        </div>
        <div class="feature">
            <svg class="feature__icon">
                <use xlink:href="{{ asset('img/sprite.svg#icon-credit-card') }}"></use>
            </svg>
            <h3 class="h3">Безналичная оплата</h3>
            <p class="paragraph">
                Мы принимаем оплату услуг не только наличными, но и безналичным способом.
                На данный момент оплата возможна с помощью банковского перевода, однако в ближайшее время вы сможете
                оплатить консультацию и другие услуги как с помощью банковской карты, так и через наш сайт.
            </p>
        </div>
    </section>
    <section class="section-articles">
        <div class="last-article-preview">
            <h2 class="h2">Статьи, которые мы пишем</h2>
            <p class="paragraph mb-1">
                Проконсультировавшись с юристом по семейному праву, можно избежать многих ошибок в непростых ситуациях,
                которые вредят в дальнейших разбирательствах.
            </p>
            <a href="javascript:void(0)" class="btn">Читать статью</a>
        </div>
        <div class="articles-section">
            <img
                class="articles-section__image"
                sizes="(max-width: 31.25em) 93vw, (max-width: 56.25em) 45vw, (max-width: 62.5em) 21vw, 265px"
                srcset="
                    {{ asset('img/vyigrannye-sudy-sudebnaya-praktika_210px.jpg') }} 210w,
                    {{ asset('img/vyigrannye-sudy-sudebnaya-praktika_265px.jpg') }} 265w,
                    {{ asset('img/vyigrannye-sudy-sudebnaya-praktika_420px.jpg') }} 420w,
                    {{ asset('img/vyigrannye-sudy-sudebnaya-praktika_464px.jpg') }} 464w,
                    {{ asset('img/vyigrannye-sudy-sudebnaya-praktika_530px.jpg') }} 530w,
                    {{ asset('img/vyigrannye-sudy-sudebnaya-praktika_928px.jpg') }} 928w"
                src="{{ asset('img/vyigrannye-sudy-sudebnaya-praktika_530px.jpg') }}"
                alt="Выигранные суды (судебная практика)">
            <a href="javascript:void(0)" class="h3 h3--link">Выигранные суды (судебная практика)</a>
            <p class="paragraph">
                Описание нашей судебной практики и обзор выигранных нами дел.
            </p>
        </div>
        <div class="articles-section">
            <img
                class="articles-section__image"
                sizes="(max-width: 31.25em) 93vw, (max-width: 56.25em) 45vw, (max-width: 62.5em) 21vw, 265px"
                srcset="
                    {{ asset('img/novoe-v-rossijskom-zakonodatelstve_210px.jpg') }} 210w,
                    {{ asset('img/novoe-v-rossijskom-zakonodatelstve_265px.jpg') }} 265w,
                    {{ asset('img/novoe-v-rossijskom-zakonodatelstve_420px.jpg') }} 420w,
                    {{ asset('img/novoe-v-rossijskom-zakonodatelstve_464px.jpg') }} 464w,
                    {{ asset('img/novoe-v-rossijskom-zakonodatelstve_530px.jpg') }} 530w,
                    {{ asset('img/novoe-v-rossijskom-zakonodatelstve_928px.jpg') }} 928w"
                src="{{ asset('img/novoe-v-rossijskom-zakonodatelstve_530px.jpg') }}"
                alt="Новое в Российском законодательстве">
            <a href="javascript:void(0)" class="h3 h3--link">Новое в Российском законодательстве</a>
            <p class="paragraph">
                Обзоры наиболее важных и интересных документов.
            </p>
        </div>
        <div class="articles-section">
            <img
                class="articles-section__image"
                sizes="(max-width: 31.25em) 93vw, (max-width: 56.25em) 45vw, (max-width: 62.5em) 21vw, 265px"
                srcset="
                    {{ asset('img/zadat-vopros-yuristu_210px.jpg') }} 210w,
                    {{ asset('img/zadat-vopros-yuristu_265px.jpg') }} 265w,
                    {{ asset('img/zadat-vopros-yuristu_420px.jpg') }} 420w,
                    {{ asset('img/zadat-vopros-yuristu_464px.jpg') }} 464w,
                    {{ asset('img/zadat-vopros-yuristu_530px.jpg') }} 530w,
                    {{ asset('img/zadat-vopros-yuristu_928px.jpg') }} 928w"
                src="{{ asset('img/zadat-vopros-yuristu_530px.jpg') }}"
                alt="Задать вопрос нашему юристу">

            <a href="javascript:void(0)" class="h3 h3--link">Задать вопрос нашему юристу</a>
            <p class="paragraph">
                Задавайте нам вопросы онлайн, не стесняйтесь!
            </p>
        </div>
    </section>
</main>
<footer class="footer">
    <div class="footer__info-bg">
        <div class="footer__info">
            <div>
                <h3 class="h3 h3--light">Разделы сайта</h3>
                <ul class="footer__nav-list">
                    <li class="footer__nav-item">
                        <a href="javascript:void(0)" class="footer__nav-link">Главная</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="javascript:void(0)" class="footer__nav-link">Юридические услуги</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="javascript:void(0)" class="footer__nav-link">Акции и скидки</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="javascript:void(0)" class="footer__nav-link">Статьи, которые мы пишем</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="javascript:void(0)" class="footer__nav-link">Контакты</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="h3 h3--light">О компании</h3>
                <p>
                    Юридическая компания "Торгова и партнёры" – профессиональная и современная юридическая компания.
                    Постоянный мониторинг изменений в законодательстве позволяет нам заранее предугадывать ходы для
                    решения ваших вопросов.
                    Мы оказываем юридические услуги гражданам и юридическим лицам и предоставляем самые разные варианты
                    сотрудничества - как разовое сопровождение, так и комплексная юридическая помощь с возможностью
                    абонентского обслуживания.
                    Мы стараемся понять вашу проблему и подобрать возможные пути решения.
                </p>
            </div>
            <div>
                <h3 class="h3 h3--light">Контактная информация</h3>
                <p class="mb-1">
                    Юридическая компания "Торгова и партнёры".<br>
                    603135, г. Нижний Новгород, пр-кт Ленина, д. 51, офис 3 (возле станции метро "Двигатель Революции").
                </p>
                <p>
                    Телефон: <a class="footer__link" href="tel:+78312889128">8 (831) 288-91-28</a><br>
                    Мобильный телефон: <a class="footer__link" href="tel:+79990790781">+7 (999) 079-078-1</a><br>
                    Email: <a class="footer__link" href="mailto:jurist@ettorgova.ru">jurist@ettorgova.ru</a><br>
                    Сайт: <a class="footer__link" href="{{ config('app.url') }}">ettorgova.ru</a>
                </p>
            </div>
        </div>
    </div>
    <div class="footer__contacts">
        <div class="footer__contact">
            <svg class="footer__contact-icon">
                <use xlink:href="{{ asset('img/sprite.svg#icon-phone') }}"></use>
            </svg>
            <a class="footer__contact-link" href="tel:+78312889128" title="Нажмите, чтобы позвонить нам.">
                288-91-28
            </a>
        </div>
        <div class="footer__contact">
            <svg class="footer__contact-icon">
                <use xlink:href="{{ asset('img/sprite.svg#icon-mail') }}"></use>
            </svg>
            <a class="footer__contact-link" href="mailto:jurist@ettorgova.ru" title="Нажмите, чтобы написать нам.">
                jurist@ettorgova.ru
            </a>
        </div>
        <div class="footer__contact">
            <svg class="footer__contact-icon">
                <use xlink:href="{{ asset('img/sprite.svg#icon-location') }}"></use>
            </svg>
            <a class="footer__contact-link"
               href="https://www.google.ru/maps/place/%D0%AE%D1%80%D0%B8%D0%B4%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F+%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D1%8F+%22%D0%A2%D0%BE%D1%80%D0%B3%D0%BE%D0%B2%D0%B0+%D0%B8+%D0%BF%D0%B0%D1%80%D1%82%D0%BD%D1%91%D1%80%D1%8B%22/@56.2796842,43.9210916,15.75z/data=!4m5!3m4!1s0x0000000000000000:0x974a0c26c216f399!8m2!3d56.2791434!4d43.9224038"
               title="Нажмите, чтобы посмотреть адрес на карте от Google."
               target="_blank">
                Нижний Новгород, проспект Ленина, 51 (с.м. Двигатель Революции)
            </a>
        </div>
    </div>
    <div class="footer__copyright-bg">
        <div class="footer__copyright">
            <p class="footer__copyright-text">
                Copyright ©
                <a href="{{ config('app.url') }}" class="footer__copyright--link">ЮК "Торгова и партнеры"</a>
                2015 - 2020 | Дизайн компании
                <a href="http://themehorse.com/" class="footer__copyright--link" target="_blank">Theme Horse</a>
            </p>
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
</footer>

@if(app()->environment('local'))
    <script src="http://localhost:35729/livereload.js"></script>
@endif
</body>
</html>
