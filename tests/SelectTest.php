<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TexLab\Html\Select;


class SelectTest extends TestCase
{

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
            "<select></select>",
            (new Select())->html()
        );

        $this->assertEquals(
            "<select>\t<option value='1'>Opton 1</option>\n</select>",
            (new Select())
                ->setData([1 => 'Opton 1'])
                ->html()
        );

        $this->assertEquals(

            "<select>" .
            "\t<option value='1'>Opton 1</option>\n" .
            "\t<option value='2' selected>Opton 2</option>\n" .
            "\t<option value='3'>Opton 3</option>\n" .
            "</select>",

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
    }


}