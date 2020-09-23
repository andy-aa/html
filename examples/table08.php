<?php

require_once "../vendor/autoload.php";

$table = TexLab\Html\Html::table();

$data = [
    ['id' => 1, 'name' => 'Peter', 'Director'],
    ['id' => 3, 'name' => 'Viktor', 'Manager'],
    ['id' => 7, 'name' => 'Mark', 'Worker']
];

$headers = ['id' => '№', 'name' => 'Name', 'Description'];

$table
    ->setClass("table")
    ->setData($data)
    ->setHeaders($headers)
    ->loopByRow(function (&$row) {
        $row['edt'] = "<a href='?edt_id=$row[id]'>✏</a>";
        $row['del'] = "<a href='?del_id=$row[id]'>❌</a>";
    });

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