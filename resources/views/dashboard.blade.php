@extends('layouts.app')

@section('insidehead')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="\css\css.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="registrationn.js"></script>
@endsection

@section('content')
    <div style="display: flex; flex-direction: column; margin: 64px 0; align-items: center;">
        <div class="main">
            <form class="form" method="post" action="{{ route('createimg') }}" enctype="multipart/form-data">
                @csrf
                <h2 class="aza">Create Image</h2>
                <label class="aza">Name</label>
                @error('name')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <input type="text" value="{{ old('name') }}" name="name" id="name">
                @error('image')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <input type="file" name="image" />
                <input type="submit" name="register" id="register" value="Create">
            </form>
        </div>
        @if (count(auth()->user()->images) !== 0)
            <h2 class="aza" style="color: white; margin-bottom: 0">Your Images</h2>
            <div style="display: grid; grid-template-columns: repeat(3, 1fr)">
                @foreach (auth()->user()->images as $item)
                    <div class="divClass col-md-4" style="position: relative">
                        <img src="{{ $item->image }}" class="car-img-card" alt="{{ $item->name }}">
                        <form action="{{ route('deleteimg', $item) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button style="position: absolute; width: max-content; right: 0; bottom: 0; font-size: 16px">
                                Delete
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
