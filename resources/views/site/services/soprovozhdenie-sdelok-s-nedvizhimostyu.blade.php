@extends('layouts.site.general')

@section('title', 'Сопровождение сделок с недвижимостью')

@section('page-type', 'article')
@section('page-keywords', 'сопровождение сделок с недвижимостью, юрист по недвижимости, оформление недвижимости')
@section('page-description', 'Анализ предмета сделки, сбор необходимых документов, проверка репутации продавца, сопровождение процесса оформления прав на приобретаемое имущество, участие в процессе приватизации и прочее.')

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
                    <span>Сопровождение сделок с недвижимостью</span>
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
                            <h1>Сопровождение сделок с недвижимостью</h1>
                        </header>
                        <div class="entry-content">
                            <p>
                                В настоящее время сделки с недвижимостью считаются самыми актуальными. Но и в данных
                                отношениях есть свои подводные камни.
                            </p>

                            <p>
                                Порой бывают ситуации, когда после совершения сделки в квартире на регистрационном учете
                                числятся бывшие собственники, когда квартира продана в предаварийном состоянии и жить
                                в ней уже невозможно или когда попались аферисты, которые продали квартиру сразу
                                нескольким
                                покупателям и при предъявлении документов на регистрацию вам отказали. Именно такие и
                                подобные ситуации требуют обязательного курирования юриста в процессе проведения сделки.
                            </p>

                            <p>
                                Для того, чтобы быть уверенным в своей безопасности, советуем обратиться к нашим
                                квалифицированным юристам.
                            </p>

                            <hr/>

                            <h2>Анализ пакета документов для проведения сделки с жилыми помещениями и сопровождение
                                клиента при заключении сделки</h2>

                            <p>
                                Стоимость услуги <strong>от 3000 до 4500 рублей</strong>. Срок оказания услуги <strong>от
                                    5 до 7 рабочих дней</strong>.
                            </p>

                            <p>
                                <i>В стоимость услуги входит:</i>
                            </p>

                            <ul>
                                <li>проверка предмета сделки на предмет правомерности ранее совершаемых с ним действий
                                    (покупка квартиры с узаконенной перепланировкой);
                                </li>

                                <li>
                                    законность проведения данной сделки, отсутствие препятствий при ее проведении;
                                </li>

                                <li>
                                    возможность использовать предмет сделки в полной мере (отсутствие прав третьих
                                    лиц);
                                </li>

                                <li>
                                    правовой анализ договора;
                                </li>

                                <li>
                                    составление письменного отчета, где указаны рекомендации юриста.
                                </li>
                            </ul>

                            <p>
                                <i>В стоимость услуги не входит составление договоров и других необходимых
                                    документов.</i>
                            </p>

                            <input class="get-service-button"
                                   title="Заказать анализ пакета документов для проведения сделки с жилыми помещениями и сопровождение клиента при заключении сделки."
                                   type="button"
                                   data-description="Сопровождение сделок с недвижимостью. Анализ пакета документов для проведения сделки с жилыми помещениями и сопровождение клиента при заключении сделки."
                                   value="Заказать услугу" />

                            <hr>

                            <h2>Анализ пакета документов для проведения сделки с нежилыми помещениями и сопровождение
                                клиента при заключении сделки</h2>

                            <p>
                                Стоимость услуги <strong>от 5000 до 8000 рублей</strong>. Срок оказания услуги <strong>от
                                    3 до 5 рабочих дней</strong>.
                            </p>

                            <p>
                                <i>В стоимость услуги входит:</i>
                            </p>

                            <ul>
                                <li>
                                    проверка предмета сделки на предмет правомерности ранее совершаемых с ним действий
                                    (покупка квартиры с узаконенной перепланировкой);
                                </li>

                                <li>
                                    законность проведения данной сделки, отсутствие препятствий при ее проведении;
                                </li>

                                <li>
                                    возможность использовать предмет сделки в полной мере (отсутствие прав третьих
                                    лиц);
                                </li>

                                <li>
                                    правовой анализ договора;
                                </li>

                                <li>
                                    составление письменного отчета, где указаны рекомендации юриста.
                                </li>
                            </ul>

                            <p>
                                <i>В стоимость услуги не входит составление договоров и других документов.</i>
                            </p>

                            <input class="get-service-button"
                                   title="Заказать анализ пакета документов для проведения сделки с нежилыми помещениями и сопровождение клиента при заключении сделки."
                                   type="button"
                                   data-description="Сопровождение сделок с недвижимостью. Анализ пакета документов для проведения сделки с нежилыми помещениями и сопровождение клиента при заключении сделки."
                                   value="Заказать услугу" />

                            <hr>

                            <h2>Полное сопровождение сделки с недвижимостью</h2>

                            <p>
                                Стоимость услуги <strong>от 6000 рублей</strong> (в зависимости от сложности вопроса).
                                Срок оказания услуги – <strong>до момента регистрации права собственности</strong> в
                                Росреестре.
                            </p>

                            <p>
                                <i>В стоимость услуги входит:</i>
                            </p>

                            <ul>
                                <li>
                                    анализ пакета документов для проведения сделки;
                                </li>

                                <li>
                                    подготовка и сбор документов для клиента;
                                </li>

                                <li>
                                    подача документов на регистрацию.
                                </li>
                            </ul>

                            <p>
                                <i>В стоимость услуги не входит:</i>
                            </p>

                            <ul>
                                <li>
                                    госпошлина за подготовку нотариальной доверенности;
                                </li>

                                <li>
                                    госпошлины за получение документов в государственных органах (БТИ, Росреестр и
                                    пр.).
                                </li>
                            </ul>

                            <input class="get-service-button"
                                   title="Заказать услугу по полному сопровождению сделки с недвижимостью."
                                   type="button"
                                   data-description="Сопровождение сделок с недвижимостью. Полное сопровождение сделки с недвижимостью."
                                   value="Заказать услугу" />

                            <hr>

                            <h2>Приватизация во внесудебном порядке</h2>

                            <p>
                                Стоимость услуги <strong>12000 рублей</strong>. Срок оказания услуги – <strong>до
                                    момента регистрации права собственности</strong> в Росреестре.
                            </p>

                            <p>
                                <i>В стоимость услуги входит:</i>
                            </p>

                            <ul>
                                <li>
                                    действия направленные на получение необходимых для приватизации документов;
                                </li>

                                <li>
                                    сопровождение процесса приватизации жилого помещения.
                                </li>
                            </ul>

                            <p>
                                <i>В стоимость услуги не входит:</i>
                            </p>

                            <ul>
                                <li>
                                    госпошлина за подготовку нотариальной доверенности;
                                </li>

                                <li>
                                    госпошлины за получение документов в государственных органах (БТИ, Росреестр и
                                    пр.).
                                </li>
                            </ul>

                            <input class="get-service-button"
                                   title="Заказать услугу по приватизации во внесудебном порядке."
                                   type="button"
                                   data-description="Сопровождение сделок с недвижимостью. Приватизация во внесудебном порядке."
                                   value="Заказать услугу" />

                            <hr>

                            <h2>Согласование переустройства (перепланировки) квартиры во внесудебном порядке</h2>

                            <p>
                                Стоимость услуги <strong>12000 рублей</strong>. Срок оказания услуги – <strong>до
                                    момента государственной регистрации изменений</strong> в Росреестре.
                            </p>

                            <p>
                                <i>В стоимость услуги входит:</i>
                            </p>

                            <ul>
                                <li>
                                    сопровождение работ по подготовке проекта переустройства (перепланировки);
                                </li>

                                <li>
                                    представительство клиента в администрации, в управляющей организации, а в случае
                                    необходимости и в энергоснабжающей организации для согласования переустройства
                                    (перепланировки) в административном порядке;
                                </li>

                                <li>
                                    сопровождение работ по изготовлению технического плана после проведения работ по
                                    переустройству (перепланировки);
                                </li>

                                <li>
                                    постановка на кадастровый учет квартиры после согласования переустройства
                                    (перепланировки);
                                </li>

                                <li>
                                    государственная регистрация изменений в Росреестре и внесение изменений, связанных с
                                    проведенным переустройством (перепланировкой) согласованными в административном
                                    порядке.
                                </li>
                            </ul>

                            <p>
                                <i>В стоимость услуги не входит:</i>
                            </p>

                            <ul>
                                <li>
                                    госпошлина за подготовку нотариальной доверенности;
                                </li>

                                <li>
                                    госпошлины за подготовку документов у государственных органов (БТИ, Росреестр и
                                    пр.), а том числе и регистрация изменений в ЕГРП;
                                </li>

                                <li>
                                    стоимость работ по подготовке проекта переустройства (перепланировки) квартиры.
                                </li>
                            </ul>

                            <input class="get-service-button"
                                   title="Заказать услугу по согласованию переустройства (перепланировки) квартиры во внесудебном порядке."
                                   type="button"
                                   data-description="Сопровождение сделок с недвижимостью. Согласование переустройства (перепланировки) квартиры во внесудебном порядке."
                                   value="Заказать услугу" />

                            <hr>

                            @include('site.forms.lead', ['yandexGoalName' => 'lead_form_soprovozhdenie_sdelok_s_nedvizhimostyu'])
                        </div>
                    </article>
                </section>
            </div>
        </div>
    </div>
@endsection