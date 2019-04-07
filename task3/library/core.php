<?php 

// ф-ция отладки. используется для отладки скрипотов
function dump($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}

function layers($type, $title = '') {
    $layer = $_SERVER["DOCUMENT_ROOT"] . '/layers/' . $type . '.php';
    return $layer;
}

function url($path) {
    $url = 'http://' . $_SERVER["HTTP_HOST"]; // string(11) "example.com"
    return $url . $path;
}