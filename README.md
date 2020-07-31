[![Build Status](https://img.shields.io/travis/andy-aa/html/master.svg?style=flat-square)](https://travis-ci.com/github/andy-aa/html)
[![License: MIT](https://img.shields.io/badge/License-MIT-brightgreen.svg?style=flat-square)](https://opensource.org/licenses/MIT)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.4-8892BF.svg?style=flat-square)](https://php.net/)
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
        "texlab/html": "^0.06"
    }
}
```

## Class diagram
![Class diagram](https://github.com/Dzmitry2020/images/raw/master/TexLab/Html/html_class_diagramm.png "Class diagram TexLab\HTML")

## Usage example

### Create an authorization form
```php
<?php

use TexLab\Html\Html;

/**
 * @var string $action
 */

$form = Html::Form()
    ->setMethod('POST')
    ->setAction($action);

$form->addInnerText(Html::Label()
    ->setInnerText("Login:")
    ->setFor("login")
    ->html());

$form->addInnerText(Html::Input()
    ->setName("login")
    ->setId("login")
    ->setPlaceholder("Your login")
    ->html());

$form->addInnerText(Html::Label()
    ->setInnerText("Password:")
    ->setFor("pass")
    ->html());

$form->addInnerText(Html::Input()
    ->setType('password')
    ->setName("pass")
    ->setId("pass")
    ->setPlaceholder("Your password")
    ->html());

$form->addInnerText(
    Html::Input()
        ->setType('submit')
        ->setValue('Submit')
        ->html()
);

echo $form->html();
```
Result:

![Authorization form](https://github.com/Dzmitry2020/images/raw/master/TexLab/Html/authorization_form.png "Example of authorization form")