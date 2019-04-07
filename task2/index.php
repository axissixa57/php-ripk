<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Авторизация</h2>
    <form action="handler.php" method="POST">
        <p>Логин: <input type="text" name="login"/></p>
        <p>ФИО: <input type="text" name="fio"/></p>
        <p>Пароль: <input type="text" name="password"/></p>
        <p>Проверка пароля: <input type="text" name="check_password"/></p>
        <input type="submit" value="отправить">
    </form>
</body>
</html>