<?php

namespace TexLab\Html;

use TexLab\Html\Component\Pagination;
use TexLab\Html\Component\PaginationBootstrap;

class Html
{
    /**
     * @return Input
     */
    public static function input()
    {
        return new Input();
    }

    /**
     * @return Label
     */
    public static function label()
    {
        return new Label();
    }

    /**
     * @return Form
     */
    public static function form()
    {
        return new Form();
    }

    /**
     * @return Option
     */
    public static function option()
    {
        return new Option();
    }

    /**
     * @return Select
     */
    public static function select()
    {
        return new Select();
    }

    /**
     * @return Table
     */
    public static function table()
    {
        return new Table();
    }

    /**
     * @return Textarea
     */
    public static function textarea()
    {
        return new Textarea();
    }

    /**
     * @return Pagination
     */
    public static function pagination()
    {
        return new Pagination();
    }

    /**
     * @return PaginationBootstrap
     */
    public static function paginationBS()
    {
        return new PaginationBootstrap();
    }

    /**
     * @return A
     */
    public static function a()
    {
        return new A();
    }
}
