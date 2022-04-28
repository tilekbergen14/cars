@extends('layouts.app')

@section('insidehead')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico">
    <link rel="icon" href="/images/favicon/icon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="css\css.css">
    <script src="registrationn.js"></script>
@endsection

@section('content')
    <img class="bg-image" src="images/static/car1.jpg" alt="">
    <img class="bg-image" src="images/static/car2.jpg" alt="">
    <img class="bg-image" src="images/static/car3.jpg" alt="">
    <img class="bg-image" src="images/static/car4.jpg" alt="">
    <img class="bg-image" src="images/static/car5.jpg" alt="">
    <img class="bg-image" src="images/static/car6.jpg" alt="">
    <div class="bg-text">
        <p onclick="soundClick()">CARS</p>
    </div>
@endsection
