<?php

declare(strict_types=1);

namespace Test;

use PHPUnit\Framework\TestCase;
use TexLab\Html\A;

class ATest extends TestCase
{

    public function testA(): void
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
            "<a class='menu' style='color:red' id='mn1' href='https://www.tut.by/'>tut.by</a>",
            (new A())
                ->setHref("https://www.tut.by/")
                ->setClass('menu')
                ->setId('mn1')
                ->setStyle('color:red')
                ->setInnerText('tut.by')
                ->html()
        );

        $this->assertEquals(
            "<a class='menu menu2 menu3' href='https://www.tut.by/'>tut.by</a>",
            (new A())
                ->setHref("https://www.tut.by/")
                ->setClass('menu')
                ->addClass('menu2')
                ->addClass('menu3')
                ->setInnerText('tut.by')
                ->html()
        );

        $this->assertEquals(
            "<a class='menu menu3' href='https://www.tut.by/'>tut.by</a>",
            (new A())
                ->setHref("https://www.tut.by/")
                ->setClass('menu')
                ->addClass('menu2')
                ->addClass('menu3')
                ->removeClass('menu2')
                ->setInnerText('tut.by')
                ->html()
        );

        $this->assertEquals(
            "<a tabindex='-1' href='https://www.tut.by/'>tut.by</a>",
            (new A())
                ->setHref("https://www.tut.by/")
                ->setTabIndex('-1')
                ->removeClass('')
                ->setInnerText('tut.by')
                ->html()
        );

        $this->assertEquals(
            "<a tabindex='-1' href='https://www.tut.by/'>tut.by</a>",
            (new A())
                ->setHref("https://www.tut.by/")
                ->setTabIndex('-1')
                ->addClass('menu')
                ->addClass('menu2')
                ->removeClass('menu2')
                ->removeClass('menu')
                ->setInnerText('tut.by')
                ->html()
        );

        $this->assertEquals(
            "<a tabindex='-1' href='https://www.tut.by/' aria-label='Link'>tut.by</a>",
            (new A())
                ->setHref("https://www.tut.by/")
                ->setTabIndex('-1')
                ->addClass('menu')
                ->addClass('menu2')
                ->setAriaLabel('Link')
                ->removeClass('menu2')
                ->removeClass('menu')
                ->setInnerText('tut.by')
                ->html()
        );
    }
}
