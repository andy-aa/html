<?php

require_once "../vendor/autoload.php";

use TexLab\Html\Html;

$form = Html::form()
    ->setMethod("POST")
    ->setAction("?type=table&action=add");

$fields = [
    'name',
    'description',
    'pass',
    'select',
    'text',
    'date',
    'email'
];

$types = [
    'date' => 'datetime-local',
    'pass' => 'password',
];

$selectedValue = 2;

$selectData = [
    1 => "option 1",
    2 => "option 2",
    3 => "option 3"
];

foreach ($fields as $field) {
    if ($field == 'text') {
        $form->addInnerText(
            Html::textarea()
                ->setName($field)
                ->setPlaceholder($field)
                ->html()
        );
    } elseif ($field == 'select') {
        $form->addInnerText(
            Html::select()
                ->setName($field)
                ->setSelectedValues([$selectedValue])
                ->setData($selectData)
                ->html()
        );
    } else {
        $form->addInnerText(
            Html::input()
                ->setType($types[$field] ?? 'text')
                ->setName($field)
                ->setPlaceholder($field)
                ->html()
        );
    }
}

$form
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
        input,
        select,
        textarea {
            display: block;
            margin-top: 5px;
        }
    </style>
</head>
<body>
<?= $form->html() ?>
</body>
</html>