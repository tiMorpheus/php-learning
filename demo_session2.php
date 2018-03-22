<?php
/**
 * Created by PhpStorm.
 * User: ttymur
 * Date: 22.03.18
 * Time: 12:18
 */


session_start();



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<?php

echo "Favorite color is ". $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is ". $_SESSION["favanimal"] . ".<br>";
?>

</body>
</html>
