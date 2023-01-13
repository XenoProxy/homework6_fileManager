<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorer</title>
</head>
<body>
    <h1>Explorer</h1>
    <?php
        $home = __DIR__;
        echo "<a href='/admin/..'>Домой</a><br>";
        
        $folder = './' . $_GET['folder'];
        if ($_GET['folder'] == 'admin') {
            $folder = __DIR__;
        }
    ?>
</body>
</html>