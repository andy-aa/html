<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TexLab\Html\Table;


class TableTest extends TestCase
{

    /**
     * test Table creation
     */
    function testTable()
    {
        $this->assertIsString(
            (new Table())->html()
        );

        $this->assertEquals(
            "<table class='table table-striped table-dark'>\n<tr>\n"
            . "</tr>\n</table>\n",
            (new Table())
                ->setHeaders([])
                ->html()
        );

        $this->assertEquals(
            "<table class='table table-striped table-dark'>\n<tr>\n"
            . "\t<th>First</th>\n"
            . "\t<th>Two</th>\n"
            . "\t<th>Three</th>\n"
            . "</tr>\n</table>\n",
            (new Table())
                ->setHeaders([
                    'First',
                    'Two',
                    'Three'
                ])
                ->html()
        );

        $this->assertEquals(
            "<table class='table table-striped table-dark'>\n"
            . "<tr>\n"
            . "\t<th>First</th>\n"
            . "\t<th>Two</th>\n"
            . "\t<th>Three</th>\n"
            . "</tr>\n"
            . "<tr>\n"
            . "\t<td>1</td>\n"
            . "\t<td>2</td>\n"
            . "\t<td>3</td>\n"
            . "</tr>\n"
            . "<tr>\n"
            . "\t<td>11</td>\n"
            . "\t<td>21</td>\n"
            . "\t<td>31</td>\n"
            . "</tr>\n"
            . "</table>\n",
            (new Table())
                ->setHeaders([
                    'First',
                    'Two',
                    'Three'
                ])
                ->data([
                    [
                        'First' => '1',
                        'Two' => '2',
                        'Three' => '3'
                    ],
                    [
                        'First' => '11',
                        'Two' => '21',
                        'Three' => '31'
                    ]
                ])
                ->html()
        );

    }

}