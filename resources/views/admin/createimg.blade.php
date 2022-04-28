@extends('layouts.admin')

@section('insidehead')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="\css\css.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="registrationn.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="main">
            <form class="form" method="post" action="#">
                <h2 class="aza">Create Image</h2>
                <label class="aza">Name</label>
                @error('name')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <input type="text" value="{{ $image ? $image->name : old('name') }}" name="dname" id="name">
                @if ($image && $image->image)
                    <input type="hidden" value="{{ $image->image }}" name="existedImage">
                    <img src="{{ $image->image }}" class="uploaded-img mb-4" alt="{{ $image->name }}">
                @endif
                @error('image')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <input type="file" name="image" value="{{ old('image') }}">
                <input type="button" name="register" id="register" value="Create">
            </form>
        </div>
    </div>
    <script>
        document.getElementById("name").addEventListener("keypress", myFunction);

        function myFunction() {
            document.getElementById("name").style.backgroundColor = "red";
        }
    </script>
    <script>
        document.getElementById("email").addEventListener("keypress", myFunction);

        function myFunction() {
            document.getElementById("email").style.backgroundColor = "green";
        }
    </script>
@endsection
