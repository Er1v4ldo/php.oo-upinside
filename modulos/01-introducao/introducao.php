<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo ini_get('date.timezone') . "<br>";
        echo date_default_timezone_get();
        ?>
    </body>
</html>
