<?php

require_once "../vendor/autoload.php";

$table = TexLab\Html\Html::table();

$data = [
    ['id' => 1, 2, 3, 4],
    ['id' => 5, 6, 7, 8],
    ['id' => 2, 3, 4, 5]
];

$table->setData($data);

$table->loopByRow(function (&$row) {
    $row['sum'] = array_sum($row);
    $row['edit'] = "<a href='?edt_id=$row[id]'>Edit $row[id]</a>";
});

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
            width: 300px;
        }

        td, th {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?= $table->html() ?>
</body>
</html>