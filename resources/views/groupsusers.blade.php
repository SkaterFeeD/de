@extends('layouts.layout')

@section('title', 'Tepk-IT')

@section('content')

    <link rel="stylesheet" href="../../public/assets/css/groupsusers.css">
<body>
<section class="add">
    <div class="user-add">
        <h1>Управление</h1>
        <div class="user-add-content">
            <div class="user-add-elements">
                <h3>Создание группы</h3>
                <form method="POST">  <!-- route -->
                    @csrf
                    <div class="form-group">
                        <label>Название:</label>
                        <input type="text" name="group_name" placeholder="1912c" required>
                    </div>
                    <button type="submit">Создать</button>
                </form>
            </div>

            <div class="group-add-elements">
                <h3>Создание пользователя</h3>
                <form method="POST">  <!-- route -->
                    @csrf
                    <div class="form-group">
                        <label>ФИО:</label>
                        <input class="form-input" type="text" name="full_name" placeholder="Фамилия Имя Отчество" required>
                    </div>
                    <div class="form-group">
                        <label>Логин:</label>
                        <input class="form-input" type="text" name="login" placeholder="login-ex" required>
                    </div>
                    <div class="form-group">
                        <label>Пароль:</label>
                        <input class="form-input" type="password" name="password" placeholder="********" required>
                    </div>
                    <div class="form-group">
                        <label>Группа:</label>
                        <select name="group_id" required class="form-input">
                            <option value="" disabled selected>Выберите группу</option>
                                    <?php /*
                                    @foreach($groups as $group)
                                        <option value="{{ $group->id }}">{{ $group->name }}</option>
                                    @endforeach
                                    */ ?>
                        </select>
                    </div>

                </form>
            </div>
        </div>
        <div class="table-container">
            <h1>Группы</h1>
            <div class="users-table-content">
                <h1>Поиск по группам:</h1>
            <table class="users-table-element">
                <thead>
                <tr>
                    <th>ФИО</th>
                    <th>Логин</th>
                    <th>Пароль</th>
                    <th>Статусы создания</th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
            </table>
            </div>
        </div>
    </div>
</section>

</body>


@endsection

