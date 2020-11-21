<?php

use TexLab\Html\Component\PaginationBootstrap;

require_once "../vendor/autoload.php";

$pagination = TexLab\Html\Html::PaginationBootstrap();

$pagination
    ->setClass("pagination")
    ->setUrlPrefix("?type=table&action=show")
    ->setAriaLabel("Page navigation example")
    ->setJustify("justify-content-center")
    ->setPrevious('Prev')
    ->setFirst('First')
    ->setLast('Last')
    ->setNext('Next')
    ->setPageCount(7)
    ->setCurrentPage(1);

$pagination1 = TexLab\Html\Html::PaginationBootstrap();

$pagination1
    ->setClass("pagination")
    ->setUrlPrefix("?type=table&action=show")
    ->setSize("pagination-sm")
    ->setAriaLabel("Page navigation example")
    ->setPrevious('Prev')
    ->setFirst('First')
    ->setLast('Last')
    ->setNext('Next')
    ->setPageCount(5)
    ->setCurrentPage(3);

$pagination2 = TexLab\Html\Html::PaginationBootstrap();

$pagination2
    ->setClass("pagination")
    ->setUrlPrefix("?type=table&action=show")
    ->setJustify("justify-content-end")
    ->setSize("pagination-lg")
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
<style>
    .page-link {
        position: relative;
        display: block;
        padding: 0.5rem 0.75rem;
        margin-left: -1px;
        line-height: 1.25;
        color: #003C00;
        background-color: #D8EBEB;
        border: 1px solid #346767;
    }
    .page-item.disabled .page-link {
        color: #868e96;
        pointer-events: none;
        cursor: auto;
        background-color: #CEFFCE;
        border-color: #718393;
    }
    .page-item.active .page-link {
        z-index: 1;
        color: #fff;
        background-color: #003C00;
        border-color: #AEFF5E;
    }
    .page-link:focus, .page-link:hover {
        color: #fff;
        text-decoration: none;
        background-color: #003C00;
        border-color: #AEFF5E;
    }

</style>
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