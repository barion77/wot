@extends('layouts.default')

@section('content')

    <div class="container">

        <div id="content" class="col-sm-12">
            <h1 class="title-page">{{ $page->title }}</h1>
            <div class="card">
                {!! $page->content !!}
            </div>
        </div>
    </div>

@endsection
