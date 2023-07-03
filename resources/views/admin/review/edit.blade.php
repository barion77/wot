@extends('admin.layouts.default')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование отзыва</h1>
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
                        <form action="{{ route('admin.review.update', $review->id) }}" method="POST" class="w-50">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Имя</label>
                                <input type="text" class="form-control" name="username" placeholder="Имя" value="{{ $review->username }}">
                                @error('username')
                                <div class="text-danger mb-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Текст</label>
                                <textarea class="form-control" name="content">{{ $review->content }}</textarea>
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
                                    <input type="radio" name="good" value="0" {{ $review->good == '0' ? 'checked' : '' }}>
                                </div>
                                <div class="form-group">
                                    <label style="color: green">Положительно</label>
                                    <input type="radio" name="good" value="1" {{ $review->good == '1' ? 'checked' : '' }}>
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
