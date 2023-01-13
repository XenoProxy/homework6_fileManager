<?php
require_once '../elements/header.php'; 

// return to the home page
echo "<a href='/?folder=/admin/..'>Home</a><br>";

$url = $_SERVER['REQUEST_URI'];
if ($url == '/admin/explorer.php') {
    header('Location: /');
}

// upload files
$destPath = '../uploads';
if (!(file_exists($destPath))) {
    mkdir('../uploads');
}
$allFiles = scandir($destPath);