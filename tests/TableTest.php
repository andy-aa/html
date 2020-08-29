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
            "<table><tr><th>First</th><th>Two</th><th>Three</th></tr></table>",
            (new Table())
                ->setHeaders([
                    'First',
                    'Two',
                    'Three'
                ])
                ->html()
        );

        $this->assertEquals(
            "<table id='tab1'>" .
            "<tr><td>1</td><td>2</td><td>3</td></tr>" .
            "<tr><td>4</td><td>5</td><td>6</td></tr>" .
            "</table>",
            (new Table())
                ->setId("tab1")
                ->setData([
                    ['1', '2', '3'],
                    ['4', '5', '6']
                ])
                ->html()
        );

        $this->assertEquals(
            "<table>" .
            "<tr><th>First</th><th>Two</th><th>Three</th></tr>" .
            "<tr><td>1</td><td>2</td><td>3</td></tr>" .
            "<tr><td>4</td><td>5</td><td>6</td></tr>" .
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
