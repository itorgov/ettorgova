@extends('layouts.site.general')

@section('title', 'Услуги')

@section('header')
    <div class="page-title-wrap">
        <div class="container clearfix">
            <div class="breadcrumb">
                <span>
                    <a title="Главная страница" href="{{ route('site.index') }}" class="home">Главная страница</a>
                </span> /
                <span>
                    <span>Услуги</span>
                </span>
            </div>
            <h1 class="page-title" id="entry-title">Наши услуги</h1>
        </div>
    </div>
@endsection

@section('content')
    <div id="main">
        <div class="container">
            <div id="content">
                <section class="post">
                    <article>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="{{ route('yuridicheskoe-konsultirovanie') }}"
                                   title="Юридическое консультирование">
                                    Юридическое консультирование
                                </a>
                            </h2>
                        </header>
                        <div class="entry-content clearfix">
                            <p>
                                Устные, письменные, выездные консультации с тщательным разбором любых вопросов.
                                В случае последующего заключения договора для решения рассматриваемого вопроса
                                консультация входит в стоимость услуг.
                            </p>
                        </div>
                        <footer>
                            <a class="readmore" href="{{ route('yuridicheskoe-konsultirovanie') }}"
                               title="Подробнее об услуге Юридическое консультирование">Подробнее об услуге</a>
                        </footer>
                    </article>
                </section>
                <hr>
                <section class="post">
                    <article>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="{{ route('registraciya-predprinimatelej') }}"
                                   title="Регистрация индивидуального предпринимателя (ИП)">
                                    Регистрация индивидуального предпринимателя (ИП)
                                </a>
                            </h2>
                        </header>
                        <div class="entry-content clearfix">
                            <p>
                                Полное и частичное сопровождение процесса регистрации гражданина в качестве ИП,
                                содействие в
                                подборе видом деятельности регистрируемого ИП, содействие в выборе систем
                                налогообложения, подготовку необходимого пакета документов, который необходим
                                для регистрации в качестве индивидуального предпринимателя, сопровождение к
                                нотариусу и ИФНС.
                            </p>
                        </div>
                        <footer>
                            <a class="readmore" href="{{ route('registraciya-predprinimatelej') }}"
                               title="Подробнее об услуге Регистрация индивидуального предпринимателя (ИП)">
                                Подробнее об услуге
                            </a>
                        </footer>
                    </article>
                </section>
                <hr>
                <section class="post">
                    <article>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="{{ route('registraciya-organizacij') }}"
                                   title="Регистрация общества с ограниченной ответственностью (ООО)">
                                    Регистрация общества с ограниченной ответственностью (ООО)
                                </a>
                            </h2>
                        </header>
                        <div class="entry-content clearfix">
                            <p>
                                Полное и частичное сопровождение процесса регистрации организации, содействие в
                                подборе видом действительности регистрируемой организации, содействие в выборе
                                системы налогообложения, подготовка необходимых документов, сопровождение к
                                нотариусу и ИФНС, консультирование на всех этапах.
                            </p>
                        </div>
                        <footer>
                            <a class="readmore" href="{{ route('registraciya-organizacij') }}"
                               title="Подробнее об услуге Регистрация общества с ограниченной ответственностью (ООО)">
                                Подробнее об услуге
                            </a>
                        </footer>
                    </article>
                </section>
                <hr>
                <section class="post">
                    <article>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="{{ route('yuridicheskoe-soprovozhdenie-biznesa') }}"
                                   title="Юридическое сопровождение бизнеса">
                                    Юридическое сопровождение бизнеса
                                </a>
                            </h2>
                        </header>
                        <div class="entry-content clearfix">
                            <p>
                                Полное и частичное юридическое сопровождение бизнеса. Наша компания предлагает
                                консультационное абонентское обслуживание, частичное абонентское обслуживание
                                (анализ и подготовка документов), полное юридическое сопровождение бизнеса.
                            </p>
                        </div>
                        <footer>
                            <a class="readmore" href="{{ route('yuridicheskoe-soprovozhdenie-biznesa') }}"
                               title="Подробнее об услуге Юридическое сопровождение бизнеса">Подробнее об услуге</a>
                        </footer>
                    </article>
                </section>
                <hr>
                <section class="post">
                    <article>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="{{ route('predstavitelstvo-v-sude') }}"
                                   title="Представительство в суде">
                                    Представительство в суде
                                </a>
                            </h2>
                        </header>
                        <div class="entry-content clearfix">
                            <p>
                                Юридическое сопровождение дела на всех этапах рассмотрения спора по существу.
                                При необходимости оспаривания вынесенного судебного акта (дело рассматривалось с
                                участием наших сотрудников) скидка 20%.
                            </p>
                        </div>
                        <footer>
                            <a class="readmore" href="{{ route('predstavitelstvo-v-sude') }}"
                               title="Подробнее об услуге Представительство в суде">Подробнее об услуге</a>
                        </footer>
                    </article>
                </section>
                <hr>
                <section class="post">
                    <article>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="{{ route('predstavitelstvo-v-arbitrazhnyh-sudah') }}"
                                   title="Представительство в Арбитражных судах">
                                    Представительство в Арбитражных судах
                                </a>
                            </h2>
                        </header>
                        <div class="entry-content clearfix">
                            <p>
                                Юридическое сопровождение на всех этапах разрешения сложившейся ситуации. От
                                внесудебного урегулирования вопроса, до представления интересов в суде
                                кассационной/надзорной инстанции.
                            </p>
                        </div>
                        <footer>
                            <a class="readmore" href="{{ route('predstavitelstvo-v-arbitrazhnyh-sudah') }}"
                               title="Подробнее об услуге Представительство в Арбитражных судах">Подробнее об услуге</a>
                        </footer>
                    </article>
                </section>
                <hr>
                <section class="post">
                    <article>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="{{ route('podgotovka-yuridicheskih-dokumentov') }}"
                                   title="Подготовка юридических документов">
                                    Подготовка юридических документов
                                </a>
                            </h2>
                        </header>
                        <div class="entry-content clearfix">
                            <p>
                                Подготовка претензия, писем, заявлений, исковых заявлений, жалоб, ходатайств,
                                протоколов разногласий, договоров.
                            </p>
                        </div>
                        <footer>
                            <a class="readmore" href="{{ route('podgotovka-yuridicheskih-dokumentov') }}"
                               title="Подробнее об услуге Подготовка юридических документов">Подробнее об услуге</a>
                        </footer>
                    </article>
                </section>
                <hr>
                <section class="post">
                    <article>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="{{ route('soprovozhdenie-sdelok-s-nedvizhimostyu') }}"
                                   title="Юридическое сопровождение сделок с недвижимостью">
                                    Юридическое сопровождение сделок с недвижимостью
                                </a>
                            </h2>
                        </header>
                        <div class="entry-content clearfix">
                            <p>
                                Анализ пакета документов для проведения сделок, проверка прав третьих лиц на
                                приобретаемое имуществом, сопровождение процесса оформления прав на
                                приобретаемое имущество, участие в процессе приватизации, представление
                                интересов в госорганах при согласовании переустройства/перепланировки.
                            </p>
                        </div>
                        <footer>
                            <a class="readmore" href="{{ route('soprovozhdenie-sdelok-s-nedvizhimostyu') }}"
                               title="Подробнее об услуге Юридическое сопровождение сделок с недвижимостью">
                                Подробнее об услуге
                            </a>
                        </footer>
                    </article>
                </section>
            </div>
        </div>
    </div>
@endsection