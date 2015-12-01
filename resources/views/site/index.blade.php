@extends('layouts.site.general')

@section('title', 'Главная')

@section('header')
    <section class="slogan-wrap">
        <div class="container">
            <div class="slogan">«Право есть возможность делать то, что справедливо»
                <span style="text-align: right">Готфрид Вильгельм Лейбниц</span>
            </div>
        </div>
    </section>
    <section class="featured-slider">
        <div class="slider-cycle">
            <div class="slides displayblock">
                <figure>
                    <a href="{{ route('site.index') }}" title='Юридическая компания "Торгова и партнёры"'>
                        <img width="1440" height="500"
                             src="{{ url(config('app.staticUrl') . '/files/featured-img.jpg') }}"
                             class="pngfix wp-post-image"
                             alt='Юридическая компания "Торгова и партнёры"'
                             title='Юридическая компания "Торгова и партнёры"'>
                    </a>
                </figure>
            </div>
            {{--<div class="slides displaynone">--}}
            {{--<figure>--}}
            {{--<a href="{{ route('site.index') }}" title='Юридическая компания "Торгова и партнёры"'>--}}
            {{--<img width="1440" height="500"--}}
            {{--src="{{ url(config('app.staticUrl') . '/files/featured-img-41.jpg') }}"--}}
            {{--class="pngfix wp-post-image"--}}
            {{--alt='Юридическая компания "Торгова и партнёры"'--}}
            {{--title='Юридическая компания "Торгова и партнёры"'>--}}
            {{--</a>--}}
            {{--</figure>--}}
            {{--</div>--}}
        </div>
        <nav id="controllers" class="clearfix">
        </nav>
    </section>
@endsection

@section('content')
    <div id="main">
        <div class="container clearfix">
            <div id="content">
                <section class="widget widget_promotional_bar clearfix">
                    <div class="promotional-text" style="width: 100%">Уважаемые посетители сайта юридической компании "Торгова и партнёры".
                        <span>
                            В настоящий момент наш сайт работает в демонстрационном режиме. Над ним сейчас ведётся активная
                            работа и именно поэтому материалов на сайте в данный момент так мало. По всем интересующим
                            Вас вопросам просим звонить по телефонам, указанным вверху или внизу страницы. Так же можно
                            написать нам на электронную почту, указанную там же.
                        </span>
                    </div>
                </section>
                <section class="widget widget_service">
                    <div class="column clearfix">
                        <div class="one-fourth">
                            <div class="service-item clearfix">
                                <div class="service-icon">
                                    <img width="100" height="100"
                                         src="{{ url(config('app.staticUrl') . '/files/icon-7.jpg') }}"
                                         class="attachment-icon wp-post-image"
                                         alt="Юридическое консультирование">
                                </div>
                                <h3 class="service-title">Юридическое консультирование</h3>
                            </div>
                            <article>
                                <p>
                                    Устные, письменные, выездные консультации с тщательным разбором любых вопросов.
                                    В случае последующего заключения договора для решения рассматриваемого вопроса
                                    консультация входит в стоимость услуг.
                                </p>
                            </article>
                            <a class="more-link" title="Подробнее"
                               href="{{ route('yuridicheskoe-konsultirovanie') }}">Подробнее</a>
                        </div>
                        <div class="one-fourth">
                            <div class="service-item clearfix">
                                <div class="service-icon">
                                    <img width="100" height="100"
                                         src="{{ url(config('app.staticUrl') . '/files/icon-7.jpg') }}"
                                         class="attachment-icon wp-post-image"
                                         alt="Регистрация предпринимателей">
                                </div>
                                <h3 class="service-title">Регистрация предпринимателей</h3>
                            </div>
                            <article>
                                <p>
                                    Полное и частичное сопровождение процесса регистрации гражданина в качестве ИП,
                                    содействие в
                                    подборе видом деятельности регистрируемого ИП, содействие в выборе систем
                                    налогообложения, подготовку необходимого пакета документов, который необходим
                                    для регистрации в качестве индивидуального предпринимателя, сопровождение к
                                    нотариусу и ИФНС.
                                </p>
                            </article>
                            <a class="more-link" title="Подробнее"
                               href="{{ route('registraciya-predprinimatelej') }}">Подробнее</a>
                        </div>
                        <div class="one-fourth clearfix-half">
                            <div class="service-item clearfix">
                                <div class="service-icon">
                                    <img width="100" height="100"
                                         src="{{ url(config('app.staticUrl') . '/files/icon-7.jpg') }}"
                                         class="attachment-icon wp-post-image"
                                         alt="Регистрация организаций">
                                </div>
                                <h3 class="service-title">Регистрация организаций</h3>
                            </div>
                            <article>
                                <p>
                                    Полное и частичное сопровождение процесса регистрации организации, содействие в
                                    подборе видом действительности регистрируемой организации, содействие в выборе
                                    системы налогообложения, подготовка необходимых документов, сопровождение к
                                    нотариусу и ИФНС, консультирование на всех этапах.
                                </p>
                            </article>
                            <a class="more-link" title="Подробнее"
                               href="{{ route('registraciya-organizacij') }}">Подробнее</a>
                        </div>
                        <div class="one-fourth">
                            <div class="service-item clearfix">
                                <div class="service-icon">
                                    <img width="100" height="100"
                                         src="{{ url(config('app.staticUrl') . '/files/icon-7.jpg') }}"
                                         class="attachment-icon wp-post-image"
                                         alt="Юридическое сопровождение бизнеса">
                                </div>
                                <h3 class="service-title">Юридическое сопровождение бизнеса</h3>
                            </div>
                            <article>
                                <p>
                                    Полное и частичное юридическое сопровождение бизнеса. Наша компания предлагает
                                    консультационное абонентское обслуживание, частичное абонентское обслуживание
                                    (анализ и подготовка документов), полное юридическое сопровождение бизнеса.
                                </p>
                            </article>
                            <a class="more-link" title="Подробнее"
                               href="{{ route('yuridicheskoe-soprovozhdenie-biznesa') }}">Подробнее</a>
                        </div>
                        <div class="one-fourth clearfix-half clearfix-fourth">
                            <div class="service-item clearfix">
                                <div class="service-icon">
                                    <img width="100" height="100"
                                         src="{{ url(config('app.staticUrl') . '/files/icon-7.jpg') }}"
                                         class="attachment-icon wp-post-image"
                                         alt="Услуги юриста в арбитраже">
                                </div>
                                <h3 class="service-title">Услуги юриста в арбитраже</h3>
                            </div>
                            <article>
                                <p>
                                    Юридическое сопровождение на всех этапах разрешения сложившейся ситуации. От
                                    внесудебного урегулирования вопроса, до представления интересов в суде
                                    кассационной/надзорной инстанции.
                                </p>
                            </article>
                            <a class="more-link" title="Подробнее"
                               href="{{ route('predstavitelstvo-v-arbitrazhnyh-sudah') }}">Подробнее</a>
                        </div>
                        <div class="one-fourth">
                            <div class="service-item clearfix">
                                <div class="service-icon">
                                    <img width="100" height="100"
                                         src="{{ url(config('app.staticUrl') . '/files/icon-7.jpg') }}"
                                         class="attachment-icon wp-post-image"
                                         alt="Представительство в суде">
                                </div>
                                <h3 class="service-title">Представительство в суде</h3>
                            </div>
                            <article>
                                <p>
                                    Юридическое сопровождение дела на всех этапах рассмотрения спора по существу.
                                    При необходимости оспаривания вынесенного судебного акта (дело рассматривалось с
                                    участием наших сотрудников) скидка 20%.
                                </p>
                            </article>
                            <a class="more-link" title="Подробнее"
                               href="{{ route('predstavitelstvo-v-sude') }}">Подробнее</a>
                        </div>
                        <div class="one-fourth clearfix-half">
                            <div class="service-item clearfix">
                                <div class="service-icon">
                                    <img width="100" height="100"
                                         src="{{ url(config('app.staticUrl') . '/files/icon-7.jpg') }}"
                                         class="attachment-icon wp-post-image"
                                         alt="Составление/анализ документов">
                                </div>
                                <h3 class="service-title">Составление/анализ документов</h3>
                            </div>
                            <article>
                                <p>
                                    Подготовка претензия, писем, заявлений, исковых заявлений, жалоб, ходатайств,
                                    протоколов разногласий, договоров.
                                </p>
                            </article>
                            <a class="more-link" title="Подробнее"
                               href="{{ route('podgotovka-yuridicheskih-dokumentov') }}">Подробнее</a>
                        </div>
                        <div class="one-fourth">
                            <div class="service-item clearfix">
                                <div class="service-icon">
                                    <img width="100" height="100"
                                         src="{{ url(config('app.staticUrl') . '/files/icon-7.jpg') }}"
                                         class="attachment-icon wp-post-image"
                                         alt="Сопровождение сделок с недвижимостью">
                                </div>
                                <h3 class="service-title">Сопровождение сделок с недвижимостью</h3>
                            </div>
                            <article>
                                <p>
                                    Анализ пакета документов для проведения сделок, проверка прав третьих лиц на
                                    приобретаемое имуществом, сопровождение процесса оформления прав на
                                    приобретаемое имущество, участие в процессе приватизации, представление
                                    интересов в госорганах при согласовании переустройства/перепланировки.
                                </p>
                            </article>
                            <a class="more-link" title="Подробнее"
                               href="{{ route('soprovozhdenie-sdelok-s-nedvizhimostyu') }}">Подробнее</a>
                        </div>
                    </div>
                </section>
                <section class="widget widget_promotional_bar clearfix">
                    <div class="promotional-text">Только у нас антикризисная акция!
                            <span>До 25.12.2015г. Представительство в судах всего 4.500 рублей по следующим направлениями:
                                <ul>
                                    <li>споры с банками;</li>
                                    <li>защита прав потребителей;</li>
                                    <li>семейные споры;</li>
                                    <li>возмещение ущерба в результате пролива;</li>
                                    <li>трудовые споры</li>
                                </ul>
                                А также производим регистрацию ООО или ИП бесплатно (оплачивается только госпошлина за регистрацию в ИФНС) при одновременном заключении договора на юридическое обслуживание по любому тарифу в ЮК "Торгова и партнеры".
                            </span>
                    </div>
                    <a class="call-to-action" href="http://themehorse.com/theme-instruction/interface"
                       title="Подробнее">Подробнее</a>
                </section>
                <section class="widget widget_recent_work">
                    <div class="column clearfix">
                        <div class="one-fourth">
                            <h2 class="widget-title">Статьи, которые мы пишем</h2>

                            <p>Последняя написанная статья (здесь будет указано название статьи и несколько
                                строчек)</p>
                            <a class="call-to-action" href="http://themehorse.com/themes" title="View Themes">
                                Узнать подробнее
                            </a>
                        </div>
                        <div class="one-fourth">
                            <a title="Выигранные суды" href="#">
                                <img width="474" height="342"
                                     src="{{ url(config('app.staticUrl') . '/files/tumblr_myebwtELvb1st5lhmo1_1280-474x342.jpg') }}"
                                     class="attachment-gallery wp-post-image"
                                     alt="Выигранные суды">
                            </a>

                            <h3 class="custom-gallery-title">
                                <a href="#" title="">Выигранные суды (судебная практика)</a>
                            </h3>

                            <p>
                                Описание нашей судебной практики и обзор выигранных нами дел.
                            </p>
                        </div>
                        <div class="one-fourth clearfix-half">
                            <a title="Новое в российском законодательстве" href="#">
                                <img width="474" height="342"
                                     src="{{ url(config('app.staticUrl') . '/files/diary-474x342.jpg') }}"
                                     class="attachment-gallery wp-post-image"
                                     alt="Новое в российском законодательстве">
                            </a>

                            <h3 class="custom-gallery-title">
                                <a href="#" title="">Новое в российском законодательстве</a>
                            </h3>

                            <p>
                                Обзоры наиболее важных и интересных документов.
                            </p>
                        </div>
                        <div class="one-fourth">
                            <a title="Задать вопрос нашему юристу" href="#">
                                <img width="474" height="342"
                                     src="{{ url(config('app.staticUrl') . '/files/business-break-474x342.jpg') }}"
                                     class="attachment-gallery wp-post-image"
                                     alt="Задать вопрос нашему юристу">
                            </a>

                            <h3 class="custom-gallery-title">
                                <a href="#" title="">Задать вопрос нашему юристу</a>
                            </h3>

                            <p>
                                Задавайте нам вопросы, не стесняйтесь!
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection