@extends('layouts.default')

@section('content')

    <div class="container">
        <div id="content">

            <br><br>
            <div class="row">

                <div class="col-lg-5 col-xl-4">
                    <div class="card">
                        <h3 class="text-center">Оставь свой отзыв</h3>
                        <form class="form-row" action="{{ route('review.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="username" placeholder="Ваше имя" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="telegram" placeholder="Ваш телеграм" class="form-control">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hidden" type="checkbox" value="1" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Скрыть телеграм
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="form-check-label">Ваша оценка</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="good" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1" style="color:green">Положительно</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="good" id="inlineRadio2" value="0">
                                    <label class="form-check-label" for="inlineRadio2" style="color:red">Отрицательно</label>
                                </div>
                            </div>
                            <div class="form-group">
                                    <textarea name="content" class="form-control" rows="3" placeholder="Ваш отзыв" style="resize: none;"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn main-btn btn-block">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-md-12 col-lg-7 col-xl-8">
                    <div class="card">
                        <h2 class="text-center">Список отзывов</h2>
                        @foreach($reviews as $review)
                            <div class="reviews-list" id="reviewsBody">
                                <div class="review-item {{ $review->good ? 'success' : 'bad' }}">
                                    <div class="review-avatar"></div>
                                    <div class="review-author">{{ $review->username }} {{ $review->telegram_hidden ? '' : $review->telegram }} <i class="review-date">{{ date('Y-m-d, H:s') }}</i></div>
                                    <div class="review-body">{{ $review->content }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
