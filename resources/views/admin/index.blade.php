@extends('layouts.admin')

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
    <div class="row py-4">
        @foreach ($images as $item)
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 100%">
                    <img src="{{ $item->image }}" class="card-img-top" alt="{{ $item->name }}">
                    <div class="card-body">
                        <form action="{{ route('deleteimg', $item) }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger w-100" value="Delete">
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
