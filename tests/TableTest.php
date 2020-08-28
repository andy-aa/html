<?php

declare(strict_types=1);

namespace Test;

use PHPUnit\Framework\TestCase;
use TexLab\Html\Table;

class TableTest extends TestCase
{

    /**
     * test Table creation
     */
    public function testTable(): void
    {
        $this->assertIsString(
            (new Table())->html()
        );

        $this->assertEquals(
            "<table class='table table-striped table-dark'></table>",
            (new Table())
                ->setHeaders([])
                ->setClass('table table-striped table-dark')
                ->html()
        );

        $this->assertEquals(
            "<table>\n<tr>\n\t<th>First</th>\n\t<th>Two</th>\n\t<th>Three</th>\n</tr>\n</table>",
            (new Table())
                ->setHeaders([
                    'First',
                    'Two',
                    'Three'
                ])
                ->html()
        );

        $this->assertEquals(
            "<table>\n" .
            "<tr>\n\t<th>First</th>\n\t<th>Two</th>\n\t<th>Three</th>\n</tr>\n" .
            "<tr>\n\t<td>1</td>\n\t<td>2</td>\n\t<td>3</td>\n</tr>\n" .
            "<tr>\n\t<td>4</td>\n\t<td>5</td>\n\t<td>6</td>\n</tr>\n" .
            "</table>",
            (new Table())
                ->setHeaders(
                    ['First', 'Two', 'Three']
                )
                ->setData([
                    ['1', '2', '3'],
                    ['4', '5', '6']
                ])
                ->html()
        );
    }
}
