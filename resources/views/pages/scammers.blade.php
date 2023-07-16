@extends('layouts.default')

@section('styles')

    <style>

        .spoiler {
            margin-bottom: 20px;
        }

        .spoiler-content {
            display: none;
            padding: 10px;
            background-color: #f1f1f1;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-top: 10px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .spoiler-label {
            cursor: pointer;
            font-weight: bold;
            text-decoration: underline;
            color: #333;
        }

        .spoiler-label:hover {
            color: #555;
        }

        .show {
            display: block;
            opacity: 1;
        }
    </style>

@endsection

@section('content')

    <div class="container" style="height: 50vh">
        <div class="col-sm-12">
            <h1 class="title-page">Магазины-мошенники</h1>
            <div class="card">
                <div class="row">
                    <div class="col-md-12">
                        @foreach($scammers as $scammer)
                            <div class="spoiler">
                            <label class="spoiler-label">{{ $scammer->name }}</label>
                            <div class="spoiler-content">
                                <p>{{ $scammer->description }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script>

        $(document).ready(function () {

            // Получаем все элементы спойлеров
            const spoilerLabels = document.querySelectorAll('.spoiler-label');
            const spoilerContents = document.querySelectorAll('.spoiler-content');

            // Добавляем обработчик события клика к каждому спойлеру
            spoilerLabels.forEach(function(label, index) {
                label.addEventListener('click', function() {
                    // Получаем соответствующий контент спойлера по индексу
                    const content = spoilerContents[index];

                    // Проверяем состояние контента спойлера и изменяем его
                    if (content.classList.contains('show')) {
                        content.classList.remove('show');
                    } else {
                        content.classList.add('show');
                    }
                });
            });

        });

    </script>

@endsection
