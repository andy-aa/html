<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TexLab\Html\Input;

class InputTest extends TestCase
{
    /**
     *  test Button creation
     */
    function testButton(): void
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
     * test Text creation
     */
    function testText(): void
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

    /**
     * test Checkbox creation
     */
    function testCheckbox(): void
    {
        $this->assertEquals(
            "<input type='checkbox'>",
            (new Input())->setType('checkbox')->html()
        );

        $this->assertEquals(
            "<input type='checkbox' name='chbx1'>",
            (new Input())->setName('chbx1')->setType('checkbox')->html()
        );

        $this->assertEquals(
            "<input type='checkbox' name='chbx1' checked>",
            (new Input())->setName('chbx1')->setType('checkbox')->setChecked(true)->html()
        );
    }

    /**
     * test Radio creation
     */
    function testRadio(): void
    {
        $this->assertEquals(
            "<input type='radio'>",
            (new Input())->setType('radio')->html()
        );

        $this->assertEquals(
            "<input type='radio' name='rd1'>",
            (new Input())->setName('rd1')->setType('radio')->html()
        );

        $this->assertEquals(
            "<input type='radio' name='rd1' checked>",
            (new Input())->setName('rd1')->setType('radio')->setChecked(true)->html()
        );
    }

    /**
     * test Date creation
     */
    function testDate(): void
    {
        $this->assertEquals(
            "<input type='date'>",
            (new Input())->setType('date')->html()
        );

        $this->assertEquals(
            "<input type='date' name='dt1'>",
            (new Input())->setName('dt1')->setType('date')->html()
        );

        $this->assertEquals(
            <<<DT
<input type='date' value='2020/07/15' name='dt1'>
DT
            ,
            (new Input())->setName('dt1')->setType('date')->setValue('2020/07/15')->html()
        );
    }
}
