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
            "<table><thead><tr><th>First</th><th>Two</th><th>Three</th></tr></thead></table>",
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
            "<tbody>" .
            "<tr><td>1</td><td>2</td><td>3</td></tr>" .
            "<tr><td>4</td><td>5</td><td>6</td></tr>" .
            "</tbody>" .
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
            "<thead>" .
            "<tr><th>First</th><th>Two</th><th>Three</th></tr>" .
            "</thead>" .
            "<tbody>" .
            "<tr><td>1</td><td>2</td><td>3</td></tr>" .
            "<tr><td>4</td><td>5</td><td>6</td></tr>" .
            "</tbody>" .
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

        $this->assertEquals(
            "<table>" .
            "<thead>" .
            "<tr><th>First</th><th>Two</th><th>Three</th></tr>" .
            "</thead>" .
            "<tbody>" .
            "<tr><td>1</td><td>2</td><td>3</td></tr>" .
            "<tr><td>4</td><td>5</td><td>6</td></tr>" .
            "<tr><td>7</td><td>8</td><td>9</td></tr>" .
            "</tbody>" .
            "</table>",
            (new Table())
                ->setHeaders(
                    ['First', 'Two', 'Three']
                )
                ->setData([
                    ['1', '2', '3'],
                    ['4', '5', '6']
                ])
                ->addRow([7, 8, 9])
                ->html()
        );

        $this->assertEquals(
            "<table>" .
            "<thead>" .
            "<tr><th>First</th><th>Two</th><th>Three</th><th>Four</th></tr>" .
            "</thead>" .
            "<tbody>" .
            "<tr><td>1</td><td>2</td><td>3</td><td>7</td></tr>" .
            "<tr><td>4</td><td>5</td><td>6</td><td>8</td></tr>" .
            "</tbody>" .
            "</table>",
            (new Table())
                ->setHeaders(
                    ['First', 'Two', 'Three']
                )
                ->setData([
                    ['1', '2', '3'],
                    ['4', '5', '6']
                ])
                ->addHeaders(["Four"])
                ->addColumn([7, 8])
                ->html()
        );

        $this->assertEquals(
            "<table>" .
            "<tbody>" .
            "<tr><td>2</td></tr>" .
            "<tr><td>5</td></tr>" .
            "</tbody>" .
            "</table>",
            (new Table())
                ->setData([
                    ['id' => '1', '2', '3'],
                    ['id' => '4', '5', '6']
                ])
                ->removeColumns(['id', 1])
                ->html()
        );

        $this->assertEquals(
            "<table>" .
            "<tbody>" .
            "<tr><td>1</td><td>Peter</td><td><a href='?edt_id=1'>Edit 1</a></td></tr>" .
            "<tr><td>3</td><td>Viktor</td><td><a href='?edt_id=3'>Edit 3</a></td></tr>" .
            "</tbody>" .
            "</table>",
            (new Table())
                ->setData([
                    ['id' => '1', 'Peter'],
                    ['id' => '3', 'Viktor']
                ])
                ->addCalculatedColumn(function ($row) {
                    return "<a href='?edt_id=$row[id]'>Edit $row[id]</a>";
                })
                ->html()
        );

        $this->assertEquals(
            "<table>" .
            "<tbody>" .
            "<tr><td>1</td><td>Peter</td><td><a href='?edt_id=1'>Edit 1</a></td></tr>" .
            "<tr><td>3</td><td>Viktor</td><td><a href='?edt_id=3'>Edit 3</a></td></tr>" .
            "</tbody>" .
            "</table>",
            (new Table())
                ->setData([
                    ['id' => '1', 'Peter'],
                    ['id' => '3', 'Viktor']
                ])
                ->loopByRow(function (&$row) {
                    $row['edit'] = "<a href='?edt_id=$row[id]'>Edit $row[id]</a>";
                })
                ->html()
        );
    }
}
