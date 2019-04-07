<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    include "library/core.php";
    include "library/db.php";
    ?>
</head>

<body>
    <?php 
    $login = $_POST["login"];
    $fio = $_POST["fio"];
    $password = $_POST["password"];
    $check_password = $_POST["check_password"];
    echo "Логин: <b>" . $login . "</b><br>";
    echo "ФИО: <b>" . $fio . "</b><br>";
    echo "Пароль: <b>" . $password . "</b><br>";
    echo "Проверка пароля: <b>" . $check_password . "</b><br>";
    dump($_POST);

    $db = new Db();

    $db->setQuery("SELECT * FROM `users` WHERE `login` = '" . $login . "'");
    if (!$db->getNumRows()){
        $db->setQuery("INSERT INTO `users`(`login`, `password`, `fio`) 
                        VALUES ('$login', '$password', '$fio')");
        var_dump("new user added");
    }
    else {
        var_dump("username already exist!");
    }
    $db->close();
    ?>
</body>

</html> 