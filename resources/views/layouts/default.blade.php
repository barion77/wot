<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png">
    <link href="{{ asset('css/pe-icon-7-stroke.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/engine.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/noty.css') }}" rel="stylesheet">
    <title>WOT.TEST — магазин аккаунтов WoT</title>
    <meta name="description"content="Магазин аккаунтов WoT. У нас можно купить аккаунты World Of Tanks по самым выгодным ценам.">
    <meta name="keywords" content="аккаунты world of tanks, купить аккаунт wot, купить аккаунт world of tanks">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="website">
    <meta property="og:title" content="WOT.TEST — магазин аккаунтов WoT">
    <meta property="og:description"content="Магазин аккаунтов WoT. У нас можно купить аккаунты World Of Tanks по самым выгодным ценам.">
    <meta property="og:site_name" content="WOT.TEST — магазин аккаунтов WoT">

    <style>
        .owl-wrapper-outer {
            overflow: hidden;
        }
    </style>

    @yield('styles')


    <style>
        *::-webkit-scrollbar {
            width: 8px
        }

        *::-webkit-scrollbar-track {
            background: #232d33;
        }

        *::-webkit-scrollbar-thumb {
            border-radius: 3px;
            background-color: #ffc608;
        }

        *::-webkit-scrollbar-thumb:hover {
            border-radius: 3px;
            background-color: #ffc608;
        }

        *::-webkit-scrollbar-thumb:active {
            border-radius: 3px;
            background-color: #ffc608;
        }
    </style>


</head>

<body>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-wrapper">
            <ul class="nav navbar-nav">
                <li>
                    <div id="sidebar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </li>
            </ul>
            <div class="nav-logo">
                <a id="logo" href="{{ route('index') }}">
                    <img src="{{ asset('images/logo.svg') }}" alt="">
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('order.index') }}" class="btn-icon"><span class="pe-7s-cart"></span><i>Мои покупки</i></a></li>
                <li>
                    <a href="{{ route('review') }}" class="btn-icon"><span class="pe-7s-like"></span><i>Отзывы</i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="sidebar">
    <a href="{{ route('index') }}" class="btn main-btn see-all">Перейти в магазин</a>
    <div class="sidebar-title">Информация</div>
    <ul class="sidebar-list">
        <li><a href="{{ route('page.guarantee') }}">Гарантии</a></li>
        <li><a href="{{ route('page.scammer') }}">Магазины-мошенники</a></li>
        <li><a href="{{ route('review') }}">Отзывы</a></li>
        <li><a href="{{ url('support') }}">ЧаВо</a></li>
        <li><a href="{{ route('page.rules') }}">Правила магазина</a></li>
    </ul>
</div>

<div class="wrapper">

    @yield('content')

    <div class="home-text">
        <div class="container">
            <div class="home-text-container hideContent">
                <h2>Немного о нашем магазине</h2>
                <p>Мы — магазин игровых аккаунтов World Of Tanks, в котором вы всегда сможете найти идеальный для
                    себя аккаунт по самой приятной цене.
                    У нас всегда можно отыскать широкий ассортимент аккаунтов на любой вкус.
                    Мы готовы предоставить для вас как обычные аккаунты для комфортной игры, так и случайные
                    аккаунты для «фана».
                </p>

                <div id="demo" class="collapse">
                    <p>Все аккаунты, которые мы предлагаем, закупаются у проверенных поставщиков. Это означает, что
                        наш магазин откроет для вас исключительно рабочие аккаунты в отличном качестве.
                        Все аккаунты на нашем сайте не имеют никаких ограничений, характерных для мошеннических
                        магазинов. Таким образом,
                        каждый геймер сможет насладиться полноценной игрой на самом высоком уровне.</p>
                    <ul>
                        <li>Мы уже давно задействованы в своем деле. Так, наш магазин аккаунтов радует геймеров уже
                            более пяти лет.
                            За это время мы смогли реализовать тысячи аккаунтов по самым доступным ценам.
                            Свидетельством нашей качественной
                            работы выступают многочисленные отзывы благодарных клиентов, которые отлично оценивают
                            наши услуги.
                            Вы всегда сможете просмотреть актуальные отзывы заказчиков прямо на нашем сайте: мы
                            оставляем их
                            открытыми, будь они позитивными, или не очень. Таким образом, вы можете быть полностью
                            уверенными в
                            нашей честности и скорости работы.</li>
                        <li>Наша команда постоянно пополняет ассортимент доступных аккаунтов. Мы неустанно следим за
                            выпуском новой техники World Of Tanks
                            , добавляя аккаунты с ней в ассортимент по низким ценам. Все новинки появляются у нас на
                            сайте
                            практически в тот же день, когда они выходят в официальный релиз.</li>
                        <li>Наш сайт отличается максимальным удобством в пользовании. Мы ориентируемся в первую
                            очередь на комфорт
                            каждого своего клиента, стараясь соответствующе оптимизировать ресурс. Так, поиск
                            нужного аккаунта занимает
                            всего несколько секунд.</li>
                        <li>Оперативность. Наш магазин готов мгновенно выдать клиентам купленные аккаунты
                            моментально, сразу
                            после оплаты заказа. Вам не придется томиться в длительном ожидании, считая часы или
                            даже дни до
                            получения желаемого аккаунта.</li>
                    </ul>
                </div>
                <div id="expand-home-text" data-toggle="collapse" data-target="#demo">+</div>
            </div>
        </div>
    </div>

    <footer>
        <div class="advantages">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="advantages-box">
                            <span class="pe-7s-joy"></span>
                            <div class="text">
                                Аккаунты от лучших поставщиков
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="advantages-box">
                            <span class="pe-7s-tools"></span>
                            <div class="text">
                                Гарантированная техподдержка
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="advantages-box">
                            <span class="pe-7s-piggy"></span>
                            <div class="text">
                                Регулярные акции, скидки и бонусы
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="advantages-box">
                            <span class="pe-7s-chat"></span>
                            <div class="text">
                                Множество отзывов от реальных клиентов
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-text">
                        <img src="{{ asset('images/logo.svg') }}">
                        <div class="text">
                            WOT.TEST — магазин аккаунтов WoT. <br>
                            Здесь вы можете купить аккаунты для World Of Tanks. <br>
                            Постоянные скидки и акции в магазине сделают покупку аккаунтов доступной. <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5>Информация</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('page.guarantee') }}">Гарантии</a></li>
                        <li><a href="{{ route('page.scammer') }}">Магазины-мошенники</a></li>
                        <li><a href="{{ route('review') }}">Отзывы</a></li>
                        <li><a href="{{ url('support') }}">ЧаВо</a></li>
                        <li><a href="{{ url('rules') }}">Правила магазина</a></li>
                        <li><a href="{{ !empty($settings->telegram_channel_link) ? $settings->telegram_channel_link : '' }}">Наш телеграмм</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</div>

<div class="overlay"></div>
<div class="up">
    <span class="pe-7s-angle-up"></span>
</div>


<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/noty.min.js') }}" type="text/javascript"></script>
@yield('scripts')
</body>

</html>
