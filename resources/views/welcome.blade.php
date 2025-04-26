@section('title', 'Авторизация')

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="../../public/assets/css/auth.css">
</head>
<body>
    <div class="auth">
        <h1>Авторизация</h1>
        <div class="places">
            <p>Логин</p>
            <input placeholder="Admin">
            <p>Пароль</p>
            <input placeholder="*****" type="password">
        </div>
        <div class="auth-btn">
            <input type="submit" value="Войти">
        </div>
        <!-- заглушка --> <a href="{{ route('home') }}">Войти</a>
        <!-- заглушка --> <a href="{{ route('groups') }}">groupsandusers</a>
    </div>
</body>
</html>


