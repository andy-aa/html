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
                ->setRequired()
                ->html()
        );

        $this->assertEquals(
            "<textarea>Hello!</textarea>",
            (new Textarea())
                ->setInnerText('Hello!')
                ->unsetRequired()
                ->html()
        );

        $this->assertEquals(
            "<textarea disabled>Hello!</textarea>",
            (new Textarea())
                ->setInnerText('Hello!')
                ->setDisabled()
                ->html()
        );

        $this->assertEquals(
            "<textarea>Hello!</textarea>",
            (new Textarea())
                ->setInnerText('Hello!')
                ->unsetDisabled()
                ->html()
        );

        $this->assertEquals(
            "<textarea name='text' cols='20' rows='10'>Hello!</textarea>",
            (new Textarea())
                ->setCols(20)
                ->setRows(10)
                ->setName('text')
                ->setInnerText('Hello!')
                ->html()
        );
    }
}
