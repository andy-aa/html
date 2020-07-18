<?php


namespace TexLab\Html;


use TexLab\Html\Component\Pagination;

class Html
{
    public static function Input(): Input
    {
        return new Input();
    }

    public static function Label(): Label
    {
        return new Label();
    }

    public static function Form(): Form
    {
        return new Form();
    }

    public static function Option(): Option
    {
        return new Option();
    }

    public static function Select(): Select
    {
        return new Select();
    }

    public static function Table(): Table
    {
        return new Table();
    }

    public static function Textarea(): Textarea
    {
        return new Textarea();
    }

    public static function Pagination(): Pagination
    {
        return new Pagination();
    }

}