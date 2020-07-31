<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TexLab\Html\A;
use TexLab\Html\Html;

class ATest extends TestCase
{

    public function testA():void
    {
        $this->assertIsString(
            (new A())->html()
        );

        $this->assertEquals(
            "<a href='https://www.tut.by/'>tut.by</a>",
            (new A())
                ->setHref("https://www.tut.by/")
                ->setInnerText('tut.by')
                ->html()
        );

        $this->assertEquals(
            "<a style='color:red' class='menu' id='mn1' href='https://www.tut.by/'>tut.by</a>",
            (new A())
                ->setHref("https://www.tut.by/")
                ->setClass('menu')
                ->setId('mn1')
                ->setStyle('color:red')
                ->setInnerText('tut.by')
                ->html()
        );

    }
}
