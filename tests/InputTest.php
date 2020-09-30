<?php

declare(strict_types=1);

namespace Test;

use PHPUnit\Framework\TestCase;
use TexLab\Html\Input;

class InputTest extends TestCase
{
    /**
     *  test Button creation
     */
    public function testButton(): void
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
            (new Input())
                ->setType('button')
                ->setValue('Ok')
                ->html()
        );
    }

    /**
     * test Text creation
     */
    public function testText(): void
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

        $this->assertEquals(
            "<input type='text' required>",
            (new Input())
                ->setType('text')
                ->required()
                ->html()
        );

        $this->assertEquals(
            "<input type='text'>",
            (new Input())
                ->setType('text')
                ->required()
                ->required(false)
                ->html()
        );

        $this->assertEquals(
            "<input type='text' disabled>",
            (new Input())
                ->setType('text')
                ->disabled()
                ->html()
        );

        $this->assertEquals(
            "<input type='text'>",
            (new Input())
                ->setType('text')
                ->disabled()
                ->disabled(false)
                ->html()
        );
    }

    /**
     * test Checkbox creation
     */
    public function testCheckbox(): void
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
    public function testRadio(): void
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
    public function testDate(): void
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
            "<input type='date' value='2020/07/15' name='dt1'>",
            (new Input())->setName('dt1')->setType('date')->setValue('2020/07/15')->html()
        );
    }
}
