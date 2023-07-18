@extends('layouts.default')

@section('content')

    <div class="container">
        <div class="col-sm-12">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="title-page">Помощь и поддержка</h1>
                <a href="https://t.me/thecaardinal" class="btn main-btn">Перейти в телеграмм</a>
            </div>
            <div class="card">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <ul class="nav nav-tabs nav-help">
                            <li class="active"><a data-toggle="tab"
                                                  href="http://wotcash-test.webcenter.website/support#help-tab1"
                                                  aria-expanded="true">Продукты</a></li>
                            <li class=""><a data-toggle="tab"
                                            href="http://wotcash-test.webcenter.website/support#help-tab2"
                                            aria-expanded="false">Оплата</a></li>
                            <li class=""><a data-toggle="tab"
                                            href="http://wotcash-test.webcenter.website/support#help-tab3"
                                            aria-expanded="false">Проблемы</a></li>
                            <li class=""><a data-toggle="tab"
                                            href="http://wotcash-test.webcenter.website/support#help-tab4"
                                            aria-expanded="false">Другое</a></li>
                        </ul>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div class="tab-content">

                            <div id="help-tab1" class="tab-pane fade active in">
                                <h3>Помощь по продуктам</h3>
                                <div class="panel-group help-panel-group" id="accordion-help1">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion-help1"
                                                   href="http://wotcash-test.webcenter.website/support#help1-1"
                                                   class="collapsed" aria-expanded="false">
                                                    <span class="num">1</span>
                                                    Мне не понравился аккаунт, могу ли я вернуть свои деньги?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="help1-1" class="panel-collapse collapse" aria-expanded="false"
                                             style="height: 0px;">
                                            <div class="panel-body">
                                                Это не представляется возможным. Аккаунты, приобретенные
                                                покупателями, не подлежат возврату или обмену в случае, если
                                                аккаунты были получены и соответствуют заявленному описанию.
                                            </div>
                                        </div>
                                    </div>


                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion-help1"
                                                   href="http://wotcash-test.webcenter.website/support#help1-2"
                                                   class="collapsed" aria-expanded="false">
                                                    <span class="num">2</span>
                                                    Как узнать, в наличии аккаунт или нет?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="help1-2" class="panel-collapse collapse" aria-expanded="false"
                                             style="height: 0px;">
                                            <div class="panel-body">
                                                Все продаваемые аккаунты расположены на главной странице магазина.
                                                Информация о доступности каждого аккаунта также указана на странице
                                                с описанием, рядом с ценой.
                                            </div>
                                        </div>
                                    </div>


                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion-help1"
                                                   href="http://wotcash-test.webcenter.website/support#help1-3"
                                                   class="collapsed" aria-expanded="false">
                                                    <span class="num">3</span>
                                                    Я купил(а) аккаунт, как и где его можно забрать?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="help1-3" class="panel-collapse collapse" aria-expanded="false"
                                             style="height: 0px;">
                                            <div class="panel-body">
                                                Совершенные вами покупки доступны в разделе «Мои покупки», а также
                                                отправляются на указанную в процессе совершения покупки электронную
                                                почту.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div id="help-tab2" class="tab-pane fade">
                                <h3>Помощь по оплате</h3>
                                <div class="panel-group help-panel-group" id="accordion-help2">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion-help2"
                                                   href="http://wotcash-test.webcenter.website/support#help2-4"
                                                   class="collapsed" aria-expanded="false">
                                                    <span class="num">1</span>
                                                    Какими способами я могу оплатить товар?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="help2-4" class="panel-collapse collapse" aria-expanded="false"
                                             style="height: 0px;">
                                            <div class="panel-body">
                                                Выберите аккаунт, укажите адрес электронной почты для доставки
                                                аккаунта, нажмите кнопку совершения покупки и увидите полный список
                                                доступных способов оплаты.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion-help2"
                                                   href="http://wotcash-test.webcenter.website/support#help2-5"
                                                   class="collapsed" aria-expanded="false">
                                                    <span class="num">2</span>
                                                    Могу ли я оплатить покупку не в рублевом эквиваленте?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="help2-5" class="panel-collapse collapse" aria-expanded="false"
                                             style="height: 0px;">
                                            <div class="panel-body">
                                                Да, магазин принимает к оплате и евро, доллары, гривны и рубли.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion-help2"
                                                   href="http://wotcash-test.webcenter.website/support#help2-6"
                                                   class="collapsed" aria-expanded="false">
                                                    <span class="num">3</span>
                                                    Я хочу оплатить товар банковской картой, безопасно ли это?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="help2-6" class="panel-collapse collapse" aria-expanded="false"
                                             style="height: 0px;">
                                            <div class="panel-body">
                                                Полностью безопасно! За конфиденциальность получаемой информации
                                                несет ответственность магазин и агрегатор платежей, а списание
                                                средств производится только на указанную стоимость выбранного товара
                                                при оформлении заказа. А также, оформить заказ невозможно, если у
                                                владельца банковской карты не подключена защита 3D-Secure,
                                                оберегающая как магазин, так и покупателя от кардинговых мошенников!
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div id="help-tab3" class="tab-pane fade">
                                <h3>Решения проблем</h3>
                                <div class="panel-group help-panel-group" id="accordion-help3">


                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion-help3"
                                                   href="http://wotcash-test.webcenter.website/support#help3-7"
                                                   class="collapsed" aria-expanded="false">
                                                    <span class="num">1</span>
                                                    Я оплатил(а) аккаунт, но не получил(а) его.
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="help3-7" class="panel-collapse collapse" aria-expanded="false"
                                             style="height: 0px;">
                                            <div class="panel-body">
                                                Если вы оплатили аккаунт, денежные средства были списаны и в течение
                                                нескольких минут аккаунт так и не был вам выдан, то необходимо
                                                указать в поле ниже Email который был указан в процессе совершения
                                                покупки. Мы отправим товар повторно.
                                            </div>
                                        </div>
                                    </div>


                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion-help3"
                                                   href="http://wotcash-test.webcenter.website/support#help3-8"
                                                   class="collapsed" aria-expanded="false">
                                                    <span class="num">2</span>
                                                    Во время входа в аккаунт написано, что данные от аккаунта
                                                    неверны.
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="help3-8" class="panel-collapse collapse" aria-expanded="false"
                                             style="height: 0px;">
                                            <div class="panel-body">
                                                Если вы получили нерабочий аккаунт, необходимо указать адрес
                                                электронной почты который вы указали в процессе совершения покупки и
                                                данные от аккаунта который покупали. Заполните необходимые поля ниже
                                                и отправьте заявку на рассмотрение. Денежные средства будут
                                                возвращены на реквизиты с которых был оплачен аккаунт.
                                            </div>
                                        </div>
                                    </div>


                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion-help3"
                                                   href="http://wotcash-test.webcenter.website/support#help3-9"
                                                   class="collapsed" aria-expanded="false">
                                                    <span class="num">3</span>
                                                    Что делать, если аккаунт заблокирован?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="help3-9" class="panel-collapse collapse" aria-expanded="false"
                                             style="height: 0px;">
                                            <div class="panel-body">
                                                Если вы получили заблокированный аккаунт, необходимо указать адрес
                                                электронной почты который вы указали в процессе совершения покупки и
                                                данные от аккаунта который покупали. Заполните необходимые поля ниже
                                                и отправьте заявку на рассмотрение. Денежные средства будут
                                                возвращены на реквизиты с которых был оплачен аккаунт.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div id="help-tab4" class="tab-pane fade">
                                <div class="panel-group help-panel-group" id="accordion-help3">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
