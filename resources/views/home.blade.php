@extends('layouts.layout')

@section('title', 'Tepk-IT')

@section('content')


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="../../public/assets/css/home.css">
</head>
<body>
    <div class="menu">
        <h1>Tepk-IT</h1>
        <ul class="menu-list">
            <li><img src="../../public/assets/images/profile.svg" alt="Личный кабинет"><a href="#">Личный <br>кабинет</a></li>
            <li><img src="../../public/assets/images/about.svg" alt="О системе"><a href="#">О системе</a></li>
            <li><img src="../../public/assets/images/logout.svg" alt="Выход"><a href="/">Выход</a></li>
        </ul>
    </div>

</body>
</html>



@endsection
