<?php

namespace TexLab\Html;

use TexLab\Html\Component\Pagination;

class Html
{
    public static function input(): Input
    {
        return new Input();
    }

    public static function label(): Label
    {
        return new Label();
    }

    public static function form(): Form
    {
        return new Form();
    }

    public static function option(): Option
    {
        return new Option();
    }

    public static function select(): Select
    {
        return new Select();
    }

    public static function table(): Table
    {
        return new Table();
    }

    public static function textarea(): Textarea
    {
        return new Textarea();
    }

    public static function pagination(): Pagination
    {
        return new Pagination();
    }

    public static function a(): A
    {
        return new A();
    }
}
