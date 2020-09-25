<?php

require_once "../vendor/autoload.php";

$pagination = TexLab\Html\Html::paginationBS();

$pagination
    ->setClass("pagination")
    ->setUrlPrefix("?type=table&action=show")
    ->setPrevious('Previous')
    ->setFirst('First')
    ->setLast('Last')
    ->setNext('Next')
    ->setPageCount(8)
    ->setCurrentPage(1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<?= $pagination->html() ?>
<script src="bootstrap/js/jquery-3.5.1.slim.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>