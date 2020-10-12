<?php

use TexLab\Html\Component\PaginationBootstrap;

require_once "../vendor/autoload.php";

$pagination = TexLab\Html\Html::PaginationBootstrap();

$pagination
    ->setClass("pagination bg-red")
    ->setUrlPrefix("?type=table&action=show")
    ->setJustify("center")
    ->setAriaLabel("Page navigation example")
    ->setPrevious('Prev')
    ->setFirst('First')
    ->setLast('Last')
    ->setNext('Next')
    ->setPageCount(7)
    ->setCurrentPage(1);

$pagination1 = TexLab\Html\Html::PaginationBootstrap();

$pagination1
    ->setClass("pagination bg-red")
    ->setUrlPrefix("?type=table&action=show")
    ->setJustify("center")
    ->setSize("small")
    ->setAriaLabel("Page navigation example")
    ->setPrevious('Prev')
    ->setFirst('First')
    ->setLast('Last')
    ->setNext('Next')
    ->setPageCount(5)
    ->setCurrentPage(3);

$pagination2 = TexLab\Html\Html::PaginationBootstrap();

$pagination2
    ->setClass("pagination bg-red")
    ->setUrlPrefix("?type=table&action=show")
    ->setJustify("center")
    ->setSize("large")
    ->setAriaLabel("Page navigation example")
    ->setPrevious('Prev')
    ->setFirst('First')
    ->setLast('Last')
    ->setNext('Next')
    ->setPageCount(5)
    ->setCurrentPage(5);
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
<br>
<?= $pagination1->html() ?><br>
<?= $pagination->html() ?><br>
<?= $pagination2->html() ?><br>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>