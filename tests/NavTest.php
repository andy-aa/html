<?php

declare(strict_types=1);

namespace Test;

use PHPUnit\Framework\TestCase;
use TexLab\Html\Nav;

class NavTest extends TestCase
{

    public function testA(): void
    {
        $this->assertIsString(
            (new Nav())->html()
        );

        $this->assertEquals(
            "<nav class='main' aria-label='Menu'>Text</nav>",
            (new Nav())
                ->setClass('main')
                ->setInnerText('Text')
                ->setAriaLabel('Menu')
                ->html()
        );
    }
}
