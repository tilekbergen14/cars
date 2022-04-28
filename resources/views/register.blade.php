@extends('layouts.app')

@section('insidehead')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="css\css.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="registrationn.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="main">
            <form class="form" method="POST" action="{{ route('register') }}">
                @csrf
                <h2 class="aza">Registration</h2>
                @error('name')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <label class="aza">Name</label>
                <input value="{{ old('name') }}" type="text" name="name" id="name">
                @error('email')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <label class="aza">Email</label>
                <input value="{{ old('email') }}" type="text" name="email" id="email">
                @error('password')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <label class="aza">Password</label>
                <input value="{{ old('password') }}" type="password" name="password" id="password">
                @error('password')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <label class="aza">Confirm Password</label>
                <input value="{{ old('password_confirmation') }}" type="password" name="password_confirmation"
                    id="cpassword">
                <input type="submit" name="register" id="register" value="Enter">
            </form>
        </div>
    </div>
@endsection
