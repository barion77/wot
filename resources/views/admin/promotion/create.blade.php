@extends('admin.layouts.default')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Создание промокода</h1>
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
                        <form action="{{ route('admin.promotion.store') }}" method="POST" class="w-50">
                            @csrf
                            <div class="form-group">
                                <label>Название</label>
                                <input type="text" class="form-control" name="name" placeholder="Название" value="{{ old('title') ?? null }}">
                                @error('name')
                                    <div class="text-danger mb-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Промокод</label>
                                <input type="text" class="form-control" name="code" placeholder="Промокод" value="{{ old('code') ?? null }}">
                                <input type="button" class="btn btn-outline-success mt-3" id="generateCode" value="Сгенерировать код">
                                @error('code')
                                <div class="text-danger mb-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Скидка</label>
                                <input type="text" class="form-control" name="discount_amount" placeholder="Скидка" value="{{ old('discount_amount') ?? null }}">
                                @error('discount_amount')
                                <div class="text-danger mb-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Лимит применений</label>
                                <input type="text" class="form-control" name="max_uses" placeholder="Лимит применений" value="{{ old('max_uses') ?? null }}">
                                @error('max_uses')
                                <div class="text-danger mb-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Лимит применений на юзера</label>
                                <input type="text" class="form-control" name="max_uses_user" placeholder="Лимит применений на юзера" value="{{ old('max_uses_user') ?? null }}">
                                @error('max_uses_user')
                                <div class="text-danger mb-3">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Начинается</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" name="starts_at" class="form-control datetimepicker-input" data-target="#reservationdate">
                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Начинается</label>
                                <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                                    <input type="text" name="expires_at" class="form-control datetimepicker-input" data-target="#reservationdate2">
                                    <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
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

        $(function () {
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            $('#reservationdate2').datetimepicker({
                format: 'L'
            });
        })

        $('#generateCode').click(function () {

            let randomString = generateRandomString(5);

            $('input[name="code"]').val(randomString);

        });

        function generateRandomString(length) {
            let result = '';
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';

            for (let i = 0; i < length; i++) {
                const randomIndex = Math.floor(Math.random() * characters.length);
                result += characters.charAt(randomIndex);
            }

            return result;
        }

    </script>

@endsection
