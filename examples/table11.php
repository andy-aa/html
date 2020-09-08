<?php

require_once "../vendor/autoload.php";

$table = TexLab\Html\Html::table();

$data = [
    [1, 2, 3, 4, 5],
    [1, 2, 3, 4, 5],
    [1, 2, 3, 4, 5]
];


$table
    ->setClass("table")
    ->setData($data)
    ->addCalculatedRow(
        fn($col, $key) => (in_array($key, [0, 2, 3]) ? array_sum($col) : '&mdash;')
    );

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?= $table->html() ?>
</body>
</html>