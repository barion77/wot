@extends('layouts.default')

@section('content')

<div class="container">
    <div style="position: relative;display: flex;gap: 20px;flex-wrap: wrap;justify-content: center;">

        <div class="card" style="width: 300px;">
            <div class="account_category" style="text-align: center;font-weight: 600;">Товар {{ $invoice->product->title }}</div>
            <div class="info_box">
                <div class="date">
                    <p class="info_box_title">Дата покупки</p>
                    <p class="info_box_value">{{ date('Y-m-d H:i:s', strtotime($invoice->created_at)) }}</p>
                </div>
                <div class="date">
                    <p class="info_box_title">Номер заказа</p>
                    <p class="info_box_value">#{{ $invoice->id }}</p>
                </div>
                <div class="date">
                    <p class="info_box_title">Стоимость заказа</p>
                    <p class="info_box_value">{{ $invoice->product->price }} руб</p>
                </div>
                <div class="date">
                    <p class="info_box_title">Данные для товара</p>
                    <p class="info_box_value">{{ $invoice->product->data }}</p>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
