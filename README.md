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
- [Class diagram](#class-diagram)
- [Usage example](#usage-example)
    - [Create an authorization form](#create-an-authorization-form)

## What is it?

  It is a powerful and flexible library for generating Html code from PHP programs.
  Developers are committed to collaboratively developing and maintaining a robust, standards-based, freely available library
  source code. All library components have been tested with PHPUnit.
  
## Install via composer

Command line
```
$ composer require texlab/html
```
Example **composer.json** file
```
{
    "require": {
        "texlab/html": "^0.11"
    }
}
```

## Class diagram
![Class diagram](https://github.com/Dzmitry2020/images/raw/master/TexLab/Html/html_class_diagramm.png "Class diagram TexLab\HTML")

## Usage example

### Create an authorization form
PHP code:

```php
<?php

require_once "../vendor/autoload.php";

$table = TexLab\Html\Html::table();

$data = [
    ['id' => 1, 2, 3, 4],
    ['id' => 5, 6, 7, 8],
    ['id' => 2, 3, 4, 5]
];

$table->setData($data);

$table->loopByRow(function (&$row) {
    $row['sum'] = array_sum($row);
    $row['edit'] = "<a href='?edt_id=$row[id]'>Edit $row[id]</a>";
});

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
        table {
            border-collapse: collapse;
            width: 300px;
        }

        td, th {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?= $table->html() ?>
</body>
</html>
```

Result:
![image](https://user-images.githubusercontent.com/46691193/92358568-58282800-f0f2-11ea-9bc8-03c2d1875b8d.png)