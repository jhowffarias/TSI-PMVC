<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
@section('sidebar')
Uma bela barra superior<br>
------------------------------------------------------------------------------------------
@show
<div class="container">
    @yield('content')
</div>
</body>
</html>
