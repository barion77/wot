@extends('layouts.default')

@section('content')

    <div class="">
        <div class="header-product">
            <div class="productpromo-bg">
                <img src="{{ \Illuminate\Support\Facades\Storage::url($product->getFirstImage()) }}" title="{{ $product->title }}">
            </div>
            <div class="productpromo-card">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="thumb-product">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($product->getFirstImage()) }}"
                                     title="lolz">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <h1>{{ $product->title }}</h1>
                            <div class="key">

                            </div>
                            <div class="controll-overline">
                                <div class="product-price">
                                    <div class="price">
                                        <div class="new-price">
                                            <span>{{ $product->price }}</span> ₽
                                        </div>
                                        <div class="stock">В наличии</div>
                                    </div>
                                </div>


                                <form class="form_order" method="post" id="buyForm">
                                    <h4>Покупка</h4>
                                    <div>
                                        <input type="email" name="email" placeholder="Ваш Email" class="userEmail">
                                        <input type="text" name="promo" placeholder="Укажите промокод"
                                               class="promoInput mt-3">
                                        <input type="password" name="password"
                                               placeholder="Укажите пароль, если никогда не покупали"
                                               class="passwordInput mt-3">
                                        <input type="hidden" name="id" value="6" class="itemID">
                                        <input type="hidden" name="promoId" value="" class="promoID">
                                    </div>
                                    <br>
                                    <div class="text-center d-flex justify-content-between">
                                        <button class="btn main-btn align-items-center" type="button"
                                                id="promoAccept">
                                            Применить промо
                                        </button>
                                        <button class="btn main-btn align-items-center" type="button" id="butBuy">
                                            Купить сейчас
                                        </button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="screen-product">
                    <div class="container">
                        <h2>Скриншоты</h2>
                        <div class="screen-carousel owl-carousel owl-loaded owl-drag">

                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 293px;">
                                    <div class="owl-item active" style="width: 262.5px; margin-right: 30px;">
                                        @foreach($product->getImages() as $image)
                                            <div>
                                                <a data-fancybox="gallery" href="{{ \Illuminate\Support\Facades\Storage::url($image) }}">
                                                    <img src="{{ \Illuminate\Support\Facades\Storage::url($image) }}" alt="">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="owl-nav disabled">
                                <button type="button" role="presentation" class="owl-prev disabled"><span
                                        class="pe-7s-angle-left"></span></button>
                                <button type="button" role="presentation" class="owl-next disabled"><span
                                        class="pe-7s-angle-right"></span></button>
                            </div>
                            <div class="owl-dots disabled"></div>
                            <div class="owl-nav disabled"><button type="button" role="presentation"
                                                                  class="owl-prev disabled"><span class="pe-7s-angle-left"></span></button><button
                                    type="button" role="presentation" class="owl-next disabled"><span
                                        class="pe-7s-angle-right"></span></button></div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <h2>Описание аккаунта</h2>
                    <div class="card">
                        <div itemprop="description">
                            {!! $product->description !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <h2>Инструкция</h2>
                    <div class="card">
                        {!! $product->system_requirements !!}
                    </div>
                </div>
            </div>
        </div>


        <style>
            .form_order {
                width: 100%;
                max-width: 360px;
            }
        </style>

    </div>

@endsection
