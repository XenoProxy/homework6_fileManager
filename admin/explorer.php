<?php
require_once '../elements/header.php'; 

$url = $_SERVER['REQUEST_URI'];
if ($url == '/admin/explorer.php') {
    header('Location: /');
}

$path = getcwd();
echo $path;

//загрузка файлов на сервер
$destPath = '../uploads';
if (!(file_exists($destPath))) {
    mkdir('../uploads');
}
$allFiles = scandir($destPath);
