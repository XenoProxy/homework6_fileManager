<?php

$url = $_SERVER['REQUEST_URI'];
if ($url == '/explorer.php') {
    header('Location: /',true);
}

if (empty($_FILES['files']['name'][0])) {
    exit;
}

echo '<pre>';
print_r($_FILES);
echo '</pre>';

?>