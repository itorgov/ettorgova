@extends('layouts.site.general')

@section('title', 'Юридическая компания Торгова и партнёры')

@section('page-type', 'website')
@section('page-keywords', 'юридическая компания, юридическая фирма, юридическая контора, торгова и партнёры, торгова и партнеры')
@section('page-description', 'Юридическая компания Торгова и партнёры – профессиональная и современная юридическая компания.')

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
                <section class="widget widget_service">
                    <div class="column clearfix">
                        <div class="one-fourth">
                            <div class="service-item clearfix">
                                <h3 class="service-title">Грамотные юристы</h3>
                            </div>
                            <article>
                                <p>
                                    Все юристы нашей компании окончили юридический факультет ННГУ имени Н. И.
                                    Лобачевского и имеют высшее образование. У них большой опыт работы за плечами,
                                    поэтому вы можете не сомневаться в том, что получите грамотную юридическую помощь.
                                </p>
                            </article>
                        </div>
                        <div class="one-fourth">
                            <div class="service-item clearfix">
                                <h3 class="service-title">Забота о клиенте</h3>
                            </div>
                            <article>
                                <p>
                                    Мы своевременно информируем своих клиентов о проделанной работе и её результатах. Мы
                                    очень ценим отношения с каждым своим клиентом и поэтому всегда готовы предоставить
                                    индивидуальные условия сотрудничества. Все наши услуги и расчеты полностью
                                    прозрачны.
                                </p>
                            </article>
                        </div>
                        <div class="one-fourth clearfix-half">
                            <div class="service-item clearfix">
                                <h3 class="service-title">Честные цены</h3>
                            </div>
                            <article>
                                <p>
                                    Большинство юридических компаний помимо стоимости услуги требуют процент от
                                    присуждённых неустоек, штрафов и прочих выплат, а то и полностью забирают их себе.
                                    Мы же берем за свои услуги только оплату за проделанную нами работу.
                                </p>
                            </article>
                        </div>
                        <div class="one-fourth">
                            <div class="service-item clearfix">
                                <h3 class="service-title">Безналичная оплата</h3>
                            </div>
                            <article>
                                <p>
                                    Мы принимаем оплату услуг не только наличными, но и безналичным способом. На данный
                                    момент оплата возможна с помощью банковского перевода, однако в ближайшее время вы
                                    сможете оплатить консультацию и другие услуги как с помощью банковской карты, так и
                                    через наш сайт.
                                </p>
                            </article>
                        </div>
                    </div>
                </section>
                <section class="widget widget_recent_work">
                    <div class="column clearfix">
                        <div class="one-fourth">
                            <h3 class="widget-title">Статьи, которые мы пишем</h3>
                            <p>
                                Проконсультировавшись с юристом по семейному праву, можно избежать многих ошибок в
                                непростых ситуациях, которые вредят в дальнейших разбирательствах.
                            </p>
                            <a class="call-to-action"
                               href="{{ route('stati', ['name' => 'yurist-po-semejnym-delam']) }}"
                               title="Читать статью">
                                Читать статью
                            </a>
                        </div>
                        <div class="one-fourth">
                            <a title="Выигранные суды (судебная практика)" href="{{ route('sudebnayaPraktika') }}">
                                <img width="474" height="342"
                                     src="{{ url(config('app.staticUrl') . '/files/vyigrannye-sudy-sudebnaya-praktika.jpg') }}"
                                     alt="Судебная практика">
                            </a>

                            <h3 class="custom-gallery-title">
                                <a href="{{ route('sudebnayaPraktika') }}"
                                   title="Посмотреть судебную практику юридической компании Торгова и партнёры">Выигранные
                                    суды (судебная практика)</a>
                            </h3>

                            <p>
                                Описание нашей судебной практики и обзор выигранных нами дел.
                            </p>
                        </div>
                        <div class="one-fourth clearfix-half">
                            <a title="Новое в российском законодательстве" href="{{ route('novosti') }}">
                                <img width="474" height="342"
                                     src="{{ url(config('app.staticUrl') . '/files/novoe-v-rossijskom-zakonodatelstve.jpg') }}"
                                     alt="Новое в российском законодательстве">
                            </a>

                            <h3 class="custom-gallery-title">
                                <a href="{{ route('novosti') }}"
                                   title="Узнать последние изменения в российском законодательстве">Новое в российском
                                    законодательстве</a>
                            </h3>

                            <p>
                                Обзоры наиболее важных и интересных документов.
                            </p>
                        </div>
                        <div class="one-fourth">
                            <a title="Задать вопрос нашему юристу" href="{{ route('online') }}">
                                <img width="474" height="342"
                                     src="{{ url(config('app.staticUrl') . '/files/zadat-vopros-yuristu.jpg') }}"
                                     alt="Задать вопрос юристу">
                            </a>

                            <h3 class="custom-gallery-title">
                                <a href="{{ route('online') }}" title="Задайте вопрос нашим юристам в режиме онлайн">Задать
                                    вопрос нашему юристу</a>
                            </h3>

                            <p>
                                Задавайте нам вопросы онлайн, не стесняйтесь!
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection