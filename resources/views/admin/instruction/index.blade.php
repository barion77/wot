@extends('admin.layouts.default')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Инструкции</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Инструкции</li>
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
                    <a href="{{ route('admin.instruction.create') }}" class="btn btn-primary mb-3">Добавить инструкцию</a>
                    @foreach($instructions as $instruction)
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $instruction->title }}</h5>

                                <p class="card-text">
                                    {!! $instruction->content !!}
                                </p>
                                <a href="{{ route('admin.instruction.edit', $instruction->id) }}" class="btn btn-primary">Изменить</a>
                                <form action="{{ route('admin.instruction.delete', $instruction->id) }}" method="post" style="display: inline-block">
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

