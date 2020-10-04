<?php

declare(strict_types=1);

namespace Test;

use PHPUnit\Framework\TestCase;
use TexLab\Html\Textarea;

class TextareaTest extends TestCase
{

    public function testTextArea(): void
    {
        $this->assertIsString(
            (new Textarea())->html()
        );

        $this->assertEquals(
            "<textarea>Hello!</textarea>",
            (new Textarea())
                ->setInnerText('Hello!')
                ->html()
        );

        $this->assertEquals(
            "<textarea required>Hello!</textarea>",
            (new Textarea())
                ->setInnerText('Hello!')
                ->required()
                ->html()
        );

        $this->assertEquals(
            "<textarea>Hello!</textarea>",
            (new Textarea())
                ->setInnerText('Hello!')
                ->required(false)
                ->html()
        );

        $this->assertEquals(
            "<textarea disabled>Hello!</textarea>",
            (new Textarea())
                ->setInnerText('Hello!')
                ->disabled()
                ->html()
        );

        $this->assertEquals(
            "<textarea>Hello!</textarea>",
            (new Textarea())
                ->setInnerText('Hello!')
                ->disabled(false)
                ->html()
        );

        $this->assertEquals(
            "<textarea rows='10' cols='20' name='text'>Hello!</textarea>",
            (new Textarea())
                ->setCols(20)
                ->setRows(10)
                ->setName('text')
                ->setInnerText('Hello!')
                ->html()
        );
    }
}
