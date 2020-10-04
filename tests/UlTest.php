<?php

declare(strict_types=1);

namespace Test;

use TexLab\Html\Li;
use TexLab\Html\Ul;
use PHPUnit\Framework\TestCase;

class UlTest extends TestCase
{

    public function testUl(): void
    {
        $this->assertEquals(
            "<ul type='a'></ul>",
            (new Ul())
                ->setType('a')
                ->html()
        );

        $this->assertEquals(
            "<ul type='a'><li>1</li><li>2</li></ul>",
            (new Ul())
                ->setType('a')
                ->setInnerText((new Li())->setInnerText('1')->html())
                ->addInnerText((new Li())->setInnerText('2')->html())
                ->html()
        );
    }
}
