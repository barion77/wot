@extends('admin.layouts.default')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Настройки</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Настройки</li>
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
                        <form action="{{ route('admin.setting.update') }}" method="post">
                            @csrf
                            @method('PUT')
                            <!-- Default box -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Lava API</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Секретный ключ</label>
                                        <textarea name="lava_secret_key" class="form-control">{{ !empty($settings) && !empty($settings->lava_secret_key) ? $settings->lava_secret_key : '' }}</textarea>
                                        @error('lava_secret_key')
                                        <div class="text-danger mb-3">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Shop ID</label>
                                        <input type="text" name="shop_id" class="form-control" placeholder="Shop id..." value="{{ !empty($settings) && !empty($settings->shop_id) ? $settings->shop_id : '' }}">
                                        @error('shop_id')
                                        <div class="text-danger mb-3">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Контакты</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                    title="Collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Ссылка на саппорта</label>
                                            <input type="text" name="telegram_support_link" class="form-control" placeholder="Ссылка на саппорт..." value="{{ !empty($settings) && !empty($settings->telegram_support_link) ? $settings->telegram_support_link : '' }}">
                                            @error('telegram_support_link')
                                            <div class="text-danger mb-3">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Ссылка на канал</label>
                                            <input type="text" name="telegram_channel_link" class="form-control" placeholder="Ссылка на канал..." value="{{ !empty($settings) && !empty($settings->telegram_channel_link) ? $settings->telegram_channel_link : '' }}">
                                            @error('telegram_channel_link')
                                            <div class="text-danger mb-3">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Логи телеграм</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Токен бота</label>
                                        <input type="text" name="telegram_bot_token" class="form-control" placeholder="Токен бота..." value="{{ !empty($settings) && !empty($settings->telegram_bot_token) ? $settings->telegram_bot_token : '' }}">
                                        @error('telegram_bot_token')
                                        <div class="text-danger mb-3">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Чат айди</label>
                                        <input type="text" name="chat_id" class="form-control" placeholder="Чат айди..." value="{{ !empty($settings) && !empty($settings->chat_id) ? $settings->chat_id : '' }}">
                                        @error('chat_id')
                                        <div class="text-danger mb-3">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="send_logs" class="custom-control-input" id="customSwitch1" {{ !empty($settings) && !empty($settings->send_logs) ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="customSwitch1">Отравлять логи да/нет</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success">Изменить</button>
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

