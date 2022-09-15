@extends('layouts.site.general')

@section('title', 'Регистрация ООО')

@section('page-type', 'article')
@section('page-keywords', 'регистрация ооо, регистрация юридического лица, регистрация организации, регистрация общества с ограниченной ответственностью')
@section('page-description', 'Сопровождение процесса регистрации ООО, содействие в подборе видов действительности, содействие в выборе системы налогообложения, подготовка пакета документов для государственной регистрации.')

@section('header')
    <div class="page-title-wrap">
        <div class="container clearfix">
            <div class="breadcrumb">
                <span>
                    <a title="Главная страница" href="{{ route('site.index') }}">Главная страница</a>
                </span> /
                <span>
                    <a title="Услуги" href="{{ route('uslugi') }}">Услуги</a>
                </span> /
                <span>
                    <span>Регистрация ООО</span>
                </span>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div id="main">
        <div class="container clearfix">
            <div id="content">
                <section class="service-description">
                    <article>
                        <header>
                            <h1>Регистрация ООО</h1>
                        </header>
                        <div class="entry-content">
                            <p>
                                Если вы хотите зарегистрировать юридическое лицо, но затрудняетесь определиться с организационно-правовой формой, то мы советуем вам выбрать общество с ограниченной ответственностью (ООО). Оно является самой простым и выгодным для учредителей.
                            </p>

                            <p>
                                Наши специалисты отслеживают все изменения в действующем законодательстве и при необходимости своевременно вносят соответствующие изменения в подготавливаемые документы.
                            </p>

                            <p>
                                Мы оптимизируем работу конкретно под каждого клиента, чтобы регистрация ООО прошла в кратчайшие сроки. Кроме того, мы стараемся информировать своих клиентов о каждом шаге проведенной работы, поэтому вы всегда будете знать на каком этапе находится регистрация вашего общества с ограниченной ответственностью.
                            </p>

                            <p>
                                Юридическая компания "Торгова и партнёры" предлагает 2 пакета услуг по регистрации ООО в Нижнем Новгороде.
                            </p>

                            <hr>

                            <h2>
                                Пакет услуг «Стандартный»
                            </h2>

                            <p>
                                Стоимость услуги <strong>3000 рублей</strong>. Срок оказания услуги <strong>от 1 до 2 рабочих дней</strong>.
                            </p>

                            <p>
                                <i>Пакет услуг «Стандартный» включает в себя:</i>
                            </p>

                            <ul>
                                <li>
                                    содействие в подборе вида деятельности регистрируемого общества с ограниченной ответственностью, согласно утвержденному классификатору видов экономической деятельности (ОКВЭД);
                                </li>

                                <li>
                                    содействие в выборе системы налогообложения (ЕНВД, УСН, ОСН и пр.);
                                </li>

                                <li>
                                    подготовку необходимого пакета документов для регистрации ООО;
                                </li>

                                <li>
                                    консультирование клиента об этапах регистрации.
                                </li>
                            </ul>

                            <p>
                                <i>В пакет услуг «Стандартный» не входит сопровождение клиента к нотариусу и в ИФНС, данные действия выполняются клиентом самостоятельно.</i>
                            </p>

                            <p>
                                <i>В стоимость пакета услуг «Стандартный» не входит:</i>
                            </p>

                            <ul>
                                <li>
                                    госпошлина за заверение подписей учредителей у нотариуса – 1200 рублей (на каждого учредителя);
                                </li>

                                <li>
                                    госпошлина за регистрацию в ИФНС – 4000 рублей.
                                </li>
                            </ul>

                            <p>
                                На пакет услуг «Стандартный» <strong>действует 100% скидка</strong> при одновременном заключении договора на <a href="{{ route('uslugi', ['name' => 'yuridicheskoe-soprovozhdenie-biznesa']) }}" title="Юридическое сопровождение бизнеса в Нижнем Новгороде.">юридическое обслуживание</a> по любому тарифу в юридической компании "Торгова и партнёры".
                            </p>

                            <input class="get-service-button"
                                   title="Заказать пакет услуг «Стандартный»."
                                   type="button"
                                   data-description="Регистрация ООО. Пакет услуг «Стандартный»."
                                   value="Заказать услугу" />

                            <hr>

                            <h2>
                                Пакет услуг «Расширенный»
                            </h2>

                            <p>
                                Стоимость услуги <strong>6000 рублей</strong>. Срок оказания услуги <strong>8 рабочих дней</strong> (с учетом регистрации в ИФНС).
                            </p>

                            <p>
                                <i>Пакет услуг «Расширенный» включает в себя:</i>
                            </p>

                            <ul>
                                <li>
                                    содействие в подборе вида деятельности регистрируемого общества с ограниченной ответственностью, согласно утвержденному классификатору видов экономической деятельности (ОКВЭД);
                                </li>

                                <li>
                                    содействие в выборе системы налогообложения (ЕНВД, УСН, ОСН и пр.);
                                </li>

                                <li>
                                    разработку и подготовку индивидуального устава для клиента;
                                </li>

                                <li>
                                    подготовку необходимого пакета документов для регистрации ООО;
                                </li>

                                <li>
                                    сопровождение клиента к нотариусу (по предварительной записи) для удостоверения подписи учредителя/учредителей;
                                </li>

                                <li>
                                    сопровождение клиента в налоговую инспекцию, либо, в случае оформления нотариальной доверенности на представителя нашей компании, самостоятельную подачу документов в налоговую без участия клиента (с 05.05.2014г. все регистрационный действия представителя в ИФНС осуществляются только на основании нотариальной доверенности);
                                </li>

                                <li>
                                    сопровождение клиента в налоговую инспекцию для получения документа о регистрации ООО, прошедшего регистрацию устава ООО и свидетельств ИНН и ОГРН, либо, в случае оформления нотариальной доверенности на представителя нашей компании, самостоятельное получение документов из налоговой без участия клиента;
                                </li>

                                <li>
                                    консультирование клиента на всех этапах регистрации.
                                </li>
                            </ul>

                            <p>
                                <i>В стоимость пакета услуг «Расширенный» не входит:</i>
                            </p>

                            <ul>
                                <li>
                                    госпошлина за заверение подписей учредителей у нотариуса – 1200 рублей (на каждого учредителя);
                                </li>

                                <li>
                                    госпошлина за регистрацию в ИФНС – 4000 рублей;
                                </li>

                                <li>
                                    госпошлина за подготовку доверенности на сотрудника нашей компании для самостоятельной подачи и получения документов (по желанию клиента) – 2700 рублей.
                                </li>
                            </ul>

                            <input class="get-service-button"
                                   title="Заказать пакет услуг «Расширенный»."
                                   type="button"
                                   data-description="Регистрация ООО. Пакет услуг «Расширенный»."
                                   value="Заказать услугу" />

                            <hr>

                            @include('site.forms.lead', ['yandexGoalName' => 'lead_form_registraciya_ooo'])
                        </div>
                    </article>
                </section>
            </div>
        </div>
    </div>
@endsection