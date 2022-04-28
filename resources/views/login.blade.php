@extends('layouts.app')

@section('insidehead')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="css\css.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="registrationn.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="main">
            <form class="form" method="post" action="{{ route('login') }}">
                @csrf
                @if (session('status'))
                    <div style="color: red">{{ session('status') }}</div>
                @endif
                @error('email')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <h2 class="aza">Login</h2>
                @error('email')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <label class="aza">Email</label>
                <input type="text" value="{{ old('email') }}" name="email" id="email">
                @error('password')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <label class="aza">Password</label>
                <input type="password" value="{{ old('password') }}" name="password" id="password">
                <input type="submit" name="register" id="register" value="Enter">
            </form>
        </div>
    </div>
@endsection
