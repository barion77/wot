@extends('admin.layouts.default')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование страницы</h1>
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
                        <form action="{{ route('admin.page.update', $page->id) }}" method="POST" class="w-50" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Название</label>
                                <input type="text" class="form-control" name="title" placeholder="Название" value="{{ $page->title }}">
                                @error('title')
                                <div class="text-danger mb-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Название</label>
                                <input type="text" class="form-control" name="slug" placeholder="Слаг" value="{{ $page->slug }}">
                                @error('slug')
                                <div class="text-danger mb-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Контент</label>
                                <textarea name="content" id="content">{{ $page->content }}</textarea>
                                @error('content')
                                <div class="text-danger mb-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-success" value="Обновить">
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

@section('scripts')

    <script>

        $(document).ready(function () {
            $('#content').summernote({
                "placeholder": "Контент",
                "height": 200,
            });
        });

    </script>

@endsection
