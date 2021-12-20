<?php require_once "includes/autoloader.inc.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

</head>
<body>
    <?php
        $obj_user = new Userscontroller();
        $obj_user->create_user('Jo', 'Elmorsi', '2015-6-23' );
    ?>
</body>
</html>


