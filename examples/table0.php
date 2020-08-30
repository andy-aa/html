<?php

require_once "../vendor/autoload.php";

$table = TexLab\Html\Html::table();

$data = [
    [1, 'Peter', 'Director'],
    [3, 'Viktor', 'Manager'],
    [7, 'Mark', 'Worker']
];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 180px;
        }

        td, th {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?= $table->setData($data)->html() ?>
</body>
</html>