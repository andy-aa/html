<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TexLab\Html\Input;
use TexLab\Html\Textarea;


class AddSlashTest extends TestCase
{

    function testValueSlash()
    {
        $this->assertEquals(
            "<input type='text' value='I\'m sorry'>",
            (new Input())
                ->setValue("I'm sorry")
                ->html()
        );
    }

    function testPlaceholderSlash()
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