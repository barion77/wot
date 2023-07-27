@extends('admin.layouts.default')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Создание категории</h1>
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
                        <form action="{{ route('admin.category.store') }}" method="POST" class="w-50" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Название</label>
                                <input type="text" class="form-control" name="title" placeholder="Название" value="{{ old('title') ?? null }}">
                                @error('title')
                                <div class="text-danger mb-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Вес</label>
                                <input type="number" class="form-control" name="weight" placeholder="Вес" value="{{ old('weight') ?? null }}">
                                @error('weight')
                                <div class="text-danger mb-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Выберите категорию</label>
                                <select name="main_cat" class="form-control">
                                    <option>Выберите основную категорию</option>
                                    @foreach($main_categories as $key => $cat)
                                        <option value="{{ $key }}">{{ $cat }}</option>
                                    @endforeach
                                </select>
                                @error('title')
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
