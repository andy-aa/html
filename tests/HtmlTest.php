<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TexLab\Html\Html;


class HtmlTest extends TestCase
{

    function testHtml()
    {

        $this->assertInstanceOf(
            'TexLab\Html\Input',
            Html::Input()
        );

        $this->assertInstanceOf(
            'TexLab\Html\Label',
            Html::Label()
        );

        $this->assertInstanceOf(
            'TexLab\Html\Form',
            Html::Form()
        );

        $this->assertInstanceOf(
            'TexLab\Html\Option',
            Html::Option()
        );

        $this->assertInstanceOf(
            'TexLab\Html\Select',
            Html::Select()
        );

        $this->assertInstanceOf(
            'TexLab\Html\Table',
            Html::Table()
        );

        $this->assertInstanceOf(
            'TexLab\Html\Textarea',
            Html::Textarea()
        );

        $this->assertInstanceOf(
            'TexLab\Html\Component\Pagination',
            Html::Pagination()
        );

    }

}