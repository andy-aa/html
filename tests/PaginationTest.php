<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TexLab\Html\Pagination;


class PaginationTest extends TestCase
{

    function testPagination()
    {
        $this->assertIsString(
            (new Pagination())->html()
        );

        $this->assertEquals(
            "<div>\n".
	"\t<a href='?action=show&type=controller&page=1'>1</a>\n" .
	"\t<a href='?action=show&type=controller&page=2' class=\"current\">2</a>\n" .
	"\t<a href='?action=show&type=controller&page=3'>3</a>\n" .
    "</div>\n",
            (new Pagination())
                ->setControllerType("controller")
                ->setPageCount(3)
                ->setPageCurrent(2)
                ->html()
        );

        $this->assertEquals(
            "<div>\n".
            "\t<a href='?action=show&type=controller&page=1' class=\"current\">1</a>\n" .
            "\t<a href='?action=show&type=controller&page=2'>2</a>\n" .
            "\t<a href='?action=show&type=controller&page=3'>3</a>\n" .
            "</div>\n",
            (new Pagination())
                ->setControllerType("controller")
                ->setPageCount(3)
                ->setPageCurrent(0)
                ->html()
        );

        $this->assertEquals(
            "<div>\n".
            "\t<a href='?action=show&type=controller&page=1'>1</a>\n" .
            "\t<a href='?action=show&type=controller&page=2'>2</a>\n" .
            "\t<a href='?action=show&type=controller&page=3' class=\"current\">3</a>\n" .
            "</div>\n",
            (new Pagination())
                ->setControllerType("controller")
                ->setPageCount(3)
                ->setPageCurrent(5)
                ->html()
        );

    }

}