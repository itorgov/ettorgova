@extends('layouts.site.general')

@section('title', 'Услуги')

@section('page-keywords', 'юридическое сопровождение бизнеса, юридическая консультация, сопровождение сделок с недвижимостью, регистрация ип, регистрация ооо, представительство в суде, представительство в арбитражном суде, подготовка юридических документов')
@section('page-description', 'Перечень услуг юридической компании Торгова и партнёры')

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
        </div>
    </div>
@endsection

@section('content')
    <div id="main">
        <div class="container">
            <div id="content">
                <h1>Наши услуги</h1>
                <hr>
                <section class="post">
                    <article>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="{{ route('uslugi', ['name' => 'yuridicheskaya-konsultaciya']) }}"
                                   title="Юридическая консультация">
                                    Юридическая консультация
                                </a>
                            </h2>
                        </header>
                        <div class="entry-content clearfix">
                            <p>
                                Устные, письменные, выездные консультации с тщательным анализом и подбором оптимальных
                                вариантов решения любых вопросов. В услуги компании так же входит участие в переговорах
                                с контрагентами. В случае последующего заключения договора на юридическое сопровождение
                                клиента по данному вопросу консультация входит в стоимость услуги.
                            </p>
                        </div>
                        <footer>
                            <a class="readmore" href="{{ route('uslugi', ['name' => 'yuridicheskaya-konsultaciya']) }}"
                               title="Подробнее об услуге Юридическая консультация">Подробнее об услуге</a>
                        </footer>
                    </article>
                </section>
                <hr>
                <section class="post">
                    <article>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="{{ route('uslugi', ['name' => 'registraciya-ip']) }}"
                                   title="Регистрация индивидуального предпринимателя (ИП)">
                                    Регистрация ИП
                                </a>
                            </h2>
                        </header>
                        <div class="entry-content clearfix">
                            <p>
                                Полное или частичное сопровождение процесса регистрации гражданина в качестве ИП,
                                содействие в подборе видов деятельности регистрируемого ИП, содействие в выборе систем
                                налогообложения, подготовка пакета документов для государственной регистрации,
                                сопровождение к нотариусу и в ИФНС, консультирование на первых этапах работы в качестве ИП.
                            </p>
                        </div>
                        <footer>
                            <a class="readmore" href="{{ route('uslugi', ['name' => 'registraciya-ip']) }}"
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
                                <a href="{{ route('uslugi', ['name' => 'registraciya-ooo']) }}"
                                   title="Регистрация общества с ограниченной ответственностью (ООО)">
                                    Регистрация ООО
                                </a>
                            </h2>
                        </header>
                        <div class="entry-content clearfix">
                            <p>
                                Полное или частичное сопровождение процесса регистрации организации, содействие в подборе
                                видов действительности регистрируемой организации, содействие в выборе системы
                                налогообложения, подготовка пакета документов для государственной регистрации, сопровождение
                                к нотариусу и в ИФНС, консультирование на всех этапах регистрации.
                            </p>
                        </div>
                        <footer>
                            <a class="readmore" href="{{ route('uslugi', ['name' => 'registraciya-ooo']) }}"
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
                                <a href="{{ route('uslugi', ['name' => 'yuridicheskoe-soprovozhdenie-biznesa']) }}"
                                   title="Юридическое сопровождение бизнеса">
                                    Юридическое сопровождение бизнеса
                                </a>
                            </h2>
                        </header>
                        <div class="entry-content clearfix">
                            <p>
                                Полное или частичное юридическое сопровождение бизнеса. Наша компания предлагает
                                консультационное абонентское обслуживание, частичное абонентское обслуживание
                                (анализ и подготовка документов), полное юридическое сопровождение бизнеса
                                (от консультирования до представительства интересов клиента в суде).
                            </p>
                        </div>
                        <footer>
                            <a class="readmore" href="{{ route('uslugi', ['name' => 'yuridicheskoe-soprovozhdenie-biznesa']) }}"
                               title="Подробнее об услуге Юридическое сопровождение бизнеса">Подробнее об услуге</a>
                        </footer>
                    </article>
                </section>
                <hr>
                <section class="post">
                    <article>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="{{ route('uslugi', ['name' => 'predstavitelstvo-v-arbitrazhnyh-sudah']) }}"
                                   title="Представительство в Арбитражных судах">
                                    Представительство в Арбитражных судах
                                </a>
                            </h2>
                        </header>
                        <div class="entry-content clearfix">
                            <p>
                                Юридическое сопровождение клиента на всех этапах разрешения сложившейся ситуации.
                                От внесудебного урегулирования вопроса (претензионная работа), до представления
                                интересов в суде первой/апелляционной/кассационной/надзорной инстанции. При заключение
                                договора на представительство интересов в суде претензионная работа включается в
                                стоимость оказываемой услуги.
                            </p>
                        </div>
                        <footer>
                            <a class="readmore" href="{{ route('uslugi', ['name' => 'predstavitelstvo-v-arbitrazhnyh-sudah']) }}"
                               title="Подробнее об услуге Представительство в Арбитражных судах">Подробнее об услуге</a>
                        </footer>
                    </article>
                </section>
                <hr>
                <section class="post">
                    <article>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="{{ route('uslugi', ['name' => 'predstavitelstvo-v-sude']) }}"
                                   title="Представительство в суде">
                                    Представительство в суде
                                </a>
                            </h2>
                        </header>
                        <div class="entry-content clearfix">
                            <p>
                                Юридическое сопровождение клиента на всех этапах разрешения вопроса. При
                                необходимости в услугу включается внесудебное урегулирование вопроса (претензионная работа).
                                В случае оспаривания вынесенного судебного акта (дело рассматривалось с участием наших
                                сотрудников) клиенту предоставляется скидка в размере 20% на каждую из вышестоящих инстанций.
                            </p>
                        </div>
                        <footer>
                            <a class="readmore" href="{{ route('uslugi', ['name' => 'predstavitelstvo-v-sude']) }}"
                               title="Подробнее об услуге Представительство в суде">Подробнее об услуге</a>
                        </footer>
                    </article>
                </section>
                <hr>
                <section class="post">
                    <article>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="{{ route('uslugi', ['name' => 'podgotovka-yuridicheskih-dokumentov']) }}"
                                   title="Подготовка юридических документов">
                                    Подготовка юридических документов
                                </a>
                            </h2>
                        </header>
                        <div class="entry-content clearfix">
                            <p>
                                Подготовка претензий, заявлений, исковых заявлений, жалоб, ходатайств, протоколов
                                разногласий, договоров. При дальнейшем сопровождении клиента стоимость уже оказанной
                                услуги вычитается из последующей. Анализ документов и составление письменного
                                развернутого юридического заключения по представленным материалам с предложением
                                вариантов решения вопроса.
                            </p>
                        </div>
                        <footer>
                            <a class="readmore" href="{{ route('uslugi', ['name' => 'podgotovka-yuridicheskih-dokumentov']) }}"
                               title="Подробнее об услуге Подготовка юридических документов">Подробнее об услуге</a>
                        </footer>
                    </article>
                </section>
                <hr>
                <section class="post">
                    <article>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="{{ route('uslugi', ['name' => 'soprovozhdenie-sdelok-s-nedvizhimostyu']) }}"
                                   title="Юридическое сопровождение сделок с недвижимостью">
                                    Юридическое сопровождение сделок с недвижимостью
                                </a>
                            </h2>
                        </header>
                        <div class="entry-content clearfix">
                            <p>
                                Анализ предмета сделки, мониторинг рынка, сбор необходимых документов, проверка прав
                                третьих лиц на приобретаемое имущество, проверка "репутации" продавца (по долевому
                                участию в строительстве), сопровождение процесса оформления прав на приобретаемое
                                имущество, участие в процессе приватизации, представление интересов в гос. органах
                                при согласовании переустройства/перепланировки.
                            </p>
                        </div>
                        <footer>
                            <a class="readmore" href="{{ route('uslugi', ['name' => 'soprovozhdenie-sdelok-s-nedvizhimostyu']) }}"
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