@extends('layouts.site.general')

@section('title', 'Юридическая компания Торгова и партнёры')

@section('page-keywords', 'юридическая компания, торгова и партнёры, торгова и партнеры, юридические услуги, услуги юриста, помощь юриста')
@section('page-description', 'ЮК Торгова и партнёры - профессиональная и современная юридическая компания. Мы оказываем юридические услуги гражданам и юридическим лицам, предлагаем различные варианты сотрудничества - от разового сопровождения до комплексной юридической помощи.')

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
                             src="{{ url(config('app.staticUrl') . '/files/yuridicheskaya-kompaniya-torgova-i-partnyory-home-page.jpg') }}"
                             class="pngfix wp-post-image"
                             alt='Юридическая компания "Торгова и партнёры"'
                             title='Юридическая компания "Торгова и партнёры"'>
                    </a>
                </figure>
            </div>
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
                            В настоящий момент наш сайт работает в демонстрационном режиме. Над ним сейчас ведётся
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
                                <h3 class="service-title">Юридическая консультация</h3>
                            </div>
                            <article>
                                <p>
                                    Устные, письменные, выездные консультации с тщательным анализом и подбором оптимальных
                                    вариантов решения любых вопросов. В услуги компании так же входит участие в переговорах
                                    с контрагентами. В случае последующего заключения договора на юридическое сопровождение
                                    клиента по данному вопросу консультация входит в стоимость услуги.
                                </p>
                            </article>
                            <a class="more-link" title="Подробнее"
                               href="{{ route('uslugi', ['name' => 'yuridicheskaya-konsultaciya']) }}">Подробнее</a>
                        </div>
                        <div class="one-fourth">
                            <div class="service-item clearfix">
                                <h3 class="service-title">Регистрация ИП</h3>
                            </div>
                            <article>
                                <p>
                                    Полное или частичное сопровождение процесса регистрации гражданина в качестве ИП,
                                    содействие в подборе видов деятельности регистрируемого ИП, содействие в выборе систем
                                    налогообложения, подготовка пакета документов для государственной регистрации,
                                    сопровождение к нотариусу и в ИФНС, консультирование на первых этапах работы в качестве ИП.
                                </p>
                            </article>
                            <a class="more-link" title="Подробнее"
                               href="{{ route('uslugi', ['name' => 'registraciya-ip']) }}">Подробнее</a>
                        </div>
                        <div class="one-fourth clearfix-half">
                            <div class="service-item clearfix">
                                <h3 class="service-title">Регистрация ООО</h3>
                            </div>
                            <article>
                                <p>
                                    Полное или частичное сопровождение процесса регистрации организации (ООО), содействие в подборе
                                    видов действительности регистрируемой организации, содействие в выборе системы
                                    налогообложения, подготовка пакета документов для государственной регистрации, сопровождение
                                    к нотариусу и в ИФНС, консультирование на всех этапах регистрации.
                                </p>
                            </article>
                            <a class="more-link" title="Подробнее"
                               href="{{ route('uslugi', ['name' => 'registraciya-ooo']) }}">Подробнее</a>
                        </div>
                        <div class="one-fourth">
                            <div class="service-item clearfix">
                                <h3 class="service-title">Юридическое сопровождение бизнеса</h3>
                            </div>
                            <article>
                                <p>
                                    Полное или частичное юридическое сопровождение бизнеса. Наша компания предлагает
                                    консультационное абонентское обслуживание, частичное абонентское обслуживание
                                    (анализ и подготовка документов), полное юридическое сопровождение бизнеса
                                    (от консультирования до представительства интересов клиента в суде).
                                </p>
                            </article>
                            <a class="more-link" title="Подробнее"
                               href="{{ route('uslugi', ['name' => 'yuridicheskoe-soprovozhdenie-biznesa']) }}">Подробнее</a>
                        </div>
                        <div class="one-fourth clearfix-half clearfix-fourth">
                            <div class="service-item clearfix">
                                <h3 class="service-title">Услуги юриста в арбитраже</h3>
                            </div>
                            <article>
                                <p>
                                    Юридическое сопровождение клиента на всех этапах разрешения сложившейся ситуации.
                                    От внесудебного урегулирования вопроса (претензионная работа), до представления
                                    интересов в суде первой/апелляционной/кассационной/надзорной инстанции. При заключение
                                    договора на представительство интересов в суде претензионная работа включается в
                                    стоимость оказываемой услуги.
                                </p>
                            </article>
                            <a class="more-link" title="Подробнее"
                               href="{{ route('uslugi', ['name' => 'predstavitelstvo-v-arbitrazhnyh-sudah']) }}">Подробнее</a>
                        </div>
                        <div class="one-fourth">
                            <div class="service-item clearfix">
                                <h3 class="service-title">Представительство в суде</h3>
                            </div>
                            <article>
                                <p>
                                    Юридическое сопровождение клиента на всех этапах разрешения вопроса. При
                                    необходимости в услугу включается внесудебное урегулирование вопроса (претензионная работа).
                                    В случае оспаривания вынесенного судебного акта (дело рассматривалось с участием наших
                                    сотрудников) клиенту предоставляется скидка в размере 20% на каждую из вышестоящих инстанций.
                                </p>
                            </article>
                            <a class="more-link" title="Подробнее"
                               href="{{ route('uslugi', ['name' => 'predstavitelstvo-v-sude']) }}">Подробнее</a>
                        </div>
                        <div class="one-fourth clearfix-half">
                            <div class="service-item clearfix">
                                <h3 class="service-title">Составление/анализ документов</h3>
                            </div>
                            <article>
                                <p>
                                    Подготовка претензий, заявлений, исковых заявлений, жалоб, ходатайств, протоколов
                                    разногласий, договоров. При дальнейшем сопровождении клиента стоимость уже оказанной
                                    услуги вычитается из последующей. Анализ документов и составление письменного
                                    развернутого юридического заключения по представленным материалам с предложением
                                    вариантов решения вопроса.
                                </p>
                            </article>
                            <a class="more-link" title="Подробнее"
                               href="{{ route('uslugi', ['name' => 'podgotovka-yuridicheskih-dokumentov']) }}">Подробнее</a>
                        </div>
                        <div class="one-fourth">
                            <div class="service-item clearfix">
                                <h3 class="service-title">Сопровождение сделок с недвижимостью</h3>
                            </div>
                            <article>
                                <p>
                                    Анализ предмета сделки, мониторинг рынка, сбор необходимых документов, проверка прав
                                    третьих лиц на приобретаемое имущество, проверка "репутации" продавца (по долевому
                                    участию в строительстве), сопровождение процесса оформления прав на приобретаемое
                                    имущество, участие в процессе приватизации, представление интересов в гос. органах
                                    при согласовании переустройства/перепланировки.
                                </p>
                            </article>
                            <a class="more-link" title="Подробнее"
                               href="{{ route('uslugi', ['name' => 'soprovozhdenie-sdelok-s-nedvizhimostyu']) }}">Подробнее</a>
                        </div>
                    </div>
                </section>
                <section class="widget widget_promotional_bar clearfix">
                    <div class="promotional-text">Только у нас антикризисная акция!
                            <span>До 1 августа 2016 года представительство в судах всего 4000 рублей по следующим направлениями:
                                <ul>
                                    <li>защита прав потребителей;</li>
                                    <li>семейные споры;</li>
                                    <li>взыскание задолженности;</li>
                                    <li>возмещение ущерба;</li>
                                    <li>взыскание страхового возмещения;</li>
                                    <li>трудовые споры.</li>
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

                            <p>
                                Может ли случиться ситуация, когда работодатель отказывается выдать трудовую книжку работнику?
                                Может и не выдать – ответите Вы, однако законны ли такие действия?
                            </p>
                            <a class="call-to-action"
                               href="{{ route('stati', ['name' => 'ne-vydacha-trudovoj-knizhki-rabotniku-pri-uvolnenii']) }}"
                               title="Читать статью">
                                Читать статью
                            </a>
                        </div>
                        <div class="one-fourth">
                            <a title="Выигранные суды (судебная практика)" href="#">
                                <img width="474" height="342"
                                     src="{{ url(config('app.staticUrl') . '/files/vyigrannye-sudy-sudebnaya-praktika.jpg') }}"
                                     alt="Судебная практика">
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
                                     src="{{ url(config('app.staticUrl') . '/files/novoe-v-rossijskom-zakonodatelstve.jpg') }}"
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
                                     src="{{ url(config('app.staticUrl') . '/files/zadat-vopros-yuristu.jpg') }}"
                                     alt="Задать вопрос юристу">
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