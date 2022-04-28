<!DOCTYPE html>
<html>

<head>
    @yield("insidehead")
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="icon-bar">
        <a style="width: 50%" class="active" href="/"><i class="fa fa-home"></i></a>
        <a style="width: 50%" href="{{ route('admin') }}"><i class="fa fa-search"></i></a>
    </div>
    @yield("content")
</body>

</html>
