@extends('admin.layouts.default')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Создание отзыва</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.review.store') }}" method="POST" class="w-50">
                            @csrf
                            <div class="form-group">
                                <label>Имя</label>
                                <input type="text" class="form-control" name="username" placeholder="Имя" value="{{ old('username') ?? null }}">
                                @error('username')
                                    <div class="text-danger mb-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Телеграм</label>
                                <input type="text" class="form-control" name="telegram" placeholder="Телеграм" value="{{ old('telegram') ?? null }}">
                                @error('telegram')
                                <div class="text-danger mb-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="telegram_hidden" class="form-check-input" value="1">
                                <label>Скрыть телеграм</label>
                                @error('good')
                                <div class="text-danger mb-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Текст</label>
                                <textarea class="form-control" name="content">{{ old('content') ?? null }}</textarea>
                                @error('content')
                                <div class="text-danger mb-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Оценка</label>
                                <div class="form-group">
                                    <label style="color: red">Отрицательно</label>
                                    <input type="radio" name="good" value="0">
                                </div>
                                <div class="form-group">
                                    <label style="color: green">Положительно</label>
                                    <input type="radio" name="good" value="1">
                                </div>
                                @error('good')
                                <div class="text-danger mb-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-success" value="Создать">
                        </form>
                    </div>
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">

                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
