<?php

declare(strict_types=1);

namespace Test;

use PHPUnit\Framework\TestCase;
use TexLab\Html\Select;

class SelectTest extends TestCase
{
    /**
     * test Select creation
     */
    public function testSelect(): void
    {
        $this->assertIsString(
            (new Select())->html()
        );

        $this->assertEquals(
            "<select required></select>",
            (new Select())
                ->required()
                ->html()
        );

        $this->assertEquals(
            "<select></select>",
            (new Select())
                ->required(false)
                ->html()
        );

        $this->assertEquals(
            "<select disabled></select>",
            (new Select())
                ->disabled()
                ->html()
        );

        $this->assertEquals(
            "<select></select>",
            (new Select())
                ->disabled(false)
                ->html()
        );

        $this->assertEquals(
            "<select>\n\t<option value='1'>Opton 1</option></select>",
            (new Select())
                ->setData([1 => 'Opton 1'])
                ->html()
        );

        $this->assertEquals(
            "<select>\n\t" .
            "<option value='1'>Opton 1</option>\n\t" .
            "<option value='2' selected>Opton 2</option>\n\t" .
            "<option value='3'>Opton 3</option>" .
            "</select>",
            (new Select())
                ->setSelectedValues(['2'])
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
            "<select size='3'>\n\t" .
            "<option value='1'>Opton 1</option>\n\t" .
            "<option value='2' selected>Opton 2</option>\n\t" .
            "<option value='3'>Opton 3</option>" .
            "</select>",
            (new Select())
                ->setSelectedValues(['2'])
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
            "<select size='3' multiple>\n\t" .
            "<option value='1'>Opton 1</option>\n\t" .
            "<option value='2' selected>Opton 2</option>\n\t" .
            "<option value='3'>Opton 3</option>" .
            "</select>",
            (new Select())
                ->setSelectedValues([2])
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

        $this->assertEquals(
            "<select size='3' multiple>\n\t" .
            "<option value='1' selected>Opton 1</option>\n\t" .
            "<option value='2'>Opton 2</option>\n\t" .
            "<option value='3' selected>Opton 3</option>" .
            "</select>",
            (new Select())
                ->setSelectedValues(
                    ['1', '3']
                )
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
