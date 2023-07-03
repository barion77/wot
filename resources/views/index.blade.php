@extends('layouts.default')

@section('content')

    <div class="container">

        <div class="banner__wrapper d-flex align-items-center px-5 py-5 justify-content-between flex-wrap">
            <div class="banner__left-block d-flex col-md-6">
                <div class="banner__silver-text p-0 m-0 text-uppercase">
                    В нашем Telegram-канале Вы можете получить свежий аккаунт вашей любимой игры совершенно
                    бесплатно!
                </div>
            </div>
            <div class="banner__right-block mt-3">
                <a href="http://wotcash-test.webcenter.website/#" class="btn main-btn">Перейти в телеграмм</a>
            </div>
        </div>

        <div class="whywe-box mt-4">
            <h2>Почему стоит покупать у нас</h2>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="whywe-card">
                        <span class="pe-7s-joy"></span>
                        <h3>Качественные аккаунты</h3>
                        <div class="text">
                            В нашем магазине продаются только проверенные и качественные игровые аккаунты World Of
                            Tanks от лучших поставщиков.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="whywe-card">
                        <span class="pe-7s-box2"></span>
                        <h3>Без обмана</h3>
                        <div class="text">
                            Вы платите только за тот аккаунт, который вам действительно нужен. У нас вы не найдёте
                            скрытых рандомов после покупки.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="whywe-card">
                        <span class="pe-7s-science"></span>
                        <h3>Проверка аккаунтов онлайн</h3>
                        <div class="text">
                            Покупая товар у нас, вы 100% получите рабочий товар. Аккаунты автоматически проверяется
                            перед покупкой
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="whywe-box catalog-box">
            <ul class="nav nav-pills sys-pills">
                <li class="col-md-4 active"><a data-toggle="pill"
                                               href="http://wotcash-test.webcenter.website/#wotRU">WoT RU</a></li>
                <li class="col-md-4"><a data-toggle="pill" href="http://wotcash-test.webcenter.website/#wotEU">WoT
                        EU</a></li>
                <li class="col-md-4"><a data-toggle="pill"
                                        href="http://wotcash-test.webcenter.website/#wotBlITZ">WoTBLITZ</a></li>
            </ul>
            <div class="tab-content">
                <div id="wotRU" class="tab-pane fade active in">

                    <h2>Категория WOT RU 1</h2>
                    <div class="row">
                        <div class="game-layout col-lg-3 col-md-4 col-sm-6">
                            <a class="game-thumb" href="http://wotcash-test.webcenter.website/product/1"
                               title="Аккаунт 1000 боёв">
                                <div class="game-preview">
                                    <img src="{{ asset('images/QZfJOxt.png') }}"
                                         title="Аккаунт 1000 боёв">
                                </div>
                                <span class="percent-price">-5%</span>
                                <div class="caption">
                                    <h3>Аккаунт 1000 боёв</h3>
                                    <div class="new-price"><span>95</span> ₽</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <h2>Категория WOT RU 2</h2>
                    <div class="row">
                        <div class="game-layout col-lg-3 col-md-4 col-sm-6">
                            <a class="game-thumb" href="http://wotcash-test.webcenter.website/product/6"
                               title="lolz">
                                <div class="game-preview">
                                    <img src="{{ asset('images/lKagzvg.jpg') }}" title="lolz">
                                </div>
                                <div class="caption">
                                    <h3>lolz</h3>
                                    <div class="new-price"><span>5</span> ₽</div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <div id="wotEU" class="tab-pane fade">
                    <h2>Категория WOT EU 1</h2>
                    <div class="row">
                    </div>
                </div>
                <div id="wotBlITZ" class="tab-pane fade">
                    <h2>Категория блитзззз</h2>
                    <div class="row">
                        <div class="game-layout col-lg-3 col-md-4 col-sm-6">
                            <a class="game-thumb" href="http://wotcash-test.webcenter.website/product/5"
                               title="First User">
                                <div class="game-preview">
                                    <img src="{{ asset('images/QZfJOxt.png') }}"
                                         title="First User">
                                </div>
                                <div class="caption">
                                    <h3>First User</h3>
                                    <div class="new-price"><span>1</span> ₽</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="whywe-box mt-3">
            <h2>Аккаунты с описанием</h2>
            <div class="row">
                <div class="col-sm-4">
                    <div class="random-box">
                        <img src="images/AGWRjOJ.png">
                        <h3>Аккаунт от 5 боёв</h3>
                        <div class="price">100 руб.</div>
                        <div class="text">
                            Text
                        </div>
                        <a href="http://wotcash-test.webcenter.website/product/3" class="btn main-btn">Узнать
                            больше</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="random-box">
                        <img src="images/XBWNb3u.png">
                        <h3>Gold Random</h3>
                        <div class="price">1000 руб.</div>
                        <div class="text">
                            Аккаунт от 10000 боёв
                        </div>
                        <a href="http://wotcash-test.webcenter.website/product/4" class="btn main-btn">Узнать
                            больше</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="home-text">
        <div class="container">
            <div class="home-text-container hideContent">
                <h2>Игровые аккаунты WoT</h2>
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

@endsection
