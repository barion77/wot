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
                                        <label>Название</label>
                                        <input type="title" name="title" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Минимальная цена</label>
                                        <input type="number" name="pmin" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Максимальная цена</label>
                                        <input type="number" name="pmax" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Категория</label>
                                        <select name="category" class="form-control">
                                            <option value="world-of-tanks">WOT</option>
                                            <option value="wot-blitz">WOT Blitz</option>
                                        </select>
                                        @error('category')
                                        <div class="text-danger mb-3">
                                            {{ $message }}
                                        </div>
                                        @enderror
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

