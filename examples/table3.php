<?php

require_once "../vendor/autoload.php";

$table = TexLab\Html\Html::table();

$data = [
    ['id' => 1, 'name' => 'Peter'],
    ['id' => 3, 'name' => 'Viktor'],
    ['id' => 7, 'name' => 'Mark']
];

$table->setData($data);

$table->addCalculatedColumn(function ($row) {
    return "<a href='?del_id=$row[id]'>Delete $row[id]</a>";
});

$table->addCalculatedColumn(function ($row) {
    return "<a href='?edt_id=$row[id]'>Edit $row[id]</a>";
});

$table->removeColumns(['id']);

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
<?= $table->html() ?>
</body>
</html>