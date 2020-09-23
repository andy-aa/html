<?php

require_once "../vendor/autoload.php";

$table = TexLab\Html\Html::table();

$table
    ->setId("tab1")
    ->setHeaders(['01', '02'])
    ->setData(
        [
            ['a', 'b'],
            [1, 2]
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

        #tab1 th {
            background-color: #0c5460;
            border: 1px solid blue;
        }

        #tab1 td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?= $table->html() ?>
</body>
</html>