<?php

declare(strict_types=1);

namespace Test;

use PHPUnit\Framework\TestCase;
use TexLab\Html\Html;

class HtmlTest extends TestCase
{

    public function testHtml(): void
    {

        $this->assertInstanceOf(
            'TexLab\Html\Input',
            Html::input()
        );

        $this->assertInstanceOf(
            'TexLab\Html\Label',
            Html::label()
        );

        $this->assertInstanceOf(
            'TexLab\Html\Form',
            Html::form()
        );

        $this->assertInstanceOf(
            'TexLab\Html\Option',
            Html::option()
        );

        $this->assertInstanceOf(
            'TexLab\Html\Select',
            Html::select()
        );

        $this->assertInstanceOf(
            'TexLab\Html\Table',
            Html::table()
        );

        $this->assertInstanceOf(
            'TexLab\Html\Textarea',
            Html::textarea()
        );

        $this->assertInstanceOf(
            'TexLab\Html\a',
            Html::a()
        );

        $this->assertInstanceOf(
            'TexLab\Html\Component\Pagination',
            Html::pagination()
        );

        $this->assertInstanceOf(
            'TexLab\Html\Li',
            Html::li()
        );

        $this->assertInstanceOf(
            'TexLab\Html\Ol',
            Html::ol()
        );

        $this->assertInstanceOf(
            'TexLab\Html\Ul',
            Html::ul()
        );


    }
}
