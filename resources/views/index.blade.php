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
                <a href="{{ !empty($settings->telegram_channel_link) ? $settings->telegram_channel_link : '' }}" class="btn main-btn">Перейти в телеграмм</a>
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
                <ul class="nav nav-pills sys-pills">
                    <li class="col-md-4 active"><a data-toggle="pill" href="http://wotcash-test.webcenter.website/#wotRU">WoT RU</a></li>
                    <li class="col-md-4"><a data-toggle="pill" href="http://wotcash-test.webcenter.website/#wotEU">WoT EU</a></li>
                    <li class="col-md-4"><a data-toggle="pill" href="http://wotcash-test.webcenter.website/#wotBlITZ">WoTBLITZ</a></li>
                </ul>
            </ul>
            <div class="tab-content">
                <div id="wotRU" class="tab-pane fade active in">
                    @foreach($categories_ru as $category)
                        <h2>{{ $category->title }}</h2>
                        <div class="row">
                            @foreach($category->products as $product)
                                <div class="game-layout col-lg-3 col-md-4 col-sm-6">
                                    <a class="game-thumb" href="{{ route('product.show', $product->slug) }}"
                                       title="Аккаунт 1000 боёв">
                                        <div class="game-preview">
                                            <img src="{{ \Illuminate\Support\Facades\Storage::url($product->getFirstImage()) }}" title="{{ $product->title }}">
                                        </div>
                                        <div class="caption">
                                            <h3>{{ $product->title }}</h3>
                                            <div class="new-price"><span>{{ $product->price }}</span> ₽</div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
                <div id="wotEU" class="tab-pane fade">
                    @foreach($categories_eu as $category)
                        <h2>{{ $category->title }}</h2>
                        <div class="row">
                            @foreach($category->products as $product)
                                <div class="game-layout col-lg-3 col-md-4 col-sm-6">
                                    <a class="game-thumb" href="{{ route('product.show', $product->slug) }}"
                                       title="Аккаунт 1000 боёв">
                                        <div class="game-preview">
                                            <img src="{{ \Illuminate\Support\Facades\Storage::url($product->getFirstImage()) }}" title="{{ $product->title }}">
                                        </div>
                                        <div class="caption">
                                            <h3>{{ $product->title }}</h3>
                                            <div class="new-price"><span>{{ $product->price }}</span> ₽</div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
                <div id="wotBlITZ" class="tab-pane fade">
                    @foreach($categories_blitz as $category)
                        <h2>{{ $category->title }}</h2>
                        <div class="row">
                            @foreach($category->products as $product)
                                <div class="game-layout col-lg-3 col-md-4 col-sm-6">
                                    <a class="game-thumb" href="{{ route('product.show', $product->slug) }}"
                                       title="Аккаунт 1000 боёв">
                                        <div class="game-preview">
                                            <img src="{{ \Illuminate\Support\Facades\Storage::url($product->getFirstImage()) }}" title="{{ $product->title }}">
                                        </div>
                                        <div class="caption">
                                            <h3>{{ $product->title }}</h3>
                                            <div class="new-price"><span>{{ $product->price }}</span> ₽</div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
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

@endsection
