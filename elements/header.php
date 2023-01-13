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
        $folder = $_GET['folder'];
        if ($folder == 'admin'):?>
            <h1>Admin directory</h1>
        <?php endif;
    ?>
</body>
</html>