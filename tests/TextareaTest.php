<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TexLab\Html\Textarea;


class TextareaTest extends TestCase
{

    function testTextArea()
    {
        $this->assertIsString(
            (new Textarea())->html()
        );

        $this->assertEquals(
            "<textarea>Hello!</textarea>",
            (new Textarea())
                ->setInnerText('Hello!')
                ->html()
        );

        $this->assertEquals(
            "<textarea name='text' cols='20' rows='10'>Hello!</textarea>",
            (new Textarea())
                ->setCols(20)
                ->setRows(10)
                ->setName('text')
                ->setInnerText('Hello!')
                ->html()
        );


    }

}