<?php

declare(strict_types=1);

namespace Test;

use TexLab\Html\Li;
use TexLab\Html\Ol;
use PHPUnit\Framework\TestCase;

class OlTest extends TestCase
{
    public function testOl()
    {
        $this->assertEquals(
            "<ol type='1'></ol>",
            (new Ol())
                ->setType('1')
                ->html()
        );

        $this->assertEquals(
            "<ol type='i'><li>1</li><li>2</li></ol>",
            (new Ol())
                ->setType('i')
                ->setInnerText((new Li())->setInnerText('1')->html())
                ->addInnerText((new Li())->setInnerText('2')->html())
                ->html()
        );
    }
}
