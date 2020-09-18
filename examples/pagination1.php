<?php

require_once "../vendor/autoload.php";

$pagination = TexLab\Html\Html::pagination();

$pagination
    ->setClass("pagination")
    ->setUrlPrefix("?type=table")
    ->setPageCount(8)
    ->setFirst('First')
    ->setLast('Last')
    ->setCurrentPage(3)
    ->setCurrentPageClass('active');
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
        .pagination a {
            color: green;
            text-decoration: none;
        }

        .pagination .active {
            color: red;
        }
    </style>
</head>
<body>
<?= $pagination->html() ?>
</body>
</html>