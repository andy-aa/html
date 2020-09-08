<?php

require_once "../vendor/autoload.php";

$table = TexLab\Html\Html::table();

$data = [
    [1, 2, 3],
    [1, 2, 3],
    [1, 2, 3],
];


$table
    ->setClass("table")
    ->setData($data)
    ->addCalculatedRow(
        fn($col) => array_product($col),
        fn($col) => array_sum($col)
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