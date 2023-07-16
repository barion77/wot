@extends('admin.layouts.default')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Мошенники</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Мошенники</li>
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
                    <a href="{{ route('admin.scammer.create') }}" class="btn btn-primary mb-3">Добавить мошенника</a>
                    @foreach($scammers as $scammer)
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $scammer->name }}</h5>

                                <p class="card-text">
                                    {{ $scammer->description }}
                                </p>
                                <a href="{{ route('admin.scammer.edit', $scammer->id) }}" class="btn btn-primary">Изменить</a>
                                <form action="{{ route('admin.scammer.delete', $scammer->id) }}" method="post" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>


@endsection

