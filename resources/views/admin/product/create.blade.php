﻿@extends('admin.layouts.default')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Создание продукта</h1>
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
                        <form action="{{ route('admin.product.store') }}" method="POST" class="w-50" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Название</label>
                                <input type="text" class="form-control" name="title" placeholder="Название"
                                       value="{{ old('title') ?? null }}">
                                @error('title')
                                <div class="text-danger mb-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Описание</label>
                                <textarea class="form-control" id="description"
                                          name="description">{{ old('description') ?? null }}</textarea>
                                @error('description')
                                <div class="text-danger mb-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Системные требование</label>
                                <textarea class="form-control" id="system_requirements"
                                          name="system_requirements">{{ old('system_requirements') ?? null }}</textarea>
                                @error('system_requirements')
                                <div class="text-danger mb-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Цена</label>
                                <input type="text" class="form-control" name="price" placeholder="Цена"
                                       value="{{ old('price') ?? null }}">
                                @error('price')
                                <div class="text-danger mb-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Категория</label>
                                <select name="category_id" class="form-control">
                                    <option>Выберите категорию</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div id="images-input"></div>
                            <div class="form-group">
                                <label>Изображения</label>
                                <div id="dropzone" class="dropzone"></div>
                                @error('images')
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


@section('scripts')

    <script>

        $(document).ready(function () {
            $('#description').summernote({
                "placeholder": "Описание товара",
                "height": 200,
            });
        });

        $(document).ready(function () {
            $('#system_requirements').summernote({
                "placeholder": "Системные требование",
                "height": 200,
            });
        });

        var imagesList = {};
        var renderImagesInput = function () {
            $('#images-input').html('');
            $.each(imagesList, function (key, item) {
                $('#images-input').append('<input type="hidden" name="images[]" value="' + item + '">');
            });
        };

        let token = '{{ csrf_token() }}';
        Dropzone.autoDiscover = false;
        $(function () {
           var dropzone = new Dropzone("div#dropzone", {
               dictDefaultMessage: "Выберите фотографии или кидайте в эту область",
               paramName: "image",
               url: "{{ route('admin.product.images.upload') }}",
               maxFilesize: 3,
               acceptedFiles: ".png, .jpg, .jpeg",
               parallelUploads: 2,
               addRemoveLinks: true,

               init: function () {
                    var dropzone = this;

                    this.on('sending', function (file, xhr, formData) {
                        formData.append("_token", token);
                    });

                   this.on("removedfile", function (file) {
                       if (file.uuid)
                           delete imagesList[file.uuid];
                       else
                           delete imagesList[file.upload.uuid];

                       renderImagesInput();
                   });

                    this.on('success', function (file, response) {
                        console.log(response);
                        imagesList[file.upload.uuid] = response;
                        renderImagesInput();
                    });

                    this.on('queuecomplete', function () {

                    })

               },

           });
        });

    </script>

@endsection