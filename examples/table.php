<?php

require_once "../vendor/autoload.php";

$table = TexLab\Html\Html::table();

$table
    ->setId("tab1")
    ->setHeaders(['01', '02'])
    ->setData(
        [
            [1, 2],
            [3, 4]
        ]
    );

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
        #tab1 {
            border-collapse: collapse;
            width: 50px;
        }

        #tab1 td,
        #tab1 th {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?= $table->html() ?>
</body>
</html>