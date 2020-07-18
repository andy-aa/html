<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TexLab\Html\A;
use TexLab\Html\Html;


class ATest extends TestCase
{

    function testA()
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

    }

}