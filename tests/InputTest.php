<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TexLab\Html\Input;


class InputTest extends TestCase
{
    /**
     *  test button creation
     */
    function testButton()
    {
        $this->assertIsString(
            (new Input())->html()
        );

        $this->assertEquals(
            "<input type='button'>",
            (new Input())->setType('button')->html()
        );

        $this->assertEquals(
            "<input type='button' name='btn1'>",
            (new Input())->setName('btn1')->setType('button')->html()
        );

        $this->assertEquals(
            "<input type='button' value='Ok'>",
            (new Input())->setType('button')->setValue('Ok')->html()
        );
    }

    /**
     * test text creation
     */
    function testText()
    {

        $this->assertIsString(
            (new Input())->html()
        );

        $this->assertEquals(
            "<input type='text'>",
            (new Input())->html()
        );

        $this->assertEquals(
            "<input type='text'>",
            (new Input())->setType('text')->html()
        );
    }

}