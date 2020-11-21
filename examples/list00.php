<?php

use TexLab\Html\Component\PaginationBootstrap;

require_once "../vendor/autoload.php";

$arrList = ['aaa', 'bbb', 'ccc'];

$list1 = TexLab\Html\Html::Ul();
$list1
    ->setData($arrList)
    ->addItem('ddd');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          crossorigin="anonymous">
</head>
<body>
<?= $list1->html() ?>
<?= $list1->setStyle('circle')->html() ?>
<?= $list1->setStyle('square')->html() ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>