@extends('admin.layouts.default')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Парсер</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Парсер</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.zelenka.parse') }}" method="get">
                        @csrf
                        <!-- Default box -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Zelenka Parse</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Выберите тип парсера</label>
                                        <select name="parse_type" class="form-control" id="parse-type">
                                            <option selected value="url">Аккаунт с описание</option>
                                            <option value="rand">Рандомные аккаунты</option>
                                        </select>
                                    </div>
                                    <div class="form-group" id="product-url">
                                        <label>Ссылка на товар</label>
                                        <input type="text" name="url" class="form-control">
                                    </div>
                                    <div class="filters" id="filters" style="display: none">
                                        <div>Привязка к телефону</div>
                                        <div class="form-check">
                                            <input type="radio" name="tel" class="form-check-input" id="radio1" value="">
                                            <label class="form-check-label">Не важно</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="tel" class="form-check-input" id="radio1" value="no">
                                            <label class="form-check-label">Нет</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="tel" class="form-check-input" id="radio1" value="yes">
                                            <label class="form-check-label">Да</label>
                                        </div>
                                        <div class="form-group">
                                            <label>Страница</label>
                                            <input type="number" name="page" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Название</label>
                                            <input type="title" name="title" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Количество дней, в течение которых учетная запись была недоступна</label>
                                            <input type="number" name="daybreak" class="form-control">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Минимальная цена</label>
                                                    <input type="number" name="pmin" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Максимальная цена</label>
                                                    <input type="number" name="pmax" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Минимальное количество боёв</label>
                                                    <input type="number" name="battles_min" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Максимальное количество боёв</label>
                                                    <input type="number" name="battles_max" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Минимальное количество золота</label>
                                                    <input type="number" name="gold_min" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Максимальное количество золота</label>
                                                    <input type="number" name="gold_max" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Минимальное количество серебра</label>
                                                    <input type="number" name="silver_min" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Максимальное количество серебра</label>
                                                    <input type="number" name="silver_max" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Минимальное количество топ танков</label>
                                                    <input type="number" name="top_min" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Максимальное количество топ танков</label>
                                                    <input type="number" name="top_max" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Минимальное количество премиум танков</label>
                                                    <input type="number" name="prem_min" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Максимальное количество премиум танков</label>
                                                    <input type="number" name="prem_max" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Минимальное количество побед</label>
                                                    <input type="number" name="win_pmin" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Максимальное количество побед</label>
                                                    <input type="number" name="win_pmax" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Регион</label>
                                            <select name="region" class="form-control">
                                                <option value="">Не важно</option>
                                                <option value="ru">RU</option>
                                                <option value="eu">EU</option>
                                                <option value="asia">Asia</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Категория</label>
                                            <select name="category" class="form-control" required>
                                                <option value="world-of-tanks">WOT</option>
                                                <option value="wot-blitz">WOT Blitz</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success">Парсить</button>
                            </div>
                        </form>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>


@endsection

@section('scripts')

    <script>

        $('#parse-type').change(function () {

            let parseType = $('#parse-type').val();

            if (parseType === 'url') {
                $('#filters').css('display', 'none');
                $('#product-url').css('display', 'block');
            } else {
                $('#filters').css('display', 'block');
                $('#product-url').css('display', 'none');
            }

        });

    </script>

@endsection

