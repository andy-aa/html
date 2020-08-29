<?php

require_once "../vendor/autoload.php";

use TexLab\Html\Html;

$form = Html::form()
    ->setClass("loginForm")
    ->setMethod("POST")
    ->setAction("?type=auth&action=login")
    ->addInnerText(
        Html::input()
            ->setType("text")
            ->setName("login")
            ->setPlaceholder("login")
            ->html()
    )
    ->addInnerText(
        Html::input()
            ->setType("password")
            ->setName("pass")
            ->setPlaceholder("password")
            ->html()
    )
    ->addInnerText(
        Html::input()
            ->setType("submit")
            ->setValue("Ok")
            ->html()
    );

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
        .loginForm input {
            display: block;
        }
    </style>
</head>
<body>
<?= $form->html() ?>
</body>
</html>