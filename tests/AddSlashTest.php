<?php

declare(strict_types=1);

namespace Test;

use PHPUnit\Framework\TestCase;
use TexLab\Html\Input;

class AddSlashTest extends TestCase
{

    public function testValueSlash(): void
    {
        $this->assertEquals(
            "<input type='text' value='I\'m sorry'>",
            (new Input())
                ->setValue("I'm sorry")
                ->html()
        );
    }

    public function testPlaceholderSlash(): void
    {
        $this->assertEquals(
            "<input type='text' value='I\'m sorry' placeholder='I\'m sorry'>",
            (new Input())
                ->setValue("I'm sorry")
                ->setPlaceholder("I'm sorry")
                ->html()
        );
    }
}
