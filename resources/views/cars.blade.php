@extends('layouts.app')

@section('insidehead')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://js.cx/libs/animate.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.1.1.js"></script>
    <link rel="icon" href="favicon.ico">
    <link rel="icon" href="/images/favicon/icon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="css\css.css">
    <script src="registrationn.js"></script>

    <style>
        body {
            background-image: url("images/static/bg.jpg");
        }

    </style>
@endsection

@section('content')
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/static/video.gif" alt="Smiley" style="width:100%;">
                </div>
                <div class="item">
                    <img src="images/static/secondvid.gif" alt="Chicago" style="width:100%;">
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="bla">
        <hr>
        <hr>
        <hr>
        <hr>
        <hr>
    </div>
    <div style="margin-bottom: 48px">
        <img class="car-img" border="0" src="images/static/car1.jpg" alt="Smiley" width="300" height="200">
        <img class="car-img" border="0" src="images/static/car2.jpg" alt="Smiley" width="300" height="200">
        <img class="car-img" border="0" src="images/static/car3.jpg" alt="Smiley" width="300" height="200">
    </div>
    <div class="asd">
        <button id="btn1">MORE</button>
    </div>
    <div class="row mb-4">
        @foreach ($images as $item)
            <div class="divClass col-md-4">
                <img src="{{ $item->image }}" class="car-img-card" alt="{{ $item->name }}">
            </div>
        @endforeach
    </div>
@endsection
