<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="../../../public/assets/css/layout.css">
</head>
<body>
<div class="menu">
    <h1>Tepk-IT</h1>
    <ul class="menu-list">
        <li><img src="{{ asset('assets/images/profile.svg') }}" alt="Личный кабинет"><a href="#">Личный <br>кабинет</a></li>

        @auth
            @if(auth()->user()->role === 'admin')
                <!-- Пункты меню для администратора -->
                <li><img src="{{ asset('assets/images/group.svg') }}" alt="Группы"><a href="#">Группы и <br>пользователи</a></li>
                <li><img src="{{ asset('assets/images/files.svg') }}" alt="Файлы"><a href="#">Файлы</a></li>
                <li><img src="{{ asset('assets/images/check.svg') }}" alt="Проверка"><a href="#">Проверка</a></li>
            @endif
        @endauth

        <li><img src="{{ asset('assets/images/about.svg') }}" alt="О системе"><a href="#">О системе</a></li>
        <li><img src="{{ asset('assets/images/logout.svg') }}" alt="Выход"><a href="/">Выход</a></li>
    </ul>
</div>
<main class="content">
    @yield('content')
</main>

</body>
</html>

