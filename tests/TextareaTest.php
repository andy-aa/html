<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TexLab\Html\Textarea;


class TextareaTest extends TestCase
{


    function testOption()
    {
        $this->assertIsString(
            (new Textarea())->html()
        );

        $this->assertEquals(
            "<textarea  name='text' cols='50' rows='10'>Hello!</textarea>",
            (new Textarea())
                ->setCols(50)
                ->setRows(10)
                ->setName('text')
                ->setInnerText('Hello!')
                ->html()
        );


    }

}