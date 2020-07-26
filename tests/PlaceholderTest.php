<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TexLab\Html\Input;
use TexLab\Html\Textarea;


class PlaceholderTest extends TestCase
{

    function testPlaceholder(): void
    {
        $this->assertEquals(
            "<textarea placeholder='Hello'>Hello!</textarea>",
            (new Textarea())
                ->setInnerText('Hello!')
                ->setPlaceholder('Hello')
                ->html()
        );
        $this->assertEquals(
            "<input type='text' value='Hello!' placeholder='Hello'>",
            (new Input())
                ->setValue('Hello!')
                ->setPlaceholder('Hello')
                ->html()
        );
    }

}