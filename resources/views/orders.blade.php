@extends('layouts.default')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="title-page">Мои покупки</h1>
                <div class="card">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('order.get') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control"
                                           placeholder="Введите вашу почту">
                                    <input type="password" name="password" class="form-control mt-3"
                                           placeholder="Введите ваш пароль">
                                </div>
                                <button type="submit" class="btn main-btn">Получить покупки</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="position: relative;display: flex;gap: 20px;flex-wrap: wrap;justify-content: center;">
            @foreach ($orders as $order)
                <div class="card" style="width: 300px;">
                    <div class="account_category" style="text-align: center;font-weight: 600;">Аккаунт WOT</div>
                    <div class="info_box">
                        <div class="date">
                            <p class="info_box_title">Дата покупки</p>
                            <p class="info_box_value">{{ date('Y-m-d H:i:s', strtotime($order->created_at)) }}</p>
                        </div>
                        <div class="date">
                            <p class="info_box_title">Номер заказа</p>
                            <p class="info_box_value">#{{ $order->id }}</p>
                        </div>
                        <div class="date">
                            <p class="info_box_title">Стоимость заказа</p>
                            <p class="info_box_value">{{ $order->product->price }} руб</p>
                        </div>
                        <div style="display: flex;justify-content: center;margin-top: 20px;">
                            <button type="submit" class="btn main-btn">Получить данные</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
