<?php
    include "library/db.php";
    include "library/core.php";
    $login = $_POST["login"];
    $password = $_POST["password"];

    if($_POST)
    {
        $db = new Db();
        $db->setQuery("SELECT * FROM `users` WHERE `login` = '$login'");

        if($db->getNumRows())
        {
            header('Location: hello.php'); // функц-я должна использоваться выше html кода и без дескрипторов php в html 
        } else {
            $error = "username doesn't exist!";
            dump($error); 
        }
    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>

</head>
<body>
    <h2>Авторизация</h2>
    <form action="check.php" method="POST">
        <p>Логин: <input type="text" name="login"/></p>
        <p>Пароль: <input type="text" name="password"/></p>
        <input type="submit" value="отправить">
    </form>
</body>
</html>