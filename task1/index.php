<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
</head>

<body>
    <?php

    $x = 2;

    switch ($x) {
        case 1:
            for ($n = 0; $n < 10; print $n++) { }
            break;
        case 2:
            fileCounter();
            break;
        case 3:
            showDate();
            break;
        case 4:
            echo dateFormat('2013-12-31');
            echo "<br>";
            echo dateFormat('31.12.2019');
            echo "<br>";
            echo dateFormat('20135401');
            break;
        case 5:
            $str = "Я хочу стать лучшим в мире программистом";
            echo shuffleString($str);
            break;
        case 6:
            echo firstLetterUpperCase("Написать функцию, которая преобразует первую букву каждого слова в верхний регистр, а остальные буквы преобразует в нижний. Функция должна корректно работать с русским текстом.");
            break;
        case 7:
            $str = "<ul>
            <li>Яблоки</li>
            <li>Апельсины</li>
            <li>Мандарины</li>
            </ul>";
            echo deleteHTMLTags($str);
            break;
        default:
            echo "Введите номер задачи в переменную х в index.php";
            break;
    }

    ?>

    <?php

    function fileCounter()
    {
        $filename = "counter.dat";

        $fp = fopen($filename, "r"); // открываем соединение с файлом в режиме чтения

        if ($fp) {
            $counter = fgets($fp, 10); // считывает из открытого файла первые 10 символов
            fclose($fp); // закрываем соединение
        } else {
            $counter = 0; // если соединение не открылось
        }

        $counter++;
        echo "Посетителей страницы: $counter";
        $fp = fopen($filename, "w"); // открываем соединение на запись с очисткой всего содержимого файла
        if ($fp) {
            $counter = fputs($fp, $counter);
            fclose($fp);
        }
    }

    function showDate()
    {
        $q = array('января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря');
        $e = array('воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота');

        $m = date("m");
        if ($m == "01") $m = 0;
        if ($m == "02") $m = 1;
        if ($m == "03") $m = 2;
        if ($m == "04") $m = 3;
        if ($m == "05") $m = 4;
        if ($m == "06") $m = 5;
        if ($m == "07") $m = 6;
        if ($m == "08") $m = 7;
        if ($m == "09") $m = 8;
        if ($m == "10") $m = 9;
        if ($m == "11") $m = 10;
        if ($m == "12") $m = 11;

        $we = date("w");
        $day = date("d");
        $dayOfWeek = $e[$we];
        $month = $q[$m];
        $date = date_create();

        echo "Сегодня: " . $day . " " . $month . " " . date_format($date, 'Y H:i:s') . ", " . $dayOfWeek;
    }

    function dateFormat($date)
    {
        if (DateTime::createFromFormat('Y-m-d', $date) !== false) {
            $d = DateTime::createFromFormat('Y-m-d', $date);
            if ($d->format('Y-m-d') === $date)
                return date("d.m.Y", strtotime($date));
            else
                echo 'wrong date!';
        } else if (DateTime::createFromFormat('d.m.Y', $date) !== false) {
            $d = DateTime::createFromFormat('d.m.Y', $date);
            if ($d->format('d.m.Y') === $date)
                return date("Y-m-d", strtotime($date));
            else
                echo 'wrong date!';
        } else
            return 'null';
    }

    function shuffleString($str)
    {
        $array = explode(' ', $str);
        shuffle($array);
        $newStr = implode(" ", $array);
        return $newStr;
    }

    function firstLetterUpperCase($str)
    {
        $str = mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
        return $str;
    }

    function deleteHTMLTags($str)
    {
        $newStr = strip_tags($str);
        return $newStr;
    }

    ?>
</body>

</html> 