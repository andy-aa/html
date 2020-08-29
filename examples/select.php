<?php

require_once "../vendor/autoload.php";

$select = TexLab\Html\Html::select();

$select
    ->setName("s1")
    ->setSelectedValues([2])
    ->setData([
        1 => "option 1",
        2 => "option 2",
        3 => "option 3"
    ]);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?= $select->html() ?>
</body>
</html>