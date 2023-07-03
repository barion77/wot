@extends('admin.layouts.default')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Промокоды</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Промокоды</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('admin.promotion.create') }}" class="btn btn-primary">Добавить промокод</a>
                        </div>
                        <div class="card-body">
                            <table id="table" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Код</th>
                                    <th>Скидка</th>
                                    <th>Использовано</th>
                                    <th>Макс кол-во использований</th>
                                    <th>Макс кол-во на одного юзера</th>
                                    <th>Начинается</th>
                                    <th>Заканчивается</th>
                                    <th>Создан</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>


@endsection

@section('scripts')

    <script>

        let columns = [
            {"data": "id", "name": "id"},
            {"data": "name", "name": "name"},
            {"data": "code", "name": "code"},
            {"data": "discount_amount", "name": "discount_amount"},
            {"data": "uses", "name": "uses"},
            {"data": "max_uses", "name": "max_uses"},
            {"data": "max_uses_user", "name": "max_uses_user"},
            {"data": "starts_at", "name": "starts_at"},
            {"data": "expires_at", "name": "expires_at"},
            {"data": "created", "name": "created"},
            {"data": "actions", "name": "actions", orderable: false, searchable: false},
        ];

        $(function () {
            $('#table').DataTable({
                "paging": true,
                "pageLength": 25,
                "processing": true,
                "serverSide": true,
                "columns": columns,
                "ajax": {
                    "url": "{{ route('admin.promotion.data') }}",
                    "dataSrc": "data",
                },
            });
        });

    </script>

@endsection
