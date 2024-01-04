<?php
// require 'database.php';
spl_autoload_register(function ($class) {
    var_dump($class);
});
use Core\database as db;
$db = new db();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    home page
</body>

</html>