<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TexLab\Html\Select;


class SelectTest extends TestCase
{
    /**
     * test Select creation
     */
    function testSelect()
    {
        $this->assertIsString(
            (new Select())->html()
        );

        $this->assertEquals(
            "<select></select>",
            (new Select())->html()
        );


        $this->assertEquals(
            "<select>\n\t<option value='1'>Opton 1</option></select>",
            (new Select())
                ->setData([1 => 'Opton 1'])
                ->html()
        );

        $this->assertEquals(
            <<<SEL
<select>\n\t<option value='1'>Opton 1</option>\n\t<option value='2' selected>Opton 2</option>\n\t<option value='3'>Opton 3</option></select>
SEL
            ,
            (new Select())
                ->setSelectedValue('2')
                ->setData(
                    [
                        1 => 'Opton 1',
                        2 => 'Opton 2',
                        3 => 'Opton 3',
                    ]
                )
                ->html()
        );

        $this->assertEquals(
            <<<SEL
<select size='3'>\n\t<option value='1'>Opton 1</option>\n\t<option value='2' selected>Opton 2</option>\n\t<option value='3'>Opton 3</option></select>
SEL
            ,
            (new Select())
                ->setSelectedValue('2')
                ->setData(
                    [
                        1 => 'Opton 1',
                        2 => 'Opton 2',
                        3 => 'Opton 3',
                    ]
                )
                ->setSize(3)
                ->html()
        );

        $this->assertEquals(
            <<<SEL
<select size='3' multiple>\n\t<option value='1'>Opton 1</option>\n\t<option value='2' selected>Opton 2</option>\n\t<option value='3'>Opton 3</option></select>
SEL
            ,

            (new Select())
                ->setSelectedValue('2')
                ->setData(
                    [
                        1 => 'Opton 1',
                        2 => 'Opton 2',
                        3 => 'Opton 3',
                    ]
                )
                ->setSize(3)
                ->setMultiple(true)
                ->html()
        );
    }

}