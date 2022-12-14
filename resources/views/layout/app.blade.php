<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/23673491d4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body>
    @include('partials.header')
    @include('partials.jumbotron')
    <main>
        @yield('main-content')
    </main>
    @include('partials.footer')
</body>
</html>