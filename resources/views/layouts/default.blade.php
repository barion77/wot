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
                <a id="logo" href="http://wotcash-test.webcenter.website/">
                    <img src="{{ asset('images/logo.svg') }}" alt="">
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://wotcash-test.webcenter.website/orders" class="btn-icon"><span
                            class="pe-7s-cart"></span><i>Мои покупки</i></a></li>
                <li>
                    <a href="http://wotcash-test.webcenter.website/reviews" class="btn-icon"><span class="pe-7s-like"></span><i>Отзывы</i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="sidebar">
    <a href="http://wotcash-test.webcenter.website/" class="btn main-btn see-all">Перейти в магазин</a>
    <div class="sidebar-title">Информация</div>
    <ul class="sidebar-list">
        <li><a href="http://wotcash-test.webcenter.website/warranties">Гарантии</a></li>
        <li><a href="http://wotcash-test.webcenter.website/activations">Как войти в аккаунт?</a></li>
        <li><a href="http://wotcash-test.webcenter.website/reviews">Отзывы</a></li>
        <li><a href="http://wotcash-test.webcenter.website/support">Помощь и поддержка</a></li>
        <li><a href="http://wotcash-test.webcenter.website/agreements">Правила магазина</a></li>
    </ul>
</div>

<div class="wrapper">

    @yield('content')

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
                            По всем вопросам: <a href="https://t.me/thecaardinal">https://t.me/thecaardinal</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5>Информация</h5>
                    <ul class="list-unstyled">
                        <li><a href="http://wotcash-test.webcenter.website/warranties">Гарантии</a></li>
                        <li><a href="http://wotcash-test.webcenter.website/activations">Как войти в аккаунт?</a>
                        </li>
                        <li><a href="http://wotcash-test.webcenter.website/reviews">Отзывы</a></li>
                        <li><a href="http://wotcash-test.webcenter.website/support">Помощь и поддержка</a></li>
                        <li><a href="http://wotcash-test.webcenter.website/agreements">Правила магазина</a></li>
                        <li><a href="https://t.me/thecaardinal">Наш телеграмм</a></li>
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
</body>

</html>
