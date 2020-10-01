[![Build Status](https://travis-ci.com/andy-aa/html.svg?branch=master)](https://travis-ci.com/andy-aa/html)
[![License: MIT](https://img.shields.io/badge/License-MIT-brightgreen.svg?style=flat-square)](https://opensource.org/licenses/MIT)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.1-8892BF.svg?style=flat-square)](https://php.net/)
[![Packagist](https://img.shields.io/packagist/vpre/texlab/html.svg?style=flat-square)](https://packagist.org/packages/texlab/html)
[![PHPStan](https://img.shields.io/badge/PHPStan-level%208-brightgreen.svg?style=flat-square)](https://phpstan.org/)
[![Psalm](https://img.shields.io/badge/Psalm-Level%20Max-brightgreen.svg?style=flat-square)](https://psalm.dev/) 
[![Coverage Status](https://img.shields.io/coveralls/github/andy-aa/html/master.svg?style=flat-square)](https://coveralls.io/github/andy-aa/html?branch=master)
# Html
- [What is it?](#what-is-it)
- [Install](#install-via-composer)
- [Usage example](#usage-example)
    - [HTML table](#html-table)
    - [Pagination](#pagination)

## What is it?

Lightweight and easy to use set of classes for building user interfaces.
  
## Install via composer

Installation via composer
```
composer require texlab/html
```
Example **composer.json** file
```
{
    "require": {
        "texlab/html": "^0.19"
    }
}
```

## Usage examples
Usage examples can be found in the [examples](examples/) folder. 
You can run the examples from the library folder using the console command:

```
php -S localhost:8000 -t examples/
```
### HTML table

PHP code:

```php
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
    ->addHeaders($headers)
    ->loopByRow(function (&$row) {
        $row['edit'] = "<a href='?edt_id=$row[id]'>✏</a>";
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
```

Result:

![image](https://user-images.githubusercontent.com/46691193/92361408-03d37700-f0f7-11ea-92a4-4450c30ba3d5.png)

### Pagination

PHP code:

```php
<?php

require_once "../vendor/autoload.php";

$pagination = TexLab\Html\Html::pagination();

$pagination
    ->setClass("pagination")
    ->setUrlPrefix("?type=table&action=show")
    ->setPrevious('Previous')
    ->setFirst('First')
    ->setLast('Last')
    ->setNext('Next')
    ->setPageCount(8)
    ->setCurrentPage(3);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .pagination a {
            color: green;
            text-decoration: none;
        }

        .pagination .current {
            color: red;
        }
    </style>
</head>
<body>
<?= $pagination->html() ?>
</body>
</html>
```

Result:

![image](https://user-images.githubusercontent.com/46691193/93690150-aae3e580-fadd-11ea-944b-faa3b40195f8.png)
